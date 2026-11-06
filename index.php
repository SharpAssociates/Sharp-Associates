<?php
$page_title = "Building Construction Contractors in Chennai | Sharp Associates";
$page_description = "Trusted building construction contractors in Chennai. Sharp Associates delivers turnkey residential & commercial construction, architectural design, and joint venture developments.";
$canonical_url = "https://sharpassociates.in/";
$og_image = "https://sharpassociates.in/images/resources/hero-banner-1.webp";
$og_type = "website";

$schema_data = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "WebSite",
            "@id" => "https://sharpassociates.in/#website",
            "url" => "https://sharpassociates.in/",
            "name" => "Sharp Associates",
            "description" => "Residential and Commercial Construction Solutions in Chennai",
            "inLanguage" => "en-US"
        ],
        [
            "@type" => "GeneralContractor",
            "@id" => "https://sharpassociates.in/#organization",
            "name" => "Sharp Associates",
            "url" => "https://sharpassociates.in/",
            "logo" => "https://sharpassociates.in/images/resources/sa-logo.webp",
            "image" => "https://sharpassociates.in/images/resources/hero-banner-1.webp",
            "description" => "Professional building construction contractors, civil engineering, architectural planning, joint venture development, and turnkey interior solutions based in Chennai.",
            "telephone" => "+91-95000-36132",
            "email" => "maaran@ysa-india.com",
            "priceRange" => "$$",
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
            "knowsAbout" => [
                "Civil Construction",
                "Residential Building Construction",
                "Commercial Construction",
                "Architectural Design",
                "Joint Venture Real Estate Development",
                "Turnkey Project Execution",
                "Interior Solutions",
                "Vastu Planning"
            ],
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "Old No. 29, New No: 28, Loco Works Rd, Agaram",
                "addressLocality" => "Chennai",
                "addressRegion" => "Tamil Nadu",
                "postalCode" => "600082",
                "addressCountry" => "IN"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => 13.108587,
                "longitude" => 80.231029
            ],
            "sameAs" => [
                "https://www.facebook.com/profile.php?id=61587899631466",
                "https://www.instagram.com/sharp.associates_official"
            ]
        ]
    ]
];
$schema_json = json_encode($schema_data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
include "header.php";
?>
    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/resources/hero-banner-1.webp" alt="Building construction contractors in Chennai - Sharp Associates residential project">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp">SHARP ASSOCIATES</h3>
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Building Construction & Architectural Development in Chennai</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Reliable construction solutions for residential and commercial projects, delivered with precision, engineering quality, and trust.</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Button Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="contact.php" class="btn-default">Start Your Project Today</a>
                                            <a href="our-work.php" class="btn-default btn-highlighted">view projects</a>
                                        </div>
                                        <!-- Hero Button End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/resources/hero-banner-2.webp" alt="Commercial building construction and architectural elevation in Chennai">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp">SHARP ASSOCIATES</h3>
                                            <h2 class="text-anime-style-2" data-cursor="-opaque">Turnkey Civil Construction & Engineering Excellence</h2>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Expert civil construction, smart architectural planning, and timely project delivery across Chennai.</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Button Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="contact.php" class="btn-default">Contact Us Today</a>
                                            <a href="our-work.php" class="btn-default btn-highlighted">view projects</a>
                                        </div>
                                        <!-- Hero Button End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>        
    </div>
    <!-- Hero Section End -->
    
    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/resources/sharp-3.png" alt="Turnkey commercial and residential building construction in Chennai">
                            </figure>
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/resources/sharp-4.png" alt="Interior architectural planning and residential construction in Chennai">
                            </figure>

                            <!-- Feedback Counter Start -->
                            <div class="experience-counter">
                                <h3><span class="counter">22</span>+</h3>
                                <p>Years of experience</p>
                            </div>
                            <!-- Feedback Counter End -->
                        </div>
                        <!-- About Image 2 End -->
    
                        <!-- Feedback Counter Start -->
                        <div class="feedback-counter">
                            <p><span class="counter">95</span>%</p>
                            <h3>positive feedback</h3>
                        </div>
                        <!-- Feedback Counter End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">About SHARP ASSOCIATES</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Building Trust Through Quality  <span>Construction in Chennai</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At SHARP ASSOCIATES, we redefine construction by combining engineering expertise with a commitment to excellence. Specializing in residential and commercial development, we create thoughtfully designed spaces that reflect quality, durability, and modern standards across Chennai. Explore our <a href="our-work.php" style="color: inherit; text-decoration: underline;">completed construction projects</a> to see our craftsmanship in action.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">With a team of experienced professionals and a client-first approach, we ensure seamless project execution from concept to completion. Our focus on precision, transparency, and timely delivery allows us to build not just structures, but long-term relationships based on trust and reliability.</p>
                       
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Content Body Start -->
                        <div class="about-us-content-body">
                            <!-- About Content Info Start -->
                            <div class="about-us-content-info">
                                <!-- About Us Content List Start -->
                                <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Quality Assurance</li>
                                        <li>Timely Delivery</li>
                                    </ul>
                                </div>
                                <!-- About Us Content List End -->

                                <!-- About Us Content Button Start -->
                                <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="about.php" class="btn-default">Know more</a>
                                </div>
                                <!-- About Us Content Button End -->
                            </div>
                            <!-- About Content Info End -->

                            <!-- About Content List Start -->
                            <div class="about-us-contact-list">
                                <!-- About Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Call Us Today</p>
                                        <h3> +91 95000 36132</h3>
                                    </div>
                                </div>
                                <!-- About Contact Item End -->

                                
                            </div>
                            <!-- About Content Info End -->
                        </div>
                        <!-- About Us Content Body End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>

        </div>
    </div>
    <!-- About Us Section End -->



 <!-- our services-->
    <div class="how-we-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">From concept to completion in<span> our work</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our dedicated team delivers every project with exceptional workmanship, ensuring completion on time, within budget, and beyond expectations.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- How We Work List Start -->
                    <div class="how-we-work-list">
                        <div class="how-we-work-item wow fadeInUp">
                            <div class="icon-box">
                                <i class="fa-solid fa-helmet-safety"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Contracting Services</h3>
                                <p>Complete construction solutions executed with precision, quality materials, and expert supervision.</p>
                            </div>
                        </div>

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Joint Venture Projects</h3>
                                <p>Collaborative development opportunities that maximize land value and ensure profitable outcomes.</p>
                            </div>
                        </div>

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <i class="fa-solid fa-couch"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Interior Solutions</h3>
                                <p>Functional and aesthetic interior designs tailored to enhance comfort, style, and usability.</p>
                            </div>
                        </div>

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Architectural Design</h3>
                                <p>Innovative and practical designs that align with modern standards and structural efficiency.</p>
                            </div>
                        </div>

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Vastu Planning</h3>
                                <p>Space planning based on Vastu principles to create balanced and positive living environments.</p>
                            </div>
                        </div>

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <i class="fa-solid fa-diagram-project"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>End-to-End Construction</h3>
                                <p>Seamless project execution from initial concept to final handover under one roof.</p>
                            </div>
                        </div>

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="1.2s">
                            <div class="icon-box">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Plan Approvals</h3>
                                <p>Hassle-free assistance in securing government approvals and required documentation.</p>
                            </div>
                        </div>

                        <!-- <div class="how-we-work-item wow fadeInUp" data-wow-delay="1.4s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-4.svg" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>HVAC Solutions</h3>
                                <p>Efficient heating, ventilation, and air conditioning systems for optimal indoor comfort.</p>
                            </div>
                        </div> -->

                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="1.6s">
                            <div class="icon-box">
                                <i class="fa-solid fa-clipboard-check"></i>
                            </div>
                            <div class="how-we-work-content">
                                <h3>Sanctions &amp; Assessments</h3>
                                <p>Expert guidance in regulatory clearances, compliance, and property evaluations.</p>
                            </div>
                        </div>
                    </div>
                    <!-- How We Work List End -->

                    
                </div>
            </div>
        </div>
    </div>
    <!-- our services -->

    <!-- Vendor Logos Section Start -->
    <div class="vendor-logos-section">
        <div class="container">
           
        
            <div class="row justify-content-center align-items-center vendor-logos-row">
                <div class="col-6 col-md-2 text-center">
                    <img src="images/vendors/bhawani-logo.png" alt="Bhawani" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 text-center">
                    <img src="images/vendors/the-pearl-stone-logo.png" alt="The Pearl Stone" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 text-center">
                    <img src="images/vendors/mahaveer-logo.png" alt="Mahaveer" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 text-center">
                    <img src="images/vendors/concrete-oem-logo.png" alt="Concrete OEM" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 text-center">
                    <img src="images/vendors/bathcafe-logo.png" alt="Bathcafe" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor Logos Section End -->


    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
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
                                    <img src="images/resources/sharp-5.png" alt="Construction planning and execution">
                                </figure>
                            </div>
                            <!-- Why Choose img 1 End -->

                            <!-- Why Choose img 2 Start -->
                            <div class="why-choose-img-2">
                                <figure class="image-anime reveal">
                                    <img src="images/resources/sharp-6.png" alt="Quality-focused building work">
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
                                    <img src="images/resources/sharp-7.png" alt="Modern structure by Sharp Associates">
                                </figure>
                            </div>
                            <!-- Why Choose img 3 End -->

                            <!-- Why Choose img 4 Start -->
                            <div class="why-choose-img-4">
                                <figure class="image-anime reveal">
                                    <img src="images/resources/sharp-8.png" alt="Reliable project delivery by Sharp Associates">
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

    

    <!-- Our Project Start -->
    <div class="our-project">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest project</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Creative projects that define<span> our style</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our portfolio showcases a diverse range of projects, from beautifully crafted residential spaces functional and stylish commercial interiors</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            <li><a href="#" data-filter=".architecture">architecture</a></li>
                            <li><a href="#" data-filter=".interior">interior</a></li>
                        
                        </ul>
                    </div>
                    <!-- Our Project Nav End -->
                </div>
    
                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-md-6 project-item-box architecture ">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/resources/sharp-1.png" alt="Residential project by Sharp Associates">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="our-work.php" aria-label="View project details in Our Works gallery"><img src="images/arrow-white.svg" alt="View project details"></a>
                                    </div>
                                </div>     
    
                               
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box architecture ">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/resources/sharp-10.png" alt="Luxury home project by Sharp Associates">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="our-work.php" aria-label="View project details in Our Works gallery"><img src="images/arrow-white.svg" alt="View project details"></a>
                                    </div>
                                </div>     

                                
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box  architecture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/resources/sharp-11.jpg" alt="Outdoor and landscape project by Sharp Associates">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="our-work.php" aria-label="View project details in Our Works gallery"><img src="images/arrow-white.svg" alt="View project details"></a>
                                    </div>
                                </div>     

                            </div>
                            <!-- Project Item End -->
                        </div>



                         <div class="col-md-6 project-item-box  architecture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/resources/sharp-4.png" alt="Outdoor and landscape project by Sharp Associates">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="our-work.php" aria-label="View project details in Our Works gallery"><img src="images/arrow-white.svg" alt="View project details"></a>
                                    </div>
                                </div>     

                                
                            </div>
                            <!-- Project Item End -->
                        </div>



                        


                        

                        


                        <div class="col-md-6 project-item-box interior ">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/resources/sharp-14.jpg" alt="Modern design project by Sharp Associates">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="our-work.php" aria-label="View project details in Our Works gallery"><img src="images/arrow-white.svg" alt="View project details"></a>
                                    </div>
                                </div>     

                               
                            </div>
                            <!-- Project Item End -->
                        </div>


                        <div class="col-md-6 project-item-box interior ">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/resources/sharp-17.jpg" alt="Modern design project by Sharp Associates">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="our-work.php" aria-label="View project details in Our Works gallery"><img src="images/arrow-white.svg" alt="View project details"></a>
                                    </div>
                                </div>     

                               
                            </div>
                            <!-- Project Item End -->
                        </div>











                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
     </div>
    <!-- Our Project End -->

    
   

     <!-- Video Testimonial Section Start -->
    <div class="video-testimonials">
        <div class="container">
            <div class="row section-row align-items-center">
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

        <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest news</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your guide to</span> inspired interiors</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Insights, innovations, and sustainability stories that highlight how Sharp Associates stays ahead in today's building landscape.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-1.php" class="image-anime" data-cursor-text="View">
                                    <img src="images/resources/sharp-6.png" alt="Building a better tomorrow with smarter construction practices">
                                </a>
                            </figure>
                        </div>

                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h3><a href="blog-1.php">Building a Better Tomorrow with Smarter Construction Practices</a></h3>
                            </div>

                            <div class="post-item-btn">
                                <a href="blog-1.php" class="post-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-2.php" class="image-anime" data-cursor-text="View">
                                    <img src="images/resources/sharp-7.png" alt="Today's smart buildings">
                                </a>
                            </figure>
                        </div>

                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h3><a href="blog-2.php">Today&rsquo;s Smart Buildings</a></h3>
                            </div>

                            <div class="post-item-btn">
                                <a href="blog-2.php" class="post-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-3.php" class="image-anime" data-cursor-text="View">
                                    <img src="images/resources/sharp-8.png" alt="Building for tomorrow sustainable construction">
                                </a>
                            </figure>
                        </div>

                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h3><a href="blog-3.php">Building For Tomorrow: Sustainable Construction</a></h3>
                            </div>

                            <div class="post-item-btn">
                                <a href="blog-3.php" class="post-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
                        <a href="blog.php" class="btn-default">See All Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->
<?php include "footer.php"?>
