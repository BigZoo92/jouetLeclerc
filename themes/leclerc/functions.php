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
include_once 'remove-menu.php';
include_once 'register-assets.php';

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}

add_filter('login_redirect', 'my_login_redirect', 10, 3);
/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function my_login_redirect($redirect_to, $request, $user)
{
	// is there a user to check?
	if (isset($user->roles) && is_array($user->roles)) {
		// check for admins
		if (in_array('administrator', $user->roles)) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_action('register_form', 'myplugin_register_form');
function myplugin_register_form()
{

	$first_name = (!empty($_POST['first_name'])) ? trim($_POST['first_name']) : '';
	$last_name = (!empty($_POST['last_name'])) ? trim($_POST['last_name']) : '';

	?>
	<p>
		<label for="first_name">
			<?php _e('Nom', 'mydomain') ?><br />
			<input type="text" name="first_name" id="first_name" class="input"
				value="<?php echo esc_attr(wp_unslash($first_name)); ?>" size="25" />
		</label>
	</p>

	<p>
		<label for="last_name">
			<?php _e('Prénom', 'mydomain') ?><br />
			<input type="text" name="last_name" id="last_name" class="input"
				value="<?php echo esc_attr(wp_unslash($last_name)); ?>" size="25" />
		</label>
	</p>

	<?php
}

//2. Add validation. In this case, we make sure first_name and last_name is required.
add_filter('registration_errors', 'myplugin_registration_errors', 10, 3);
function myplugin_registration_errors($errors, $sanitized_user_login, $user_email)
{

	if (empty($_POST['first_name']) || !empty($_POST['first_name']) && trim($_POST['first_name']) == '') {
		$errors->add('first_name_error', __('<strong>ERROR</strong>: You must include a first name.', 'mydomain'));
	}
	if (empty($_POST['last_name']) || !empty($_POST['last_name']) && trim($_POST['last_name']) == '') {
		$errors->add('last_name_error', __('<strong>ERROR</strong>: You must include a last name.', 'mydomain'));
	}
	return $errors;
}

//3. Finally, save our extra registration user meta.
add_action('user_register', 'myplugin_user_register');
function myplugin_user_register($user_id)
{
	if (!empty($_POST['first_name'])) {
		update_user_meta($user_id, 'first_name', trim($_POST['first_name']));
		update_user_meta($user_id, 'last_name', trim($_POST['last_name']));
	}
}

function change_role_name()
{
	global $wp_roles;

	if (!isset($wp_roles))
		$wp_roles = new WP_Roles();

	//You can list all currently available roles like this...
	//$roles = $wp_roles->get_names();
	//print_r($roles);

	//You can replace "administrator" with any other role "editor", "author", "contributor" or "subscriber"...
	$wp_roles->roles['subscriber']['name'] = 'Utilisateur';
	$wp_roles->role_names['subscriber'] = 'Utilisateur';
}
add_action('init', 'change_role_name');

add_action('login_head', function () {
	?>
	<style>
		#registerform>p:first-child {
			display: none;
		}
	</style>

	<script type="text/javascript" src="<?php echo site_url('/wp-includes/js/jquery/jquery.js'); ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('#registerform > p:first-child').css('display', 'none');
		});
	</script>
	<?php
});

//Remove error for username, only show error for email only.
add_filter('registration_errors', function ($wp_error, $sanitized_user_login, $user_email) {
	if (isset($wp_error->errors['empty_username'])) {
		unset($wp_error->errors['empty_username']);
	}

	if (isset($wp_error->errors['username_exists'])) {
		unset($wp_error->errors['username_exists']);
	}
	return $wp_error;
}, 10, 3);

add_action('login_form_register', function () {
	if (isset($_POST['user_login']) && isset($_POST['user_email']) && !empty($_POST['user_email'])) {
		$_POST['user_login'] = $_POST['user_email'];
	}
});

add_filter(  'gettext',  'login_text'  );
function login_text( $translating ) {
    $translated = str_ireplace(  'Votre adresse email',  'Votre adresse email',  $translating );
    return $translated;
}

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . './assets/css/style.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );