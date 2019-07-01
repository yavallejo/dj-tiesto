<?php get_header(); ?>
    <main class="main">
        <?php 
        $prestentationbool= get_field('po_prese_mostrar_seccion', 'option');
        if($prestentationbool){
        ?>
            <section class="presentations sectionBorder sectionBorder--bottom paddingSection"
                <?php if ( get_field('po_prese_imagen_fondo', 'option') ) : ?>
                style="background-image:url('<?php echo get_field('po_prese_imagen_fondo', 'option'); ?>')" <?php endif; ?> >       
                <article class="container">
                    <?php if ( get_field('po_prese_titulo', 'option') ) : ?>                    
                        <h2 class="title title--white"><?php echo get_field('po_prese_titulo', 'option'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('po_prese_descripcion', 'option') ) : ?>
                        <p><?php echo get_field('po_prese_descripcion', 'option'); ?></p>
                    <?php endif; ?>
                    
                    <div class="presentations__details row mt-5">
                        <div class="presentations__details--title col col-md-2">Hora</div>
                        <div class="presentations__details--title col col-md-2">DJ</div>
                        <div class="presentations__details--title col col-md-3 d-none d-lg-block"></div>
                        <div class="presentations__details--title col col-md-2 d-none d-lg-block">Escenario</div>
                        <div class="presentations__details--title col col-md-3">Ticket</div>
                    </div> <!--Titulo de las presentaciones-->

                    <?php

                        // The Query
                        $args = array(
                                    'post_type' => 'presentaciones',
                                    'posts_per_page' => 5
                                );
                        $the_query = new WP_Query( $args );

                        // The Loop
                        if ( $the_query->have_posts() ) {
                            
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                    ?>
                                <div class="presentations__details row align-items-center mt-3">
                                    <div class="presentations__details--information col col-md-2">
                                        <?php if ( get_field('prese_hora') ) : ?>
                                            <?php echo get_field('prese_hora'); ?>
                                            <?php else:?>
                                            <?php echo "Pendiente"; ?>
                                        <?php endif; ?>
                                        
                                    </div>
                                    <div class="presentations__details--information col col-md-2"><?php the_title();?></div>
                                    <div class="presentations__details--information col col-md-3 d-none d-lg-block">

                                        <?php
                                            if ( has_post_thumbnail() ) { 
                                                the_post_thumbnail('full', ['class' => 'img-fluid']);
                                            }else{
                                                ?>
                                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/placeholder-dj.jpg" alt="WP Festival">
                                                <?php
                                            }
                                        ?>

                                        
                                    </div>
                                    <div class="presentations__details--information col col-md-2 d-none d-lg-block">
                                        <?php if ( get_field('prese_escenario') ) : ?>
                                            <?php echo get_field('prese_escenario'); ?>
                                            <?php else:?>
                                            <?php echo "Pendiente"; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="presentations__details--information col col-md-3 d-flex">
                                        <a class="btn btn-primary mr-3 d-none d-lg-block"
                                           target="_blank"
                                           href="<?php if ( get_field('prese_link_detalles') ) : ?>
                                                    <?php echo get_field('prese_link_detalles'); ?>
                                                    <?php else:?>
                                                    <?php echo "#"; ?>
                                                <?php endif; ?>">
                                           Detalles
                                        </a>
                                        <a class="btn btn-primary"
                                           target="_blank"
                                           href="<?php if ( get_field('prese_link_tickets') ) : ?>
                                                    <?php echo get_field('prese_link_tickets'); ?>
                                                    <?php else:?>
                                                    <?php echo "#"; ?>
                                                <?php endif; ?>">
                                           Tickets
                                        </a>
                                    </div>
                                </div> <!--Descripción presentaciones-->
                    <?php
                                
                            }
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }
                    
                    ?>
                    
                    
                    



                    <div class="row justify-content-center mt-5">
                        <a class="btn btn-primary btn-lg" href="djs.html" id="">Ver Todas</a>
                    </div>
                </article>
            </section> <!--End Presentaciones-->
        <?php    
            }             
        ?>    
        
        <?php if ( get_field('po_esta_mostrar_seccion', 'option') ) : ?>
            <section class="numberEvents d-none d-lg-block paddingSection">
                <div class="container">
                    <article class="row justify-content-between align-items-center">
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('po_rp_esta_item','option') ):
                            // loop through the rows of data
                            while ( have_rows('po_rp_esta_item','option') ) : the_row();
                        ?>
                            <div class="numberEvents__item">
                                <?php if ( get_sub_field('po_rp_esta_icono', 'option') ) : ?>
                                    <img src="<?php the_sub_field('po_rp_esta_icono', 'option'); ?>" alt="<?php the_sub_field('po_rp_esta_titulo', 'option'); ?>">
                                <?php endif; ?>
                                <?php if ( get_sub_field('po_rp_esta_valor', 'option') ) : ?>
                                    <h6><?php the_sub_field('po_rp_esta_valor', 'option'); ?></h6>
                                <?php endif; ?>                            
                                <?php if ( get_sub_field('po_rp_esta_titulo', 'option') ) : ?>
                                    <h5><?php the_sub_field('po_rp_esta_titulo', 'option'); ?></h5>
                                <?php endif; ?>
                            </div>
                        <?php
                            endwhile;
                        else :
                            echo "no tenemos contenido para mostrar en esta sección";
                        endif;
                        ?>                    
                    </article>
                </div>
            </section> <!--End NumberEvents-->
        <?php endif; ?>
        
        
        <?php if ( get_field('po_djs_mostrar_seccion', 'option') ) : ?>
            <section class="djs sectionBorder--top sectionBorder--bottom paddingSection">
                <div class="container">
                    <article class="row">
                        <div class="col-md-9 pl-0 order-1 order-md-0">
                            <ul class="list-unstyled djs__gallery">
                                <?php
                                    $args = array(
                                                    'post_type' => 'djs',
                                                    'posts_per_page' => 10
                                                );
                                    // The Query
                                    $the_query = new WP_Query( $args );
                                    // The Loop
                                    if ( $the_query->have_posts() ) {
                                        while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                ?>
                                            <li>
                                                <figure>
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                      <?php  the_post_thumbnail('full', ['class' => 'img-fluid']);?>
                                                    <?php endif; ?>
                                                    <figcaption>
                                                        <h5 class="djs__name"><?php the_title();?></h5>
                                                        <?php if ( get_field('djs_genero') ) : ?>
                                                            <h6 class="djs__type"><?php  the_field('djs_genero'); ?></h6>
                                                        <?php endif; ?>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                 <?php
                                        }                                        
                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    } else {
                                        // no posts found
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="col-md-3 text-center text-md-right order-0 djs__information">
                            <?php if ( get_field('po_djs_titulo', 'option') ) : ?>
                                <h2 class="title title--black title--small text-md-right"><?php echo get_field('po_djs_titulo', 'option'); ?></h2>
                            <?php endif; ?>
                            <?php if ( get_field('po_djs_descripcion', 'option') ) : ?>
                                <p><?php echo get_field('po_djs_descripcion', 'option'); ?></p>
                            <?php endif; ?>                            
                            <ul class="d-flex list-unstyled justify-content-center justify-content-md-end mb-4">
                                <li class="mr-2">
                                    <a href="javascript:void(0);" class="JS-slick-next"><img src="<?php bloginfo('template_directory');?>/assets/img/icon_left_slick.png" alt="" class=""></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="JS-slick-prev"><img src="<?php bloginfo('template_directory');?>/assets/img/icon_right_slick.png" alt=""></a>
                                </li>
                            </ul>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>djs" class="btn btn-primary d-none mt-5 d-md-inline-block">Ver Todos</a>
                        </div>
                    </article>
                </div>
            </section> <!--End DJS-->
        <?php endif; ?>
        

       <?php if ( get_field('po_ticket_mostrar_seccion', 'option') ) : ?>
            <section class="tickets paddingSection">
                <article class="container">
                    <?php if ( get_field('po_ticket_mostrar_titulo', 'option') ) : ?>
                        <h2 class="title title--white"><?php echo get_field('po_ticket_mostrar_titulo', 'option'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('po_ticket_mostrar_descripcion', 'option') ) : ?>
                        <p class="subtitle"><?php echo get_field('po_ticket_mostrar_descripcion', 'option'); ?></p>
                    <?php endif; ?>
                    
                    
                    <div class="row">
                        <?php
                            $args = array(
                                            'post_type' => 'tickets',
                                            'posts_per_page' => 3
                                        );
                            // The Query
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) {
                                $flag = 1;
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                        ?>
                                    <div class="col tickets__price <?php if ($flag === 1) { echo "ml-lg-0"; }else if($flag === 3){ echo "mr-lg-0"; } else { echo "";} ?>">
                                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                                            <?php
                                                $ticketPuntuacion = get_field('tickets_puntuacion');
                                                for ($i=0; $i < $ticketPuntuacion; $i++) { 
                                            ?>
                                                    <li>
                                                        <img alt="" src="<?php the_field('tickets_icono');?>">
                                                    </li>
                                            <?php
                                                }                                            
                                            ?>
                                        </ul>
                                        <h4 class="text-uppercase <?php if ($flag === 1) { echo "text--red"; }else if($flag === 3){ echo "text--purple"; } else { echo "text--pink";} ?>"><?php the_title(); ?></h4>
                                        <?php if ( get_field('tickets_descripcion') ) : ?>
                                            <p><?php the_field('tickets_descripcion'); ?></p>
                                        <?php endif; ?>
                                        <?php if ( get_field('tickets_precio') ) : ?>
                                            <span class="tickets__number"><?php echo get_field('tickets_precio'); ?></span>
                                        <?php else: ?>
                                             <span class="tickets__number">0</span>
                                        <?php endif; ?>
                                            
                                        
                                        <ul class="list-unstyled list-square text-left pl-4 pr-4 pt-2">
                                            <?php if ( have_rows('tickets_rp_caracteristicas') ) : ?>
                                            
                                                <?php while( have_rows('tickets_rp_caracteristicas') ) : the_row(); ?>
                                            
                                                    <li><?php the_sub_field('tickets_rp_item'); ?></li>
                                            
                                                <?php endwhile; ?>
                                            
                                            <?php endif; ?>
                                        </ul>
                                        <a href="<?php the_field('tickets_link_pagar'); ?>" id="" class="btn btn-primary">Comprar</a>
                                    </div>
                        <?php
                                $flag++;
                                }
                                
                                /* Restore original Post Data */
                                wp_reset_postdata();
                            } else {
                                // no posts found
                            }
                        ?>
                        
                    </div>
                </article>
            </section> <!--End Tickets-->
       <?php endif; ?>
        
        

        <?php if ( get_field('po_patroci_mostrar_seccion', 'option') ) : ?>
            <section class="sponsors paddingSection" style="background-image:url(<?php the_field('po_patroci_imagen_de_fondo','option');?>);">
                <div class="container">
                    <?php if ( get_field('po_patroci_titulo', 'option') ) : ?>
                        <h2 class="title title--white title--small text-md-right"><?php echo get_field('po_patroci_titulo', 'option'); ?></h2>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12 col-md-10 order-2 order-md-0 mt-5 mt-md-0">
                            <div class="sponsors__gallery">
                                <?php
                                    $args = array(
                                                'post_type' => 'patrocinadores',
                                                'posts_per_page' => 10
                                            );
                                    // The Query
                                    $the_query = new WP_Query( $args );
                                    // The Loop
                                    if ( $the_query->have_posts() ) {
                                        
                                        while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                ?>
                                        <div>
                                            <?php
                                            if ( has_post_thumbnail() ) :
                                                the_post_thumbnail('full', ['class' => 'img-fluid']);
                                            endif;
                                            ?>
                                        </div>
                                <?php
                                    }
                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    } else {
                                        // no posts found
                                    }
                                ?>



                                
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-2 order-1 order-md-1 ">
                                <ul class="d-flex list-unstyled justify-content-center justify-content-md-end align-items-center h-100">
                                    <li class="mr-2">
                                        <a href="javascript:void(0);" class="JS-slickSponsors-next"><img src="<?php bloginfo('template_directory');?>/assets/img/icon_left_slick.png" alt="" class=""></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="JS-slickSponsors-prev"><img src="<?php bloginfo('template_directory');?>/assets/img/icon_right_slick.png" alt=""></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </section> <!--End Sponsors-->
        <?php endif; ?>
        
        


        <?php if ( get_field('po_galeria_mostrar_seccion', 'option') ) : ?>
            <section class="gallery pb-0 position-relative paddingSection">
                <header class="container sectionBorder--top">
                    <?php if ( get_field('po_galeria_titulo', 'option') ) : ?>
                        <h2 class="title title--black"><?php echo get_field('po_galeria_titulo', 'option'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('po_galeria_descripcion', 'option') ) : ?>
                        <p><?php echo get_field('po_galeria_descripcion', 'option'); ?></p>
                    <?php endif; ?>
                </header>
                <article class="container-fluid">
                    <div class="row mt-5">
                        <?php
                            
                            $args = array(
                                        'post_type' => 'galeria',
                                        'posts_per_page'  => 1                                        
                                    );
                            
                            // The Query
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) {
                                        
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                        ?>
                                    <?php if ( have_rows('galeria_rp_galeria') ) : ?>
                                        <?php while( have_rows('galeria_rp_galeria') ) : the_row(); ?>
                                            <div class="col-6 col-md-4 p-0">
                                                <figure class="gallery__animation">
                                                    <img class="img-fluid" src="<?php the_sub_field('galeria_rp_imagen');?>" alt="Galeria">
                                                    <figcaption>
                                                        <h4><?php the_sub_field('galeria_rp_titulo'); ?></h4>
                                                        <h6><?php the_sub_field('galeria_rp_evento'); ?></h6>
                                                    </figcaption>
                                                </figure>
                                            </div>                                                
                                        <?php endwhile; ?>                                                
                                    <?php endif; ?>                                              
                        <?php
                                }
                                /* Restore original Post Data */
                                wp_reset_postdata();
                            } else {
                                // no posts found
                                   }
                        ?>
                        
                        
                        
                    </div>
                </article>
            </section> <!--End Gallery-->
        <?php endif; ?>
        
        




        <section class="news paddingSection">
            <article class="container">
                <h2 class="title title--white title--small text-md-right">Noticias</h2>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="news__item">
                            <figure>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/news_brasil.png" alt="Brasil">
                                <figcaption>Categoría - Sep 5</figcaption>
                            </figure>
                            <h2>Disponible la primera preventa</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div>
                    </div>
                    <div class="col-5 offset-1 news__item--right">
                        <div class="news__item">
                            <figure>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/news_colombia.png" alt="Brasil">
                                <figcaption>Categoría - Sep 5</figcaption>
                            </figure>
                            <h2>Disponible la primera preventa</h2>
                        </div>
                        <div class="news__item">
                            <figure>
                                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/news_alexio.png" alt="Brasil">
                                <figcaption>Categoría - Sep 5</figcaption>
                            </figure>
                            <h2>Disponible la primera preventa</h2>
                        </div>
                    </div>
                </div>
            </article>
        </section><!--End News-->
    </main>
<?php get_footer(); ?>
    