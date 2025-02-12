<?php
function rtanj_post_types(){

    // Specijalne ponude Post Type

    register_post_type('specijalne-ponude', array(
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'specijalne-ponude'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => __( 'Specijalne ponude', 'rtanj-kopaonik-theme' ),
            'singular_name' => __( 'Specijalna ponuda', 'rtanj-kopaonik-theme' ),
            'add_new' => __( 'Dodaj novu', 'rtanj-kopaonik-theme' ),
            'add_new_item' => __( 'Dodaj novu specijalnu ponudu', 'rtanj-kopaonik-theme' ),
            'new_item' => __( 'Nova specijalna ponuda', 'rtanj-kopaonik-theme' ),
            'view_item' => __( 'Vidi specijalnu ponudu', 'rtanj-kopaonik-theme' ),
            'view_items' => __( 'Vidi specijalne ponude', 'rtanj-kopaonik-theme' ),
            'edit_item' => __( 'Izmeni specijalnu ponudu', 'rtanj-kopaonik-theme' ),
            'all_items' => __( 'Sve specijalne ponude', 'rtanj-kopaonik-theme' ),
            'search_items' => __( 'Pretraži specijalne ponude', 'rtanj-kopaonik-theme' ),
            'not_found' => __( 'Nema pronadjenih Specijalnih ponuda', 'rtanj-kopaonik-theme' ),
            'not_found_in_trash' => __( 'Nema Specijalnih ponuda pronadjenih u otpadu', 'rtanj-kopaonik-theme' ),
        ),
        'menu_icon' => 'dashicons-palmtree',
    ));

    // Aktivnosti Post Type

    register_post_type('aktivnosti', array(
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'aktivnosti'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => __( 'Aktivnosti', 'rtanj-kopaonik-theme' ),
            'singular_name' => __( 'Aktivnost', 'rtanj-kopaonik-theme' ),
            'add_new' => __( 'Dodaj novu', 'rtanj-kopaonik-theme' ),
            'add_new_item' => __( 'Dodaj novu aktivnost', 'rtanj-kopaonik-theme' ),
            'new_item' => __( 'Nova aktivnost', 'rtanj-kopaonik-theme' ),
            'view_item' => __( 'Vidi aktivnost', 'rtanj-kopaonik-theme' ),
            'view_items' => __( 'Vidi aktivnosti', 'rtanj-kopaonik-theme' ),
            'edit_item' => __( 'Izmeni aktivnost', 'rtanj-kopaonik-theme' ),
            'all_items' => __( 'Sve aktivnosti', 'rtanj-kopaonik-theme' ),
            'search_items' => __( 'Pretraži aktivnosti', 'rtanj-kopaonik-theme' ),
            'not_found' => __( 'Nema pronadjenih aktivnosti', 'rtanj-kopaonik-theme' ),
            'not_found_in_trash' => __( 'Nema aktivnosti pronadjenih u otpadu', 'rtanj-kopaonik-theme' ),
        ),
        'menu_icon' => 'dashicons-universal-access',
    ));

    // Sadrzaj Post Type

    register_post_type('sadrzaji', array(
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'sadrzaji'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => __( 'Sadržaji', 'rtanj-kopaonik-theme' ),
            'singular_name' => __( 'Sadržaj', 'rtanj-kopaonik-theme' ),
            'add_new' => __( 'Dodaj novi', 'rtanj-kopaonik-theme' ),
            'add_new_item' => __( 'Dodaj novi sadržaj', 'rtanj-kopaonik-theme' ),
            'new_item' => __( 'Novi sadržaj', 'rtanj-kopaonik-theme' ),
            'view_item' => __( 'Vidi sadržaj', 'rtanj-kopaonik-theme' ),
            'view_items' => __( 'Vidi sadržaje', 'rtanj-kopaonik-theme' ),
            'edit_item' => __( 'Izmeni sadržaj', 'rtanj-kopaonik-theme' ),
            'all_items' => __( 'Svi sadržaji', 'rtanj-kopaonik-theme' ),
            'search_items' => __( 'Pretraži sadržaj', 'rtanj-kopaonik-theme' ),
            'not_found' => __( 'Nema pronadjenih sadržaja', 'rtanj-kopaonik-theme' ),
            'not_found_in_trash' => __( 'Nema sadržaja pronadjenih u otpadu', 'rtanj-kopaonik-theme' ),
        ),
        'menu_icon' => 'dashicons-media-document',
    ));

    // Smestaj Post Type

    register_post_type('smestaj', array(
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'smestaj'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => __( 'Smeštaji', 'rtanj-kopaonik-theme' ),
            'singular_name' => __( 'Smeštaj', 'rtanj-kopaonik-theme' ),
            'add_new' => __( 'Dodaj novi', 'rtanj-kopaonik-theme' ),
            'add_new_item' => __( 'Dodaj novi Smeštaj', 'rtanj-kopaonik-theme' ),
            'new_item' => __( 'Novi Smeštaj', 'rtanj-kopaonik-theme' ),
            'view_item' => __( 'Vidi Smeštaj', 'rtanj-kopaonik-theme' ),
            'view_items' => __( 'Vidi Smeštaje', 'rtanj-kopaonik-theme' ),
            'edit_item' => __( 'Izmeni Smeštaj', 'rtanj-kopaonik-theme' ),
            'all_items' => __( 'Svi Smeštaji', 'rtanj-kopaonik-theme' ),
            'search_items' => __( 'Pretraži Smeštaj', 'rtanj-kopaonik-theme' ),
            'not_found' => __( 'Nema pronadjenih Smeštaja', 'rtanj-kopaonik-theme' ),
            'not_found_in_trash' => __( 'Nema Smeštaja pronadjenih u otpadu', 'rtanj-kopaonik-theme' ),
        ),
        'menu_icon' => 'dashicons-format-gallery',
    ));

    // Iskustva Post Type

    register_post_type('iskustva', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'iskustva'),
        'has_archive' => false,
        'public' => true,
        'labels' => array(
            'name' => __( 'Iskustva', 'rtanj-kopaonik-theme' ),
            'singular_name' => __( 'Iskustvo', 'rtanj-kopaonik-theme' ),
            'add_new' => __( 'Dodaj novo', 'rtanj-kopaonik-theme' ),
            'add_new_item' => __( 'Dodaj novo iskustvo', 'rtanj-kopaonik-theme' ),
            'new_item' => __( 'Novo iskustvo', 'rtanj-kopaonik-theme' ),
            'view_item' => __( 'Vidi iskustvo', 'rtanj-kopaonik-theme' ),
            'view_items' => __( 'Vidi iskustva', 'rtanj-kopaonik-theme' ),
            'edit_item' => __( 'Izmeni iskustva', 'rtanj-kopaonik-theme' ),
            'all_items' => __( 'Sva iskustva', 'rtanj-kopaonik-theme' ),
            'search_items' => __( 'Pretraži iskustva', 'rtanj-kopaonik-theme' ),
            'not_found' => __( 'Nema pronadjenih iskustava', 'rtanj-kopaonik-theme' ),
            'not_found_in_trash' => __( 'Nema iskustava pronadjenih u otpadu', 'rtanj-kopaonik-theme' ),
        ),
        'menu_icon' => 'dashicons-star-filled',
    ));

     // Česta Pitanja Post Type

     register_post_type('cesta-pitanja', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'cesta-pitanja'),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => __( 'Česta Pitanja', 'rtanj-kopaonik-theme' ),
            'singular_name' => __( 'Često Pitanje', 'rtanj-kopaonik-theme' ),
            'add_new' => __( 'Dodaj novo', 'rtanj-kopaonik-theme' ),
            'add_new_item' => __( 'Dodaj novo pitanje', 'rtanj-kopaonik-theme' ),
            'new_item' => __( 'Novo pitanje', 'rtanj-kopaonik-theme' ),
            'view_item' => __( 'Vidi pitanje', 'rtanj-kopaonik-theme' ),
            'view_items' => __( 'Vidi pitanja', 'rtanj-kopaonik-theme' ),
            'edit_item' => __( 'Izmeni pitanja', 'rtanj-kopaonik-theme' ),
            'all_items' => __( 'Sva pitanja', 'rtanj-kopaonik-theme' ),
            'search_items' => __( 'Pretraži pitanja', 'rtanj-kopaonik-theme' ),
            'not_found' => __( 'Nema pronadjenih pitanja', 'rtanj-kopaonik-theme' ),
            'not_found_in_trash' => __( 'Nema pitanja pronadjenih u otpadu', 'rtanj-kopaonik-theme' ),
        ),
        'menu_icon' => 'dashicons-groups',
    ));

}

add_action('init', 'rtanj_post_types');