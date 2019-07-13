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