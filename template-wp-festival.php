<?php /* Template Name: Wp Festival */ ?>
<?php get_header(); ?>
    <main class="main">
        <section class="festivalMusic paddingSection">
            <article class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                        ?>
                                <h2 class="title title--black"><?php the_title(); ?></h2>
                                <?php the_content(  );
                            endwhile; // End of the loop.
			            ?>
                        
                        
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="festivalMusic__specials">
                            <?php if ( have_rows('iconos_wp_festival') ) : ?>
                            
                                <?php while( have_rows('iconos_wp_festival') ) : the_row(); ?>
                            
                                    
                                    <div class="numberEvents__item">
                                        <img src="<?php the_sub_field('wpFestival_imagen'); ?>" alt="<?php the_sub_field('wpFestival_titulo'); ?>">
                                        <h6><?php the_sub_field('wpFestival_cantidad'); ?></h6>
                                        <h5><?php the_sub_field('wpFestival_titulo'); ?></h5>
                                    </div>
                            
                                <?php endwhile; ?>
                            
                            <?php endif; ?>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </article>
        </section> <!--End Introduction Music Festival-->
        
        <?php get_template_part( 'parts/content', 'sponsors' ); ?>
        
        <?php get_template_part( 'parts/content', 'buytickets' ); ?> 
        
        <?php get_template_part( 'parts/content', 'gallery' ); ?>
    </main>
<?php get_footer(); ?>