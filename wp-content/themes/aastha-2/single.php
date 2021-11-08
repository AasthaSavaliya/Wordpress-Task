<?php get_header();?>


 <h1><?php the_title(); ?></h1>
 <?php echo get_the_date(); ?>
 <p><?php the_content(); ?></p>
 <?php $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
 <img src="<?php echo $imagePath[0] ?>" alt="">


<?php get_footer();?>
