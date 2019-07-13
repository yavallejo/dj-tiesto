<?php /* Template Name: Blog */ ?>
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
       
         <section class="blog">
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => 'post'                                    
                    );
                    // The Query
                    $the_query = new WP_Query( $args );
                    // The Loop
                    if ( $the_query->have_posts() ) {                                    
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                    <article class="row blog__item">
                        <div class="col col-md-1 blog__share d-none d-md-block">
                            <div class="blog__date">
                                <strong class="blog__date--day text--red"><?php the_time( 'j' );?></strong>
                                <strong class="blog__date--month"><?php the_time( 'F' );?></strong>
                            </div>
                            <div class="blog__icons">
                                <i class="blog__icons--custom fa fa-commenting-o"></i>
                                <strong class="blog__icons--value text--red">9</strong>
                            </div>
                            <div class="blog__icons">
                                <i class="blog__icons--custom fa fa-thumbs-o-up"></i>
                                <strong class="blog__icons--value text--red">9</strong>
                            </div>
                            <div class="blog__icons">
                                <i class="blog__icons--custom fa fa-share-alt"></i>
                                <strong class="blog__icons--value text--red">9</strong>
                            </div>
                        </div>
                        <div class="col col-md-11 blog__content">
                                <header class="blog__header">
                                    <figure class="m-0">
                                        <a href="<?php the_permalink(  ); ?>" class="blog__link">
                                            <?php if ( has_post_thumbnail() ) :
                                                the_post_thumbnail('full', ['class' => 'img-fluid']);
                                            endif; ?>
                                        </a>
                                    </figure>
                                    <h3 class="text-center text-md-left blog__title"><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h3>
                                    <h6 class="blog__category d-none d-md-block"><i class="fa fa-th-list" aria-hidden="true"></i>
                                        <?php
                                            $categories = get_the_category();

                                            if ( ! empty( $categories ) ) {
                                                echo esc_html( $categories[0]->name );   
                                            }
                                        ?>
                                    </h6>
                                </header>
                               
                                <?php the_excerpt(  );?>
                                
                        </div>
                    </article>
                <?php
                        }
                        
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    } 
                ?>     
                
            </div>
        </section>
        
        
        
        
         <?php get_template_part( 'parts/content', 'buytickets' ); ?> 
    </main>
<?php get_footer(); ?>