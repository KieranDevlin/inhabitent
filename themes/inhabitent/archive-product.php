<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="products-content-area ">
    <main id="main" class="site-main" role="main">

        <section class="product-type-container">
            <h2 class="front-page-title shopping-archive-title">Shop Stuff</h2>
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'product_type',
                'hide_empty' => 0,
            ));
            if (!empty($terms) && !is_wp_error($terms)) :
                ?>
                <div class="product-type-archive-block">
                    <?php foreach ($terms as $term) : ?>
                        <p><a href="<?php echo get_term_link($term); ?>" class=""><?php echo $term->name; ?></a></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>

        <!-- journal product loop -->
        <?php
        $args = [
            'post_type' => 'product',
            'order' => 'ASC',
            'posts_per_page' => 16
        ];
        $inhabitent_products = new WP_query($args); // returns an array of products
        ?>
        <div class="product-grid">
            <?php while ($inhabitent_products->have_posts()) : ($inhabitent_products->the_post()); ?>

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
            wp_reset_postdata(); ?>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>