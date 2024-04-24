<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	<footer id="colophon" class="site-footer">
		
			<div class="footer-main">

				<div class="footer-flex">
					<div class="footer-text">
						<?php
						$footer_text_text = get_field('footer_text_text');
						?>
						<div class="footer-logo-text-div">
							<h2 class="footer-logo-text">Travel <br> <span class ="footer-logo-text-span"> Goo </span> </h2>
						</div>
						<div class="footer-text-text-div">
							<h3 class="footer-text-text"><?php echo esc_html($footer_text_text); ?></h3>
						</div>
					</div>
					
					<div class="footer-nav-flex">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
								'menu_class'     => 'footer-menu',
							)
						);
				
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'third-menu',
								'menu_class'     => 'footer-menu',
							)
						);
				
						wp_nav_menu(
							array(
								'theme_location' => 'menu-4',
								'menu_id'        => 'fourth-menu',
								'menu_class'     => 'footer-menu',
							)
						);
						?>
							
					</div>
					<div class="footer-apps">
						<div class="social-links">
							<?php
							$social_links = get_posts(array("post_type" => "social_links"));
							foreach ($social_links as $social_link) :
								$social_url = get_field('social_url', $social_link->ID);
								$social_image = get_field('social_image', $social_link->ID);
							?>
								<a href="<?php echo esc_url($social_url); ?>">
									<img src="<?php echo esc_url($social_image['url']); ?>" alt="<?php echo esc_attr($social_link->post_title); ?>">
								</a>
							<?php
							endforeach;
							?>
						</div>
						<p class = "footer-discover">Discover our app</p>
						<div class="download-links">
							<?php
							$download_links = get_posts(array("post_type" => "download_links"));
							foreach ($download_links as $download_link) :
								$download_url = get_field('download_url', $download_link->ID);
								$download_image = get_field('download_image', $download_link->ID);
							?>
								<a href="<?php echo esc_url($download_url); ?>">
									<img src="<?php echo esc_url($download_image['url']); ?>" alt="<?php echo $download_link->post_title; ?>">
								</a>
							<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-end-flex">
				<div class="footer-end">
					<p class="footer-end-text">All rights reserved@travelgoo.co</p>
				</div>
			</div>

		</div>
	 
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>