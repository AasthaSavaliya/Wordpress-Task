<?php get_header(); ?>
  
  <div class="middle-container">
    <div class="page-status">
      <h1><?php the_title() ?></h1>
      <h2><a href="<?php echo site_url();?>"></a></h2>
    </div>
    <div class="about-content">
      <?php the_content() ?>
      <?php the_post_thumbnail() ?>
    </div>
  </div>
  
  <?php get_footer(); ?>