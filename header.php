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

<?php if ( has_post_thumbnail() && is_page() ) : 
        $thumbnail = get_the_post_thumbnail_url();        
?>
        <header class="header header--notHome" style="background-image:url('<?php echo $thumbnail; ?>')">
<?php else: ?> 
        <header class="header header--notHome" <?php if ( get_field('header_imagen_destacada', 'option') ) : ?> style="background-image: url('<?php echo get_field('header_imagen_destacada', 'option'); ?>');"
        <?php endif; ?>>
<?php endif; ?>
    
       <?php get_template_part( 'parts/header/header', 'top' );?>

       
        <div class="container header__bottom">
            <h2 class="title title--page">Acerca de</h2>
            <ul class="list-unstyled d-flex breadcrumb">
                <li class="breadcrumb-item"><a class="disabled" href="#">Wp Festival</a></li>
                <li class="breadcrumb-item"><a href="#">Acerca de</a></li>
            </ul>
        </div>
    </header> <!--Header-->