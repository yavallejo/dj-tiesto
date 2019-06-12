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
