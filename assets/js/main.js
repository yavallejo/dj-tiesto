jQuery(document).ready(function () {
    jQuery('[data-target="#navbarNavAltMarkup"]').click(function () {

        jQuery('.navbar-expand-lg').toggleClass('relative');
        jQuery('.collapse').addClass('navbar-absolute');
    });

    // Slick  Settings

    jQuery('.djs__gallery').slick({
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // Slick Navigation

    jQuery('.JS-slick-next').click(function () {
        jQuery(".djs__gallery").slick("slickNext");
    });
    jQuery('.JS-slick-prev').click(function () {
        jQuery(".djs__gallery").slick("slickPrev");
    });


    // ---------------------------------------------------



    jQuery('.sponsors__gallery').slick({
        autoplay: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            }
        ]
    });

    // Slick Navigation

    jQuery('.JS-slickSponsors-next').click(function () {
        jQuery(".sponsors__gallery").slick("slickNext");
    });
    jQuery('.JS-slickSponsors-prev').click(function () {
        jQuery(".sponsors__gallery").slick("slickPrev");
    });


});