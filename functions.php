<?php

function ngo_main_function(){

  $theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'./assets/vendor/bootstrap/css/bootstrap.min.css',array(),4.0);
    wp_enqueue_style('icofont',get_template_directory_uri().'./assets/vendor/icofont/icofont.min.css');
    wp_enqueue_style('boxicons',get_template_directory_uri().'./assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('animate',get_template_directory_uri().'./assets/vendor/animate.css/animate.min.css');
    wp_enqueue_style('venobox',get_template_directory_uri().'./assets/vendor/venobox/venobox.css');
    wp_enqueue_style('aos',get_template_directory_uri().'./assets/vendor/aos/aos.css');
    wp_enqueue_style('style1',get_template_directory_uri().'./assets/css/style.css');
    wp_enqueue_style('style',get_template_directory_uri().'./style.css',array(),microtime());

    wp_enqueue_script( 'jquery',get_template_directory_uri().'./assets/vendor/jquery/jquery.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'bootstrap-bundle',get_template_directory_uri().'./assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'jquery-easing',get_template_directory_uri().'./assets/vendor/jquery.easing/jquery.easing.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'validate',get_template_directory_uri().'./assets/vendor/php-email-form/validate.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'jqyery-stick',get_template_directory_uri().'./assets/vendor/jquery-sticky/jquery.sticky.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'venobox',get_template_directory_uri().'./assets/vendor/venobox/venobox.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'waypoints',get_template_directory_uri().'./assets/vendor/waypoints/jquery.waypoints.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'counter',get_template_directory_uri().'./assets/vendor/counterup/counterup.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'isotope',get_template_directory_uri().'./assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), microtime(),true );
    wp_enqueue_script( 'aosjs',get_template_directory_uri().'./assets/vendor/aos/aos.js', array(),microtime(),true );
    wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js',array(),microtime(),true);
    wp_enqueue_script( 'mainjs',get_template_directory_uri().'./assets/js/main.js', array('jquery'),microtime(), true );
   
   
}
add_action( 'wp_enqueue_scripts', 'ngo_main_function' );

//register site menu
function register_ngo_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' ),
        'footer-menu'=>__('Footer Menu'),
       )
      );
   }
   add_action( 'init', 'register_ngo_menus' );



//site logo

function ngo_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 100,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ngo_custom_logo_setup' );


//featured image
function ngo_theme_support(){
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );
add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);
load_theme_textdomain( 'ngo' );
add_theme_support( 'post-formats', array(
  'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );

add_image_size( 'custom-size', 220, 180 ); 




}
add_action( 'after_setup_theme', 'ngo_theme_support');


//widgets init
get_template_part( 'widgets' );




