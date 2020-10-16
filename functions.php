<?php


function setup_menus()
{
    register_nav_menu('header_menu', __("Header Menu"));
    register_nav_menu('footer_menu', __("Footer Menu"));
}

add_action('init', 'setup_menus');


function load_resources()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&family=Volkhov:wght@400;700&display=swap');
    wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_script('index.js', get_template_directory_uri() . '/index.js');
}

add_action('wp_enqueue_scripts', 'load_resources');


function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    $post_index = $wp_query->current_post +1 .'';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ //Defines a default image
            
      $first_img = get_template_directory_uri() .'/assets/default.jpg';
    }
    return $first_img;
  }
 
?>