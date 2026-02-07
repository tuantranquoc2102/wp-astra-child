<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'sticky-header-style', get_stylesheet_directory_uri() . '/assets/css/sticky-header.css', array('parent-style') );
}

// Enqueue custom JS for sticky header
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_scripts' );
function astra_child_enqueue_scripts() {
    wp_enqueue_script(
        'astra-child-sticky-header',
        get_stylesheet_directory_uri() . '/assets/js/sticky-header.js',
        array('jquery'),
        '1.0.0',
        true
    );
}