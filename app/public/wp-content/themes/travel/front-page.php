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
</main>