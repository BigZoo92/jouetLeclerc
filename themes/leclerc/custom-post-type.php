<?php
function recettes_register_post_types() {
	
    $labels = array(
        'name' => 'Recettes',
        'all_items' => 'Toutes les recettes',  // affiché dans le sous menu
        'singular_name' => 'Recette',
        'add_new' => 'Ajouter une recette',
        'add_new_item' => 'Ajouter une recette',
        'edit_item' => 'Modifier la recette',
        'menu_name' => 'Recettes'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title'),
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
        'add_new' => 'Ajouter un cadeau',
        'add_new_item' => 'Ajouter un cadeau',
        'edit_item' => 'Modifier le cadeau',
        'menu_name' => 'Cadeaux'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => get_template_directory_uri() . '/assets/images/png/gift_icon.png',
	);

	register_post_type( 'cadeaux', $args );
}
add_action( 'init', 'recettes_register_post_types' ); 
add_action( 'init', 'cadeaux_register_post_types' ); 