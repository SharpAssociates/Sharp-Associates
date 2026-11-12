<?php
$site_name = "Sharp Associates";
$default_domain = "https://sharpassociates.in";
$page_title = !empty($page_title) ? $page_title : "Sharp Associates | Construction & Architectural Development in Chennai";
$page_description = !empty($page_description) ? $page_description : "Sharp Associates is a trusted construction, architectural design, and infrastructure development company in Chennai, delivering quality residential and commercial spaces.";
$canonical_url = !empty($canonical_url) ? $canonical_url : $default_domain . "/";
$og_image = !empty($og_image) ? $og_image : $default_domain . "/images/resources/hero-banner-1.webp";
$og_type = !empty($og_type) ? $og_type : "website";
$noindex = !empty($noindex);

// Active Page & Service Detection based on canonical URL and script path
$canonical_path = !empty($canonical_url) ? trim(parse_url($canonical_url, PHP_URL_PATH), '/') : '';
$page_slug = !empty($canonical_path) ? basename($canonical_path) : basename($_SERVER['SCRIPT_NAME'] ?? ($_SERVER['PHP_SELF'] ?? ''));
if (empty($page_slug) || $page_slug === 'sharpassociates.in') {
    $page_slug = 'index.php';
}

$service_slugs = [
    'contracting-services-chennai.php',
    'joint-venture-projects-chennai.php',
    'interior-solutions-chennai.php',
    'architectural-design-chennai.php',
    'vastu-planning-chennai.php',
    'end-to-end-construction-chennai.php',
    'building-plan-approvals-chennai.php',
    'building-sanctions-assessments-chennai.php'
];
$is_service_active = in_array($page_slug, $service_slugs);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="google-site-verification" content="MW8i7ckmMovjidpK5lYcyVAnZybMZMLflAawhCI6LJQ" />
	<meta name="google-site-verification" content="ZtXm8m_XkCEl_N2s4lJBDz_Jok6g35VCiDS5QvY9j50" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
	<meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
	<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<?php if ($noindex): ?>
	<meta name="robots" content="noindex, nofollow">
<?php endif; ?>

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="<?php echo htmlspecialchars($og_type, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:site_name" content="<?php echo htmlspecialchars($site_name, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
	<meta name="twitter:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
	<meta name="twitter:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">

	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/resources/favicon-sa.webp">
<?php if (!empty($preload_lcp_image)): ?>
	<!-- Preload Primary LCP Hero Image -->
	<link rel="preload" as="image" href="<?php echo htmlspecialchars($preload_lcp_image, ENT_QUOTES, 'UTF-8'); ?>" type="image/webp" fetchpriority="high">
<?php endif; ?>
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<!-- Services Dropdown Styling -->
	<style>
		.main-menu ul li.submenu{
			position: relative;
		}
		.main-menu ul li.submenu ul{
			width: 280px;
			background-color: #052c41;
			border-radius: 12px;
			box-shadow: 0 12px 32px rgba(5, 44, 65, 0.22);
			border: 1px solid rgba(255, 255, 255, 0.08);
			padding: 8px 0;
			top: 100%;
			left: 0;
			z-index: 1000;
		}
		.main-menu ul li.submenu ul li{
			display: block;
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.main-menu ul li.submenu ul li a{
			color: #e2e8f0;
			font-size: 15px;
			font-weight: 500;
			padding: 9px 20px !important;
			display: block;
			text-align: left;
			transition: all 0.25s ease-in-out;
		}
		.main-menu ul li.submenu ul li a:hover{
			color: #ffffff;
			background-color: rgba(143, 181, 225, 0.16);
			padding-left: 24px !important;
		}
		.main-menu ul li.submenu ul li.active-service a{
			color: var(--accent-color);
			font-weight: 700;
			background-color: rgba(143, 181, 225, 0.12);
			border-left: 3px solid var(--accent-color);
		}
		.main-menu ul li.active > a,
		.main-menu ul li.submenu.active > a{
			color: var(--accent-color) !important;
			font-weight: 600;
		}
		.main-menu ul li.submenu.open > ul{
			visibility: visible;
			opacity: 1;
			transform: scaleY(1);
		}
		/* Mobile SlickNav Dropdown Enhancements */
		.slicknav_menu ul ul{
			background: #052c41 !important;
			border-radius: 8px;
			margin: 4px 12px !important;
			padding: 6px 0 !important;
		}
		.slicknav_menu ul ul li a{
			color: #f1f5f9 !important;
			font-size: 15px !important;
			padding: 8px 18px !important;
		}
		.slicknav_menu ul ul li a:hover,
		.slicknav_menu ul ul li.active-service a{
			color: var(--accent-color) !important;
			background: rgba(255, 255, 255, 0.08) !important;
		}
		.slicknav_nav li.active > a,
		.slicknav_nav li.submenu.active > a{
			color: var(--accent-color) !important;
			font-weight: 600;
		}
	</style>
<?php if (!empty($schema_json)): ?>
	<!-- Structured Data (Schema.org JSON-LD) -->
	<script type="application/ld+json">
<?php echo $schema_json; ?>
	</script>
<?php endif; ?>
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/resources/favicon-sa.webp" alt="Sharp Associates" width="100" height="100"></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="container">
				<div class="navbar navbar-expand-lg">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="images/resources/sa-logo.webp" alt="Sharp Associates Logo" width="160" height="40">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item<?php echo ($page_slug === 'index.php') ? ' active' : ''; ?>"><a class="nav-link" href="/">Home</a></li>                             
                                <li class="nav-item<?php echo ($page_slug === 'about.php') ? ' active' : ''; ?>"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item submenu<?php echo $is_service_active ? ' active' : ''; ?>">
                                    <a class="nav-link" href="index.php#services">Services</a>
                                    <ul>
                                        <li class="<?php echo ($page_slug === 'contracting-services-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="contracting-services-chennai.php">Contracting Services</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'joint-venture-projects-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="joint-venture-projects-chennai.php">Joint Venture Projects</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'interior-solutions-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="interior-solutions-chennai.php">Interior Solutions</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'architectural-design-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="architectural-design-chennai.php">Architectural Design</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'vastu-planning-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="vastu-planning-chennai.php">Vastu Planning</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'end-to-end-construction-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="end-to-end-construction-chennai.php">End-to-End Construction</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'building-plan-approvals-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="building-plan-approvals-chennai.php">Plan Approvals</a>
                                        </li>
                                        <li class="<?php echo ($page_slug === 'building-sanctions-assessments-chennai.php') ? 'active-service' : ''; ?>">
                                            <a href="building-sanctions-assessments-chennai.php">Sanctions &amp; Assessments</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item<?php echo ($page_slug === 'our-work.php') ? ' active' : ''; ?>"><a class="nav-link" href="our-work.php">Our Works</a></li>
                                <li class="nav-item<?php echo (strpos($page_slug, 'blog') !== false) ? ' active' : ''; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item<?php echo ($page_slug === 'contact.php') ? ' active' : ''; ?>"><a class="nav-link" href="contact.php">Contact Us</a></li>                             
                            </ul>
                        </div>
                        <!-- Header Btn Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="landing.php" class="btn-default">Enquiry Now</a>
                        </div>
                        <!-- Header Btn End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var submenus = document.querySelectorAll('.main-menu li.submenu');
			submenus.forEach(function(sm) {
				var link = sm.querySelector('> a');
				if (link) {
					link.addEventListener('click', function(e) {
						if (window.innerWidth >= 992) {
							var wasOpen = sm.classList.contains('open');
							submenus.forEach(function(other) { other.classList.remove('open'); });
							if (!wasOpen) {
								sm.classList.add('open');
								e.preventDefault();
							}
						}
					});
				}
			});
			document.addEventListener('click', function(e) {
				if (!e.target.closest('.main-menu li.submenu')) {
					submenus.forEach(function(sm) { sm.classList.remove('open'); });
				}
			});
		});
	</script>
