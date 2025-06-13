<?php /* 

Template Name: Custom Cart Page

*/ ?>



<div class="title-shop">
    <div class="grid--xl">
        <h1>Carrello</h1>
    </div>
</div>

<div class="grid--xl">
    <div class="shop-container">

        <?php
        // Output cart
        echo do_shortcode('[woocommerce_cart]');
        ?>

    </div>
</div>

<?php get_footer(); ?>
