<?php

function theme_add_bootstrap()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.css');
    wp_enqueue_script('bootstrap-jquery', get_template_directory_uri() . '/bootstrap/jquery-3.4.1.min.js', array(), '3.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.js', array(), '3.0.0', true);
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_add_bootstrap');

function add_features()
{
    register_nav_menu('navbarmenu', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'add_features');

// add class to list item of navbar

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// add class to "a" item of navbar

function _namespace_modify_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', '_namespace_modify_menuclass');