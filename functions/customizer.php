<?php
  
  
/* Custom fonts
---------------------------------------- */

function basetheme_customize_fonts($wp_customize) {
    /* Typography Section */
    $wp_customize->add_section('basetheme_typography', array(
        'title'    => __('Typography', 'basetheme'),
        'priority' => 30,
    ));

    /* Font Name */
    $wp_customize->add_setting('basetheme_google_font', array(
        'default'   => 'DM Sans',
        'transport' => 'refresh',
        'sanitize_callback' => 'basetheme_sanitize_callback_function',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basetheme_google_font_control', array(
        'label'    => __('Google Font Headings (ex. Open Sans )', 'basetheme'),
        'section'  => 'basetheme_typography',
        'settings' => 'basetheme_google_font',
        'type'     => 'text',
    )));

    /* Font Weights */
    $wp_customize->add_setting('basetheme_google_font_weight', array(
        'default'   => '300,400,700',
        'transport' => 'refresh',
        'sanitize_callback' => 'basetheme_sanitize_callback_function',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basetheme_google_font_weight_control', array(
        'label'    => __('Font Weight (ex. 300,400,700 )', 'basetheme'),
        'section'  => 'basetheme_typography',
        'settings' => 'basetheme_google_font_weight',
        'type'     => 'text',
    )));

    /* Font Body Name */
    $wp_customize->add_setting('basetheme_google_font_body', array(
        'default'   => 'DM Sans',
        'transport' => 'refresh',
        'sanitize_callback' => 'basetheme_sanitize_callback_function',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basetheme_google_font_body_control', array(
        'label'    => __('Google Font Body (ex. Open Sans )', 'basetheme'),
        'section'  => 'basetheme_typography',
        'settings' => 'basetheme_google_font_body',
        'type'     => 'text',
    )));

    function basetheme_sanitize_callback_function($input) {
        return sanitize_text_field($input);
    }
}
add_action('customize_register', 'basetheme_customize_fonts');

  

/*Remove section "Header image"
  -------------------------------------------- */ 
  function basetheme_remove_customizer_sections($wp_customize) {
      
      $wp_customize->remove_section('header_image');
  }
  add_action('customize_register', 'basetheme_remove_customizer_sections', 20);



  /* Whatsapp Button
-----------------------------------------*/

function basetheme_customize_whatsapp_register($wp_customize) {
    // Aggiungi una sezione al Customizer
    $wp_customize->add_section('basetheme_whatsapp_section', array(
        'title'       => __('WhatsApp Settings', 'basetheme'),
        'description' => __('Configure the WhatsApp button settings.', 'basetheme'),
        'priority'    => 160,
    ));

    // Aggiungi un'impostazione per il numero di telefono
    $wp_customize->add_setting('whatsapp_phone_number', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
    ));

    // Aggiungi un controllo per il numero di telefono
    $wp_customize->add_control('whatsapp_phone_number_control', array(
        'label'       => __('WhatsApp Phone Number', 'basetheme'),
        'section'     => 'basetheme_whatsapp_section',
        'settings'    => 'whatsapp_phone_number',
        'type'        => 'text',
        'description' => __('Enter your WhatsApp phone number (ex: 3912345678).', 'basetheme'),
    ));
}
add_action('customize_register', 'basetheme_customize_whatsapp_register');





/*  Latest Posts shortcode
/* ------------------------------------ */


function basetheme_last_post_shortcode($atts) {

    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3, 
        'orderby' => 'date', 
        'order' => 'DESC' 
    );
  
    // Esegui la query
    $the_query = new WP_Query($args);
  
    // Inizializza una variabile per l'output
    $output = '';
  
    // Loop
    if ($the_query->have_posts()) {
        $output .= '<div class="latest-post">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            
            $output .= '<div class="col-xl-33 col-md-33 col-sm-100">';
            
            // Controlla se il post ha un'immagine in evidenza
            if (has_post_thumbnail()) {
                // Ottiene l'URL dell'immagine in evidenza
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large', true);
                
                $output .= '<a href="' . get_the_permalink() . '">';
                $output .= '<img src="' . esc_url($thumbnail_url[0]) . '" alt="' . the_title_attribute(array('echo' => false)) . '"></a>';
            }
            
            $output .='<p>'. get_the_time('j M Y ') .'- '. get_the_category_list(', ') .'</p>';
            $output .= '<h3><a href="' . get_the_permalink() . '">' . wp_trim_words(get_the_title(), 15, '...') . '</a></h3>';
                      
            $output .= '</div>';
        }
        $output .= '</div>';
        
        // Reset original posts
        wp_reset_postdata();
    } else {
        // No find article 
        $output .= '<div class="last-post"><p>Nessun articolo trovato.</p></div>';
    }
  
    return $output;
  }
  
  add_shortcode('latest_posts', 'basetheme_last_post_shortcode');
  


  

/* Logo Slider CPT
-----------------------------------------*/


// Create Custom Post Type "Logo Slider"
function create_logo_slider_cpt() {
    $labels = array(
        'name'                  => 'Logo Slider',
        'singular_name'         => 'Logo',
        'menu_name'             => 'Logo Slider',
        'name_admin_bar'        => 'Logo Slider',
        'add_new'               => 'Add Logo',
        'add_new_item'          => 'Add New Logo',
        'new_item'              => 'New Logo',
        'edit_item'             => 'Edit Logo',
        'view_item'             => 'View Logo',
        'all_items'             => 'All Logos',
        'search_items'          => 'Search Logos',
        'not_found'             => 'No Logo found',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false, // Non visibile sul frontend
        'show_ui'            => true,  // Visibile nel backoffice
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-images-alt2', // Icona per il menu
        'supports'           => array('title', 'thumbnail'),
        'has_archive'        => false,
    );

    register_post_type('logo_slider', $args);
}
add_action('init', 'create_logo_slider_cpt');



// Add metabox for logo title
function logo_slider_meta_box() {
    add_meta_box(
        'logo_details', // ID
        'Dettagli Logo', // Title
        'render_logo_meta_box', // Callback
        'logo_slider', // CPT
        'normal', // Position
        'default' // Priority
    );
}
add_action('add_meta_boxes', 'logo_slider_meta_box');

// Metabox render
function render_logo_meta_box($post) {
    $logo_link = get_post_meta($post->ID, '_logo_link', true);
    ?>
    <label for="logo_link">External link (https://www.logosite.com):</label>
    <input type="text" name="logo_link" id="logo_link" value="<?php echo esc_attr($logo_link); ?>" style="width:100%;">
    <?php
}

// Save data metabox
function save_logo_slider_meta_box($post_id) {
    if (array_key_exists('logo_link', $_POST)) {
        update_post_meta($post_id, '_logo_link', sanitize_text_field($_POST['logo_link']));
    }
}
add_action('save_post', 'save_logo_slider_meta_box');



// Create Shortcode

function logo_slider_with_splide() {
    // Query
    $args = array(
        'post_type' => 'logo_slider',
        'posts_per_page' => -1, // Recover all logos
    );

    $query = new WP_Query($args);

    // Initialize markup output
    ob_start();

    if ($query->have_posts()) {
        ?>
        <section class="splide" aria-label="Logo Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();

                        // Retrieve the logo title (from custom field)
                        $logo_link = get_post_meta(get_the_ID(), '_logo_link', true);

                        // Recover the featured image
                        $logo_image = get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'logo-image'));

                        // Output slide
                        ?>
                        <li class="splide__slide">
                            <div class="logo-slide-content">
                                <a href="<?php echo $logo_link; ?>" target="_blank"><?php echo $logo_image; // Logo image ?></a>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
        <?php
    } else {
        echo '<p class="no-logo-found">No logo found.</p>';
    }

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('logo_slider_splide', 'logo_slider_with_splide');



/* Page Reserverd
-----------------------------------------*/

//Admin area block for user simple
function basetheme_admin_page_block() {
    if (is_admin() && !current_user_can('administrator') && !(defined('DOING_AJAX') && DOING_AJAX)) {
        wp_redirect(home_url()); // Redirect to homepage
        exit;
    }
}
add_action('admin_init', 'basetheme_admin_page_block');




/* Auto install plugin 
-----------------------------------------*/
  
  require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
  
  
  
  function basetheme_register_required_plugins() {
      $plugins = array(
          // Plugins list
          array(
              'name'      => 'Contact Form 7', 
              'slug'      => 'contact-form-7', 
              'required'  => true, 
          ),
          array(
              'name'      => 'Block Guide Lines', 
              'slug'      => 'block-guide-lines', 
              'required'  => true, 
          ),
          array(
              'name'      => 'GenerateBlocks', 
              'slug'      => 'generateblocks', 
              'required'  => true, 
          ),
          array(
              'name'      => 'Yoast Duplicate Post', 
              'slug'      => 'duplicate-post', 
              'required'  => true, 
          ),
      );
  
      $config = array(
          'id'           => 'basetheme', // Theme ID
          'default_path' => '', // Leave blank to avoid conflicts
          'menu'         => 'Install plugins', // Admin menu name
          'parent_slug'  => 'themes.php', // Parent menu slug
          'capability'   => 'edit_theme_options', // Permissions required
          'has_notices'  => true, // Show notifications in backend
          'dismissable'  => true, // Allows you to hide the warning
          'is_automatic' => false, // Does not automatically install plugins
      );
  
      tgmpa( $plugins, $config );
  }

  add_action( 'tgmpa_register', 'basetheme_register_required_plugins' );















