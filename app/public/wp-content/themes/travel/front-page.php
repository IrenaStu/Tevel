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
 <!-- section 5 -->
 <section class="Home-section-5">
<h2>Best Packages For You</h2>
<div class="buttons-group">

    
 <a href="#" class="button-package">Hot Deals</a>
  </div>
  <div class="posters">
    
<div class="indonesia">
    <img src="<?php echo get_template_directory_uri() . '/assets/image/1.png'; ?>" alt="" class="card-mountains">
    <div class="indonesia-description">
        <div class="price">
            <h3>3 Days, 2 Nights</h3>
            <h4>$500 / Person</h4>
        </div>
        <div class="explore-p">
            <p>Explore the Beauty of the island for 3 days and 2 nights with our travel agency</p>
        </div>
        <div class="know-more-flex">
            <div class="little-img"> 
              <img src="<?php echo get_template_directory_uri() . '/assets/image/pointer.png'; ?>" alt="">
              </div>
              <div class="span-more">
             <h3 >Indonesia</h3>
            <h5 >Know More</h5>
          </div>    
        </div>
    </div>
</div>
            </div>
</section>

<?php

get_footer();
  ?>
</main>


