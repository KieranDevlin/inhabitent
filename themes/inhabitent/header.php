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

	<!-- FAVICON -->
	<link rel="icon" href="<?= get_stylesheet_directory_uri(); ?>/images/favicon.ico">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="header-items">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text site-description">
						<?php bloginfo('description'); ?>
					</h1>
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img id="home-logo" class="home-logo" src="<?= get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt="<?php bloginfo('name'); ?> " />
					</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					<button aria-label="Search" class="search-button"><i class="fas fa-search search-image fa-2x"></i> </button>
					<div class="search-text-container">
						<?= get_search_form(); ?>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
		<?php // check if the page has a page Thumbnail assigned to it.
		if (has_post_thumbnail()) { ?>

			<?php if (is_page('front-page')) { ?>

				<div class=" page-feature-image header-feature-image" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5)), url(<?= get_the_post_thumbnail_url(); ?>);">
					<img class="inhabitent-text-logo" src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" alt="<?php echo $term->name; ?>" />
				</div>
			<?php } elseif (is_page()) { ?>

				<div class="page-feature-image header-feature-image" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5)), url(<?= get_the_post_thumbnail_url(); ?>);">
					<h1 class="page-feature-image-title"><?php the_title(); ?></h1>
				</div>
			<?php } elseif (is_singular('adventure')) { ?>

				<div class="page-feature-image header-feature-image" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.5)), url(<?= get_the_post_thumbnail_url(); ?>);">
				</div>
		<?php }
		} ?>


		<div id="content" class="site-content">