<?php
function add_style() {
    //wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css?t='.time(), false);
}
add_action( 'wp_enqueue_scripts', 'add_style' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function debug($val){
  echo "<pre> ";
    var_dump($val);
  echo "</pre>";
}