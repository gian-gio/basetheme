<?php /* 

Template Name: Home Template 

*/ ?>

<?php get_header();  ?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); // start of the loop ?>






  <div class="grid--xl">
    <div class="col-xl-100">

      <?php the_content(); ?>

    </div>
  </div>




<?php endwhile; else : // if no result dispaly message ?>

<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'flexitheme'); // dispaly no result message ?></p>

<?php endif; ?>



<?php get_footer(); // insert footer.php inclusion  ?>
