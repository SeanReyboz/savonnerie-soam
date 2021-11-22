<?php
function add_style() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.min.css?t='.time(), false);
  }
  add_action( 'wp_enqueue_scripts', 'add_style' );



?>