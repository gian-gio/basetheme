<?php get_header(); // insert header.php inclusion ?>


<div class="blog-list">

  <div class="grid--xl">

        <div class="col-xl-100">

          <?php if ( is_search() ) { // display serach title if is search page ?>

              <h1><span><?php esc_html_e( 'Results for: ', 'flexitheme'); ?></span> <?php echo $s;  ?></h1>

          <?php } else if ( is_category() || is_tag() || is_tax() ) { // display category, tag or taxonomy title if is the relative page ?>

              <h1><?php echo single_cat_title(); // display category,tag or tax title ?></h1>

          <?php } else if ( is_home() ){ // display site name if is home ?>

              <h1><?php esc_html_e('Blog', 'flexitheme')?></h1>
                            
          <?php } ?>
        
        </div>




  

          <div class="col-xl-70 col-md-70 col-sm-100">
            <div class="row">
            <?php if (have_posts()) : // if there is posts ?>

              <?php while(have_posts()) : the_post(); // start the loop ?>

                  <!-- loop content -->
                  <?php 
                  $trimmed_title = wp_trim_words( get_the_title(), 15, '...' );
                  $trimmed_excerpt = wp_trim_words( get_the_excerpt(), 20, '...' );
                  ?>

                  <div class="col-xl-50 col-md-50 col-sm-100">
                      <div class="blog-list-content">
                          <a href="<?php the_permalink(); ?>" class="text-dark">
                              <?php the_post_thumbnail('image-small', array('class' => 'img-res','alt' => get_the_title())); // display featured image of the post ?> 
                              <h3><?php echo $trimmed_title; ?></h3>
                              <p><?php echo $trimmed_excerpt; ?></p>
                          </a>

                          <?php the_category(' | '); ?>
                      </div>
                  </div>

              <?php endwhile; // end of the loop ?>

              <!-- Add pagination here -->
              <div class="pagination">
                  <?php 
                  the_posts_pagination( array(
                      'mid_size'  => 2,
                      'prev_text' => __('&laquo;', 'flexitheme'),
                      'next_text' => __('&raquo;', 'flexitheme'),
                  ) );
                  ?>
              </div>


              <?php else : ?>


              <div class="no-post">
                <p><?php esc_html_e( 'No articles found: ', 'flexitheme'); ?></p>
              </div>
              

              <?php endif; // end of main if ?>

            </div>
          </div>

          <div class="col-xl-30 col-md-30 sm-hide">
              
              <?php if ( is_active_sidebar( 'custom-sidebar' ) ) : ?>
                  <aside id="secondary" class="widget-area">
                      <?php dynamic_sidebar( 'custom-sidebar' ); ?>
                  </aside>
              <?php endif; ?>
          
          </div>
      

  </div>

</div>

<div class="spacer"></div>

  <?php get_footer(); // insert footer.php inclusion ?>
