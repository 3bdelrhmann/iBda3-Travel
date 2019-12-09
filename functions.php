<?php

function iBda3_setup()

{

wp_enqueue_style('bootstrap', get_template_directory_uri().'/static/css/bootstrap.min.css',null,null,'screen,projection');

wp_enqueue_style('Style', get_stylesheet_uri(),null,null);

  

wp_register_script('Jquery.min', get_template_directory_uri() . '/static/js/jquery-3.3.1.slim.min.js', array( 'jquery' ), NULL, false );



wp_register_script('bootstrapJs',get_template_directory_uri().'/static/js/bootstrap.min.js',array('jquery') ,NULL, false );



wp_register_script('fontawesome',get_template_directory_uri().'/static/js/fontawesome-all.min.js',array('jquery') ,NULL, false );



wp_register_script( 'numscroller.js', get_template_directory_uri() . '/static/js/numscroller-1.0.js', array( 'jquery' ), NULL, false );



   

   wp_enqueue_script( 'Jquery.min' );  

   wp_enqueue_script( 'bootstrapJs');    

   wp_enqueue_script( 'fontawesome' );

   wp_enqueue_script( 'numscroller.js' );



}

add_action('wp_enqueue_scripts', 'iBda3_setup');



add_theme_support( 'title-tag' );

add_filter('show_admin_bar', '__return_false');

function admin_default_page() {

  return '/index.php';

}



add_filter('login_redirect', 'admin_default_page');
add_theme_support( 'post-thumbnails' );

function Regitser_Menus()
{
  register_nav_menus( array(
    'Categories' =>    __( 'Categories Menu',   'iBda3-Menu' ),
  ) );
}
add_action('init','Regitser_Menus');

