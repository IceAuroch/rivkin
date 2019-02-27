<?php

function review_post_type()
{
    $labels = [
        'name' => _x('Review', 'Post Type General Name', 'rivkin'),
        'singular_name' => _x('Review', 'Post Type Singular Name', 'rivkin'),
        'menu_name' => __('Reviews', 'rivkin'),
        'name_admin_bar' => __('Reviews', 'rivkin'),
        'all_items' => __('All Reviews', 'rivkin'),
        'add_new_item' => __('Add review', 'rivkin'),
        'add_new' => __('Add review', 'rivkin'),
        'new_item' => __('New review', 'rivkin'),
        'edit_item' => __('Edit review', 'rivkin'),
        'update_item' => __('Update review', 'rivkin'),
        'view_item' => __('View', 'rivkin'),
        'view_items' => __('View all', 'rivkin'),
        'search_items' => __('Search review', 'rivkin'),
    ];
    $args = [
        'label' => __('Review', 'rivkin'),
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
        'menu_icon' => 'dashicons-welcome-write-blog',
    ];
    register_post_type('review', $args);
}
add_action('init', 'review_post_type', 0);