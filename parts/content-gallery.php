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