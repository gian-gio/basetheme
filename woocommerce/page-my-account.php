<?php
/* Template Name: My Account Page */
get_header(); ?>

<div class="title-shop">
  <div class="grid--xl">
    <h1>Il mio account</h1>
  </div>
</div>

<div class="grid--xl">
  <div class="my-account-container section--white">

    <?php
    // Mostra eventuali messaggi di WooCommerce
    wc_print_notices();

    // Stampa il contenuto della pagina "Mio Account"
    if (function_exists('woocommerce_my_account')) {
        woocommerce_my_account();
    } else {
        echo do_shortcode('[woocommerce_my_account]');
    }
    ?>

  </div>
</div>

<?php get_footer(); ?>
