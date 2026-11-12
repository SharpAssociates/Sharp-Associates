<?php
$page_title = "Contact Building Contractors in Chennai | Sharp Associates";
$page_description = "Looking for building contractors in Chennai? Contact Sharp Associates to discuss residential or commercial construction, project planning and your requirements.";
$canonical_url = "https://sharpassociates.in/contact.php";
$og_image = "https://sharpassociates.in/images/resources/sharp-8.png";
$og_type = "website";

$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "ContactPage",
    "name" => "Construction Company Contact in Chennai - Sharp Associates",
    "description" => $page_description,
    "url" => $canonical_url,
    "mainEntity" => [
        "@type" => "GeneralContractor",
        "@id" => "https://sharpassociates.in/#organization",
        "name" => "Sharp Associates",
        "url" => "https://sharpassociates.in/",
        "telephone" => "+919500036132",
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
            "streetAddress" => "Old No. 29, New No. 28, Loco Works Road, Agaram",
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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Construction Company Contact in Chennai</h1>
						
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
                            <img src="images/resources/sharp-8.webp" alt="Construction consultation and project planning at Sharp Associates Chennai office" width="1536" height="1024" loading="lazy" decoding="async">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Contact Us Form Box Start -->
                    <div class="contact-us-form modern-contact-form-box wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Form Header Start -->
                        <div class="contact-form-header">
                            <span class="contact-form-eyebrow"><i class="fa-solid fa-hard-hat me-2"></i>CONTACT FORM</span>
                            <h2 class="contact-form-title">Contact us for <span>Free consultation</span></h2>
                            <p class="contact-form-subtitle">Connect with our civil engineers to discuss residential construction, commercial developments, or joint ventures.</p>
                        </div>
                        <!-- Form Header End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form modern-contact-form">
                            <form action="thank-contact.php" method="POST" data-toggle="validator">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="name" class="modern-form-label">Name <span class="required-star">*</span></label>
                                        <input type="text" name="name" class="form-control modern-form-control" id="name" placeholder="Enter your full name" aria-label="Your Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="phone" class="modern-form-label">Phone Number <span class="required-star">*</span></label>
                                        <input type="tel" name="phone" class="form-control modern-form-control" id="phone" placeholder="+91 98765 43210" aria-label="Your Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-12 mb-3">
                                        <label for="email" class="modern-form-label">Email Address <span class="required-star">*</span></label>
                                        <input type="email" name="email" class="form-control modern-form-control" id="email" placeholder="name@example.com" aria-label="Your Email Address" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-12 mb-3">
                                        <label for="service" class="modern-form-label">Select a Service (Optional)</label>
                                        <select name="service" id="service" class="form-control modern-form-control modern-form-select" aria-label="Select a Service">
                                            <option value="">Choose a service</option>
                                            <option value="Contracting Services">End-to-End Construction</option>
                                            <option value="Joint Venture Projects">Architectural Design</option>
                                            <option value="Interior Solutions">Interior Solutions</option>
                                            <option value="Architectural Design">Joint Venture Projects</option>
                                            <option value="Vastu Planning">Vastu Planning</option>
                                            <option value="End-to-End Construction">Contracting Services</option>
                                            <option value="Plan Approvals">Plan Approvals</option>
                                            <option value="Sanctions & Assessments">Sanctions & Assessments</option>
                                            <option value="Other Enquiry">Other Enquiry</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-12 mb-4">
                                        <label for="message" class="modern-form-label">Your Message</label>
                                        <textarea name="message" class="form-control modern-form-control modern-form-textarea" id="message" rows="4" placeholder="Tell us about your plot location, project scale or specific construction requirements..." aria-label="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn-modern-submit">
                                            <span>Submit Enquiry</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form Box End -->
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
                             <a href="tel:+919500036132">+91 95000 36132</a>
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
                                <p>Old No. 29, New No. 28, Loco Works Road, Agaram, Chennai – 600082, India.</p>
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
