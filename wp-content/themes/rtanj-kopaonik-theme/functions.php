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
    // Theme support
    
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('widgets');

    // Menus 

    register_nav_menus ( 
        array (
            'primary' => __('Main navigation menu', 'rtanj-kopaonik-theme'),
            'secondary' => __('Footer navigation menu', 'rtanj-kopaonik-theme')
        )
    );
    
}

// Add SVG support

add_filter('upload_mimes', 'cc_mime_types');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// Add logo to menu

add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
function add_new_menu_item( $nav, $args ) {
    if( $args->theme_location == 'top-menu' ){
        $newmenuitem = '<li class="logo-item"><a href="' . home_url() .'"><img src="/wp-content/uploads/2025/02/Frame-65.svg"/></a></li>';
        $nav = $newmenuitem.$nav;
        return $nav;
    } 
    
    //return all other menues
    return $nav;
}

// add widgets

add_action('widgets_init', 'rtanjSidebars');

function rtanjSidebars(){
    register_sidebar (
        array (
            'name' => 'Footer Col 2',
            'id' => 'col-2-sidebar'
        )
    );
    register_sidebar (
        array (
            'name' => 'Footer Col 4',
            'id' => 'col-4-sidebar'
        )
    );
}
