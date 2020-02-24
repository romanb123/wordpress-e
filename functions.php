<?php

function theme_add_bootstrap()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.css');
    wp_enqueue_script('bootstrap-jquery', get_template_directory_uri() . '/bootstrap/jquery-3.4.1.min.js', array(), '3.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.js', array(), '3.0.0', true);
    wp_enqueue_style('theme_style', get_stylesheet_uri());
    wp_enqueue_script('search_js', get_theme_file_uri('/javascript/search.js'), null, '1.0', true);

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
// add featerd image
function wpdocs_setup_theme()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150);
}
add_action('after_setup_theme', 'wpdocs_setup_theme');
// add class to "a" item of navbar

function _namespace_modify_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', '_namespace_modify_menuclass');

// add widget area
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// function custom_override_checkout_fields($fields)
// {

//     $fields['order']['order_comments']['placeholder'] = 'My new placeholder';
//     $fields['order']['your_field'] = array(
//         'type' => 'select',
//     );

//     $x = 1;
//     global $woocommerce;
//     $items = $woocommerce->cart->get_cart();

//     foreach ($items as $item => $values) {
//         $_product = wc_get_product($values['data']->get_id());
//         $fields['order']['your_field']['options']['option_' . $x] = $_product->get_title();
//         $x++;

//     }

//     return $fields;
// }
