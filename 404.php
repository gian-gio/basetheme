<?php get_header(); ?>

<main class="main">

  <div class="error-404">

    <section>
        <div class="icon-error"></div>
        <h1><?php esc_html_e( 'Oops! That page can\'t be found.', 'flexitheme' ); ?></h1>
        <h2><?php esc_html_e( '404 Error', 'flexitheme' ); ?></h2>
        <p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'flexitheme' ); ?></p>
    </section>

  </div>

</main>

<?php get_footer(); ?>
