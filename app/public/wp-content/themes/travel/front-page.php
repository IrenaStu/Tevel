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
$best_services_id = $third_section['best_servises'];
// third section

$green_button=get_field('fifth_section_buton');




// echo '<pre>';
// print_r($buttons);
// echo '</pre>';
//  get_header();
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


				
	


<?php

get_footer();
  ?>
</main>


