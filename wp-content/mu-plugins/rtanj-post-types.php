<?php
function rtanj_post_types(){

     // Specijalne ponude Post Type

     register_post_type('specijalne-ponude', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'specijalne-ponude'),
        'has_archive' => true,
        'public' => true,
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
        'supports' => array('title'),
        'rewrite' => array('slug' => 'aktivnosti'),
        'has_archive' => true,
        'public' => true,
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
        'supports' => array('title'),
        'rewrite' => array('slug' => 'sadrzaji'),
        'has_archive' => true,
        'public' => true,
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
        'supports' => array('title'),
        'rewrite' => array('slug' => 'galerija'),
        'has_archive' => true,
        'public' => true,
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
}

add_action('init', 'rtanj_post_types');