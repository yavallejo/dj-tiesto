<?php

//  This feature enables Post Thumbnails support for a theme

add_theme_support( 'post-thumbnails');  

// Custom Logo

function djtiesto_custom_logo(){
    add_theme_support( 'custom-logo', array(
        'height'      => 126,
        'width'       => 272,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
}

add_action( 'after_setup_theme', 'djtiesto_custom_logo' );

// HTML5

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// Title Tag

add_theme_support( 'title-tag' );

// Add image size

add_image_size( 'blog', 1070, 449, true );
add_image_size( 'blog-home', 600, 650 , true);
add_image_size( 'djs', 280, 350, true );
add_image_size( 'djs-modal', 502, 628, true );



// Include custom navwalker
require_once('bs4navwalker.php');

//Register menu

function djtiesto_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'djtiesto_menus' );
