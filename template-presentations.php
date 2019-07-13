<?php /* Template Name: Presentaciones */ ?>
<?php get_header(); ?>
    <main class="main ">
        <section class="presentations--inside sectionBorder sectionBorder--top paddingSection ">
            <header class="container sectionBorder--top">
                <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                ?>
                        <h2 class="title title--black"><?php the_title(); ?></h2>
                        <?php the_content(  );
                    endwhile; // End of the loop.
                ?>
            </header>
        </section>
       
        
        <?php get_template_part( 'parts/content', 'presentations' )?>
        
        
         <?php get_template_part( 'parts/content', 'buytickets' ); ?> 
    </main>
<?php get_footer(); ?>