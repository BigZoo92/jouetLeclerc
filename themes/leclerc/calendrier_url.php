<?php
/**
 * Template Name: calendrier_url
 */
    $result = $wpdb->get_results( "SELECT user_value FROM `wp_prflxtrflds_user_field_data`");
    $tab[] = array('credit'=>$result[0]->user_value);
    echo  json_encode(($tab));