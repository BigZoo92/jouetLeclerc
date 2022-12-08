<?php
function montheme_register_assets()
{
    wp_register_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_register_script('gsap', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js');
    wp_register_script('scrolltrigger', get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js');
    wp_register_script('headerjs', get_stylesheet_directory_uri() . '/assets/js/header.js');
    wp_register_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js');
    wp_register_script('recette', get_stylesheet_directory_uri() . '/assets/js/recette.js');
    if(is_page(15)){
        wp_enqueue_script('recette');
    }
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
add_action('wp_enqueue_scripts', 'montheme_register_assets');
