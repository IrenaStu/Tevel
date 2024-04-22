<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'travel' ); ?></a>

	<header id="masthead" class="site-header travel-header">
	<div class="container">
		<div class="header-content">
		<div class="site-branding">
		
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->
		<div class="navigation-items">
        <div class="navigation-travel">
		<nav id="site-navigation" class="main-navigation travel-nav">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'travel' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'header-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>
		<div class="search-icons">
			<a href="" > <img src="<?php echo get_template_directory_uri() . '/assets/image/star.png'; ?>" alt=""></a>
			<a href=""> <img src="<?php echo get_template_directory_uri() . '/assets/imagegit/search.png'; ?>" alt=""></a>
		</div>
		</div>
		</div>
		</div>
	</header><!-- #masthead -->
