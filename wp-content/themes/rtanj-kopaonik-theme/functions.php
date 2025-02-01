<?php

// Scripts 

add_action('wp_enqueue_scripts', 'rtanj_scripts');

function rtanj_scripts(){
    wp_enqueue_style('style-rtanj', get_stylesheet_uri(), '', 1.0, 'all');
    wp_enqueue_style('namdhinggo-font', 'https://fonts.googleapis.com/css2?family=Namdhinggo:wght@400;500;600;700;800&display=swap');
    wp_enqueue_style('segoe-font', 'https://fonts.cdnfonts.com/css/segoe-ui-4');    
}

// Menus and support

add_action('after_setup_theme', 'rtanjSetup');

function rtanjSetup(){
    add_theme_support('menus');
    add_theme_support('custom-logo');

    register_nav_menus ( 
        array (
        'top-menu' => __('Main navigation menu', 'rtanj-kopaonik-theme'),
        'bottom-menu' => __('Footer navigation menu', 'rtanj-kopaonik-theme'),
    ));
}

// Add SVG support

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

// Add logo

add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
function add_new_menu_item( $nav, $args ) {
    if( $args->theme_location == 'top-menu' ){
        $newmenuitem = '<li class="logo-item"><a href="' . home_url() .'"><img src="/wp-content/uploads/2025/02/Frame-65.svg"/></a></li>';
        $nav = $newmenuitem.$nav;
        return $nav;
    }
}
