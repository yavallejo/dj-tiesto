<?php if ( get_field('comprasEntradas_mostrar_seccion', 'option') ) : ?>
    <section class="buyTicket paddingSection">
        <div class="buyTicket__container">
            <?php if ( get_field('comprasEntradas_titulo','option') ) : ?>
                <h3><?php the_field('comprasEntradas_titulo','option'); ?></h3>
            <?php endif; ?>
            
            <?php if ( get_field('comprasEntradas_descripcion','option') ) : ?>
                <p><?php the_field('comprasEntradas_descripcion','option'); ?></p>
            <?php endif; ?>
            <a href="<?php the_field('comprasEntradas_link_de_compra','option'); ?>" class="btn btn-primary btn-lg" target="_blank">Comprar Tickets</a>
        </div>
    </section>
<?php endif; ?>