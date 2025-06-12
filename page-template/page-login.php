<?php
/*
Template Name: Login
*/

if (is_user_logged_in()) {
    wp_redirect(home_url()); // Se l'utente è già loggato, reindirizzalo alla homepage
    exit;
}

get_header();
?>

<div class="grid--xl">


        <div class="container-login">

        <h2>Accedi</h2>


        <?php
        $redirect_to = !empty($_GET['redirect_to']) ? $_GET['redirect_to'] : home_url();

        $args = array(
            'redirect' => $redirect_to, 
            'form_id' => 'custom_login_form',
            'label_username' => 'Nome utente',
            'label_password' => 'Password',
            'label_log_in' => 'Accedi',
            'remember' => false
        );

        wp_login_form($args);
        ?>

        </div>

</div>



<?php get_footer(); ?>
