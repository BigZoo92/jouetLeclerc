<?php
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Catégories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Catégorie', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Catégorie', 'text_domain' ),
		'all_items'                  => __( 'Toutes les catégories', 'text_domain' ),
		'parent_item'                => __( 'Catégorie parente', 'text_domain' ),
		'parent_item_colon'          => __( 'Catégorie parente:', 'text_domain' ),
		'new_item_name'              => __( 'Nouvelle catégorie', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie', 'text_domain' ),
		'edit_item'                  => __( 'Modifier la catégorie', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour la catégorie', 'text_domain' ),
		'view_item'                  => __( 'Voir la catégorie', 'text_domain' ),
		'separate_items_with_commas' => __( 'Séparez les éléments par des virgules', 'text_domain' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés', 'text_domain' ),
		'popular_items'              => __( 'Catégorie populaire', 'text_domain' ),
		'search_items'               => __( 'Rechercher des catégorie', 'text_domain' ),
		'not_found'                  => __( 'Pas trouvé', 'text_domain' ),
		'no_terms'                   => __( 'pas de catégorie', 'text_domain' ),
		'items_list'                 => __( 'liste de catégorie', 'text_domain' ),
		'items_list_navigation'      => __( 'Navigation dans la liste des catégories', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => 'categorie',
	);
	register_taxonomy( 'categorie', array( 'cadeaux', 'recettes' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );