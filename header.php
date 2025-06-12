<!DOCTYPE html>
<html <?php language_attributes(); // display the html language tag ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); // insert all the script and styles of WordPress ?>

</head>
<body <?php body_class(); // add automic css classes based on the page ?> >

  <?php wp_body_open(); // insert script right after the body if needed ?>
  
<div class="search-panel">

  <div class="container-search">
    <a class="btn-close-search"></a>
    <div class="search-form">
      <h3><?php esc_attr_e('Search in the site', 'flexitheme'); ?></h3>
      <form method="get" action="<?php echo esc_url(home_url()); ?>" class="form-search">
        <input type="text" placeholder="<?php esc_attr_e('search...', 'flexitheme'); ?>" name="s">
        <button type="submit">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/search-outline.svg" alt="Search"> 
      </button>
      </form>
    </div>
  </div>

</div>


  <header class="container-header">
        <div class="header">

        <?php
          $custom_logo_id = get_theme_mod('custom_logo'); // Ottiene l'ID del logo

          if (function_exists('the_custom_logo') && has_custom_logo()) {
              // Ottiene l'URL del logo
              $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0]; 

              echo '<a class="header__logo" href="' . esc_url(home_url('/')) . '">';
              echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '">';
              echo '</a>';
          } else {
              // Visualizza il nome del sito come fallback
              echo '<a class="header__logo" href="' . esc_url(home_url('/')) . '">';
              echo '<span>' . get_bloginfo('name') . '</span>';
              echo '</a>';
          }
        ?>



        <?php // insert custom menu header
          wp_nav_menu(array(
            'theme_location' => 'header',
            'container' => false, 
            'items_wrap' => '<ul class="header__menu">%3$s</ul>'
          ));
        ?>


        <?php
        if (has_nav_menu('quickmenu')) {
            wp_nav_menu(array(
              'theme_location' => 'quickmenu',
              'container' => false, 
              'items_wrap' => '<ul class="header__quick">%3$s</ul>'
              ));
        }
        ?>


            <div class="header__hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

