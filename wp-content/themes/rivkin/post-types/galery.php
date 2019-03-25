<?php

function galery_post_type()
{
    $labels = [
        'name' => _x('Gallery', 'Post Type General Name', 'rivkin'),
        'singular_name' => _x('Gallery', 'Post Type Singular Name', 'rivkin'),
        'menu_name' => __('Galleries', 'rivkin'),
        'name_admin_bar' => __('Galleries', 'rivkin'),
        'all_items' => __('All galleries', 'khortytsia'),
        'add_new_item' => __('Add gallery', 'rivkin'),
        'add_new' => __('Add gallery', 'rivkin'),
        'new_item' => __('New gallery', 'rivkin'),
        'edit_item' => __('Edit gallery', 'rivkin'),
        'update_item' => __('Update gallery', 'rivkin'),
        'view_item' => __('View', 'rivkin'),
        'view_items' => __('View all', 'rivkin'),
        'search_items' => __('Search gallery', 'rivkin'),
    ];
    $args = [
        'label' => __('Gallery', 'rivkin'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => [],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-images-alt',
    ];
    register_post_type('galery', $args);
}
add_action('init', 'galery_post_type', 0);