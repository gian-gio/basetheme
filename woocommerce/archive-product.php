<?php get_header(); ?>

<div class="grid--xl">
    <div class="shop-container">
        <h1><?php woocommerce_page_title(); ?></h1>
        
        <div class="shop-products">

        <?php
            function basetheme_display_nested_product_categories() {
                $categories = get_terms(array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => true,
                    'parent'     => 0, // Solo categorie principali
                ));

                if (!empty($categories)) {
                    echo '<ul class="product-categories">';
                    foreach ($categories as $category) {
                        echo '<li><a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
                        
                        // Recupera le sottocategorie della categoria corrente
                        $subcategories = get_terms(array(
                            'taxonomy'   => 'product_cat',
                            'hide_empty' => true,
                            'parent'     => $category->term_id, // Sottocategorie della categoria attuale
                        ));

                        if (!empty($subcategories)) {
                            echo '<ul class="subcategories">';
                            foreach ($subcategories as $subcategory) {
                                echo '<li><a href="' . esc_url(get_term_link($subcategory)) . '">' . esc_html($subcategory->name) . '</a></li>';
                            }
                            echo '</ul>';
                        }

                        echo '</li>';
                    }
                    echo '</ul>';
                }
            }

            // Chiamare la funzione dove vuoi visualizzare le categorie (es. in una sidebar o sopra il catalogo)
            basetheme_display_nested_product_categories();
            ?>
            

            <?php if (woocommerce_product_loop()) : ?>
                <?php woocommerce_product_loop_start(); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php wc_get_template_part('content', 'product'); ?>
                    <?php endwhile; ?>
                <?php woocommerce_product_loop_end(); ?>
            <?php else : ?>
                <p><?php esc_html_e('Nessun prodotto trovato', 'basetheme'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
