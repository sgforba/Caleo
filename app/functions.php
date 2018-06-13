<?php

function blog_files() {
  wp_enqueue_script('main-blog-js', get_theme_file_uri('/assets/js/scripts.js'), NULL, '1.0', true);
  wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/assets/css/reset.css' );
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css');
  wp_enqueue_style('blog_main_styles', get_stylesheet_uri());
}

function blog_features() {
    add_theme_support('title-tag');
  }

add_action('wp_enqueue_scripts', 'blog_files');
add_action('after_setup_theme', 'blog_features');
