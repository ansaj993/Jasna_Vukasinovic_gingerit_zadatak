<?php

add_action('wp_enqueue_scripts', 'rtanj_scripts');

function rtanj_scripts(){
    wp_enqueue_style('style-rtanj', get_stylesheet_uri(), '', 1.0, 'all');
}

add_action('after_setup_theme', 'rtanjSetup');

function rtanjSetup(){
    add_theme_support('menus');

    register_nav_menus ( 
        array (
        'top-menu' => __('Main navigation menu', 'rtanj-kopaonik-theme'),
        'bottom-menu' => __('Footer navigation menu', 'rtanj-kopaonik-theme'),
    ));
}