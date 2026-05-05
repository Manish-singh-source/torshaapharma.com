(function ($) {
    "use strict";
    $(document).ready(function() {

    /*
   Jquery Mobile Menu
   ============================*/
    $('#main-menu').meanmenu({
        meanMenuContainer: '.mobile-nav-menu',
        meanScreenWidth: "991",
        meanExpand: ['<i class="fal fa-plus"></i>'],
    });

    /*
   Jquery Header Search
   ============================*/
    $('#search_btn').on('click', function (e) {
        e.preventDefault();
        // $('body').css('overflow', 'hidden');

        $('.search-form-wrapper').addClass('active');
    });
    $('.search-close').on('click', function (e) {
        e.preventDefault();
        // $('body').css('overflow', 'auto');
        $('.search-form-wrapper').removeClass('active');
    });

    window.onclick = function (e) {
        if (e.target.matches(".search-form-wrapper")) {
            $('.search-form-wrapper').removeClass('active');
        }
    }


    /*
   Jquery Sidebar Toggle
   ============================*/
    $("#offcanvas_btn, .mobile-menu-toggle-btn").on("click", function (e) {
        e.preventDefault();
        $(".menu-sidebar-area").addClass("active");
        $(".body-overlay").addClass("active");
    });

    $(".menu-sidebar-close-btn").on("click", function (e) {
        e.preventDefault();
        $(".menu-sidebar-area").removeClass("active");
        $(".body-overlay").removeClass("active");
    });

    /*
   Jquery Body Overlay
   ============================*/
    $("body").on("click", ".body-overlay", function (e) {
        e.preventDefault();
        $(".menu-sidebar-area").removeClass("active");
        $(".body-overlay").removeClass("active");
    });
    /*
    Stikey Js
    ============================*/
    const body = document.body;
    const html = document.documentElement;
    const height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);

    if (height > 1400) {
        const nav = $(".header-menu-area.sticky-header");
        let scrolled = false;
        $(window).scroll(function () {
            if (1 < $(window).scrollTop() && !scrolled) {
                nav
                    .addClass("sticky_menu animated fadeIn")
                    .animate({
                        "margin-top": "0px"
                    });
                scrolled = true;
            }
            if (1 > $(window).scrollTop() && scrolled) {
                nav.removeClass("sticky_menu animated fadeIn").css("margin-top", "0px");
                scrolled = false;
            }
        });
    }


    /*
    Portfolio Hover
    ============================*/
    $('.portfolio-showscreen').each(function () {
        const item = $(this).find('.portfolio-card');
        const img = $(this).find('.tabimg');
        item.on('mouseenter', function () {
            const tab_id = $(this).attr('data-tab');
            item.removeClass('active');
            $(this).addClass('active');
            img.removeClass('active');
            $("#" + tab_id).addClass('active');
            if ($(this).hasClass('active')) {
                return false;
            }
        });
    });


    /*
    Jquery Empty Post Content Hide
    ============================*/
    $('.blog-area .post-content p').filter(function () {
        return /\u00A0/.test($(this).text());
    }).hide();


    /*
    Skill Progress Bar Js
    ============================*/
    $('.skill-progress-card').one('inview', function (event, isInView) {
        $('.progress-inner').each(function () {
            $(this).find('.progress-content').animate({
                width: $(this).attr('data-percentage')
            }, 2000);

            $(this).find('.progress-number-count').animate({
                left: $(this).attr('data-percentage')
            }, {
                duration: 2000,
                step: function (now) {
                    let data = Math.round(now);
                    $(this).find('.progress-percent').html(data + '%');
                }
            });
        });
    });

    /*
    Post Card Slider
    ============================*/
    $(".post_card_slider").slick({
        slidesToShow: 2,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: true,
        prevArrow: "#post_slider_prev_btn",
        nextArrow: "#post_slider_next_btn",
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 1500,
        rtl: false,
        responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false,
                },
            },
        ],
    });


    /*
   Related Portfolio Slider
   ============================*/
    $("#related_portfolio").slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: true,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 1500,
        rtl: false,
        prevArrow: "<button type='button' class='portfolio-arrow-btn prev-btn'><i class='fa-solid fa-angle-left'></i></button>",
        nextArrow: "<button type='button' class='portfolio-arrow-btn next-btn'><i class='fa-solid fa-angle-right'></i></button>",
        responsive: [{
                breakpoint: 991,
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
            {
                breakpoint: 460,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    }).on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slides.width() + 'px');
    });

    /*
   Post Gallery Slider
   ============================*/
    $(".post-gallery").slick({
        slidesToShow: 1,
        infinite: true,
        autoplay: true,
        draggable: true,
        arrows: true,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        speed: 300,
        rtl: false,
        prevArrow: "<button type='button' class='post-gallery-btn prev-btn'><i class='fa fa-arrow-left'></i></button>",
        nextArrow: "<button type='button' class='post-gallery-btn next-btn'><i class='fa fa-arrow-right'></i></button>",
    });



    /*
    Counter Js
    ============================*/
    $(".counter").counterUp({
        delay: 10,
        time: 1000,
    });

    /*
   Magnific Popup
   ============================*/
    $(".video-play").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
    });

    /*
    Jquery Wow Js
    ============================*/
    new WOW().init();

    /*
   Jquery Nice Select Js
   ============================*/
    $('select.select_option, select.wpcf7-select').niceSelect();

    /*
   Jquery Tilt Js
   ============================*/
    $('.tilt-animate').tilt({
        maxTilt: 12,
        perspective: 1500,
    })


    // Accordion Init Height
    const accordionEl = $(".accordion-box-wrapper");
    const accordionHeight = accordionEl.innerHeight();
    accordionEl.css("height", accordionHeight);

    // Portfolio Hover
    $('.portfolio-card-main-wrapper').each(function () {
        const item = $(this).find('.portfolio-card, .icon-card-inner');
        const img = $(this).find('.tabimg');
        item.on('mouseenter', function () {
            const tab_id = $(this).attr('data-tab');
            item.removeClass('active');
            $(this).addClass('active');
            img.removeClass('active');
            $("#" + tab_id).addClass('active');
            if ($(this).hasClass('active')) {
                return false;
            }
        });
    });

    /*
    Scroll To Top Js
    ============================*/
    $(function () {
        $("#scrollTop").hide();
        var position = $(window).scrollTop();
        var timer;
        $(window).on('scroll', function () {
            var scrollTop = $(window).scrollTop();
            clearTimeout(timer);
            if (scrollTop > 100) {
                if (scrollTop > position) {
                    $('#scrollTop').fadeOut();
                } else {
                    $('#scrollTop').fadeIn();
                    timer = window.setTimeout(function () {
                        $("#scrollTop").fadeOut();
                    }, 3000);
                }
                position = scrollTop;
            } else {
                $('#scrollTop').fadeOut();
            }
        });
        $(".scrollup-btn").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    });

    });

    /*
    Window Load
    ============================*/
    $(window).on("load", function () {
        /*
        Preeloader
        ============================*/
        $("#preloader").fadeOut();
        $("#preloader-status").delay(0).fadeOut("slow");
        $("body").delay(200).css({
            "overflow-x": "hidden"
        });
    });

    $(document).ready(function() {
        $('#comment-form').submit(function(e) {
            e.preventDefault(); // Prevent form submission
    
            let form = $(this);
            let url = form.attr('action');
            let submitBtn = $('#submit-btn');
            
            // Remove existing error messages
            form.find('.error-message').remove();
    
            // Validate form fields before submission
            let author = form.find('input[name="author"]').val().trim();
            let email = form.find('input[name="email"]').val().trim();
            let isValid = true;
    
            // Check each field individually and display error messages
            if (author === '') {
                form.find('input[name="author"]').after('<div class="error-message">Please enter your name</div>');
                isValid = false;
            }
            if (email === '') {
                form.find('input[name="email"]').after('<div class="error-message">Please enter your email</div>');
                isValid = false;
            } else if (!isValidEmail(email)) {
                form.find('input[name="email"]').after('<div class="error-message">Please enter a valid email</div>');
                isValid = false;
            }
    
            if (!isValid) {
                return; // Exit the function if any field is empty or invalid
            }
    
            // Disable the submit button
            submitBtn.prop('disabled', true);
            submitBtn.addClass('disabled-btn'); // Add disabled class
    
            // Show loading spinner
            $('#loading-spinner').show();
    
            $.ajax({
                type: 'POST',
                url: url,
                data: form.serialize(), // Serialize form data
                success: function(data) {
                    // Display success message
                    $('#success-message').show();
    
                    // Reset form data
                    form[0].reset();
    
                    // Hide loading spinner
                    $('#loading-spinner').hide();
    
                    // Hide success message after 5 seconds
                    setTimeout(function() {
                        $('#success-message').hide();
                    }, 5000);
    
                    // Re-enable the submit button
                    submitBtn.prop('disabled', false);
                    submitBtn.removeClass('disabled-btn'); // Remove disabled class
                },
                error: function(xhr, status, error) {
                    // Hide loading spinner in case of error
                    $('#loading-spinner').hide();
    
                    // Handle errors
                    console.error(xhr.responseText);
    
                    // Re-enable the submit button
                    submitBtn.prop('disabled', false);
                    submitBtn.removeClass('disabled-btn'); // Remove disabled class
                }
            });
        });
    });
    
    // Function to validate email format
    function isValidEmail(email) {
        // Use regular expression to validate email format
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    
})(jQuery);