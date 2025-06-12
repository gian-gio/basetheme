<?php
/*
Template Name: Pagina Riservata
*/

if (!is_user_logged_in()) {
    wp_redirect(site_url('/login/?redirect_to=' . urlencode(get_permalink()))); // Reindirizza alla tua pagina di login personalizzata
    exit;
}


$current_user = wp_get_current_user(); // Recupera i dati dell'utente

$nome = get_user_meta($current_user->ID, 'first_name', true); // Recupera il nome
$cognome = get_user_meta($current_user->ID, 'last_name', true); // Recupera il cognome

if (!$nome) $nome = $current_user->user_login; // Se il nome non è impostato, usa il nome utente


get_header();
?>

    <div class="reserved-page">
        <div class="reserved-page__header">
            <h4>Ciao, <strong><?php echo esc_html($nome . ' ' . $cognome); ?></strong></h4>
            <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
        </div>

        <div class="grid--xl">
            <?php the_content(); ?>
        </div>

    </div>




<?php get_footer(); ?>
