<!-- add menus option -->
<?php 
register_nav_menus(
    array('primary-menu'=>"Top Menu")
);

// add set featured image option
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_post_type_support( 'page', 'excerpt' );

?>

