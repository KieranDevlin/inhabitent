<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="products-content-area ">
    <main id="main" class="site-main" role="main">

        <section class="product-type-container product-taxonomy-terms">

            <h1><?php single_term_title(); ?></h1>
            <?php the_archive_description(); ?>
        </section>
        <div class="product-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                    <div class="product-grid-item">
                        <div class="product-archive-image-container">
                            <a class="product-image-link" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                            </a>
                        </div>
                        <div class="product-meta">
                            <div class="dots-after">
                                <span class="product-title"><?php the_title(); ?></span>
                            </div>

                            <div class="price">&#36;<?php the_field('price'); ?>.00</div>

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