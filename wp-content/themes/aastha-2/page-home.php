<?php get_header();
//Template Name:Home
?>

      <?php 
        $wpnew=array('post_type'=>'news','post_status'=>'publish');
        $wpquery = new Wp_Query($wpnew);
        while($wpquery->have_posts()){
          $wpquery->the_post();
      ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
          <p class="lead my-3"><?php the_excerpt(); ?></p>
          <p class="lead mb-0"><a href="<?php the_permalink() ?>" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
      <?php } ?>

      <?php 
        $wpnew=array('post_type'=>'page','post_status'=>'publish');
        $wpquery = new Wp_Query($wpnew);
        $i=0;
        while($wpquery->have_posts()){
          
      ?>

      <div class="row mb-2">
        <?php for($i=0;$i<2;$i++) { 
          $wpquery->the_post();?>
        <div class="col-md-6 card-class">
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

    <main role="main" class="container">
    <?php 
      while(have_posts()){
        the_post();
        $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id());

      ?>
      <div class="row">
        <div class="col-md-8 blog-main">
          
          <div class="blog-post">
            <h2 class="blog-post-title">Posts</h2>
            <p class="blog-post-meta"><?php the_title(); ?></p>

            <p><?php the_excerpt(); ?></p>
          </div>
      </div>
          <?php } ?>

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic"><?php echo get_bloginfo( 'name' ); ?></h4>
            <p class="mb-0"><?php echo get_bloginfo( 'description' ); ?></p>
          </div>
         
          <h4 class="font-italic">Posts</h4>
          <?php 
              $wpnew=array('post_type'=>'page','post_status'=>'publish');
              $wpquery = new Wp_Query($wpnew);
              while($wpquery->have_posts()){
                $wpquery->the_post();
            ?>
          <div class="p-3">
            <ol class="list-unstyled mb-0">
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            
            </ol>
          </div>
         <?php } ?>
          
        </aside>

      </div>

    </main>

<?php get_footer(); ?>