<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area journal">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<article class="post-container">
					<?php get_template_part('template-parts/content'); ?>
					<a class="inhabitent-button" href="<?= get_permalink(); ?>">READ MORE <i class="fas fa-long-arrow-alt-right"></i></a>
				</article>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>