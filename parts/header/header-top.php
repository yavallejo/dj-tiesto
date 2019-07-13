 <div class="container pt-1 pt-md-4 header__top">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php
                if ( function_exists( 'djtiesto_custom_logo' ) ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    if ($custom_logo_id) {
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img class="img-fluid" src="' . esc_url( $custom_logo_url ) . '" alt="WP Music Festival">';
                    }else{
                        ?>
                        <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/icon_instagram.png" alt="Logo Default">
                        <?php
                    }
                    
                }
            ?>
        </a>
        <button class="navbar-toggler js-custom-toggler custom-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
            aria-expanded="false" aria-label="Toggle navigation">
            <span> </span>
            <span> </span>
            <span> </span>
        </button>
        
        <?php
            wp_nav_menu([
                
                'theme_location'  => 'header-menu',
                'container'       => 'div',
                'container_id'    => 'navbarNavAltMarkup',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav text-center',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
            ]);
        ?>
    </nav>
</div>