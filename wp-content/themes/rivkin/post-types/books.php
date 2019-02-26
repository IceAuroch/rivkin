<?php

function book_post_type()
{
    $labels = [
        'name' => _x('Book', 'Post Type General Name', 'rivkin'),
        'singular_name' => _x('Book', 'Post Type Singular Name', 'rivkin'),
        'menu_name' => __('Books', 'rivkin'),
        'name_admin_bar' => __('Books', 'rivkin'),
        'all_items' => __('All books', 'rivkin'),
        'add_new_item' => __('Add book', 'rivkin'),
        'add_new' => __('Add book', 'rivkin'),
        'new_item' => __('New book', 'rivkin'),
        'edit_item' => __('Edit book', 'rivkin'),
        'update_item' => __('Update book', 'rivkin'),
        'view_item' => __('View', 'rivkin'),
        'view_items' => __('View all', 'rivkin'),
        'search_items' => __('Search book', 'rivkin'),
    ];
    $args = [
        'label' => __('Book', 'rivkin'),
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
        'menu_icon' => 'dashicons-book',
    ];
    register_post_type('book', $args);
}
add_action('init', 'book_post_type', 0);