<?php
$page_title = "Vastu Consultants in Chennai | Sharp Associates Planning";
$page_description = "Consult experienced Vastu consultants in Chennai at Sharp Associates. We design balanced, Vastu-compliant house plans that harmonize energy, light and layout.";
$canonical_url = "https://sharpassociates.in/vastu-planning-chennai.php";
$og_image = "https://sharpassociates.in/images/resources/sharp-3.webp";
$og_type = "website";
$current_service = "vastu";

$schema_data = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "Service",
            "name" => "Vastu Consultants in Chennai",
            "serviceType" => "Vastu Planning Services",
            "description" => $page_description,
            "url" => $canonical_url,
            "provider" => [
                "@type" => "GeneralContractor",
                "@id" => "https://sharpassociates.in/#organization",
                "name" => "Sharp Associates",
                "image" => "https://sharpassociates.in/images/resources/hero-banner-1.webp",
                "telephone" => "+919500036132",
                "email" => "maaran@ysa-india.com",
                "url" => "https://sharpassociates.in/",
                "address" => [
                    "@type" => "PostalAddress",
                    "streetAddress" => "Old No. 29, New No. 28, Loco Works Road, Agaram",
                    "addressLocality" => "Chennai",
                    "addressRegion" => "Tamil Nadu",
                    "postalCode" => "600082",
                    "addressCountry" => "IN"
                ]
            ],
            "areaServed" => [
                "@type" => "City",
                "name" => "Chennai",
                "sameAs" => "https://en.wikipedia.org/wiki/Chennai"
            ]
        ],
        [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => "https://sharpassociates.in/index.php"
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Services",
                    "item" => "https://sharpassociates.in/index.php#services"
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => "Vastu Planning",
                    "item" => $canonical_url
                ]
            ]
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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Vastu Consultants in Chennai</h1>
						<nav class="wow fadeInUp" aria-label="breadcrumb">
							<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
								<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="index.php"><span itemprop="name">Home</span></a>
									<meta itemprop="position" content="1">
								</li>
								<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="index.php#services"><span itemprop="name">Services</span></a>
									<meta itemprop="position" content="2">
								</li>
								<li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<span itemprop="name">Vastu Planning</span>
									<meta itemprop="position" content="3">
								</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <?php include "service-sidebar.php"; ?>
                </div>
                <!-- Sidebar End -->

                <!-- Service Content Start -->
                <div class="col-lg-8">
                    <div class="service-single-content">
                        <!-- Service Feature Image Start -->
                        <div class="service-feature-image">
                            <figure class="image-anime reveal">
                                <img src="images/resources/sharp-3.webp" alt="Vastu compliant residential villa planning and construction in Chennai" width="1536" height="1024" loading="eager" decoding="async">
                            </figure>
                        </div>
                        <!-- Service Feature Image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Harmonious Space Planning</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Integrating Ancient Vastu Science with <span>Modern Architecture</span></h2>
                            </div>
                            <p class="wow fadeInUp">Creating a positive, peaceful, and prosperous home begins with aligning your living spaces with the elemental forces of nature. At Sharp Associates, our certified <strong>Vastu consultants in Chennai</strong> apply the foundational principles of Vastu Shastra—balancing the five elements (Earth, Water, Fire, Air, and Space)—seamlessly alongside contemporary architectural aesthetics and functional space planning.</p>
                            <p class="wow fadeInUp">We understand that modern families desire open-concept living, ample natural light, and clean spatial flow. Our <strong>residential Vastu planning</strong> approach rejects superstition and costly compromises. Instead, our team of in-house architects and civil engineers ensures your <strong>Vastu-compliant house plans</strong> satisfy traditional directional alignments while meeting modern municipal guidelines, structural load parameters, and contemporary lifestyle expectations.</p>

                            <!-- Service Scope Section Start -->
                            <h3 class="wow fadeInUp" style="margin-top: 40px; margin-bottom: 20px;">Comprehensive Scope of Vastu Planning Services</h3>
                            <p class="wow fadeInUp">Our specialized <strong>Vastu planning services</strong> cover all critical architectural, directional, and functional zones of your property:</p>
                            
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="col-md-6">
                                    <ul class="wow fadeInUp">
                                        <li><strong>Main Entrance Alignment (Simha Dwara):</strong> Determining auspicious entrance placements (positive padas) for East, North, West, and South-facing plots in Chennai.</li>
                                        <li><strong>Kitchen &amp; Fire Zone (Agni Corner):</strong> Positioning cooking countertops, hobs, and electrical distribution in the Southeast zone to promote health and vitality.</li>
                                        <li><strong>Master Bedroom &amp; Stability (Nirrithi):</strong> Locating the primary bedroom suite in the Southwest to foster grounded leadership, restful sleep, and family stability.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="wow fadeInUp" data-wow-delay="0.2s">
                                        <li><strong>Water Elements &amp; Sumps (Eshanya):</strong> Scientific positioning of underground rainwater storage sumps and borewells in the tranquil Northeast quadrant.</li>
                                        <li><strong>Staircase &amp; Heavy Load Zoning:</strong> Designing clockwise-rising staircases and overhead water tanks in the South and West sectors to maintain balance.</li>
                                        <li><strong>Vastu Audits for Existing Properties:</strong> Non-invasive remedial assessments for completed houses and apartments to enhance spatial energy flow.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Service Scope Section End -->

                            <!-- Key Features & Benefits Start -->
                            <div class="service-benefits-box" style="background: #f8fafc; border: 1px solid var(--divider-color); border-radius: 12px; padding: 30px; margin-bottom: 40px;">
                                <h3 class="wow fadeInUp" style="margin-bottom: 20px;">Key Advantages of Our Vastu Planning Approach</h3>
                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 20px;">
                                        <div style="display: flex; gap: 15px;">
                                            <div style="flex-shrink: 0; width: 42px; height: 42px; background: var(--primary-color); color: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa-solid fa-compass"></i>
                                            </div>
                                            <div>
                                                <h4 style="font-size: 18px; margin-bottom: 5px;">Scientific Elemental Balance</h4>
                                                <p style="font-size: 15px; margin: 0;">Harmonizing air circulation, solar energy angles, and magnetic orientations for healthy living.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 20px;">
                                        <div style="display: flex; gap: 15px;">
                                            <div style="flex-shrink: 0; width: 42px; height: 42px; background: var(--primary-color); color: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa-solid fa-pen-ruler"></i>
                                            </div>
                                            <div>
                                                <h4 style="font-size: 18px; margin-bottom: 5px;">Zero Aesthetic Compromise</h4>
                                                <p style="font-size: 15px; margin: 0;">Contemporary floor plans with open kitchens and expansive glass without violating core Vastu rules.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 20px;">
                                        <div style="display: flex; gap: 15px;">
                                            <div style="flex-shrink: 0; width: 42px; height: 42px; background: var(--primary-color); color: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa-solid fa-building-circle-check"></i>
                                            </div>
                                            <div>
                                                <h4 style="font-size: 18px; margin-bottom: 5px;">Structural Feasibility</h4>
                                                <p style="font-size: 15px; margin: 0;">Engineered by qualified civil professionals who ensure room layouts align with column grids and beams.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 20px;">
                                        <div style="display: flex; gap: 15px;">
                                            <div style="flex-shrink: 0; width: 42px; height: 42px; background: var(--primary-color); color: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa-solid fa-house-chimney-medical"></i>
                                            </div>
                                            <div>
                                                <h4 style="font-size: 18px; margin-bottom: 5px;">Non-Destructive Remedies</h4>
                                                <p style="font-size: 15px; margin: 0;">Practical corrections for existing apartments using elemental placements and subtle layout shifts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Key Features & Benefits End -->

                            <!-- Mid-Page In-Content CTA Start -->
                            <div class="service-mid-cta wow fadeInUp">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>Planning Your Next Construction Project?</h4>
                                        <p>Speak with our team to discuss your requirements and explore the right construction solution.</p>
                                    </div>
                                    <div class="col-md-5 text-md-end mt-3 mt-md-0" style="display: flex; gap: 10px; justify-content: flex-end; flex-wrap: wrap;">
                                        <a href="contact.php" class="btn-default">Get Free Consultation</a>
                                        <a href="tel:+919500036132" class="btn-default btn-highlighted"><i class="fa-solid fa-phone me-2"></i> Call Us Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mid-Page In-Content CTA End -->

                            <!-- Approach & Workflow Start -->
                            <h3 class="wow fadeInUp" style="margin-bottom: 20px;">Our 5-Stage Vastu Planning Methodology</h3>
                            <p class="wow fadeInUp">We apply a rigorous, structured methodology from plot analysis to architectural blueprint delivery:</p>

                            <div class="workflow-steps" style="margin-bottom: 40px;">
                                <div style="display: flex; gap: 20px; margin-bottom: 25px;" class="wow fadeInUp">
                                    <div style="flex-shrink: 0; width: 40px; height: 40px; background: var(--accent-color); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700;">1</div>
                                    <div>
                                        <h4 style="font-size: 18px; margin-bottom: 5px;">Plot Orientation &amp; Compass Survey</h4>
                                        <p style="margin: 0;">We measure cardinal angles, identify tilted plot axis deviations, and assess road frontage and surrounding topography.</p>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 20px; margin-bottom: 25px;" class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div style="flex-shrink: 0; width: 40px; height: 40px; background: var(--accent-color); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700;">2</div>
                                    <div>
                                        <h4 style="font-size: 18px; margin-bottom: 5px;">Vastu Purusha Mandala Grid Mapping</h4>
                                        <p style="margin: 0;">We superimpose the 9x9 or 8x8 energy grid over your plot dimensions to identify auspicious functional zones.</p>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 20px; margin-bottom: 25px;" class="wow fadeInUp" data-wow-delay="0.2s">
                                    <div style="flex-shrink: 0; width: 40px; height: 40px; background: var(--accent-color); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700;">3</div>
                                    <div>
                                        <h4 style="font-size: 18px; margin-bottom: 5px;">Zonal Room Allocation &amp; Energy Alignment</h4>
                                        <p style="margin: 0;">Master bedrooms, kitchen, puja space, water storage, and bathrooms are mapped to their respective elemental quadrants.</p>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 20px; margin-bottom: 25px;" class="wow fadeInUp" data-wow-delay="0.3s">
                                    <div style="flex-shrink: 0; width: 40px; height: 40px; background: var(--accent-color); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700;">4</div>
                                    <div>
                                        <h4 style="font-size: 18px; margin-bottom: 5px;">Architectural Harmonization</h4>
                                        <p style="margin: 0;">Our architects weave these directional requirements into functional 2D floor plans with ample natural ventilation and light.</p>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 20px;" class="wow fadeInUp" data-wow-delay="0.4s">
                                    <div style="flex-shrink: 0; width: 40px; height: 40px; background: var(--accent-color); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700;">5</div>
                                    <div>
                                        <h4 style="font-size: 18px; margin-bottom: 5px;">Vastu-Certified Blueprint Handover</h4>
                                        <p style="margin: 0;">Delivery of certified Vastu drawings ready for municipal submission and on-site civil construction.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Approach & Workflow End -->

                            <!-- Client Preparation Checklist Start -->
                            <div class="service-preparation-guide" style="background: #f8fafc; border-left: 4px solid var(--accent-color); border: 1px solid var(--divider-color); border-left-width: 4px; border-radius: 8px; padding: 25px 25px 20px; margin-bottom: 40px;">
                                <h3 class="wow fadeInUp" style="font-size: 20px; margin-bottom: 12px; color: var(--primary-color);">What Property Owners Should Prepare for a Vastu Assessment</h3>
                                <p class="wow fadeInUp" style="font-size: 15px; margin-bottom: 15px;">For an authentic, engineering-based Vastu assessment in Chennai, having these property details ready ensures accurate recommendations:</p>
                                <ul class="wow fadeInUp" style="font-size: 15px; line-height: 1.8; margin-bottom: 0; padding-left: 20px;">
                                    <li><strong>Precise Cardinal Orientation:</strong> Verified North direction checked via magnetic compass or surveyor report, noting exact degree deviations.</li>
                                    <li><strong>Site Survey &amp; Road Positions:</strong> Plot boundary sketch indicating approach roads, corner positions, and adjoining open spaces or buildings.</li>
                                    <li><strong>Sub-Surface Utility Plan:</strong> Proposed or existing locations of borewell, underground water sump, septic tank, and drainage outlet connections.</li>
                                    <li><strong>Functional Room Priorities:</strong> List of essential spaces including master bedroom, kitchen, pooja room, and staircase placement preferences.</li>
                                </ul>
                            </div>
                            <!-- Client Preparation Checklist End -->

                            <!-- Why Choose Sharp Associates Start -->
                            <div class="why-choose-content service-single-why-choose" style="margin-bottom: 40px;">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Why Choose Sharp Associates</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">A Sensible, Engineering-Driven <span>Approach to Vastu</span></h2>
                                </div>
                                <p class="wow fadeInUp">At Sharp Associates, we treat Vastu Shastra as the traditional science of architectural orientation, solar geometry, and natural ventilation. Because our team consists of qualified civil engineers and architects, we never propose unbuildable layouts or advocate costly demolitions. We deliver balanced, elegant homes that bring peace of mind and long-term functional comfort.</p>
                            </div>
                            <!-- Why Choose Sharp Associates End -->

                            <!-- Relevant Projects Highlight Start -->
                            <div class="relevant-projects" style="margin-bottom: 50px;">
                                <h3 class="wow fadeInUp" style="margin-bottom: 20px;">Featured Vastu-Compliant Villa Projects</h3>
                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 20px;">
                                        <div style="border: 1px solid var(--divider-color); border-radius: 10px; overflow: hidden;">
                                            <img src="images/resources/sharp-3.webp" alt="Turnkey Vastu Compliant Residential Villa in Chennai" width="600" height="400" loading="lazy" style="width: 100%; aspect-ratio: 16/10; object-fit: cover;">
                                            <div style="padding: 20px;">
                                                <h4 style="font-size: 18px; margin-bottom: 5px;">Turnkey Residential Villa</h4>
                                                <p style="font-size: 14px; color: #666; margin-bottom: 10px;">100% Vastu-compliant independent luxury villa designed with modern open-concept aesthetics.</p>
                                                <a href="our-work.php" style="color: var(--primary-color); font-weight: 600; text-decoration: underline;">View Project Portfolio &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 20px;">
                                        <div style="border: 1px solid var(--divider-color); border-radius: 10px; overflow: hidden;">
                                            <img src="images/resources/sharp-13.webp" alt="Custom Vastu Compliant Living Spaces Designed in Chennai" width="600" height="400" loading="lazy" decoding="async" style="width: 100%; aspect-ratio: 16/10; object-fit: cover;">
                                            <div style="padding: 20px;">
                                                <h4 style="font-size: 18px; margin-bottom: 5px;">Custom Residential Residence</h4>
                                                <p style="font-size: 14px; color: #666; margin-bottom: 10px;">Balanced spatial zoning featuring northeast natural water courtyards and southeast kitchen.</p>
                                                <a href="our-work.php" style="color: var(--primary-color); font-weight: 600; text-decoration: underline;">View Project Portfolio &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Relevant Projects Highlight End -->

                            <!-- FAQ Section Start -->
                            <div class="service-faqs" style="margin-bottom: 50px;">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Queries on <span>Vastu Planning Services in Chennai</span></h2>
                                </div>
                                <div class="faq-accordion" id="accordionVastu">
                                    <!-- FAQ 1 -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="headingVastuOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVastuOne" aria-expanded="true" aria-controls="collapseVastuOne">
                                                Can modern contemporary home designs be 100% Vastu-compliant?
                                            </button>
                                        </h2>
                                        <div id="collapseVastuOne" class="accordion-collapse collapse show" aria-labelledby="headingVastuOne" data-bs-parent="#accordionVastu">
                                            <div class="accordion-body">
                                                <p>Absolutely. Vastu Shastra governs primary directional orientations (where the kitchen, master bedroom, puja room, and water elements are placed). The interior aesthetic—such as minimalist styling, modern false ceilings, and expansive glass windows—can be contemporary without violating any core Vastu principles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 2 -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                        <h2 class="accordion-header" id="headingVastuTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVastuTwo" aria-expanded="false" aria-controls="collapseVastuTwo">
                                                Are South-facing or West-facing plots in Chennai considered good for construction?
                                            </button>
                                        </h2>
                                        <div id="collapseVastuTwo" class="accordion-collapse collapse" aria-labelledby="headingVastuTwo" data-bs-parent="#accordionVastu">
                                            <div class="accordion-body">
                                                <p>Yes. Contrary to popular misconception, South and West-facing plots can be exceptionally prosperous when planned correctly. The key lies in placing the main entrance in the auspicious fourth pada (for South) or third/fourth pada (for West), and ensuring heavy structural loads remain anchored in the Southwest.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 3 -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="headingVastuThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVastuThree" aria-expanded="false" aria-controls="collapseVastuThree">
                                                Where should underground water sumps and septic tanks be placed?
                                            </button>
                                        </h2>
                                        <div id="collapseVastuThree" class="accordion-collapse collapse" aria-labelledby="headingVastuThree" data-bs-parent="#accordionVastu">
                                            <div class="accordion-body">
                                                <p>Underground water sumps and borewells should strictly be situated in the Northeast (Eshanya) quadrant to invite positive energy. Septic tanks, conversely, must never be placed in the Northeast; they should ideally be positioned in the Northwest or middle-West zones.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 4 -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                        <h2 class="accordion-header" id="headingVastuFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVastuFour" aria-expanded="false" aria-controls="collapseVastuFour">
                                                Can you audit and correct an existing home without structural demolition?
                                            </button>
                                        </h2>
                                        <div id="collapseVastuFour" class="accordion-collapse collapse" aria-labelledby="headingVastuFour" data-bs-parent="#accordionVastu">
                                            <div class="accordion-body">
                                                <p>Yes. We conduct non-destructive Vastu audits for completed villas and apartments in Chennai. In most cases, balance can be restored through functional rearrangement of room usage, door adjustments, mirror placements, and elemental color corrections without altering load-bearing columns or walls.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Section End -->

                            <!-- Bottom CTA Banner Start -->
                            <div class="service-cta-banner" style="background: linear-gradient(135deg, var(--primary-color) 0%, #0d3b59 100%); color: #fff; padding: 40px; border-radius: 12px; text-align: center;">
                                <h3 style="color: #fff; font-size: 28px; margin-bottom: 15px;">Plan Your Vastu-Compliant Home with Confidence</h3>
                                <p style="color: #e2e8f0; max-width: 650px; margin: 0 auto 25px; font-size: 16px;">Consult our experienced Vastu planning specialists in Chennai for a thorough plot review and bespoke architectural floor plans.</p>
                                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                                    <a href="contact.php" class="btn-default btn-highlighted">Request a Free Consultation</a>
                                    <a href="tel:+919500036132" class="btn-default btn-outline"><i class="fa-solid fa-phone me-2"></i> Call Us Now</a>
                                </div>
                            </div>
                            <!-- Bottom CTA Banner End -->

                        </div>
                        <!-- Service Entry End -->
                    </div>
                </div>
                <!-- Service Content End -->
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

<?php include "footer.php"; ?>
