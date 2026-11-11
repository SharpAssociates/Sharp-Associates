<?php
$site_name = "Sharp Associates";
$default_domain = "https://sharpassociates.in";
$page_title = !empty($page_title) ? $page_title : "Sharp Associates | Construction & Architectural Development in Chennai";
$page_description = !empty($page_description) ? $page_description : "Sharp Associates is a trusted construction, architectural design, and infrastructure development company in Chennai, delivering quality residential and commercial spaces.";
$canonical_url = !empty($canonical_url) ? $canonical_url : $default_domain . "/";
$og_image = !empty($og_image) ? $og_image : $default_domain . "/images/resources/hero-banner-1.webp";
$og_type = !empty($og_type) ? $og_type : "website";
$noindex = !empty($noindex);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
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
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>                             
                                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="our-work.php">Our Works</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>                             
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
