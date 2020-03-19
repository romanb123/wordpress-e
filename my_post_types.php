<?php
function my_post_types()
{
    register_post_type('project', array(
        'rewrite' => array('slug' => 'projects'),
        'has_archive' => true,
        'public' => true,
        
        'labels' => array(
            'name' => 'Project',
            'add_new_item' => 'Add New project',
            'edit_item' => 'Edit project',
            'all_items' => 'All projects',
            'singular_name' => 'Event',
        ),
        'menu_icon' => 'dashicons-hammer',
    ));
}

add_action('init', 'my_post_types');

