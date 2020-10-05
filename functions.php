<?php 


function setup_menus() {
    register_nav_menu('header_menu', __("Header Menu"));
    register_nav_menu('footer_menu', __("Footer Menu"));
}

add_action( 'init', 'setup_menus');


function load_resources() {
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_script( 'index.js', get_template_directory_uri().'/index.js');
}

add_action( 'wp_enqueue_scripts', 'load_resources');
?>