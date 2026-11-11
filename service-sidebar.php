<?php
/**
 * Shared Service Sidebar Component for Sharp Associates Service Pages
 * Expects $current_service to be set by the parent template.
 */
if (!isset($current_service)) {
    $current_service = '';
}

$services_menu = [
    'contracting' => [
        'name' => 'Contracting Services',
        'url'  => 'contracting-services-chennai.php'
    ],
    'joint-venture' => [
        'name' => 'Joint Venture Projects',
        'url'  => 'joint-venture-projects-chennai.php'
    ],
    'interior' => [
        'name' => 'Interior Solutions',
        'url'  => 'interior-solutions-chennai.php'
    ],
    'architectural' => [
        'name' => 'Architectural Design',
        'url'  => 'architectural-design-chennai.php'
    ],
    'vastu' => [
        'name' => 'Vastu Planning',
        'url'  => 'vastu-planning-chennai.php'
    ],
    'end-to-end' => [
        'name' => 'End-to-End Construction',
        'url'  => 'end-to-end-construction-chennai.php'
    ],
    'plan-approvals' => [
        'name' => 'Plan Approvals',
        'url'  => 'building-plan-approvals-chennai.php'
    ],
    'sanctions' => [
        'name' => 'Sanctions & Assessments',
        'url'  => 'building-sanctions-assessments-chennai.php'
    ],
];
?>
<div class="service-sidebar">
    <!-- Service Category List -->
    <div class="service-catagery-list">
        <h3>Our Services</h3>
        <ul>
            <?php foreach ($services_menu as $key => $item): ?>
                <?php $isActive = ($current_service === $key); ?>
                <li style="<?php echo $isActive ? 'background: #f0f6fc; border-radius: 8px; padding-left: 10px;' : ''; ?>">
                    <a href="<?php echo htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>" style="<?php echo $isActive ? 'color: var(--primary-color); font-weight: 700;' : ''; ?>">
                        <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Sidebar CTA Box -->
    <div class="sidebar-cta-box">
        <div class="sidebar-cta-image">
            <figure>
                <img src="images/resources/sharp-2.webp" alt="Civil Construction Contractors in Chennai - Sharp Associates" width="600" height="342" loading="lazy" decoding="async">
            </figure>
        </div>
        <div class="sidebar-cta-Body">
            <div class="sidebar-cta-content">
                <h3>Discuss Your Project</h3>
                <p>Speak directly with our senior civil engineers and architects in Chennai for expert advice.</p>
            </div>
            <div class="sidebar-cta-contact-item">
                <div class="icon-box">
                    <i class="fa-solid fa-phone" style="color: var(--primary-color);"></i>
                </div>
                <div class="cta-contact-item-content">
                    <p><a href="tel:+919500036132" style="color: inherit; font-weight: 600;">+91 95000 36132</a></p>
                </div>
            </div>
            <div class="sidebar-cta-contact-item">
                <div class="icon-box">
                    <i class="fa-solid fa-envelope" style="color: var(--primary-color);"></i>
                </div>
                <div class="cta-contact-item-content">
                    <p><a href="mailto:maaran@ysa-india.com" style="color: inherit; font-weight: 600;">maaran@ysa-india.com</a></p>
                </div>
            </div>
            <div style="margin-top: 25px;">
                <a href="landing.php" class="btn-default">Get Free Quote</a>
            </div>
        </div>
    </div>
</div>

