<?php

function portfolio_files() {
  wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/js/app.js'), NULL, '1.0', true);
  wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function portfolio_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'portfolio_features');
