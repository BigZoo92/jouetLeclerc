<?php

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En-tête du menu');
}

function montheme_register_assets()
{
    wp_register_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_register_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('main');
    wp_enqueue_style('style');
    if( is_front_page() ) { 
        wp_enqueue_script('main');
        wp_enqueue_style('style');
    }
}

function montheme_types()
{
    register_post_type('magasins', [
        'label' => 'Magasins',
        'public' => true,
        'supports' => ['title', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true,
    ]);
}


add_action('init', 'montheme_types');

add_action('wp_enqueue_scripts', 'montheme_register_assets');

add_action('after_setup_theme', 'montheme_supports');





