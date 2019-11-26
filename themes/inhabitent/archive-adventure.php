<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="products-content-area adventure-archive">
    <main id="main" class="site-main" role="main">

        <section class="product-type-container product-taxonomy-terms">

            <h1><?php post_type_archive_title(); ?></h1>

        </section>


        <div class="adventure-archive-grid">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="adventure-grid-item">
                        <?php the_post_thumbnail('full'); ?>

                        <div class="adventure-links">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <a class="inhabitent-button front-page-read-entry" href="<?= get_permalink(); ?>">READ MORE</a>
                        </div>

                    </div>
                <?php endwhile;
                else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>