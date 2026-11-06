<?php
$page_title = "Construction Trends & Civil Engineering Blog | Sharp Associates Chennai";
$page_description = "Explore expert construction insights, smart building technology, sustainable civil engineering, and architecture guides from Sharp Associates in Chennai.";
$canonical_url = "https://sharpassociates.in/blog.php";
$og_image = "https://sharpassociates.in/images/resources/sharp-1.png";
$og_type = "website";

$schema_data = [
    "@context" => "https://schema.org",
    "@type" => "Blog",
    "name" => "Sharp Associates Construction Blog",
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
                "name" => "Blog",
                "item" => "https://sharpassociates.in/blog.php"
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
				<div class="page-header-box">
					<h1 class="text-anime-style-2" data-cursor="-opaque">Construction Insights & Building Trends Blog</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Header End -->

<!-- Our Blog Section Start -->
<div class="page-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="post-item wow fadeInUp">
					<div class="post-featured-image">
						<figure>
							<a href="blog-1.php" class="image-anime" data-cursor-text="View">
								<img src="images/resources/sharp-1.png" alt="Building a better tomorrow with smarter construction practices">
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
								<img src="images/resources/sharp-6.png" alt="Today's smart buildings">
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
								<img src="images/resources/sharp-11.jpg" alt="Building for tomorrow sustainable construction">
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
		</div>
	</div>
</div>
<!-- Our Blog Section End -->

<?php include "footer.php"?>
