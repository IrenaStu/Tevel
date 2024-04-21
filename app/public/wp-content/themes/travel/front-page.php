<?php

$first_section=get_field('first_section');
$mountain=$first_section['mountain'];
$imagination_title=$first_section['imagination_title'];
$imagination_text=$first_section['imagination_text'];
$imagination_button=$first_section['imagination_button'];
// first section //
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
  
</main>