<?php get_header('home'); ?>
    <main class="main">
        <?php 
        $prestentationbool= get_field('po_prese_mostrar_seccion', 'option');
        if($prestentationbool){
        ?>
          <?php get_template_part( 'parts/content', 'presentations' )?>
            
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
        
        

        <?php get_template_part( 'parts/content', 'sponsors' ); ?>

        <?php get_template_part( 'parts/content', 'gallery' ); ?>
        
        
        
        
        <?php if ( get_field('po_noticias_mostrar_seccion', 'option') ) : ?>
            <section class="news paddingSection" style="background-image:url('<?php the_field('po_noticias_imagen_de_fondo','option'); ?>');">
                <article class="container">
                    <h2 class="title title--white title--small text-md-right">
                        <?php the_field('po_noticias_titulo','option'); ?>
                    </h2>
                    <div class="row mt-5">
                        <div class="col-6">

                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 1                                    
                                );
                                // The Query
                                $the_query = new WP_Query( $args );
                                // The Loop
                                if ( $the_query->have_posts() ) {                                    
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                            ?>
                                         <div class="news__item">
                                            <figure>
                                                <?php if ( has_post_thumbnail() ) : 
                                                          the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
                                                      endif;
                                                ?>                                                
                                                <figcaption>
                                                    <?php
                                                        $categories = get_the_category();

                                                        if ( ! empty( $categories ) ) {
                                                            echo esc_html( $categories[0]->name );   
                                                        }
                                                        ?> - <?php the_time( 'F j, Y' ); ?>
                                                </figcaption>
                                            </figure>
                                            <h2><?php the_title(); ?></h2>
                                            <?php the_excerpt(); ?>
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
                        <div class="col-5 offset-1 news__item--right">
                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'offset' => 1
                                    
                                );
                                // The Query
                                $the_query = new WP_Query( $args );

                                // The Loop
                                if ( $the_query->have_posts() ) {
                                    
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                            ?>
                                        <div class="news__item">
                                            <figure>
                                                <?php if ( has_post_thumbnail() ) : 
                                                          the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
                                                      endif;
                                                ?>
                                                <figcaption>
                                                    <?php
                                                        $categories = get_the_category();

                                                        if ( ! empty( $categories ) ) {
                                                            echo esc_html( $categories[0]->name );   
                                                        }
                                                    ?> - <?php the_time( 'F j, Y' ); ?>
                                                </figcaption>
                                            </figure>
                                            <h2><?php the_title(); ?></h2>
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
                </article>
            </section><!--End News-->
        <?php endif; ?>
        
        
    </main>
<?php get_footer(); ?>
    