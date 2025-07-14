<?php get_header(); ?>

<div class="product-breadcrumbs">
    <div class="grid--xl">
        <?php woocommerce_breadcrumb(); ?>
    </div>
</div>

<div class="grid--xl">
    
    <!--Single Procuct-->
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

    <!--Related product-->
    <div class="related-products">
            <?php
            woocommerce_related_products(array(
                'posts_per_page' => 4, // Numero di prodotti
                'columns'        => 4, // Colonne per riga
            ));
            ?>
    </div>


</div>

<?php get_footer(); ?>
