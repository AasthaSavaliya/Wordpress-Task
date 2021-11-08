<?php get_header(); ?>

<?php 
while(have_posts()){
  
  $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id());

?>
      <div class="row mb-2">
        <?php for($i=0;$i<2;$i++){ 
          the_post();
          ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php the_title(); ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo get_the_date(); ?></div>
              <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink() ?>">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="<?php echo $imagePath[0]?>" alt="Card image cap">
          </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>

<?php get_footer(); ?>