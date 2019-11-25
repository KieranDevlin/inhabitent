<?php

/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="product-page-area" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="product-single-image">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('full'); ?>
		<?php endif; ?>


	</header><!-- .entry-header -->

	<div class="product-content">
		<?php the_title('<h1 class="product-title">', '</h1>'); ?>
		<h2 class="product-price"> $<?php the_field('price'); ?>.00</h2>

		<?php the_content(); ?>

		<div class="social-container">
			<a class="inhabitent-button " href="#"><i class="fab fa-facebook-f icon-styles"></i>LIKE</a>
			<a class="inhabitent-button " href="#"><i class="fab fa-twitter icon-styles"></i>TWEET</a>
			<a class="inhabitent-button " href="#"><i class="fab fa-pinterest icon-styles"></i>PIN</a>

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->