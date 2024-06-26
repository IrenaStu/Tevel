<?php

$first_section=get_field('first_section');
$mountain=$first_section['mountain'];
$imagination_title=$first_section['imagination_title'];
$imagination_text=$first_section['imagination_text'];
$imagination_button=$first_section['imagination_button'];
// first section //

$second_section = get_field('second_section');
$second_section_title = $second_section['title'];
$services_id = $second_section['services'];
// second section

$third_section = get_field('third_section');
$map = isset($third_section['map']) ? $third_section['map'] : null;
$third_section_title = $third_section['title'];
$third_section_text = $third_section['text'];
$best_services_id = $third_section['best_services'];
// third section

$green_button=get_field('fifth_section_buton');

// start seventh section


$seventh_section_impressions_title = '';
$seventh_section_impressions_first_cover = '';
$seventh_section_impressions_second_cover = '';
$seventh_section_impressions_third_cover = '';
$impressions_covers = array();
$impressions_id = '';

if (function_exists('get_field') && get_field('seventh_section')) {
    $seventh_section = get_field('seventh_section');

    if (isset($seventh_section['impressions_title'])) {
        $seventh_section_impressions_title = $seventh_section['impressions_title'];
    }
    if (isset($seventh_section['impressions_first_cover'])) {
        $seventh_section_impressions_first_cover = $seventh_section['impressions_first_cover'];
    }
    if (isset($seventh_section['impressions_second_cover'])) {
        $seventh_section_impressions_second_cover = $seventh_section['impressions_second_cover'];
    }
    if (isset($seventh_section['impressions_third_cover'])) {
        $seventh_section_impressions_third_cover = $seventh_section['impressions_third_cover'];
    }


    $impressions_covers = array(
        'impressions-first-cover' => $seventh_section_impressions_first_cover,
        'impressions-second-cover' => $seventh_section_impressions_second_cover,
        'impressions-third-cover' => $seventh_section_impressions_third_cover,
    );


    if (isset($seventh_section['impressions'])) {
        $impressions_id = $seventh_section['impressions'];
    }
} 
    // seventh section


// echo '<pre>';
// print_r($buttons);
// echo '</pre>';
 get_header();
  ?>

<main class="home-page">
    <!-- first section -->
    <section class="home-section-1">
    <?php if($mountain): ?>
      <img src="<?php echo $mountain['url'] ?>" alt="">
      <?php endif; ?>
      <div class="imagination-content">
        <h1 class="imagination-title"><?php echo $imagination_title; ?></h1>
        <p class="imagination-text"><?php echo $imagination_text; ?></p>
        <?php if (isset($imagination_button['url'])): ?>
        <a href="<?php echo $imagination_button['url'] ?>" class="imagination-button"><?php echo $imagination_button['title'] ?></a>
        <?php endif; ?>
      </div>   
    </section>
  
   <!-- second section -->
<section class="home-section-2">
    <div class="title">
        <h2 class="section-title"><?php echo $second_section_title ?></h2>
    </div>
    <div class="container">
        <div class="services-container">
            <?php
            // Check if services ID is not empty
            if (!empty($services_id)) {
                // Loop through each service ID
                foreach ($services_id as $service_id) {
                    $service_post = get_post($service_id);
                    if ($service_post) {
                        ?>
                        <div class="our-services">
                            <div class="our-services-img">
                                <a href="<?php echo get_permalink($service_post); ?>">
                                    <?php echo get_the_post_thumbnail($service_post, 'thumbnail'); ?>
                                </a>
                            </div>
                            <div class="our-services-content">
                                <h3 class="services-title"><?php echo get_the_title($service_post); ?></h3>
                                <p class="services-text"><?php echo get_the_excerpt($service_post); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- end of the second section -->

<!-- third section -->
<section class="home-section-3">
    <?php if ($map && isset($map['url'])): ?>
        <img src="<?php echo esc_url($map['url']); ?>" alt="Map image" class="map-image">
    <?php endif; ?>
    
        <div class="third-section-description">
            <div class="third-section-title">
                <h2 class="section-third-title"><?php echo $third_section_title ?></h2>
            </div>
            <div class="third-section-text">
                <p class="section-text"><?php echo $third_section_text ?></p>
            </div>
        </div>
        <div class="container">
            <div class="best-services-container">
                <?php
                // Check if services ID is not empty
                if (!empty($best_services_id)) {

                    $index = 1; 

                    // Loop through each service
                    foreach ($best_services_id as $best_service_id) {
                        $best_service_post = get_post($best_service_id);
                        if ($best_service_post) {
                            ?>
                            <div class="our-best-services">
                                <div class="our-best-services-img">
                                    <a href="<?php echo get_permalink($best_service_post); ?>">
                                        <?php echo get_the_post_thumbnail($best_service_post, 'thumbnail'); ?>
                                    </a>
                                </div>
                                <div class="our-best-services-content">
                                    <h3 class="bestservices-title"><?php echo get_the_title($best_service_post); ?></h3>
                                    <!-- Add a unique class based on the index -->
                                    <p class="best-services-text best-services-text-<?php echo $index; ?>">
                                        <?php echo get_the_excerpt($best_service_post); ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                                $index++;
                        }
                    }
                }
                ?>
            </div>
        </div>
</section>
<!-- end of the third section -->
  
  <!-- Tornikes_section -->
<div class="tornikes_section">
	<div class="tony_container">

		<div class="tornike_title">
			<div class="second-title-container">
			<?php
				$distination_title = get_field('distination_title');
								
				?>
				<h1><?php echo esc_html($distination_title); ?></h1>
			</div>
		</div>

		<div class="tornikes_section_2">
		<div class="containerbig">
			<div class="containercards">
				<div class="worldmap">

						<img class = "worldmap-div" src="<?php echo get_template_directory_uri() . "/assets/image/world_map.png" ?>" alt="">
					
					<div class="location-1">
						<img class="location-1-1"  src=" <?php echo get_template_directory_uri() . "/assets/image/location.png" ?>" alt="">
					</div>
					<div class="location-2">
						<img class="location-2-2"  src="<?php echo get_template_directory_uri() . "/assets/image/location.png" ?>" alt="">
					</div>
					<div class="location-3">
						<img class="location-3-3"  src=" <?php echo get_template_directory_uri() . "/assets/image/location.png" ?>" alt="">
					</div>
				</div>
				<div class="imgcontainer">
									<?php
									$distinations = get_posts(array("post_type" => "distinations"));
									$distination_title = get_field('distination_title');
									foreach ($distinations as $distination) :
										$distination_img = get_field('distination_img', $distination->ID);
										$distination_text_1 = get_field('distination_text_1', $distination->ID);
										$distination_text_2 = get_field('distination_text_2', $distination->ID);
									?>
					<div class="smallcontainer">
						<div class="small-img">
						<img src="<?php echo esc_url($distination_img['url']); ?>" alt="<?php echo esc_attr($distination->post_title); ?>">
						</div>
						<div class="countryname">
							<h2>
								<?php echo esc_html($distination_text_1); ?>
							</h2>
						</div>
						<div class="toko_description">
							<h2>
								<?php echo esc_html($distination_text_2); ?>
							</h2>
						</div>
						<div class="arrowing">
							<img src="<?php echo get_template_directory_uri() . "/assets/image/vector.png" ?>" alt="">
						</div>
					</div>
          	<?php
									endforeach;
									?>
				</div>
			</div>
		
		</div>
		</div>
	</div>
	</div>
		
 <!-- section 5 -->
 <section class="Home-section-5">
<h2 class="section5-title">Best Packages For You</h2>

<div class="buttons-group">
<?php
	$buttons = get_posts(array("post_type" => "button",
                              "posts_per_page" => -1,));
     $buttons = array_reverse($buttons);
	foreach ($buttons as $button) :
	$button_link = get_field('button_link', $button->ID);
    $button_name = get_field('button_name', $button->ID);

?>
 <a href="<?php echo $button_link; ?>" class="button-package"><?php echo esc_html($button_name); ?></a>
    <?php
        endforeach;
    ?>
  </div>
  
  <div class="posters">
  <?php
  $packages = get_posts(array("post_type" => "package"));
                                    
      foreach ($packages as $package) :
 $package_img = get_field('package_img', $package->ID);
 $package_days = get_field('packages_days', $package->ID);
 $package_value = get_field('package_value', $package->ID);
 $package_desc = get_field('package_desc', $package->ID);
 $package_loc_img = get_field('package_loc_img', $package->ID);
 $package_loc_name = get_field('package_loc_name', $package->ID);
 $package_button = get_field('package_button', $package->ID);
 $knowmore_link = get_field('knowmore_link', $package->ID);
 ?>
    
  
<div class="indonesia">
<img class="image-indonesia" src="<?php echo esc_url($package_img['url']); ?>"  alt=" ">
    <div class="indonesia-description">
        <div class="price">
            <h3><?php echo $package_days; ?></h3>
            <h4><?php echo $package_value; ?></h4>
        </div>
        <div class="explore-p">
            <p><?php echo $package_desc; ?></p>
        </div>
        <div class="know-more-flex">
            <div class="little-img"> 
                <img src="<?php echo esc_url($package_loc_img['url']); ?>" alt="">
              </div>
              <div class="span-more">
             <h3 ><?php echo $package_loc_name; ?></h3>
            <h5 ><?php echo $knowmore_link; ?></h5>
          </div>    
        </div>
    </div>
</div>
    <?php
endforeach;
?>
   </div>
            <a href="<?php echo $contact_button['url']; ?>" class="button-green">Discover More</a>
</section>
<!-- Erekles Section -->
<div class="tony_container">
			<div class="book_trip_main">
				<div class="book_trip_poster_front">
								<?php
									$trip_poster_card_next_book = get_field('trip_poster_card_next_book');
								?>
									<img src="<?php echo esc_url($trip_poster_card_next_book['url']); ?>" alt="">
						</div>
				<div class="book_trip_text">

					<div class="book_trip_title">
						<?php 
							$book_trip_title = get_field('book_trip_title');
						?>
							<p>
								<?php echo esc_html($book_trip_title); ?>
                            </p>
						
					</div>
					<div class="book_trip_text_text">
						<?php 
							$book_trip_text = get_field('book_trip_text');
						?>
							<p>
								<?php echo esc_html($book_trip_text); ?>
                            </p>
					</div>
				</div>
				<div class="book_trip_cont">
					<div class="book_trip_desc">
						<?php
							$trip_card = get_posts(array("post_type" => "trip_card"));
							foreach ($trip_card as $trip_cardi) :
								$trip_card_img = get_field('trip_card_img', $trip_cardi->ID);
								$trip_card_title = get_field('trip_card_title', $trip_cardi->ID);
								$trip_card_text = get_field('trip_card_text', $trip_cardi->ID);
						?>
						<div class="book_trip_desc_card">
							<div class="book_trip_desc_card_img">
								<img src="<?php echo esc_url($trip_card_img['url']); ?>" alt="">	
							</div>
							<div class="book_trip_desc_card_text">
								<div class="book_trip_desc_card_text_title">
									<p>
										<?php echo esc_html($trip_card_title); ?>
                            </p> 
								</div>
								<div class="book_trip_desc_card_text_text">
									<p>
										<?php echo esc_html($trip_card_text); ?>
                            </p> 
								</div>
							</div>
						</div>
						<?php
							endforeach;
						?> 
					</div>
					<div class="book_trip_poster">
						
						<div class="book_trip_poster_backg">
							<img class="book_back" src="<?php echo get_template_directory_uri() . "/assets/image/book_back_2.png" ?>" alt="">
						</div>
						<div class="book_trip_poster_card">
							<div class="book_trip_poster_card_flex">

								<div class="book_trip_poster_card_img">
									<?php
									$trip_poster_card_img = get_field('trip_poster_card_img');
									?>
									<img src="<?php echo esc_url($trip_poster_card_img['url']); ?>" alt="">
	
								</div>
								<div class="book_trip_poster_card_title">
									<?php
									$trip_poster_card_title = get_field('trip_poster_card_title');
									?>
										<p>
											<?php echo esc_html($trip_poster_card_title); ?>
                        </p> 
								</div>
								<div class="book_trip_poster_card_desc">
									<?php
										$trip_poster_card_desc = get_field('trip_poster_card_desc');
									?>
										<p>
											<?php echo esc_html($trip_poster_card_desc); ?>
                        </p> 
								</div>
								<div class="book_trip_poster_card_mini_images">
									<?php
										$trip_poster_card_mini_img_1 = get_field('trip_poster_card_mini_img_1');
										$trip_poster_card_mini_img_2 = get_field('trip_poster_card_mini_img_2');
										$trip_poster_card_mini_img_3 = get_field('trip_poster_card_mini_img_3');
									?>
									<img src="<?php echo esc_url($trip_poster_card_mini_img_1['url']); ?>" alt="">
									<img src="<?php echo esc_url($trip_poster_card_mini_img_2['url']); ?>" alt="">
									<img src="<?php echo esc_url($trip_poster_card_mini_img_3['url']); ?>" alt="">
								</div>
								<div class="book_trip_poster_card_booking">
									<div class="book_trip_poster_card_booking_flex">

										<img class="book_trip_poster_card_booking_building" src="<?php echo get_template_directory_uri() . "/assets/image/building.png" ?>" alt="">
	
										<?php
											$trip_poster_card_book = get_field('trip_poster_card_book');
										?>
										<p>
											<?php echo esc_html($trip_poster_card_book); ?>
										<p>
									</div>

									<img class="book_trip_poster_card_booking_heart" src="<?php echo get_template_directory_uri() . "/assets/image/heart.png" ?>" alt="">

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- end erekles section -->

	<section class="home-section-7">
    <div class="title">
        <h2 class="seventh-title"><?php echo $seventh_section_impressions_title ?></h2>
    </div>
    <div class="cover-images">
        <?php
        foreach ($impressions_covers as $class => $impressions_cover_id) {
            if ($impressions_cover_id) {
                echo wp_get_attachment_image($impressions_cover_id, 'full', false, array('class' => $class));
            }
        }
        ?>
    </div>
    <div class="container">
        <div class="impressions-container">
            <?php
            if (!empty($impressions_id)) {
                foreach ($impressions_id as $impression_id) {
                    $impression_post = get_post($impression_id);
                    if ($impression_post) {
                        ?>
                        <div class="all-impressions">
                            <div class="impressions-img">
                                <a href="<?php echo get_permalink($impression_post); ?>">
                                    <?php echo get_the_post_thumbnail($impression_post, 'thumbnail'); ?>
                                </a>
                            </div>
                            <div class="impressions-full-content">
                                <p class="impressions-text"><?php echo get_the_excerpt($impression_post); ?></p>
                                <h3 class="impressions-title"><?php echo get_the_title($impression_post); ?></h3>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- end of seventh section -->

<!-- contact -->
<div class="tony_container">
	<!-- <div class="contact_position"> -->

		<div class="contact-from">
			<div class="contact-flex">
				
				<div class="contact-form">
					
					
							<?php
							echo do_shortcode('[contact-form-7 id="06ac14c" title="Contact form 1" html_class="portfolio-contact-from"]')
							?>
							<img class="arrow" src="<?php echo get_template_directory_uri() . "/assets/image/arrow.png" ?>" alt="">
							<img class="up-lines" src="<?php echo get_template_directory_uri() . "/assets/image/up-lines.png" ?>" alt="">
							<img class="down-lines" src="<?php echo get_template_directory_uri() . "/assets/image/down-lines.png" ?>" alt="">
							<img class="pluses" src="<?php echo get_template_directory_uri() . "/assets/image/pluses.png" ?>" alt="">
						

				</div>
			</div>
		</div>
		
	<!-- </div> -->
	</div>

<?php

get_footer();
  ?>
</main>


