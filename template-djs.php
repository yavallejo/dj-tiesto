<?php /* Template Name: DJS */ ?>
<?php get_header(); ?>
    <main class="main">
        <section class="djs sectionBorder--top sectionBorder--bottom paddingSection">
            <header class="container sectionBorder--top">
                <?php if ( get_field('po_djs_titulo', 'option') ) : ?>
                    <h2 class="title title--black"><?php echo get_field('po_djs_titulo', 'option'); ?></h2>
                <?php endif; ?>
                <?php if ( get_field('po_djs_descripcion', 'option') ) : ?>
                    <p><?php echo get_field('po_djs_descripcion', 'option'); ?></p>
                <?php endif; ?> 
                
            </header>
            <div class="container mt-5">
                <article class="row djs__centerMobile">
                    <?php
                        $args = array(
                            'post_type' => 'djs'
                        );
                        // The Query
                        $the_query = new WP_Query( $args );
                        
                        // The Loop
                        if ( $the_query->have_posts() ) {
                           
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                $postid = get_the_ID(  );
                    ?>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 djs__items" data-toggle="modal" data-target="#djsmodal<?php echo $postid; ?>">
                                    <figure>
                                        <div class="djs__animation">
                                            <?php
                                             the_post_thumbnail('full', ['class' => 'img-fluid']);
                                            ?>
                                            
                                            <a href="javascript:void(0);"></a>
                                        </div>                            
                                        <figcaption class="mt-2">
                                            <h5 class="djs__name"><?php the_title(); ?></h5>
                                            <h6 class="djs__type"><?php the_field('djs_genero');?></h6>
                                        </figcaption>
                                    </figure>
                                </div>
                                 <!-- Modals -->           
                                <div class="modal fade" id="djsmodal<?php echo $postid; ?>" tabindex="-1" role="dialog" aria-labelledby="Djs modal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <figure class="boxImage">
                                                            <?php
                                                                the_post_thumbnail('full', ['class' => 'img-fluid']);
                                                                ?>
                                                            </figure>
                                                        </div>
                                                        <div class="col-md-5 offset-md-1 ">
                                                            <h3 class="text-uppercase"><?php the_title();?></h3>
                                                            <?php the_content(); ?>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5 no-gutters pl-4 pr-4 position-relative d-none d-md-flex gallery__box">
                                                        <?php 

                                                        $images = get_field('djs_galeria');
                                                        
                                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)

                                                        if( $images ): ?>
                                                            
                                                                <?php foreach( $images as $image ): ?>
                                                                   
                                                                    <div class="col-md-4">
                                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                        
                                                        <?php endif; ?>
                                                        
                                                        

                                                        <!-- ------------------------- -->

                                                        <div class="instagramBox">
                                                            <?php if ( get_field('djs_instagram') ) : ?>
                                                                <strong class="d-block">@<?php echo get_field('djs_instagram'); ?></strong>
                                                            <?php endif; ?>
                                                            <span class="d-block">Instagram</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php          
                            }
                            
                        } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();

                    ?>

                    
                    
                </article>
            </div>

           










        </section><!--End DJS-->
        <?php get_template_part( 'parts/content', 'buytickets' ); ?> 

        <section class="previewMusical position-relative paddingSection">
            <header class="container sectionBorder--top">
                <?php if ( get_field('pageDjs_titulo') ) : ?>
                    <h2 class="title title--black"><?php echo get_field('pageDjs_titulo'); ?></h2>
                <?php endif; ?>
            </header>
            <article class="container">
                <div class="row mt-5">
                    <div class="col-md-6 pl-s-0">
                        <?php if ( get_field('pageDjs_descripcion') ) : ?>
                            <p><?php echo get_field('pageDjs_descripcion'); ?></p>
                        <?php endif; ?>
                        
                        
                        <div class="festivalMusic__specials mt-5 mb-5">
                            <?php if ( have_rows('pageDjs_iconos') ) : ?>
                            
                                <?php while( have_rows('pageDjs_iconos') ) : the_row(); ?>
                            
                                    
                                    <div class="numberEvents__item">
                                        <img src="<?php the_sub_field('rp_pageDjs_icono'); ?>" alt="<?php the_sub_field('rp_pageDjs_titulo'); ?>">
                                        <h6><?php the_sub_field('rp_pageDjs_cantidad'); ?></h6>
                                        <h5><?php the_sub_field('rp_pageDjs_titulo'); ?></h5>
                                    </div>
                            
                                <?php endwhile; ?>
                            
                            <?php endif; ?>
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-md-5">
                            <div class="embed-responsive embed-responsive-1by1">
                                
                                <iframe class="embed-responsive-item" src="<?php the_field('pageDjs_lista_de_reproduccion'); ?>" width="500"
                                    height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </article>
        </section>
        <!--End Preview Musical-->        
    </main>
<?php get_footer(); ?>