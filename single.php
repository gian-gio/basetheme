<?php get_header(); // insert header.php inclusion  ?>

<div class="spacer"></div>

<div class="grid--xl">

<div class="col-xl-70 col-md-70 col-sm-100">

  <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); // start of the loop  ?>

  <!-- loop content -->
  <div class="blog-single">
    <div id="post-<?php the_ID();?>" <?php post_class();?>>

      <h1><?php the_title(); ?></h1>

      <p><?php the_time('j M Y '); ?> - <?php the_category(' | '); ?>  <?php the_tags('(', ', ', ')'); ?></p>

      <?php the_post_thumbnail('image-big', array('class' => 'img-res','alt' => get_the_title())); ?>

      <?php the_content(); ?>

      <?php wp_link_pages();  ?>

    </div>
  </div>

  <?php endwhile; else : // if no result dispaly message ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'flexitheme'); // dispaly no result message ?></p>

  <?php endif; ?>

  <!-- Back button -->
  <a href="<?php echo get_post_type_archive_link('post'); ?>" class="back-button">
    <span>&laquo;</span> <?php esc_html_e('Back', 'flexitheme');  ?>
  </a>

</div>

<div class="col-xl-30 col-md-30 sm-hide">
  
    <?php if ( is_active_sidebar( 'custom-sidebar' ) ) : ?>
        <aside id="secondary" class="widget-area">
            <?php dynamic_sidebar( 'custom-sidebar' ); ?>
        </aside>
    <?php endif; ?>

</div>

</div>

<div class="spacer"></div>

<?php get_footer(); // insert footer.php inclusion ?>
