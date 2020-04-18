<?php /* Template Name: Landing */ ?>
<?php get_header('landing'); ?>
    <main class="main">
        <section class="event__description">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="event__description--date">12 Enero 2020</span>
                        <h3 class="event__description--title">FESTIVAL VERANO 2020</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
                        <p>uis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="event__description--btn">
                            <a class="btn btn-primary btn-lg " href="<?php the_field('link_externo'); ?>" target="_blank" rel="noopener noreferrer">Comprar Tickets</a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 event__description--gallery">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.jpg" class="img-fluid">
                        </figure>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.jpg" class="img-fluid">
                        </figure>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.jpg" class="img-fluid">
                        </figure>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.jpg" class="img-fluid">
                        </figure>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.jpg" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta__landing" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/cta-landing.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-9 ml-lg-auto">
                        <div class="cta__landing--title">
                            WP FESTIVAL MUSIC
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container showLive">
            <div class="row flex-column align-items-center">
                <h3 class="title--page showLive--title">TOCANDO EN VIVO !!</h3>
                <h6 class="showLive--subtitle">Cambia entre el dia y la noche para ver las presentaciones </h6>
            </div>

            <div class="showLive__night">
                <div class="showLive__night--box">		
                    <input class="showLive__night--boxInput" type="checkbox" id="toggle"/>
                    <label class="showLive__night--boxLabel" for="toggle"></label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 showLive__item">
                    <div class="showLive__box">
                        <div class="showLive__item--left">
                            <figure class="showLive__item--leftImage">
                                <img src="http://djtiesto.local/wp-content/themes/wpfestival/assets/img/icon-hour-landing.png" alt="Hours" class="img-fluid">
                            </figure>
                            <span class="showLive__item--leftTime">7:00am - 9:00am</span>
                        </div>
                        <div class="showLive__item--right">
                           <figure class="showLive__item--rightImage">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foundation-sound.png" alt="" srcset="" width="35px" height="35px">
                            <figcaption class="showLive__item--rightTitle">Tropical Dance Plus</figcaption>
                           </figure>
                           
                           <h3 class="showLive__item--rightName">Dj Kura</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 showLive__item">
                    <div class="showLive__box">
                        <div class="showLive__item--left">
                            <figure class="showLive__item--leftImage">
                                <img src="http://djtiesto.local/wp-content/themes/wpfestival/assets/img/icon-hour-landing.png" alt="Hours" class="img-fluid">
                            </figure>
                            <span class="showLive__item--leftTime">7:00am - 9:00am</span>
                        </div>
                        <div class="showLive__item--right">
                           <figure class="showLive__item--rightImage">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foundation-sound.png" alt="" srcset="" width="35px" height="35px">
                            <figcaption class="showLive__item--rightTitle">Tropical Dance Plus</figcaption>
                           </figure>
                           
                           <h3 class="showLive__item--rightName">Dj Kura</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 showLive__item">
                    <div class="showLive__box">
                        <div class="showLive__item--left">
                            <figure class="showLive__item--leftImage">
                                <img src="http://djtiesto.local/wp-content/themes/wpfestival/assets/img/icon-hour-landing.png" alt="Hours" class="img-fluid">
                            </figure>
                            <span class="showLive__item--leftTime">7:00am - 9:00am</span>
                        </div>
                        <div class="showLive__item--right">
                           <figure class="showLive__item--rightImage">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foundation-sound.png" alt="" srcset="" width="35px" height="35px">
                            <figcaption class="showLive__item--rightTitle">Tropical Dance Plus</figcaption>
                           </figure>
                           
                           <h3 class="showLive__item--rightName">Dj Kura</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 showLive__item">
                    <div class="showLive__box">
                        <div class="showLive__item--left">
                            <figure class="showLive__item--leftImage">
                                <img src="http://djtiesto.local/wp-content/themes/wpfestival/assets/img/icon-hour-landing.png" alt="Hours" class="img-fluid">
                            </figure>
                            <span class="showLive__item--leftTime">7:00am - 9:00am</span>
                        </div>
                        <div class="showLive__item--right">
                           <figure class="showLive__item--rightImage">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foundation-sound.png" alt="" srcset="" width="35px" height="35px">
                            <figcaption class="showLive__item--rightTitle">Tropical Dance Plus</figcaption>
                           </figure>
                           
                           <h3 class="showLive__item--rightName">Dj Kura</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 showLive__item">
                    <div class="showLive__box">
                        <div class="showLive__item--left">
                            <figure class="showLive__item--leftImage">
                                <img src="http://djtiesto.local/wp-content/themes/wpfestival/assets/img/icon-hour-landing.png" alt="Hours" class="img-fluid">
                            </figure>
                            <span class="showLive__item--leftTime">7:00am - 9:00am</span>
                        </div>
                        <div class="showLive__item--right">
                           <figure class="showLive__item--rightImage">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foundation-sound.png" alt="" srcset="" width="35px" height="35px">
                            <figcaption class="showLive__item--rightTitle">Tropical Dance Plus</figcaption>
                           </figure>
                           
                           <h3 class="showLive__item--rightName">Dj Kura</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--ShowLive-->

        <section class="lTickets paddingSection">
            <h3 class="title title--white title--borderNone text-center">Tickets</h3>

            <div class="container lTickets__box">
                <div class="row">
                    <div class="tab-content col-6 lTickets__left" id="v-pills-tabContent">
                        <div class="tab-pane fade show active lTickets__itemData" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <figure class="lTickets__itemDataImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-tickets.jpg" alt="" class="img-fluid">
                                <figcaption class="lTickets__itemDataPrice">$ 200</figcaption>
                            </figure>
                        </div>
                        <div class="tab-pane fade lTickets__itemData" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <figure class="lTickets__itemDataImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-tickets.jpg" alt="" class="img-fluid">
                                <figcaption class="lTickets__itemDataPrice">$ 400</figcaption>
                            </figure>
                        </div>
                        <div class="tab-pane fade lTickets__itemData" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <figure class="lTickets__itemDataImage">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-tickets.jpg" alt="" class="img-fluid">
                                <figcaption class="lTickets__itemDataPrice">$ 100</figcaption>
                            </figure>
                        </div>
                        
                    </div>

                    <div class="nav flex-column nav-pills col-5 offset-1 lTickets__right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="nav-link active lTickets__itemNav"
                           id="v-pills-home-tab"
                           data-toggle="pill"
                           href="#v-pills-home"
                           role="tab"
                           aria-controls="v-pills-home"
                           aria-selected="true">
                           
                           <h5 class="lTickets__itemNav--title">General - Escenario Principal</h5>
                           <p class="lTickets__itemNav--description">Ubicación general en el escenario principal, nivel del suelo.</p>
                           <a href="https://www.aprendiendoando.com/" class="lTickets__itemNav--link" target="_blank">Comprar Tickets</a>
                        </div>
                       
                       <div class="nav-link lTickets__itemNav" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        
                            <h5 class="lTickets__itemNav--title">Escenerario secundario</h5>
                           <p class="lTickets__itemNav--description">Ubicación general en el escenario principal, nivel del suelo.</p>
                           <a href="https://www.aprendiendoando.com/" class="lTickets__itemNav--link" target="_blank">Comprar Tickets</a>
                        
                        </div>
                        <div class="nav-link lTickets__itemNav" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <h5 class="lTickets__itemNav--title">VIP</h5>
                           <p class="lTickets__itemNav--description">Ubicación general en el escenario principal, nivel del suelo.</p>
                           <a href="https://www.aprendiendoando.com/" class="lTickets__itemNav--link" target="_blank">Comprar Tickets</a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

        </section>

        
    </main>
<?php get_footer('landing'); ?>