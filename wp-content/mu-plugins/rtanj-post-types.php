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
            'name' => 'Specijalne ponude',
            'singular_name' => 'Specijalna ponuda',
            'add_new' => 'Dodaj novu',
            'add_new_item' => 'Dodaj novu specijalnu ponudu',
            'new_item' => 'Nova specijalna ponuda',
            'view_item' => 'Vidi specijalnu ponudu',
            'view_items' => 'Vidi specijalne ponude',
            'edit_item' => 'Izmeni specijalnu ponudu',
            'all_items' => 'Sve specijalne ponude',
            'search_items' => 'Pretraži specijalne ponude',
            'not_found' => 'Nema pronadjenih Specijalnih ponuda',
            'not_found_in_trash' => 'Nema Specijalnih ponuda pronadjenih u otpadu',
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
            'name' => 'Aktivnosti',
            'singular_name' => 'Aktivnost',
            'add_new' => 'Dodaj novu',
            'add_new_item' => 'Dodaj novu aktivnost',
            'new_item' => 'Nova aktivnost',
            'view_item' => 'Vidi aktivnost',
            'view_items' => 'Vidi aktivnosti',
            'edit_item' => 'Izmeni aktivnost',
            'all_items' => 'Sve aktivnosti',
            'search_items' => 'Pretraži aktivnosti',
            'not_found' => 'Nema pronadjenih aktivnosti',
            'not_found_in_trash' => 'Nema aktivnosti pronadjenih u otpadu',
        ),
        'menu_icon' => 'dashicons-universal-access',
    ));

    // Sadrzaj Post Type

    register_post_type('sadrzaj', array(
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'sadrzaji'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Sadržaj',
            'singular_name' => 'Sadržaj',
            'add_new' => 'Dodaj novi',
            'add_new_item' => 'Dodaj novi sadržaj',
            'new_item' => 'Novi sadržaj',
            'view_item' => 'Vidi sadržaj',
            'view_items' => 'Vidi sadržaje',
            'edit_item' => 'Izmeni sadržaj',
            'all_items' => 'Svi sadržaji',
            'search_items' => 'Pretraži sadržaj',
            'not_found' => 'Nema pronadjenih sadržaja',
            'not_found_in_trash' => 'Nema sadržaja pronadjenih u otpadu',
        ),
        'menu_icon' => 'dashicons-media-document',
    ));

    // Galerija Post Type

    register_post_type('galerija', array(
        'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'galerija'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Galerije',
            'singular_name' => 'Galerija',
            'add_new' => 'Dodaj novi',
            'add_new_item' => 'Dodaj novu Galeriju',
            'new_item' => 'Nova Galerija',
            'view_item' => 'Vidi Galeriju',
            'view_items' => 'Vidi Galerije',
            'edit_item' => 'Izmeni Galeriju',
            'all_items' => 'Sve Galerije',
            'search_items' => 'Pretraži Galeriju',
            'not_found' => 'Nema pronadjenih Galerija',
            'not_found_in_trash' => 'Nema Galerija pronadjenih u otpadu',
        ),
        'menu_icon' => 'dashicons-format-gallery',
    ));

    // Iskustva Post Type

    register_post_type('iskustva', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'iskustva'),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Iskustva',
            'singular_name' => 'Iskustvo',
            'add_new' => 'Dodaj novo',
            'add_new_item' => 'Dodaj novo iskustvo',
            'new_item' => 'Novo iskustvo',
            'view_item' => 'Vidi iskustvo',
            'view_items' => 'Vidi iskustva',
            'edit_item' => 'Izmeni iskustva',
            'all_items' => 'Sva iskustva',
            'search_items' => 'Pretraži iskustva',
            'not_found' => 'Nema pronadjenih iskustava',
            'not_found_in_trash' => 'Nema iskustava pronadjenih u otpadu',
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
            'name' => 'Česta Pitanja',
            'singular_name' => 'Često Pitanje',
            'add_new' => 'Dodaj novo',
            'add_new_item' => 'Dodaj novo pitanje',
            'new_item' => 'Novo pitanje',
            'view_item' => 'Vidi pitanje',
            'view_items' => 'Vidi pitanja',
            'edit_item' => 'Izmeni pitanja',
            'all_items' => 'Sva pitanja',
            'search_items' => 'Pretraži pitanja',
            'not_found' => 'Nema pronadjenih pitanja',
            'not_found_in_trash' => 'Nema pitanja pronadjenih u otpadu',
        ),
        'menu_icon' => 'dashicons-groups',
    ));

}

add_action('init', 'rtanj_post_types');