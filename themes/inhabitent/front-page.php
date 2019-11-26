<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="front-page-content-area">

	<main id="main" class="site-main" role="main">

		<!-- shop loop -->

		<section class="product-info container">
			<h2 class="front-page-title">Shop Stuff</h2>
			<?php
			$terms = get_terms(array(
				'taxonomy' => 'product_type',
				'hide_empty' => 0,
			));
			if (!empty($terms) && !is_wp_error($terms)) :
				?>
				<div class="product-type-blocks">
					<?php foreach ($terms as $term) : ?>
						<div class="product-type-block-wrapper">
							<img class="product-image" src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
							<p><?php echo $term->description; ?></p>
							<p><a href="<?php echo get_term_link($term); ?>" class="inhabitent-button product-button"><?php echo $term->name; ?> Stuff</a></p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</section>


		<!-- journal post loop -->
		<section>

			<?php
			$args = [
				'post_type' => 'post',
				'order' => 'DESC',
				'posts_per_page' => 3
			];
			$journal_posts = get_posts($args); // returns an array of posts
			?>
			<h2 class="front-page-title">INHABITENT JOURNAL</h2>
			<div class="front-page-journal-container">
				<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

					<div class="front-page-journal-post">
						<?php the_post_thumbnail([768, 420]); ?>

						<div class="front-page-journal-info">
							<p class="front-page-journal-meta"><?php the_date(); ?> / <?php comments_number(); ?></p>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
						</div>
						<a class="inhabitent-button front-page-read-entry" href="<?= get_permalink(); ?>">READ ENTRY</a>

					</div>
				<?php endforeach;
				wp_reset_postdata(); ?>

			</div>
			<h2 class="front-page-title">LATEST ADVENTURES</h2>

		</section>


		<!-- Adventures seciton -->

		<section class="adventure-section">

			<div class="adventure-grid">
				<?php
				$args = [
					'post_type' => 'adventure',
					'order' => 'DESC',
					'posts_per_page' => 4,
				];
				$adventure_posts = get_posts($args); // returns an array of posts
				?>
				<?php foreach ($adventure_posts as $post) : setup_postdata($post); ?>

					<div class="adventure-grid-item">
						<?php the_post_thumbnail('full'); ?>

						<div class="adventure-links">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
							<a class="inhabitent-button front-page-read-entry" href="<?= get_permalink(); ?>">READ MORE</a>
						</div>

					</div>
				<?php endforeach; ?>
			</div>
			<a class="inhabitent-button adventure-button" href="<?= get_post_type_archive_link('adventure'); ?>">MORE ADVENTURES</a>
			<?php wp_reset_postdata(); ?>

		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>