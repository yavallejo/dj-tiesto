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
                                                <img class="img-fluid" src="https://via.placeholder.com/150x164.jpg/FD275F/FFFFFF" alt="Dj Default">
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
        
        
        <section class="numberEvents d-none d-lg-block paddingSection">
            <div class="container">
                <article class="row justify-content-between align-items-center">
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_lights.png" alt="2000 Luces Increibles">
                        <h6>2000</h6>
                        <h5>Luces Increibles</h5>
                    </div>
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_djs.png" alt="12 Djs Top Mundial">
                        <h6>12</h6>
                        <h5>Djs Top Mundial</h5>
                    </div>
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_music_hours.png" alt="1000 Horas de Música">
                        <h6>1000</h6>
                        <h5>Horas de Música</h5>
                    </div>
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/icon_assistens.png" alt="10000 Asistentes">
                        <h6>10000</h6>
                        <h5>Asistentes</h5>
                    </div>
                </article>
            </div>
        </section> <!--End NumberEvents-->
        <section class="djs sectionBorder--top sectionBorder--bottom paddingSection">
            <div class="container">
                <article class="row">
                    <div class="col-md-9 pl-0 order-1 order-md-0">
                        <ul class="list-unstyled djs__gallery">
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj_alexio.png" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj_caroline.png" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Caroline</h5>
                                        <h6 class="djs__type">Electro house</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj_sabrina.png" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Sabrina</h5>
                                        <h6 class="djs__type">Grime music‎</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj-caroline.jpg" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Caroline</h5>
                                        <h6 class="djs__type">Trip hop‎</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj-mager.jpg" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Mager</h5>
                                        <h6 class="djs__type">Future bass</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj-krakenas.jpg" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Krakenas</h5>
                                        <h6 class="djs__type">Krautrock</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj-murdock.jpg" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Murdock</h5>
                                        <h6 class="djs__type">Synthwave</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/dj-isabella.jpg" alt="DJ">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Isabella</h5>
                                        <h6 class="djs__type">Soundscape</h6>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>                        
                    </div>
                    <div class="col-md-3 text-center text-md-right order-0 djs__information">
                        <h2 class="title title--black title--small text-md-right">DJS</h2>
                        <p>Ellos son el verdadero foco de atención de nuestro evento</p>
                        <ul class="d-flex list-unstyled justify-content-center justify-content-md-end mb-4">
                            <li class="mr-2">
                                <a href="javascript:void(0);" class="JS-slick-next"><img src="<?php bloginfo('template_directory');?>/assets/img/icon_left_slick.png" alt="" class=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="JS-slick-prev"><img src="<?php bloginfo('template_directory');?>/assets/img/icon_right_slick.png" alt=""></a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary d-none mt-5 d-md-inline-block">Ver Todos</a>
                    </div>
                </article>
            </div>
        </section> <!--End DJS-->
        <section class="tickets paddingSection">
            <article class="container">
                <h2 class="title title--white">Tickets</h2>
                <p class="subtitle">Tenemos varias opciones para todos los gustos, consigue una que se adapte a ti.</p>
                <div class="row">
                    <div class="col tickets__price ml-lg-0">
                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                        </ul>
                        <h4 class="text-uppercase text--red">BPM</h4>
                        <p>Ubicación e graderia, acceso por la zona norte del establecimiento</p>
                        <span class="tickets__number">40</span>
                        <ul class="list-unstyled list-square text-left pl-4 pr-4 pt-2">
                            <li>Escenario Principal</li>
                            <li>Camiseta - 1 Bebida</li>
                            <li>Acceso Zonas comunes</li>
                        </ul>
                        <a href="#" id="" class="btn btn-primary">Comprar</a>
                    </div>
                    <div class="col tickets__price">
                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                        </ul>
                        <h4 class="text-uppercase text--pink">Echo</h4>
                        <p>Ubicación e graderia, acceso por la zona norte del establecimiento</p>
                        <span class="tickets__number">40</span>
                        <ul class="list-unstyled list-square text-left pl-4 pr-4 pt-2">
                            <li>Escenario Principal</li>
                            <li>Camiseta - 1 Bebida</li>
                            <li>Acceso Zonas comunes</li>
                        </ul>
                        <a href="#" id="" class="btn btn-primary">Comprar</a>
                    </div>
                    <div class="col tickets__price mr-lg-0">
                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                            <li><img alt="" src="<?php bloginfo('template_directory');?>/assets/img/icon_tickets.png"></li>
                        </ul>
                        <h4 class="text-uppercase text--purple">Loop</h4>
                        <p>Ubicación e graderia, acceso por la zona norte del establecimiento</p>
                        <span class="tickets__number">40</span>
                        <ul class="list-square list-unstyled text-left pl-4 pr-4 pt-2">
                            <li>Escenario Principal</li>
                            <li>Camiseta - 1 Bebida</li>
                            <li>Acceso Zonas comunes</li>
                        </ul>
                        <a href="#" id="" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </article>
        </section> <!--End Tickets-->
        <section class="sponsors paddingSection">
            <div class="container">
                <h2 class="title title--white title--small text-md-right">Patrocinadores</h2>
                <div class="row">
                   <div class="col-12 col-md-10 order-2 order-md-0 mt-5 mt-md-0">
                        <div class="sponsors__gallery">
                            <div><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/sponsor_babis_beats.png" alt="Sponsor"></div>
                            <div><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/sponsor_discoman.png" alt="Sponsor"></div>
                            <div><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/sponsor_gipsod.png" alt="Sponsor"></div>
                            <div><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/sponsor_los_angeles.png" alt="Sponsor"></div>
                            <div><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/sponsor_stan.png" alt="Sponsor"></div>
                            <div><img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/sponsor_street_wear_shop.png" alt="Sponsor"></div>
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
        <section class="gallery pb-0 position-relative paddingSection">
            <header class="container sectionBorder--top">
                <h2 class="title title--black">Galeria de imagenes</h2>
                <p>Fotografias evento del año anterior Medellín 2017</p>
            </header>
            <article class="container-fluid">
                <div class="row mt-5">
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/gallery_brasil.png" alt="Galeria">
                            <figcaption>
                                <h4>WP Festival Músic</h4>
                                <h6>Headless 2017</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/gallery_colombia.png" alt="Galeria">
                            <figcaption>
                                <h4>WP Festival Músic</h4>
                                <h6>Headless 2017</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/gallery_fabricio.png" alt="Galeria">
                            <figcaption>
                                <h4>WP Festival Músic</h4>
                                <h6>Headless 2017</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/gallery_dj.png" alt="Galeria">
                            <figcaption>
                                <h4>WP Festival Músic</h4>
                                <h6>Headless 2017</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/gallery_francia.png" alt="Galeria">
                            <figcaption>
                                <h4>WP Festival Músic</h4>
                                <h6>Headless 2017</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/gallery_tomorroland.png" alt="Galeria">
                            <figcaption>
                                <h4>WP Festival Músic</h4>
                                <h6>Headless 2017</h6>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </article>
        </section> <!--End Gallery-->
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
    