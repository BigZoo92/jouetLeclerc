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
include_once 'redirection-user.php';
include_once 'custom-css-login.php';









