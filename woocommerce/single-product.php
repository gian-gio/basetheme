<?php get_header(); ?>


<div class="product-container">
    <?php while (have_posts()) : the_post(); ?>
        <div class="product-content">
            <div class="product-image">
                <?php woocommerce_show_product_images(); ?>
            </div>
            <div class="product-details">
                <h1><?php the_title(); ?></h1>
                <?php woocommerce_template_single_price(); ?>
                <div class="description"><?php woocommerce_template_single_excerpt(); ?></div>
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
