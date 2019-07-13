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