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

function recettes_register_post_types() {
	
    $labels = array(
        'name' => 'Recettes',
        'all_items' => 'Toutes les recettes',  // affiché dans le sous menu
        'singular_name' => 'Recette',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier la recette',
        'menu_name' => 'Recettes'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => get_template_directory_uri() . '/assets/images/png/recipe_icon.png',
	);

	register_post_type( 'recettes', $args );
}

function cadeaux_register_post_types() {
	
    $labels = array(
        'name' => 'Cadeaux',
        'all_items' => 'Tous les cadeaux',  // affiché dans le sous menu
        'singular_name' => 'Cadeau',
        'add_new_item' => 'Ajouter un cadeau',
        'edit_item' => 'Modifier le cadeau',
        'menu_name' => 'Cadeaux'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => get_template_directory_uri() . '/assets/images/png/gift_icon.png',
	);

	register_post_type( 'cadeaux', $args );
}
add_action( 'init', 'recettes_register_post_types' ); 
add_action( 'init', 'cadeaux_register_post_types' ); 

add_action('wp_enqueue_scripts', 'montheme_register_assets');

add_action('after_setup_theme', 'montheme_supports');





