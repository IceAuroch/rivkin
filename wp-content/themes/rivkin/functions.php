<?php

//Clear header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

show_admin_bar(false);


//Theme setup

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

}
add_action('after_setup_theme', 'theme_setup');

//Enqueue scripts

function theme_scripts()
{
    wp_deregister_script('wp-embed');
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');


// Enqueue styles
function theme_styles()
{
    wp_enqueue_style('theme-app', get_theme_file_uri('dist/app.css'), null, null);
}

add_action('wp_enqueue_scripts', 'theme_styles');


// Post types

require_once('post-types/books.php');
require_once('post-types/reviews.php');


function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('contacts', [
        'title' => 'Social links',
        'priority' => 30,
    ]);
    $wp_customize->add_setting('facebook');
    $wp_customize->add_control('facebook', [
        'section' => 'contacts',
        'label' => 'Facebook',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('youtube');
    $wp_customize->add_control('youtube', [
        'section' => 'contacts',
        'label' => 'YouTube',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('twitter');
    $wp_customize->add_control('twitter', [
        'section' => 'contacts',
        'label' => 'Twitter',
        'type' => 'text',
    ]);

}
add_action('customize_register', 'theme_customize_register');

// Load More

