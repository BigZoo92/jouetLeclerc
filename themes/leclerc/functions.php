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
    wp_register_script('gsap', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js');
    wp_register_script('scrolltrigger', get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js');
    wp_register_script('headerjs', get_stylesheet_directory_uri() . '/assets/js/header.js');
    wp_register_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('gsap');
    wp_enqueue_script('scrolltrigger');
    wp_enqueue_script('headerjs');
    wp_enqueue_script('main');
    wp_enqueue_style('style');
    if( is_front_page() ) { 
        wp_enqueue_script('main');
        wp_enqueue_style('style');
    }
}

include_once 'custom-post-type.php'; 

function bbx_admin_remove_menus() {
    remove_menu_page( 'tools.php' );
    // remove_menu_page( 'plugins.php' );
    }
add_action( 'admin_menu', 'bbx_admin_remove_menus' );
add_action('wp_enqueue_scripts', 'montheme_register_assets');

add_action('after_setup_theme', 'montheme_supports');





