<?php

function an_add_scripts(){
    global $post;
    $current_post_id = $post->ID; 

    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css', array(), time());
    // wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css', array(), time());
    // wp_enqueue_style('kontakt', get_template_directory_uri() . '/assets/css/kontakt.css', array(), time());
    if($current_post_id == 36){
        wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css', array(), time());
    }

    if($current_post_id == 59){
        wp_enqueue_style('kontakt', get_template_directory_uri() . '/assets/css/kontakt.css', array(), time());
    }
    if($current_post_id == 49){
        wp_enqueue_style('oferta', get_template_directory_uri() . '/assets/css/oferta.css', array(), time());
    }

    if($current_post_id == 94){
        wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/portfolio.css', array(), time());
    }

    // wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/portfolio.css', array(), time());
    wp_enqueue_style('max', get_template_directory_uri() . '/assets/css/max.css', array(), time());

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'an_add_scripts');

