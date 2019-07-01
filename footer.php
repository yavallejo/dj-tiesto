<footer class="footer">
        <div class="container-fluid pl-0 pr-0">
            <div class="row">
                <div class="col-lg-6">


                    <div class="d-flex flex-column justify-content-center footer__information text-center text-lg-left">
                        <h5><?php the_field('po_footer_titulo','option') ?> </h5>
                        <p class="d-none d-md-block mt-3">
                           <?php the_field('po_footer_descripción','option'); ?>
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center justify-content-lg-start mt-5">
                            <?php if ( have_rows('po_rp_footer_redes_sociales','option') ) : ?>
                            
                                <?php while( have_rows('po_rp_footer_redes_sociales','option') ) : the_row(); ?>
                            
                                    <li class="mr-4">
                                        <a href="<?php the_sub_field('po_rp_footer_link','option');?>" target="_blank">
                                            <img src="<?php the_sub_field('po_rp_footer_icono','option');?>" alt="<?php the_sub_field('po_rp_footer_icono','option');?>">
                                        </a>
                                    </li>
                            
                                <?php endwhile; ?>
                            
                            <?php endif; ?>
                            
                            
                            
                        </ul>





                        <nav class="footer__nav">
                            <ul class="list-unstyled  d-flex justify-content-center justify-content-lg-start">
                                <li class="mr-3"><a href="#">WP FESTIVAL</a></li>
                                <li class="mr-3"><a href="#">DJS</a></li>
                                <li class="mr-3"><a href="#">Presentaciones</a></li>
                                <li class="mr-3"><a href="#">Blog</a></li>
                                <li class="mr-3"><a href="#">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
    
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/mapa.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>