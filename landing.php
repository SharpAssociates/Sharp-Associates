<?php
$message_status = "";

if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $phone = strip_tags(trim($_POST["phone"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $service_type = strip_tags(trim($_POST["service_type"] ?? ''));
    $message = strip_tags(trim($_POST["message"] ?? ''));

    $investment_amount = isset($_POST["investment_amount"]) && $_POST["investment_amount"] !== "" ? strip_tags(trim($_POST["investment_amount"])) : 'N/A';
    $sq_ft_area = isset($_POST["sq_ft_area"]) && $_POST["sq_ft_area"] !== "" ? strip_tags(trim($_POST["sq_ft_area"])) : 'N/A';
    $property_location = isset($_POST["property_location"]) && $_POST["property_location"] !== "" ? strip_tags(trim($_POST["property_location"])) : 'N/A';

    $service_labels = [
        'joint_venture' => 'Joint Venture',
        'construction' => 'Construction',
    ];

    $service_label = $service_labels[$service_type] ?? 'General Inquiry';
    $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safe_phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safe_service_label = htmlspecialchars($service_label, ENT_QUOTES, 'UTF-8');
    $safe_investment_amount = htmlspecialchars($investment_amount, ENT_QUOTES, 'UTF-8');
    $safe_sq_ft_area = htmlspecialchars($sq_ft_area, ENT_QUOTES, 'UTF-8');
    $safe_property_location = htmlspecialchars($property_location, ENT_QUOTES, 'UTF-8');
    $safe_message = nl2br(htmlspecialchars($message !== '' ? $message : 'No additional message provided.', ENT_QUOTES, 'UTF-8'));

    $recipient = "maaran@ysa-india.com,fyndxadmin@gmail.com";
    $subject = "New Lead: {$service_label} Inquiry from {$name}";

    $detail_rows = "
        <tr>
            <td style='padding: 14px 18px; font-weight: 600; color: #071f3a; border-bottom: 1px solid #e5e7eb; width: 220px;'>Service Required</td>
            <td style='padding: 14px 18px; color: #334155; border-bottom: 1px solid #e5e7eb;'>{$safe_service_label}</td>
        </tr>";

    if ($service_type === 'joint_venture') {
        $detail_rows .= "
        <tr>
            <td style='padding: 14px 18px; font-weight: 600; color: #071f3a; border-bottom: 1px solid #e5e7eb;'>Expected Investment</td>
            <td style='padding: 14px 18px; color: #334155; border-bottom: 1px solid #e5e7eb;'>{$safe_investment_amount}</td>
        </tr>";
    } elseif ($service_type === 'construction') {
        $detail_rows .= "
        <tr>
            <td style='padding: 14px 18px; font-weight: 600; color: #071f3a; border-bottom: 1px solid #e5e7eb;'>Square Feet Area</td>
            <td style='padding: 14px 18px; color: #334155; border-bottom: 1px solid #e5e7eb;'>{$safe_sq_ft_area}</td>
        </tr>
        <tr>
            <td style='padding: 14px 18px; font-weight: 600; color: #071f3a; border-bottom: 1px solid #e5e7eb;'>Property Location</td>
            <td style='padding: 14px 18px; color: #334155; border-bottom: 1px solid #e5e7eb;'>{$safe_property_location}</td>
        </tr>";
    }

    $email_detail_rows = str_replace(
        [
            "border-bottom: 1px solid #e5e7eb;",
            "color: #071f3a;",
            "color: #334155;",
            "padding: 14px 18px;",
            "width: 220px;"
        ],
        [
            "border:1px solid #e2e8f0;",
            "color:#475569;",
            "color:#111827;",
            "padding:14px 16px;",
            "width:220px;"
        ],
        $detail_rows
    );

    $email_content = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Sharp Associates Lead</title>
    </head>
    <body style='margin:0; padding:0; background-color:#edf2f7; font-family:Arial, Helvetica, sans-serif; color:#1f2937;'>
        <table role='presentation' width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#edf2f7; margin:0; padding:24px 0;'>
            <tr>
                <td align='center'>
                    <table role='presentation' width='680' cellpadding='0' cellspacing='0' border='0' style='width:680px; max-width:680px; background-color:#ffffff; border:1px solid #d9e2ec;'>
                        <tr>
                            <td style='background-color:#071f3a; padding:22px 28px;'>
                                <div style='font-size:12px; line-height:18px; letter-spacing:1px; text-transform:uppercase; color:#d5a85d; font-weight:bold;'>Sharp Associates</div>
                                <div style='font-size:28px; line-height:36px; color:#ffffff; font-weight:bold; margin-top:8px;'>New Lead Enquiry</div>
                                <div style='font-size:14px; line-height:22px; color:#dbe7f3; margin-top:8px;'>A new enquiry has been submitted from the landing page.</div>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding:28px;'>
                                <table role='presentation' width='100%' cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse;'>
                                    <tr>
                                        <td colspan='2' style='font-size:18px; line-height:26px; color:#071f3a; font-weight:bold; padding-bottom:18px;'>Lead Details</td>
                                    </tr>
                                    <tr>
                                        <td style='width:220px; padding:14px 16px; background-color:#f8fafc; border:1px solid #e2e8f0; font-size:14px; line-height:20px; color:#475569; font-weight:bold;'>Client Name</td>
                                        <td style='padding:14px 16px; border:1px solid #e2e8f0; font-size:15px; line-height:22px; color:#111827;'>{$safe_name}</td>
                                    </tr>
                                    <tr>
                                        <td style='width:220px; padding:14px 16px; background-color:#f8fafc; border:1px solid #e2e8f0; font-size:14px; line-height:20px; color:#475569; font-weight:bold;'>Phone Number</td>
                                        <td style='padding:14px 16px; border:1px solid #e2e8f0; font-size:15px; line-height:22px; color:#111827;'>{$safe_phone}</td>
                                    </tr>
                                    <tr>
                                        <td style='width:220px; padding:14px 16px; background-color:#f8fafc; border:1px solid #e2e8f0; font-size:14px; line-height:20px; color:#475569; font-weight:bold;'>Email Address</td>
                                        <td style='padding:14px 16px; border:1px solid #e2e8f0; font-size:15px; line-height:22px; color:#111827;'>{$safe_email}</td>
                                    </tr>
                                    {$email_detail_rows}
                                </table>

                                <table role='presentation' width='100%' cellpadding='0' cellspacing='0' border='0' style='margin-top:24px; border-collapse:collapse;'>
                                    <tr>
                                        <td style='padding:0 0 12px; font-size:18px; line-height:26px; color:#071f3a; font-weight:bold;'>Client Message</td>
                                    </tr>
                                    <tr>
                                        <td style='padding:18px 20px; background-color:#f8fafc; border-left:4px solid #d5a85d; border-top:1px solid #e2e8f0; border-right:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0; font-size:15px; line-height:24px; color:#334155;'>{$safe_message}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding:18px 28px; background-color:#f8fafc; border-top:1px solid #e2e8f0; font-size:13px; line-height:20px; color:#64748b;'>
                                This enquiry was submitted from the Sharp Associates landing page.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>";

    $headers = [];
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/html; charset=UTF-8";
    $headers[] = "From: Sharp Associates <maaran@ysa-india.com>";
    $headers[] = "Reply-To: {$name} <{$email}>";
    $headers[] = "X-Mailer: PHP/" . phpversion();

    if (mail($recipient, $subject, $email_content, implode("\r\n", $headers))) {
        header("Location: thankyou.php");
        exit;
    } else {
        $message_status = "<div class='custom-alert custom-alert-error'>Oops! Something went wrong while sending your enquiry. Please try again.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Construction Consultation in Chennai | Sharp Associates</title>
	<meta name="description" content="Request a construction consultation in Chennai with Sharp Associates. Get expert guidance and project planning for residential or commercial building work.">
	<link rel="canonical" href="https://sharpassociates.in/landing.php">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Sharp Associates">
	<meta property="og:title" content="Construction Consultation in Chennai | Sharp Associates">
	<meta property="og:description" content="Request a construction consultation in Chennai with Sharp Associates. Get expert guidance and project planning for residential or commercial building work.">
	<meta property="og:url" content="https://sharpassociates.in/landing.php">
	<meta property="og:image" content="https://sharpassociates.in/images/resources/hero-banner-1.webp">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Construction Consultation in Chennai | Sharp Associates">
	<meta name="twitter:description" content="Request a construction consultation in Chennai with Sharp Associates. Get expert guidance and project planning for residential or commercial building work.">
	<meta name="twitter:image" content="https://sharpassociates.in/images/resources/hero-banner-1.webp">

	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/resources/favicon-sa.webp">
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
    <style>
        /* Landing Page Custom Responsive Styles */
        :root {
            --landing-navy: #071f3a;
            --landing-blue: #0f4c81;
            --landing-gold: #d5a85d;
            --landing-ink: #112033;
            --landing-muted: #64748b;
            --landing-line: rgba(15, 23, 42, 0.1);
            --landing-surface: #ffffff;
            --landing-bg: linear-gradient(180deg, #f6f9fc 0%, #edf3f8 100%);
        }

        body {
            background: var(--landing-bg);
        }

        .landing-shell {
            position: relative;
            overflow: hidden;
        }

        .landing-shell::before {
            content: "";
            position: absolute;
            top: -140px;
            right: -120px;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(213, 168, 93, 0.22) 0%, rgba(213, 168, 93, 0) 72%);
            pointer-events: none;
        }

        .landing-shell::after {
            content: "";
            position: absolute;
            left: -140px;
            bottom: 120px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(15, 76, 129, 0.14) 0%, rgba(15, 76, 129, 0) 72%);
            pointer-events: none;
        }

        .hero-info-card {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.65);
            border-radius: 24px;
            padding: 24px;
            box-shadow: 0 24px 55px rgba(15, 23, 42, 0.08);
            backdrop-filter: blur(10px);
        }

        .hero-highlights {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-top: 28px;
        }

        .hero-highlight-item {
            background: #fff;
            border: 1px solid var(--landing-line);
            border-radius: 18px;
            padding: 18px;
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.06);
        }

        .hero-highlight-item h4 {
            font-size: 28px;
            color: var(--landing-navy);
            margin-bottom: 6px;
        }

        .hero-highlight-item p {
            margin: 0;
            color: var(--landing-muted);
            line-height: 1.6;
        }

        .custom-form-container {
            position: relative;
            background: linear-gradient(160deg, #071f3a 0%, #0d3258 62%, #0f4c81 100%) !important;
            padding: 45px;
            border-radius: 28px;
            box-shadow: 0 28px 70px rgba(7, 31, 58, 0.22);
            overflow: hidden;
        }

        .custom-form-container::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0) 42%);
            pointer-events: none;
        }

        .form-card-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            font-size: 13px;
            letter-spacing: 0.4px;
            margin-bottom: 24px;
        }

        .contact-form .form-control,
        .contact-form select.form-control,
        .contact-form textarea.form-control {
            min-height: 58px;
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 16px;
            color: var(--landing-ink);
            padding: 16px 18px;
            box-shadow: none;
        }

        .contact-form textarea.form-control {
            min-height: 140px;
            resize: vertical;
        }

        .contact-form .form-control::placeholder {
            color: #7b8794;
        }

        .contact-form .form-control:focus,
        .contact-form select.form-control:focus,
        .contact-form textarea.form-control:focus {
            border-color: rgba(213, 168, 93, 0.9);
            box-shadow: 0 0 0 4px rgba(213, 168, 93, 0.16);
        }

        .custom-submit-btn {
            width: 100%;
            border: none;
            border-radius: 16px;
            padding: 18px 24px;
            background: linear-gradient(135deg, #d5a85d 0%, #f0cd88 100%);
            color: #071f3a;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            box-shadow: 0 16px 30px rgba(213, 168, 93, 0.28);
        }

        .custom-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 22px 34px rgba(213, 168, 93, 0.34);
        }

        .form-note {
            margin-top: 18px;
            color: rgba(255, 255, 255, 0.72);
            font-size: 14px;
            line-height: 1.7;
        }

        .custom-alert {
            margin-bottom: 24px;
            padding: 16px 18px;
            border-radius: 14px;
            font-weight: 600;
            line-height: 1.6;
        }

        .custom-alert-error {
            background: rgba(254, 226, 226, 0.18);
            color: #fff2f2;
            border: 1px solid rgba(254, 202, 202, 0.28);
        }

        @media (max-width: 767px) {
            .custom-form-container {
                padding: 20px 15px !important;
            }

            .hero-highlights {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 991px) {
            .landing-navbar {
                flex-direction: column !important;
                align-items: center !important;
                justify-content: center !important;
                padding-bottom: 20px !important;
            }
            .landing-navbar .navbar-brand {
                margin: 0 0 15px 0 !important;
                display: flex;
                justify-content: center;
            }
            .landing-navbar .header-btn {
                margin: 0 !important;
            }
        }
    </style>
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

    <!-- Header Start (Simplified for Landing Page) -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="container">
				<div class="navbar navbar-expand-lg d-flex justify-content-between w-100 landing-navbar">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="images/resources/sa-logo.webp" alt="Sharp Associates Logo" width="160" height="40">
					</a>
					<!-- Logo End -->

                    <!-- CTA Button -->
                    <div class="header-btn d-inline-flex ms-auto">
                        <a href="tel:+919500036132" class="btn-default" style="display:flex; align-items:center; gap: 8px;">
                            <i class="fa-solid fa-phone"></i> +91 95000 36132
                        </a>
                    </div>
				</div>
			</nav>
		</div>
	</header>
	<!-- Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us pt-5 landing-shell" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- About Info Start -->
                    <div class="about-us-content mt-4">
                        <div class="section-title hero-info-card">
                            <h3 class="wow fadeInUp" style="color: var(--landing-gold);">Trusted Construction Partner</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque" style="color: var(--landing-navy); font-size: 38px; line-height: 1.2;">Construction &amp; Joint Venture <span>Consultation in Chennai</span></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: var(--landing-muted);">At SHARP ASSOCIATES, we redefine construction by combining engineering expertise with a commitment to excellence. Specializing in residential and commercial development, we create thoughtfully designed spaces that reflect quality, durability, and modern standards.</p>

                            <div class="hero-highlights">
                                <div class="hero-highlight-item">
                                    <h4>22+</h4>
                                    <p>Years of project delivery across residential and commercial developments.</p>
                                </div>
                                <div class="hero-highlight-item">
                                    <h4>95%</h4>
                                    <p>Positive client feedback built on transparency, quality, and trust.</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-title pt-4">
                            <h3 class="wow fadeInUp">Why Sharp Associates?</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">From planning to handover, our team focuses on structured execution, durable materials, and a smooth client experience at every stage.</p>
                        </div>
                        
                        <div class="about-us-content-body mt-4">
                            <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>22+ Years of Experience</li>
                                    <li>95% Positive Feedback</li>
                                    <li>Quality Assurance</li>
                                    <li>Timely Delivery</li>
                                </ul>
                            </div>
                        </div>

                        <div class="contact-us-image mt-5">
                            <figure class="image-anime reveal">
                                <img src="images/resources/sharp-4.webp" alt="Construction experience" style="border-radius: 10px;" width="1024" height="1024" loading="lazy" decoding="async">
                            </figure>
                        </div>
                    </div>
                    <!-- About Info End -->
                </div>
                
                <div class="col-lg-7">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form custom-form-container">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section mb-0">
                            <div class="form-card-badge">
                                <i class="fa-solid fa-shield-heart"></i>
                                Quick response within business hours
                            </div>
                            <h3 class="wow fadeInUp" style="color: #fff;">Get a Free Consultation</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque" style="color: #fff;">Start Your Project <span>Today</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: #d1d5db; margin-bottom: 30px;">Enter your details below and our construction team will contact you shortly to discuss your vision.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <?php if(!empty($message_status)) { echo $message_status; } ?>
                            <form id="leadForm" action="" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <select name="service_type" id="service_type" class="form-control" required>
                                            <option value="" disabled selected>Choose Your Requirement*</option>
                                            <option value="joint_venture">Joint Venture</option>
                                            <option value="construction">Construction</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- Joint Venture Fields -->
                                    <div class="form-group col-md-12 mb-4" id="jv_fields" style="display: none;">
                                        <input type="text" name="investment_amount" class="form-control" id="investment_amount" placeholder="Expected Investment Amount">
                                    </div>

                                    <!-- Construction Fields -->
                                    <div class="col-md-12 p-0 m-0" id="construction_fields" style="display: none;">
                                        <div class="row m-0 p-0">
                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="sq_ft_area" class="form-control" id="sq_ft_area" placeholder="Square Feet Area">
                                            </div>
                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="property_location" class="form-control" id="property_location" placeholder="Property Location">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Additional Details or Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="custom-submit-btn">Get Started Securely</button>
                                        <p class="form-note">Your information is shared only with our project team. After submission, you will be redirected to a thank-you page.</p>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Form Toggle Script Start -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var serviceType = document.getElementById('service_type');
        var jvFields = document.getElementById('jv_fields');
        var constructionFields = document.getElementById('construction_fields');

        serviceType.addEventListener('change', function() {
            // Reset required flags and values on change
            document.getElementById('investment_amount').required = false;
            document.getElementById('sq_ft_area').required = false;
            document.getElementById('property_location').required = false;

            if (this.value === 'joint_venture') {
                jvFields.style.display = 'block';
                constructionFields.style.display = 'none';
                document.getElementById('investment_amount').required = true;
            } else if (this.value === 'construction') {
                jvFields.style.display = 'none';
                constructionFields.style.display = 'block';
                document.getElementById('sq_ft_area').required = true;
                document.getElementById('property_location').required = true;
            } else {
                jvFields.style.display = 'none';
                constructionFields.style.display = 'none';
            }
        });
    });
    </script>
    <!-- Form Toggle Script End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us bg-light pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">why trust us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Dependable construction leadership <span>for every project</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We combine decades of execution experience, stringent quality controls, and transparent scheduling to keep every build on track and on budget.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list">
                            <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Proven Expertise</h3>
                                <p>Backed by years of industry experience, we deliver construction solutions with precision and technical excellence.</p>
                            </div>
                        </div>

                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="why-choose-item-content">
                                <h3> Quality Commitment</h3>
                                <p>We use high-grade materials and strict quality standards to ensure durable and reliable structures.</p>
                            </div>
                        </div>

                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="why-choose-item-content">
                                <h3> Timely Execution</h3>
                                <p>Every project is completed within the promised timeline, maintaining transparency and budget control.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Why Choose Item List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Why Choose Images Images Start -->
                    <div class="why-choose-images">
                        <!-- Why Choose Box 1 Start -->
                        <div class="why-choose-img-box-1">
                            <!-- Why Choose img 1 Start -->
                            <div class="why-choose-img-1">
                                <figure class="image-anime reveal">
                                    <img src="images/resources/sharp-5.webp" alt="Construction planning and execution" width="1536" height="1024" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <!-- Why Choose img 1 End -->

                            <!-- Why Choose img 2 Start -->
                            <div class="why-choose-img-2">
                                <figure class="image-anime reveal">
                                    <img src="images/resources/sharp-6.webp" alt="Quality-focused building work" width="1536" height="1024" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <!-- Why Choose img 2 End -->
                        </div>
                        <!-- Why Choose Box 1 End -->

                        <!-- Why Choose Box 2 Start -->
                        <div class="why-choose-img-box-2">
                            <!-- Why Choose img 3 Start -->
                            <div class="why-choose-img-3">
                                <figure class="image-anime reveal">
                                    <img src="images/resources/sharp-7.webp" alt="Modern structure by Sharp Associates" width="1536" height="1024" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <!-- Why Choose img 3 End -->

                            <!-- Why Choose img 4 Start -->
                            <div class="why-choose-img-4">
                                <figure class="image-anime reveal">
                                    <img src="images/resources/sharp-8.webp" alt="Reliable project delivery by Sharp Associates" width="1536" height="1024" loading="lazy" decoding="async">
                                </figure>
                            </div>
                            <!-- Why Choose img 4 End -->
                        </div>
                        <!-- Why Choose Box 2 End -->
                    </div>
                    <!-- Why Choose Images Images End -->
                </div>
                
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Video Testimonial Section Start -->
    <div class="video-testimonials pb-5">
        <div class="container">
            <div class="row pt-5 section-row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">video testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What Our Clients Say About <span>Working With Sharp</span></h2>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Real feedback from our valued clients, sharing their experience of our construction quality, professionalism, and timely project delivery.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="video-testimonial-item wow fadeInUp">
                        <div class="video-testimonial-media">
                            <video controls preload="metadata" playsinline>
                                <source src="images/testimonial%20videos/sharp-assosiation-testimonial-video-%201.mp4" type="video/mp4">
                            </video>
                            <span class="video-testimonial-badge">01</span>
                        </div>
                        <div class="video-testimonial-content">
                            <h3>Residential Project Testimonial</h3>
                            <p>Client feedback highlighting our planning, quality execution, and smooth coordination from start to finish.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="video-testimonial-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="video-testimonial-media">
                            <video controls preload="metadata" playsinline>
                                <source src="images/testimonial%20videos/sharp-assosiation-testimonial-video-%202.mp4" type="video/mp4">
                            </video>
                            <span class="video-testimonial-badge">02</span>
                        </div>
                        <div class="video-testimonial-content">
                            <h3>Client Experience Story</h3>
                            <p>A direct review focused on our transparent communication, timely updates, and dependable project management.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="video-testimonial-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="video-testimonial-media">
                            <video controls preload="metadata" playsinline>
                                <source src="images/testimonial%20videos/sharp-assosiation-testimonial-video-%203.mp4" type="video/mp4">
                            </video>
                            <span class="video-testimonial-badge">03</span>
                        </div>
                        <div class="video-testimonial-content">
                            <h3>Construction Journey Review</h3>
                            <p>Feedback centered on our site discipline, workmanship standards, and commitment to delivering lasting value.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="video-testimonial-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="video-testimonial-media">
                            <video controls preload="metadata" playsinline>
                                <source src="images/testimonial%20videos/sharp-assosiation-testimonial-video-%204.mp4" type="video/mp4">
                            </video>
                            <span class="video-testimonial-badge">04</span>
                        </div>
                        <div class="video-testimonial-content">
                            <h3>Trusted Partner Feedback</h3>
                            <p>Client appreciation for our responsive team, dependable timelines, and quality-focused execution throughout the build.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Testimonial Section End -->

    <!-- Footer Start (Simplified for Landing Page) -->
    <footer class="main-footer pt-5 mt-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer Header Start -->
                    <div class="footer-header">
                        <div class="row align-items-center">  
                            <div class="col-md-6">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <img src="images/resources/sa-logo-footer.webp" alt="Sharp Associates Logo" width="160" height="40" loading="lazy">
                                </div>
                                <!-- Footer Logo End -->
                            </div>

                            <div class="col-md-6">
                                <!-- Footer Social Link Start -->
                                <div class="footer-social-links">
                                    <div class="footer-social-link-title">
                                        <h3>follow our socials</h3>
                                    </div>
                                    <ul>
                                        <li><a href="https://www.facebook.com/profile.php?id=61587899631466" aria-label="Sharp Associates Facebook Page" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/sharp.associates_official" aria-label="Sharp Associates Instagram Profile" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Footer Social Link End -->
                            </div>
                        </div>
                    </div>
                    <!-- Footer Header End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2026 Sharp Associates. All Rights Reserved. Designed By <a href="https://fyndxmarketing.com/">FyndX Marketing Agency</a></p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Sticky Contact Buttons Start -->
    <div class="sticky-contact-buttons">
        <a href="tel:+919500036132" class="sticky-contact-btn call-btn" aria-label="Call Sharp Associates">
            <i class="fa-solid fa-phone"></i>
            <span>Call Us</span>
        </a>
        <a href="https://wa.me/919500036132" class="sticky-contact-btn whatsapp-btn" target="_blank" rel="noopener noreferrer" aria-label="Chat with Sharp Associates on WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
    </div>
    <!-- Sticky Contact Buttons End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js" defer></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js" defer></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js" defer></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js" defer></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js" defer></script>
    <script src="js/jquery.counterup.min.js" defer></script>
    <!-- Isotop js file -->
	<script src="js/isotope.min.js" defer></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js" defer></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js" defer></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js" defer></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js" defer></script>
    <script src="js/magiccursor.js" defer></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js" defer></script>
    <script src="js/ScrollTrigger.min.js" defer></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js" defer></script>
    <!-- Wow js file -->
    <script src="js/wow.min.js" defer></script>
    <!-- Main Custom js file -->
    <script src="js/function.js" defer></script>
</body>

</html>
