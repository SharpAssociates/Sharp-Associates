
<?php
$page_title = "Contact Construction Contractors in Chennai | Sharp Associates";
$page_description = "Contact Sharp Associates in Chennai for residential construction, architectural planning, and joint venture inquiries. Call +91 95000 36132 or visit our Agaram office.";
$canonical_url = "https://sharpassociates.in/contact.php";
$og_image = "https://sharpassociates.in/images/resources/sharp-8.png";
$og_type = "website";

$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "ContactPage",
    "name" => "Contact Sharp Associates",
    "description" => $page_description,
    "url" => $canonical_url,
    "mainEntity" => [
        "@type" => "GeneralContractor",
        "name" => "Sharp Associates",
        "url" => "https://sharpassociates.in/",
        "telephone" => "+91-95000-36132",
        "email" => "maaran@ysa-india.com",
        "areaServed" => [
            [
                "@type" => "City",
                "name" => "Chennai"
            ],
            [
                "@type" => "AdministrativeArea",
                "name" => "Tamil Nadu"
            ]
        ],
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Old No. 29, New No: 28, Loco Works Rd, Agaram",
            "addressLocality" => "Chennai",
            "addressRegion" => "Tamil Nadu",
            "postalCode" => "600082",
            "addressCountry" => "IN"
        ]
    ]
];
$schema_json = json_encode($schema_data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
include "header.php";
?>
    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Contact Our Construction Office in Chennai</h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <figure class="image-anime reveal">
                            <img src="images/resources/sharp-8.png" alt="Construction consultation and project planning at Sharp Associates Chennai office">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact form</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Request a Construction Consultation & <span>Project Estimate</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form  action="thank-contact.php" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name*" aria-label="Your Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone*" aria-label="Your Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address*" aria-label="Your Email Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Your Message" aria-label="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">submit</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container">
          
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Conatct Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>phone number</h3>
                               
                                 <p>
                             <a href="tel:+91 95000 36132">+91 95000 36132</a>
                              </p>
                                                               
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Conatct Info Item End -->

                        <!-- Conatct Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>e-mail support</h3>
                               
                               <p>
                             <a href="mailto:maaran@ysa-india.com">maaran@ysa-india.com</a>
                              </p>
                           
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Conatct Info Item End -->

                        <!-- Conatct Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Our Address</h3>
                                <p>Old No. 29,New No:28, Loco Works Rd, Agaram, Chennai, 600 082, India.</p>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Conatct Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>

              <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                      
                       
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Find us easily on the map and visit our office for direct consultation.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62173.625373170216!2d80.231029!3d13.108587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52654e264d7453%3A0x8e199257654f08f6!2sSharp%20Associates!5e0!3m2!1sen!2sin!4v1774006283205!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Sharp Associates Office Location on Google Maps"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Google Map Section End -->


    
    <?php include "footer.php"?>
