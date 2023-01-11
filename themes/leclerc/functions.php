
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

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

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

add_action( 'loginForm', 'myplugin_add_login_fields' );

function myplugin_add_login_fields() {

    //Get and set any values already sent
    $user_extra = ( isset( $_POST['user_extra'] ) ) ? $_POST['user_extra'] : '';
    ?>

    <p>
        <label for="user_extra"><?php _e('Extra Field','mydomain') ?><br />
            <input type="text" name="user_extra" id="user_extra" class="input" value="<?php echo esc_attr(stripslashes($user_extra)); ?>" size="25" /></label>
    </p>

    <?php
}