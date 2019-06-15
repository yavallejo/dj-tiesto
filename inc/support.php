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

add_image_size( 'sincortar', 220, 180 );
add_image_size( 'cortar', 300, 300, true );
add_image_size( 'cortarlefttop', 500, 500, array( 'right', 'bottom' ) );
