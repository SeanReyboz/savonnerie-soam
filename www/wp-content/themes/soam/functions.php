<?php


function add_style() {
    //wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', [] );
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', [] );
}

function add_script() {
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', [], false, false);
  wp_enqueue_script('tweenmax-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', [], false, true);
  wp_enqueue_script('index-js', get_template_directory_uri() . '/js/index.js', [], false, true);
  wp_enqueue_script('front-page-slider', get_template_directory_uri() . '/js/components/frontPageSlider.js', [], false, true);
  wp_enqueue_script('navigation-responsive', get_template_directory_uri() . '/js/components/navigation.js', [], false, true);
}

add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function debug($val){
  echo "<pre> ";
    var_dump($val);
  echo "</pre>";
}

if (! function_exists('custom_register_nav_menu')){
  function custom_register_nav_menu(){
      register_nav_menus( array('primary_menu' => 'Menu principal',) );
  }
  add_action( 'after_setup_theme', 'custom_register_nav_menu', 0);
}