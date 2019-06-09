<?php
    /**
     * Enqueue Scripts and STyles
     */
    require get_template_directory() . '/inc/enqueue.php';

    /**
     * Admin Page Options ACF PRO
     */
    require get_template_directory() . '/inc/admin.php';

    // Pendiente
    add_theme_support( 'post-thumbnails' );