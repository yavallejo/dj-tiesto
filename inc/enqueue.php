<?php

    function add_theme_scripts() {
       
        wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.1.3', 'all');

        wp_enqueue_style( 'Font Awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');

        wp_enqueue_style( 'SlickCSS', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css', array(), '1.8.0', 'all');

         wp_enqueue_style( 'Slick Theme', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css', array(), '1.8.0', 'all');
        
        wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
        
        wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), "2018", true);

        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), "4.1.3", true);

        wp_enqueue_script( 'SlickJS', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js', array ( 'jquery' ), "1.8", true);

        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
    }
    // Hooks
    //     action
    //     filter
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );