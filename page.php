  <?php get_header(); // insert header.php inclusion  ?>



  <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); // start of the loop ?>

    <!-- loop content -->

  <div class="main">

    <?php 
    /* Image Url */
    $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
    ?>


    <div class="cover fade-in" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0)),url(<?php echo $image_attributes[0]; ?>) center center; background-size:cover;">
      <div class="cover__content">
          <div class="grid--xl">
            <div class="col-xl-100">
              <h1 class="fade-in"><?php the_title(); ?></h1>
              <h2 class="fade-in"><?php echo get_the_excerpt();?></h2>
            </div>
          </div>
      </div>
    </div>



  <div class="grid--xl">
    <div class="col-xl-100">

      <?php the_content(); ?>

    </div>
  </div>

      



  <?php endwhile; else : // if no result dispaly message ?>

    <div class="grid--xl">
      <div class="col-100">

          <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'flexitheme'); // dispaly no result message ?></p>

      </div>
    </div>
    
  <?php endif; ?>


</div>

<?php get_footer(); // insert footer.php inclusion  ?>
