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
    <header class="header">
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
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center">
                        <a class="nav-item nav-link active" href="wp-festival.html">WP Festival</a>
                        <a class="nav-item nav-link" href="djs.html">DJS</a>
                        <a class="nav-item nav-link" href="presentaciones.html">Presentaciones</a>
                        <a class="nav-item nav-link" href="blog.html">Blog</a>
                        <a class="nav-item nav-link" href="contacto.html">Contacto</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container header__bottom">
            <ul class="header__meta list-inline d-flex">
                <li><img src="<?php bloginfo('template_directory');?>/assets/img/icon_date.png" alt="21 Sept 2018"> 21 Sept 2018</li>
                <li><img src="<?php bloginfo('template_directory');?>/assets/img/icon_headphones.png" alt="24 Djs"> 24 Djs</li>
                <li><img src="<?php bloginfo('template_directory');?>/assets/img/icon_ticket.png" alt="3000 Entradas"> 3000 Entradas</li>
            </ul>
            <div class="header__information">
                <h2>
                    <strong>WP</strong> Festival Music <strong>Bogotá</strong> 2018
                </h2>
                <p class="mb-0 mt-4 mt-md-0 pl-3 pr-3 p-md-0">Bogotá <strong>WP Festival Music</strong> es un Evento de música electrónica con Djs que estan dentro del Top 20 en el mundo.
                </p>
                <p class="d-none d-md-block mt-0">Luces, buena música y los mejores Djs.</p>
                <div class="header__btn">
                    <a href="#" class="btn btn-primary btn-lg mt-5 mt-md-3">Comprar Tickets</a>
                </div>
            </div>
        </div>
    </header> <!--Header-->