/**
 * Sharp Associates Corporate Toast Notification System
 * Lightweight, vanilla JavaScript, WCAG accessible, responsive, smooth animations.
 */
(function(window, document) {
    'use strict';

    var container = null;

    function getOrCreateContainer() {
        if (!container || !document.body.contains(container)) {
            container = document.getElementById('toast-container');
            if (!container) {
                container = document.createElement('div');
                container.id = 'toast-container';
                container.className = 'toast-container';
                container.setAttribute('role', 'region');
                container.setAttribute('aria-label', 'Notifications');
                document.body.appendChild(container);
            }
        }
        return container;
    }

    var defaultIcons = {
        success: 'fa-solid fa-check',
        error: 'fa-solid fa-circle-exclamation',
        warning: 'fa-solid fa-circle-info'
    };

    function escapeHtml(str) {
        if (!str) return '';
        var div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    function showToast(options) {
        options = options || {};
        var type = options.type || 'warning';
        if (type === 'info') type = 'warning';
        var title = options.title || '';
        var message = options.message || '';
        var duration = typeof options.duration === 'number' ? options.duration : (type === 'error' ? 7000 : (type === 'success' ? 5500 : 5000));
        var iconClass = options.icon || defaultIcons[type] || 'fa-solid fa-circle-info';

        var toastContainer = getOrCreateContainer();

        var toast = document.createElement('div');
        toast.className = 'corporate-toast corporate-toast-' + type;
        toast.setAttribute('role', 'status');
        toast.setAttribute('aria-live', type === 'error' ? 'assertive' : 'polite');

        toast.innerHTML = 
            '<div class="toast-icon-wrap"><i class="' + iconClass + '"></i></div>' +
            '<div class="toast-body-content">' +
                (title ? '<h4 class="toast-title">' + escapeHtml(title) + '</h4>' : '') +
                '<p class="toast-message">' + escapeHtml(message) + '</p>' +
            '</div>' +
            '<button type="button" class="toast-close-btn" aria-label="Close notification">' +
                '<i class="fa-solid fa-xmark"></i>' +
            '</button>' +
            '<div class="toast-progress-bar">' +
                '<div class="toast-progress-fill"></div>' +
            '</div>';

        toastContainer.appendChild(toast);

        // Force reflow for CSS entry transition
        void toast.offsetWidth;
        toast.classList.add('toast-show');

        var progressFill = toast.querySelector('.toast-progress-fill');
        var closeBtn = toast.querySelector('.toast-close-btn');

        var remainingTime = duration;
        var startTime = Date.now();
        var timerId = null;
        var isDismissed = false;

        function startProgress(ms) {
            if (progressFill) {
                progressFill.style.transition = 'transform ' + ms + 'ms linear';
                progressFill.style.transform = 'scaleX(0)';
            }
        }

        function stopProgress() {
            if (progressFill) {
                var computedTransform = window.getComputedStyle(progressFill).transform;
                progressFill.style.transition = 'none';
                progressFill.style.transform = computedTransform;
            }
        }

        function dismiss() {
            if (isDismissed) return;
            isDismissed = true;
            clearTimeout(timerId);
            toast.classList.remove('toast-show');
            toast.classList.add('toast-hide');
            setTimeout(function() {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 350);
        }

        function startTimer() {
            startTime = Date.now();
            startProgress(remainingTime);
            timerId = setTimeout(function() {
                dismiss();
            }, remainingTime);
        }

        function pauseTimer() {
            clearTimeout(timerId);
            var elapsed = Date.now() - startTime;
            remainingTime = Math.max(0, remainingTime - elapsed);
            stopProgress();
        }

        // Mouse hover interaction: pause on hover, resume on leave
        toast.addEventListener('mouseenter', pauseTimer);
        toast.addEventListener('mouseleave', function() {
            if (!isDismissed && remainingTime > 0) {
                startTimer();
            }
        });

        // Touch interaction
        toast.addEventListener('touchstart', pauseTimer, { passive: true });
        toast.addEventListener('touchend', function() {
            if (!isDismissed && remainingTime > 0) {
                startTimer();
            }
        }, { passive: true });

        // Close button click
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                dismiss();
            });
        }

        // Start countdown
        startTimer();

        return {
            dismiss: dismiss
        };
    }

    // Public API
    window.SharpToast = {
        show: showToast,
        success: function(title, message, duration) {
            return showToast({ type: 'success', title: title, message: message, duration: duration });
        },
        error: function(title, message, duration) {
            return showToast({ type: 'error', title: title, message: message, duration: duration });
        },
        warning: function(title, message, duration) {
            return showToast({ type: 'warning', title: title, message: message, duration: duration });
        }
    };

    function cleanQueryParam(param) {
        if (window.history && window.history.replaceState) {
            try {
                var url = new URL(window.location.href);
                url.searchParams.delete(param);
                window.history.replaceState({}, document.title, url.pathname + (url.search ? url.search : ''));
            } catch(e) {}
        }
    }

    // Auto-initialization
    function initToastHandlers() {
        // 1. Check URL parameters for status
        try {
            var urlParams = new URLSearchParams(window.location.search);
            var status = urlParams.get('status');
            
            if (status === 'error') {
                window.SharpToast.error(
                    "Unable to Submit Enquiry",
                    "Something went wrong while submitting your enquiry. Please try again or contact our team directly."
                );
                cleanQueryParam('status');
            } else if (status === 'success') {
                window.SharpToast.success(
                    "Enquiry Submitted Successfully!",
                    "Thank you for contacting Sharp Associates. Your enquiry has been received. Our team will get in touch with you shortly."
                );
                cleanQueryParam('status');
            }
        } catch(e) {}

        // Check if on thankyou.php page
        if (window.location.pathname.indexOf('thankyou.php') !== -1) {
            if (!sessionStorage.getItem('thankyou_toast_shown')) {
                window.SharpToast.success(
                    "Enquiry Submitted Successfully!",
                    "Thank you for contacting Sharp Associates. Your enquiry has been received. Our team will get in touch with you shortly."
                );
                sessionStorage.setItem('thankyou_toast_shown', 'true');
            }
        } else {
            sessionStorage.removeItem('thankyou_toast_shown');
        }

        // 2. Attach client validation to contact form
        var contactForms = document.querySelectorAll('form[action="thank-contact.php"]');
        contactForms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                var nameInput = form.querySelector('[name="name"]');
                var phoneInput = form.querySelector('[name="phone"]');
                var emailInput = form.querySelector('[name="email"]');
                var messageInput = form.querySelector('[name="message"]');

                // Missing name: "Please enter your name to continue."
                if (!nameInput || !nameInput.value.trim()) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    window.SharpToast.warning("Validation Required", "Please enter your name to continue.");
                    if (nameInput) nameInput.focus();
                    return false;
                }

                // Missing phone: "Please enter your phone number."
                if (!phoneInput || !phoneInput.value.trim()) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    window.SharpToast.warning("Validation Required", "Please enter your phone number.");
                    if (phoneInput) phoneInput.focus();
                    return false;
                }

                // Invalid phone: "Please enter a valid phone number."
                var rawPhone = phoneInput.value.trim();
                var cleanPhone = rawPhone.replace(/[\s\-\(\)\+]/g, '');
                // Needs at least 7 digits, maximum 15, and only standard phone characters
                if (cleanPhone.length < 7 || cleanPhone.length > 15 || !/^[0-9]+$/.test(cleanPhone) || !/^[0-9\+\-\(\)\s]+$/.test(rawPhone)) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    window.SharpToast.warning("Validation Required", "Please enter a valid phone number.");
                    phoneInput.focus();
                    return false;
                }

                // Missing email: "Please enter your email address."
                if (!emailInput || !emailInput.value.trim()) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    window.SharpToast.warning("Validation Required", "Please enter your email address.");
                    if (emailInput) emailInput.focus();
                    return false;
                }

                // Invalid email: "Please enter a valid email address."
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
                if (!emailPattern.test(emailInput.value.trim())) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    window.SharpToast.warning("Validation Required", "Please enter a valid email address.");
                    emailInput.focus();
                    return false;
                }

                // Missing message: "Please enter your project requirements or message."
                if (!messageInput || !messageInput.value.trim()) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    window.SharpToast.warning("Validation Required", "Please enter your project requirements or message.");
                    if (messageInput) messageInput.focus();
                    return false;
                }

                // All validations passed. Form naturally submits to thank-contact.php.
                return true;
            }, true); // capturing phase ensures toast triggers before bootstrap validator stops propagation
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initToastHandlers);
    } else {
        initToastHandlers();
    }

})(window, document);

