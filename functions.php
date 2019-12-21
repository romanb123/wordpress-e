<?php

function university_files()
{
  wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'university_files');

function theme_add_bootstrap()
{
wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.css');
           wp_enqueue_script('bootstrap-jquery', get_template_directory_uri() . '/bootstrap/jquery-3.4.1.min.js', array(), '3.0.0', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.js', array(), '3.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_add_bootstrap');

function add_features()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'add_features');