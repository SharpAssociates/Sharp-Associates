<?php
$page_title = "Construction Projects & Architecture Portfolio | Sharp Associates Chennai";
$page_description = "Browse completed residential and commercial construction projects in Chennai by Sharp Associates. View our architectural design and civil building gallery.";
$canonical_url = "https://sharpassociates.in/our-work.php";
$og_image = "https://sharpassociates.in/images/resources/sharp-1.png";
$og_type = "website";

$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "CollectionPage",
    "name" => "Our Works & Project Gallery",
    "description" => $page_description,
    "url" => $canonical_url,
    "breadcrumb" => [
        "@type" => "BreadcrumbList",
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => "https://sharpassociates.in/"
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Our Works",
                "item" => "https://sharpassociates.in/our-work.php"
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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Our Construction & Architectural Projects in Chennai</h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Photo Gallery Section Start -->
	<div class="page-gallery">
		<div class="container">
			<!-- gallery section start -->
			<div class="row gallery-items page-gallery-box">
                <?php
                    $resourceImages = [
                        'sharp-1.png',
                        'sharp-2.png',
                        'sharp-3.png',
                        'sharp-4.png',
                        'sharp-5.png',
                        'sharp-6.png',
                        'sharp-7.png',
                        'sharp-8.png',
                        'sharp-9.png',
                        'sharp-10.png',
                        'sharp-11.jpg',
                        'sharp-13.jpg',
                        'sharp-14.jpg',
                        'sharp-15.jpg',
                         'sharp-16.jpg',
                        'sharp-17.jpg',
                        

                    ];

                    foreach ($resourceImages as $index => $image):
                        $delay = min($index * 0.1, 0.6);
                        $imagePath = 'images/resources/' . $image;
                ?>
                <div class="col-lg-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s" data-cursor-text="View">
                        <a href="<?php echo $imagePath; ?>" aria-label="View Sharp Associates construction project <?php echo $index + 1; ?>">
                            <figure class="image-anime">
                                <img src="<?php echo $imagePath; ?>" alt="Sharp Associates construction and architecture project <?php echo $index + 1; ?> in Chennai">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <?php endforeach; ?>
			</div>
			<!-- gallery section end -->
		</div>
	</div>
	<!-- Photo Gallery Section End -->


    <?php include "footer.php"?>
