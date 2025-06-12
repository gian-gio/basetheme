<?php
/**
 * Theme: basetheme
 *
 * Theme Functions, includes, etc.
 *
 * @package basetheme
 */


/*  Theme setup
/* ------------------------------------ */

function basetheme_setup() {

    // Enable theme supports
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('align-wide');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 200,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('comments');

    // Custom image sizes
    add_image_size('image-small', 350, 270, true);
    add_image_size('image-big', 1400, 900, true);

    // Enable page excerpts
    add_post_type_support('page', 'excerpt');

    // Register menus
    register_nav_menus(array(
        'header' => esc_html__('Header', 'basetheme'),
        'quickmenu' => esc_html__('Quick Menu', 'basetheme'),
        'footermenu' => esc_html__('Footer Menu', 'basetheme'),
    ));

  /* block pattern */
  require_once( get_template_directory() . '/functions/patterns.php' );

}

add_action('after_setup_theme', 'basetheme_setup');



// WooCommerce support
function basetheme_add_woocommerce_support() {
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'basetheme_add_woocommerce_support');

function basetheme_woocommerce_cart_menu_item($items, $args) {
    // Aggiungi solo al menu con 'theme_location' = 'quickmenu'
    if ($args->theme_location === 'quickmenu' && class_exists('WooCommerce') && get_theme_mod('basetheme_show_cart', true)) {
        $cart_count = WC()->cart->get_cart_contents_count();
        $cart_url = wc_get_cart_url();

        $items .= '<li class="cart-item">
            <a href="' . esc_url($cart_url) . '">
                <i class="bx bx-cart-alt"></i> 
                <span class="cart-count">' . esc_html($cart_count) . '</span>
            </a>
        </li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'basetheme_woocommerce_cart_menu_item', 10, 2);

function basetheme_customize_register($wp_customize) {
  // Aggiungi una sezione WooCommerce
  $wp_customize->add_section('basetheme_woocommerce_section', array(
      'title'    => __('WooCommerce Settings', 'basetheme'),
      'priority' => 30,
  ));

  // Aggiungi una opzione per mostrare/nascondere il carrello nel menu
  $wp_customize->add_setting('basetheme_show_cart', array(
      'default'   => true,
      'transport' => 'refresh',
      'sanitize_callback' => 'basetheme_sanitize_checkbox'
  ));

  $wp_customize->add_control('basetheme_show_cart', array(
      'type'     => 'checkbox',
      'section'  => 'basetheme_woocommerce_section',
      'label'    => __('Mostra icona carrello nel menu', 'basetheme'),
  ));
}

add_action('customize_register', 'basetheme_customize_register');

// Sanification 
function basetheme_sanitize_checkbox($checked) {
  return (isset($checked) && $checked === true) ? true : false;
}



// Load translation
function basetheme_load_textdomain() {
  load_theme_textdomain('basetheme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'basetheme_load_textdomain');


// Custom Sidebar
function basetheme_custom_sidebar() {
  register_sidebar( array(
      'name'          => 'Custom Sidebar',
      'id'            => 'custom-sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'basetheme_custom_sidebar' );


/*Custom Logo */

function basetheme_customize_logo_section($wp_customize) {
    
    $wp_customize->add_section('logo_section', array(
        'title'       => __('Logo', 'basetheme'),
        'priority'    => 30,
        'description' => __('Manage the site logo and additional logo options.', 'basetheme'),
    ));

    
    $wp_customize->get_control('custom_logo')->section = 'logo_section';
    $wp_customize->get_control('custom_logo')->priority = 1;
    $wp_customize->get_control('custom_logo')->label = __('Default Logo', 'basetheme');
    $wp_customize->get_control('custom_logo')->description = __('Upload a default logo to be used in the header site.', 'basetheme');

    
  
    $wp_customize->add_setting('footer_logo', array(
        'default'   => '', // No logo default
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'footer_logo',
        array(
            'label'       => __('Footer Logo', 'basetheme'),
            'description' => __('Upload a logo to be used in the footer.', 'basetheme'),
            'section'     => 'logo_section',
            'priority'    => 3,
        )
    ));
}
add_action('customize_register', 'basetheme_customize_logo_section');


/*  Enqueue javascript
/* ------------------------------------ */
  function basetheme_scripts() {

    wp_enqueue_script('basetheme-gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
    wp_enqueue_script('basetheme-gsap-scrolltrigger-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), null, true);
    wp_enqueue_script('basetheme-splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), null, true);
    wp_enqueue_script('basetheme-scripts', get_template_directory_uri() . '/js/scripts.js','','', true );

  }

add_action( 'wp_enqueue_scripts', 'basetheme_scripts' );



/*  Enqueue style
/* ------------------------------------ */

function basetheme_styles() {

  // Load Custom fonts
  $font_headings = sanitize_text_field(get_theme_mod('basetheme_google_font', 'DM Sans'));
  $font_body = sanitize_text_field(get_theme_mod('basetheme_google_font_body', 'DM Sans'));
  $font_weight = sanitize_text_field(get_theme_mod('basetheme_google_font_weight', '300,400,700'));

  if ($font_headings === $font_body) {
      wp_enqueue_style('basetheme-google-font', esc_url('//fonts.googleapis.com/css?family=' . $font_headings . ':' . $font_weight));
  } else {
      wp_enqueue_style('basetheme-google-font', esc_url('//fonts.googleapis.com/css?family=' . $font_headings . ':' . $font_weight));
      wp_enqueue_style('basetheme-google-font-body', esc_url('//fonts.googleapis.com/css?family=' . $font_body . ':400,700'));
  }
  
  // Load CSS files
	wp_enqueue_style( 'boxicons-style', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
	wp_enqueue_style( 'lineawesome-style', 'https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css');
	wp_enqueue_style( 'splide-style', get_template_directory_uri().'/css/splide.css');
	wp_enqueue_style( 'simple-style', get_template_directory_uri().'/style.css');

}

add_action( 'wp_enqueue_scripts', 'basetheme_styles' );


/* Add custom CSS to the header */
function basetheme_customize_css() {
  $font_headings = str_replace('+', ' ', sanitize_text_field(get_theme_mod('basetheme_google_font', 'DM Sans')));
  $font_body = str_replace('+', ' ', sanitize_text_field(get_theme_mod('basetheme_google_font_body', 'DM Sans')));

  echo '<style type="text/css">';
  echo 'body, p, ul, li, ol { font-family: "' . esc_attr($font_body) . '", sans-serif; }';
  echo 'h1, h2, h3, h4, h5, h6 { font-family: "' . esc_attr($font_headings) . '", sans-serif; }';
  echo '</style>';
}
add_action('wp_head', 'basetheme_customize_css');




/* Include additional customizer functions */
if (file_exists(get_template_directory() . '/functions/customizer.php')) {
  require_once(get_template_directory() . '/functions/customizer.php');
}


?>


