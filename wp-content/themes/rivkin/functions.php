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
    global $wp_query;

    wp_deregister_script('wp-embed');
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
    wp_enqueue_script('my_loadmore', get_theme_file_uri('dist/loadmore.js'), null, '', true);
    wp_localize_script('my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
        'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ));
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


function misha_loadmore_ajax_handler(){

    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts( $args );

    if( have_posts() ) :

        // run the loop
        while( have_posts() ): the_post();

            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part('template-parts/article-preview');
            // for the test purposes comment the line above and uncomment the below one
            // the_title();


        endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}



add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
