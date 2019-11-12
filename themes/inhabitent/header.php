<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="header-items">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text">
						<p class="site-description"><?php bloginfo('description'); ?></p>
					</h1>
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img class="home-logo" src="<?= get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" ;<?php bloginfo('name'); ?> />
					</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					<button class="search-button"><i id="search" class="fas fa-search search-image fa-2x"></i> </button>
					<div class="search-text-container" id="search-text-container">
						<?= get_search_form(); ?>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">