<?php

/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('full'); ?>
		<?php endif; ?>

		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
		<div class="social-container">
			<a class="inhabitent-button " href="#"><i class="fab fa-facebook-f icon-styles"></i>LIKE</a>
			<a class="inhabitent-button " href="#"><i class="fab fa-twitter icon-styles"></i>TWEET</a>
			<a class="inhabitent-button " href="#"><i class="fab fa-pinterest icon-styles"></i>PIN</a>

		</div>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->