

<h1><?php the_title(); ?></h1>
<?php



if ( has_post_thumbnail() ) { 
    the_post_thumbnail( 'cortarlefttop' );
}else{
    ?>
    <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/img/icon_instagram.png" alt="Logo Default">
    <?php
}