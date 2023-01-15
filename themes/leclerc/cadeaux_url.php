<?php
/**
 * Template Name: cadeaux_url
 */
    $args = array(
        'post_type' => 'cadeaux',
    );
    $custom_query = new WP_Query($args);
    if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0];
    $tab[] = array('prix'=>get_field('prix'), 'reduction'=>get_field('montant_reduction'),'image'=>$image, 'titre'=>get_the_title());
    endwhile;
    endif;
    echo  json_encode(($tab));