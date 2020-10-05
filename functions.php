<?php 


function setup_menus() {
    register_nav_menu('header_menu', __("Header Menu"));
    register_nav_menu('footer_menu', __("Footer Menu"));
}

add_action( 'init', 'setup_menus');

?>