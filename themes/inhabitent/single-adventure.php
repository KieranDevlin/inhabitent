<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="about-content-area single-adventure-area">

	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<div class="adventure-meta">
				<h1 class="adventure-title"><?php the_title(); ?></h1>
				<p class="adventure-author">BY <?php the_author(); ?></p>

			</div>
			<p> <?php get_template_part('template-parts/content', 'page'); ?></p>
			<div class="social-container">
				<a class="inhabitent-button " href="#"><i class="fab fa-facebook-f icon-styles"></i>LIKE</a>
				<a class="inhabitent-button " href="#"><i class="fab fa-twitter icon-styles"></i>TWEET</a>
				<a class="inhabitent-button " href="#"><i class="fab fa-pinterest icon-styles"></i>PIN</a>

			</div>
		<?php endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>