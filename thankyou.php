<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Thank You | Sharp Associates</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/resources/favicon-sa.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <style>
        :root {
            --thank-bg: #eef4f8;
            --thank-navy: #071f3a;
            --thank-blue: #0f4c81;
            --thank-gold: #d5a85d;
            --thank-text: #223247;
            --thank-muted: #64748b;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Hanken Grotesk", sans-serif;
            background:
                radial-gradient(circle at top right, rgba(213, 168, 93, 0.18) 0, rgba(213, 168, 93, 0) 32%),
                radial-gradient(circle at bottom left, rgba(15, 76, 129, 0.18) 0, rgba(15, 76, 129, 0) 34%),
                linear-gradient(180deg, #f8fbfd 0%, var(--thank-bg) 100%);
            color: var(--thank-text);
        }

        .thankyou-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .thankyou-card {
            width: 100%;
            max-width: 760px;
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 28px;
            box-shadow: 0 28px 80px rgba(15, 23, 42, 0.12);
            overflow: hidden;
        }

        .thankyou-header {
            padding: 28px 32px;
            background: linear-gradient(135deg, var(--thank-navy) 0%, var(--thank-blue) 100%);
            color: #fff;
        }

        .thankyou-header img {
            max-width: 180px;
        }

        .thankyou-body {
            padding: 40px 32px;
            text-align: center;
        }

        .thankyou-icon {
            width: 88px;
            height: 88px;
            margin: 0 auto 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(213, 168, 93, 0.18) 0%, rgba(15, 76, 129, 0.18) 100%);
            color: var(--thank-navy);
            font-size: 36px;
        }

        .thankyou-body h1 {
            font-size: 42px;
            line-height: 1.15;
            margin-bottom: 16px;
            color: var(--thank-navy);
        }

        .thankyou-body p {
            font-size: 17px;
            line-height: 1.8;
            color: var(--thank-muted);
            max-width: 560px;
            margin: 0 auto 28px;
        }

        .thankyou-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .thankyou-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 190px;
            padding: 15px 22px;
            border-radius: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .thankyou-btn-primary {
            background: linear-gradient(135deg, var(--thank-gold) 0%, #efcb83 100%);
            color: var(--thank-navy);
            box-shadow: 0 16px 30px rgba(213, 168, 93, 0.3);
        }

        .thankyou-btn-secondary {
            background: #fff;
            color: var(--thank-navy);
            border: 1px solid rgba(15, 23, 42, 0.12);
        }

        .thankyou-btn:hover {
            transform: translateY(-2px);
        }

        .thankyou-footer {
            padding: 0 32px 32px;
            text-align: center;
            color: var(--thank-muted);
            font-size: 15px;
        }

        @media (max-width: 767px) {
            .thankyou-header,
            .thankyou-body,
            .thankyou-footer {
                padding-left: 22px;
                padding-right: 22px;
            }

            .thankyou-body h1 {
                font-size: 32px;
            }

            .thankyou-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="thankyou-wrapper">
        <div class="thankyou-card">
            <div class="thankyou-header text-center text-md-start">
                <img src="images/resources/sa-logo-footer.webp" alt="Sharp Associates" width="160" height="40">
            </div>

            <div class="thankyou-body">
                <div class="thankyou-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h1>Thank You for Reaching Out</h1>
                <p>Your enquiry has been submitted successfully. Our team will review your requirement and contact you shortly to discuss the next steps for your project.</p>

                <div class="thankyou-actions">
                    <a href="landing.php" class="thankyou-btn thankyou-btn-primary">Back to Landing Page</a>
                    <a href="tel:+919500036132" class="thankyou-btn thankyou-btn-secondary">Call +91 95000 36132</a>
                </div>
            </div>

            <div class="thankyou-footer">
                Sharp Associates | Residential and commercial construction solutions with trusted execution.
            </div>
        </div>
    </div>
</body>
</html>
