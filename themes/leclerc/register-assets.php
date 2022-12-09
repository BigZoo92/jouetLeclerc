<?php
function montheme_register_js()
{
    wp_enqueue_script('gsap',  get_stylesheet_directory_uri() . '/assets/js/gsap.min.js', array(), true);
    // wp_enqueue_script('scrolltrigger', get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('gsap'), true);
    if( is_front_page()) { 
        wp_enqueue_script('home', get_stylesheet_directory_uri() . '/assets/js/home.js', array('gsap','main'), true); 
    }
    if(is_page(34)){ //15
        wp_enqueue_script('recette', get_stylesheet_directory_uri() . '/assets/js/recette.js');
    }
}

add_action('wp_footer', 'montheme_register_js');

function montheme_register_css()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'montheme_register_css');
