<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' );?>">
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,700|Saira:300,400,500,700" rel="stylesheet">
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<?php 
    $fondoImagen = get_field('fondo_de_imagen');
    
    if($fondoImagen){
?>
        <header class="header header--notHome header--landing" style="background-image:url('<?php echo $fondoImagen; ?>')">
<?php
    }else{
?>
        <header class="header header--notHome" <?php if ( get_field('header_imagen_destacada', 'option') ) : ?> style="background-image: url('<?php echo get_field('header_imagen_destacada', 'option'); ?>');"
        <?php endif; ?>>
    <?php
        }
    ?>
    <?php get_template_part( 'parts/header/header', 'top' );?>
    <div class="container header__bottom">
        <h2 class="title title--page"><?php the_title(); ?></h2>
        <a class="btn btn-primary btn-lg mt-3" href="<?php the_field('link_externo'); ?>" target="_blank" rel="noopener noreferrer">Comprar Tickets</a>
            
   </div>
</header> <!--Header-->