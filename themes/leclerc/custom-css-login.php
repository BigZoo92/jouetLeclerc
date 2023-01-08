<?php
function capitaine_login_logo() {
	wp_enqueue_style( 
        'custom-login', 
        get_template_directory_uri() . '/assets/css/style.css', 
        array( 'login' ) 
    );
}
add_action( 'login_enqueue_scripts', 'capitaine_login_logo' );