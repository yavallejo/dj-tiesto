<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' );?>">
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,700|Saira:300,400,500,700" rel="stylesheet">
    <?php wp_head(); ?>
    
</head>
<body>
    <header class="header"
        <?php if ( get_field('po_slider_imagen_principal', 'option') ) : ?>            
            style="background-image: url('<?php echo get_field('po_slider_imagen_principal', 'option'); ?>');"
        <?php endif; ?>
     >
        <div class="container pt-1 pt-md-4 header__top">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
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
        <div class="container header__bottom">
            <ul class="header__meta list-inline d-flex">
                <?php if ( get_field('po_slider_fecha_del_evento', 'option') ) : ?>                    
                    <li>
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_date.png" alt="<?php echo get_field('po_slider_fecha_del_evento', 'option'); ?>"> <?php echo get_field('po_slider_fecha_del_evento', 'option'); ?>
                    </li>
                <?php endif; ?>
                
                <?php if ( get_field('po_slider_cantidad_de_djs', 'option') ) : ?>
                    <li>
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_headphones.png" alt="<?php echo get_field('po_slider_cantidad_de_djs', 'option'); ?>"> <?php echo get_field('po_slider_cantidad_de_djs', 'option'); ?> Djs
                    </li>
                <?php endif; ?>

                <?php if ( get_field('po_slider_entradas_disponibles', 'option') ) : ?>
                    
                    <li>
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_ticket.png" alt="<?php echo get_field('po_slider_entradas_disponibles', 'option'); ?>"> <?php echo get_field('po_slider_entradas_disponibles', 'option'); ?> Entradas
                    </li>
                <?php endif; ?>
            </ul>
            <div class="header__information">            
                <?php if ( get_field('po_slider_titulo_del_evento', 'option') ) : ?>
                    <h2>
                        <?php echo get_field('po_slider_titulo_del_evento', 'option'); ?>
                    </h2>
                <?php endif; ?>

                <?php if ( get_field('po_slider_descripcion', 'option') ) : ?>
                    <p class="mb-0 mt-4 mt-md-0 pl-3 pr-3 p-md-0">
                        <?php echo get_field('po_slider_descripcion', 'option'); ?>
                    </p>
                <?php endif; ?> 

                <p class="d-none d-md-block mt-0">Luces, buena música y los mejores Djs.</p>
                
                <?php if ( get_field('po_slider_link_compra', 'option') ) : ?>
                    <div class="header__btn">
                        <a href="<?php echo get_field('po_slider_link_compra', 'option'); ?>" class="btn btn-primary btn-lg mt-5 mt-md-3">Comprar Tickets</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header> <!--Header-->