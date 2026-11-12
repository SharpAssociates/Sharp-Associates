(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 

	/* Preloader Effect */
	$window.on('load', function(){
		$(".preloader").fadeOut(600);
	});

	/* Sticky Header */	
	if($('.active-sticky-header').length){
		$window.on('resize', function(){
			setHeaderHeight();
		});

		function setHeaderHeight(){
	 		$("header.main-header").css("height", $('header .header-sticky').outerHeight());
		}	
	
		$window.on("scroll", function() {
			var fromTop = $(window).scrollTop();
			setHeaderHeight();
			var headerHeight = $('header .header-sticky').outerHeight();
			$("header .header-sticky").toggleClass("hide", (fromTop > headerHeight + 100));
			$("header .header-sticky").toggleClass("active", (fromTop > 600));
		});
	}	
	
	/* Slick Menu JS */
	if ($.fn.slicknav && $('#menu').length) {
		$('#menu').slicknav({
			label : '',
			prependTo : '.responsive-menu'
		});
	}

	/* Scroll to Top */
	if($("a[href='#top']").length){
		$(document).on("click", "a[href='#top']", function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}

	/* Hero Slider Layout JS */
	if (typeof Swiper !== 'undefined' && $('.hero-slider-layout .swiper').length) {
		const hero_slider_layout = new Swiper('.hero-slider-layout .swiper', {
			slidesPerView : 1,
			speed: 1000,
			spaceBetween: 0,
			loop: true,
			autoplay: {
				delay: 4000,
			},
			pagination: {
				el: '.hero-pagination',
				clickable: true,
			},
		});
	}

	/* How We Work Client Logo Slider JS */ 
	if (typeof Swiper !== 'undefined' && $('.how-work-company-slider .swiper').length) {
		const how_work_company_slider = new Swiper('.how-work-company-slider .swiper', {
			slidesPerView : 2,
			speed: 2000,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 3000,
			},
			breakpoints: {
				768:{
				  	slidesPerView: 4,
				},
				991:{
				  	slidesPerView: 5,
				}
			}
		});
	}

	/* Testimonial Slider JS */
	if (typeof Swiper !== 'undefined' && $('.testimonial-slider .swiper').length) {
		const testimonial_slider = new Swiper('.testimonial-slider .swiper', {
			slidesPerView : 1,
			speed: 1000,
			spaceBetween: 60,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				768:{
				  	slidesPerView: 1,
				},
				991:{
				  	slidesPerView: 1,
				}
			}
		});
	}

	/* Our Client Slider JS */
	if (typeof Swiper !== 'undefined' && $('.our-client-slider .swiper').length) {
		const our_client_slider = new Swiper('.our-client-slider .swiper', {
			slidesPerView : 2,
			speed: 1000,
			spaceBetween: 60,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				768:{
						slidesPerView: 4,
				},
				991:{
						slidesPerView: 4,
				}
			}
		});
	}

	/* Init Counter (Lightweight Native IntersectionObserver - Replaces Waypoints & CounterUp) */
	if ($('.counter').length) {
		if ('IntersectionObserver' in window) {
			const counterObserver = new IntersectionObserver(function(entries, observer) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						var el = entry.target;
						observer.unobserve(el);
						var targetText = el.innerText.trim();
						var targetNum = parseFloat(targetText.replace(/,/g, ''));
						if (isNaN(targetNum)) return;
						var duration = 2000;
						var startTime = performance.now();
						var isInt = targetText.indexOf('.') === -1;
						
						function updateCounter(currentTime) {
							var elapsed = currentTime - startTime;
							var progress = Math.min(elapsed / duration, 1);
							// Ease out cubic
							var easeOut = 1 - Math.pow(1 - progress, 3);
							var currentVal = targetNum * easeOut;
							el.innerText = isInt ? Math.round(currentVal) : currentVal.toFixed(1);
							if (progress < 1) {
								requestAnimationFrame(updateCounter);
							} else {
								el.innerText = targetText;
							}
						}
						requestAnimationFrame(updateCounter);
					}
				});
			}, { threshold: 0.2 });
			
			document.querySelectorAll('.counter').forEach(function(el) {
				counterObserver.observe(el);
			});
		} else if ($.fn.counterUp) {
			$('.counter').counterUp({ delay: 5, time: 2000 });
		}
	}

	/* Image Reveal Animation */
	if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined' && $('.reveal').length) {
        gsap.registerPlugin(ScrollTrigger);
        let revealContainers = document.querySelectorAll(".reveal");
        revealContainers.forEach((container) => {
            let image = container.querySelector("img");
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "play none none none"
                }
            });
            tl.set(container, {
                autoAlpha: 1
            });
            tl.from(container, 1, {
                xPercent: -100,
                ease: Power2.out
            });
            if (image) {
                tl.from(image, 1, {
                    xPercent: 100,
                    scale: 1,
                    delay: -1,
                    ease: Power2.out
                });
            }
        });
    }

	/* Text Effect Animation */
	if (typeof gsap !== 'undefined' && typeof SplitText !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
		if ($('.text-anime-style-1').length) {
			let staggerAmount 	= 0.05,
				translateXValue = 0,
				delayValue 		= 0.5,
			   animatedTextElements = document.querySelectorAll('.text-anime-style-1');
			
			animatedTextElements.forEach((element) => {
				let animationSplitText = new SplitText(element, { type: "chars, words" });
				gsap.from(animationSplitText.words, {
					duration: 1,
					delay: delayValue,
					x: 20,
					autoAlpha: 0,
					stagger: staggerAmount,
					scrollTrigger: { trigger: element, start: "top 85%" },
				});
			});		
		}
		
		if ($('.text-anime-style-2').length) {				
			let	 staggerAmount 		= 0.03,
				 translateXValue	= 20,
				 delayValue 		= 0.1,
				 easeType 			= "power2.out",
				 animatedTextElements = document.querySelectorAll('.text-anime-style-2');
			
			animatedTextElements.forEach((element) => {
				let animationSplitText = new SplitText(element, { type: "chars, words" });
				gsap.from(animationSplitText.chars, {
					duration: 1,
					delay: delayValue,
					x: translateXValue,
					autoAlpha: 0,
					stagger: staggerAmount,
					ease: easeType,
					scrollTrigger: { trigger: element, start: "top 85%"},
				});
			});		
		}
		
		if ($('.text-anime-style-3').length) {		
			let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');
			
			 animatedTextElements.forEach((element) => {
				if (element.animation) {
					element.animation.progress(1).kill();
					element.split.revert();
				}

				element.split = new SplitText(element, {
					type: "lines,words,chars",
					linesClass: "split-line",
				});
				gsap.set(element, { perspective: 400 });

				gsap.set(element.split.chars, {
					opacity: 0,
					x: "50",
				});

				element.animation = gsap.to(element.split.chars, {
					scrollTrigger: { trigger: element,	start: "top 90%" },
					x: "0",
					y: "0",
					rotateX: "0",
					opacity: 1,
					duration: 1,
					ease: Back.easeOut,
					stagger: 0.02,
				});
			});		
		}
	}

	/* Parallaxie js */
	var $parallaxie = $('.parallaxie');
	if($.fn.parallaxie && $parallaxie.length && ($window.width() > 991))
	{
		if ($window.width() > 768) {
			$parallaxie.parallaxie({
				speed: 0.55,
				offset: 0,
			});
		}
	}

	/* Zoom Gallery screenshot */
	if ($.fn.magnificPopup && $('.gallery-items').length) {
		$('.gallery-items').magnificPopup({
			delegate: 'a',
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom',
			image: {
				verticalFit: true,
			},
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300,
				opener: function(element) {
				  return element.find('img');
				}
			}
		});
	}

	/* Our Project (filtering) Start */
	$window.on( "load", function(){
		if( $.fn.isotope && $(".project-item-boxes").length ) {
				
			/* Init Isotope */
			var $menuitem = $(".project-item-boxes").isotope({
				itemSelector: ".project-item-box",
				layoutMode: "masonry",
				masonry: {
					columnWidth: 1,
				}
			});
				
			/* Filter items on click */
			var $menudisesnav = $(".our-Project-nav li a");
			$menudisesnav.on('click', function (e) { 
				var filterValue = $(this).attr('data-filter');
				$menuitem.isotope({
					filter: filterValue
				}); 
				
				$menudisesnav.removeClass("active-btn"); 
				$(this).addClass("active-btn");
				e.preventDefault();
			});		
			$menuitem.isotope({ filter: "*" });
		}			
	});
	/* Our Project (filtering) End */

	/* Animated Wow Js */	
	if (typeof WOW !== 'undefined') {
		new WOW().init();
	}

	/* Popup Video */
	if ($.fn.magnificPopup && $('.popup-video').length) {
		$('.popup-video').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: true
		});
	}
	
})(jQuery);
