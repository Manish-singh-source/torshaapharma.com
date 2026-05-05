(function ($) {
    "use strict";

    /*
    Client Logo Slider
    ============================*/
    $(".client-logo-slider-wrapper").slick({
        slidesToShow: 6,
        infinite: true,
        autoplay: true,
        draggable: true,
        arrows: false,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 1500,
        rtl: false,
        responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 460,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });


    /*
   Slider
   ============================*/
    $(".slider-wrapper").slick({
        slidesToShow: 1,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: true,
        slidesToScroll: 1,
        loop: true,
        dots: true,
        speed: 1500,
        vertical: true,
        rtl: false,
        prevArrow: "<button type='button' class='prev-btn'><i class='fa-solid fa-arrow-left-long'></i></button>",
        nextArrow: "<button type='button' class='next-btn'><i class='fa-solid fa-arrow-right-long'></i></button>",

        responsive: [{
            breakpoint: 767,
            settings: {
                autoplay: true,
            },
        }, ],
    });
    $(".slider-wrapper-six").slick({
        slidesToShow: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        draggable: true,
        arrows: true,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 2000,
        rtl: false,
        pauseOnHover:false,
        prevArrow: "<button type='button' class='prev-btn'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow: "<button type='button' class='next-btn'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [{
            breakpoint: 767,
            settings: {
                arrows: false,
                dots: true,
            },
        }, ],
    });


    /*
   Info Card Slider
   ============================*/
    $(".info-card-slider").slick({
        slidesToShow: 4,
        infinite: true,
        autoplay: true,
        draggable: true,
        arrows: true,
        prevArrow: "<button type='button' class='slider-nav-prev-btn slick-arrow'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow: "<button type='button' class='slider-nav-next-btn slick-arrow'><i class='fa-solid fa-arrow-right'></i></button>",
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 1500,
        variableWidth: true,
        rtl: false,
        responsive: [{
                breakpoint: 1399,
                settings: {
                    slidesToShow: 2,
                    variableWidth: false,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false,
                },
            },
        ],
    });


    /*
   Info Card Slider
   ============================*/
    $(".project-card-slider").slick({
        slidesToShow: 4,
        infinite: true,
        autoplay: true,
        draggable: true,
        arrows: true,
        prevArrow: "<button type='button' class='slider-nav-prev-btn slick-arrow'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow: "<button type='button' class='slider-nav-next-btn slick-arrow'><i class='fa-solid fa-arrow-right'></i></button>",
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 1500,
        variableWidth: false,
        rtl: false,
        responsive: [{
                breakpoint: 1399,
                settings: {
                    slidesToShow: 2,
                    variableWidth: false,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false,
                },
            },
        ],
    });


    /*
   Testimonial Slider
   ============================*/
    $("#testimonial_style_one").slick({
        slidesToShow: 1,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: false,
        slidesToScroll: 1,
        loop: true,
        dots: true,
        variableWidth: false,
        speed: 1500,
        rtl: false,
    });


    /*
    Testimonial Slider
    ============================*/
    $("#testimonial_style_two").slick({
        slidesToShow: 4,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: true,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 1500,
        variableWidth: false,
        rtl: false,
        prevArrow: "<button type='button' class='slider-nav-prev-btn slick-arrow'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow: "<button type='button' class='slider-nav-next-btn slick-arrow'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [{
                breakpoint: 1399,
                settings: {
                    slidesToShow: 2,
                    variableWidth: false,
                },
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    variableWidth: false
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false
                },
            },
        ],
    });


    /*
    Project Card Slider
    ============================*/
    $("#project_card_slider").slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        draggable: true,
        arrows: false,
        slidesToScroll: 1,
        loop: true,
        dots: true,
        speed: 1500,
        rtl: false,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });


    /*
   Feature Slider JS
   ============================*/
    $(".feature-slider-wrapper").slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        draggable: true,
        arrows: false,
        slidesToScroll: 1,
        centerMode: true,
        loop: true,
        dots: true,
        speed: 1500,
        rtl: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });


    // Brand Marquee Wrapper
    const swiper = new Swiper('.brand-marquee-slider', {
        loop: true,
        speed: 2000,
        slidesPerView: 6,
        autoplay: {
            delay: 0,
            pauseOnMouseEnter: false, // stop autoplay when hovering
            disableOnInteraction: false, // restart autoplay when hover is removed
            reverseDirection: true, // reverse the autoplay direction
        },
        breakpoints: {
            1600: {
                slidesPerView: 6,
            },
            1300: {
                slidesPerView: 5,
            },
            1100: {
                slidesPerView: 4,
            },
            767: {
                slidesPerView: 3,
            },
            577: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        }
    })


})(jQuery);