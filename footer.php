
<footer class="footer">
  <div class="grid--xl">
    <div class="col-xl-50">
      <div class="flex-start">

          <div class="footer__logo">
              <?php 
                $footer_logo = get_theme_mod('footer_logo');
                if ($footer_logo) {
                    echo '<img src="' . esc_url($footer_logo) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                }
              ?>
          </div>

          <div>
              <h5>Company Name</h5>

              Address: address test, 1 ITALY<br>
              
              Email: 
              <a href="mailto:mail@mysite.com">
                mail@mysite.com
              </a><br>
              Tel: 
              <a href="tel:+391234567">
                +39 123 45 67
              </a>
          </div>

      </div>

    </div>
    <div class="col-xl-50 text-right sm-hide">
    <?php
        if (has_nav_menu('quickmenu')) {
            wp_nav_menu(array(
              'theme_location' => 'footermenu',
              'container' => false, 
              'items_wrap' => '<ul class="footer__menu">%3$s</ul>'
              ));
        }
        ?>

    </div>
  </div>
  <div class="footer__copyright">
        <p>© Copyright <?php echo date("Y"); //display current year ?> - <?php bloginfo('title'); // display wp blog title ?></p>
  </div>
</footer>

<div class="back-top">
  <a></a>
</div>


<!-- Whatsapp button
--------------------------------------------------->
<?php
$whatsapp_number = get_option('whatsapp_phone_number', '');

// Verifica che il numero di WhatsApp sia valido
if (!empty($whatsapp_number)) : 
    $whatsapp_url = 'https://wa.me/' . rawurlencode($whatsapp_number);
    $btn_class = 'btn-whatsapp-visible';
?>
    <a href="<?php echo esc_url($whatsapp_url); ?>" 
       class="btn-whatsapp <?php echo esc_attr($btn_class); ?>" 
       target="_blank" 
       rel="noopener noreferrer" 
       title="<?php esc_attr_e('Chat with us on WhatsApp', 'basetheme'); ?>">
        <i class='bx bxl-whatsapp' aria-hidden="true"></i>
        <span class="screen-reader-text"><?php esc_html_e('Chat with us on WhatsApp', 'basetheme'); ?></span>
    </a>
<?php else: ?>
    <!-- Nessun numero configurato, pulsante nascosto -->
    <style>.btn-whatsapp-hidden { display: none; }</style>
<?php endif; ?>



<?php wp_footer(); // insert scripts by WordPress at at end of the page ?>

</body>
</html>
