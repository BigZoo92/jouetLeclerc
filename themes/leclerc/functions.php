<?php

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En-tête du menu');
}

add_action('after_setup_theme', 'montheme_supports');

include_once 'custom-post-type.php'; 
include_once 'taxonomy.php';
include_once 'remove-menu.php'; 
include_once 'register-assets.php';

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );
/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function my_login_redirect( $redirect_to, $request, $user ) {
	// is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		// check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}








