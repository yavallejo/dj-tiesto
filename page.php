<?php get_header(); ?>
    <main class="main">
        <section class="festivalMusic paddingSection">
            <article class="container">
                <div class="row">
                    <div class="col-12">
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
                    
                    
                </div>
            </article>
        </section> <!--End Introduction Music Festival-->
        
        <?php get_template_part( 'parts/content', 'buytickets' ); ?> 

        <?php get_template_part( 'parts/content', 'sponsors' ); ?>
        
        
        
    </main>
<?php get_footer(); ?>