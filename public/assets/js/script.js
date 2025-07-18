(function ($) {
    "use strict";

    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if ($(".loader-wrap").length) {
            $(".loader-wrap").delay(1000).fadeOut(500);
        }
    }

    if ($(".preloader-close").length) {
        $(".preloader-close").on("click", function () {
            $(".loader-wrap").delay(200).fadeOut(500);
        });
    }

    //Update Header Style and Scroll to Top
    function headerStyle() {
        if ($(".main-header").length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $(".main-header");
            var scrollLink = $(".scroll-top");
            if (windowpos >= 130) {
                siteHeader.addClass("fixed-header");
                scrollLink.addClass("open");
            } else {
                siteHeader.removeClass("fixed-header");
                scrollLink.removeClass("open");
            }
        }
    }

    headerStyle();

    //Submenu Dropdown Toggle
    if ($(".main-header li.dropdown ul").length) {
        $(".main-header .navigation li.dropdown").append(
            '<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>'
        );
    }

    //Mobile Nav Hide Show
    if ($(".mobile-menu").length) {
        $(".mobile-menu .menu-box").mCustomScrollbar();

        var mobileMenuContent = $(".main-header .menu-area .main-menu").html();
        $(".mobile-menu .menu-box .menu-outer").append(mobileMenuContent);
        $(".sticky-header .main-menu").append(mobileMenuContent);

        //Dropdown Button
        $(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
            $(this).toggleClass("open");
            $(this).prev("ul").slideToggle(500);
        });
        //Dropdown Button
        $(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
            $(this).prev(".megamenu").slideToggle(900);
        });
        //Menu Toggle Btn
        $(".mobile-nav-toggler").on("click", function () {
            $("body").addClass("mobile-menu-visible");
        });

        //Menu Toggle Btn
        $(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on(
            "click",
            function () {
                $("body").removeClass("mobile-menu-visible");
            }
        );
    }

    // Scroll to a Specific Div
    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function () {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate(
                {
                    scrollTop: $(target).offset().top,
                },
                1000
            );
        });
    }

    // Elements Animation
    if ($(".wow").length) {
        var wow = new WOW({
            mobile: false,
        });
        wow.init();
    }

    //Contact Form Validation
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                username: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                },
            },
        });
    }

    //Fact Counter + Text Count
    if ($(".count-box").length) {
        $(".count-box").appear(
            function () {
                var $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text(),
                    }).animate(
                        {
                            countNum: n,
                        },
                        {
                            duration: r,
                            easing: "linear",
                            step: function () {
                                $t.find(".count-text").text(
                                    Math.floor(this.countNum)
                                );
                            },
                            complete: function () {
                                $t.find(".count-text").text(this.countNum);
                            },
                        }
                    );
                }
            },
            { accY: 0 }
        );
    }

    //LightBox / Fancybox
    if ($(".lightbox-image").length) {
        $(".lightbox-image").fancybox({
            openEffect: "fade",
            closeEffect: "fade",
            helpers: {
                media: {},
            },
        });
    }

    //Tabs Box
    if ($(".tabs-box").length) {
        $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box")
                    .find(".tab-buttons")
                    .find(".tab-btn")
                    .removeClass("active-btn");
                $(this).addClass("active-btn");
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .fadeOut(0);
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab");
            }
        });
    }

    //Tabs Box
    if ($(".tabs-box-2").length) {
        $(".tabs-box-2 .tab-buttons-2 .tab-btn-2").on("click", function (e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box-2")
                    .find(".tab-buttons-2")
                    .find(".tab-btn-2")
                    .removeClass("active-btn-2");
                $(this).addClass("active-btn-2");
                target
                    .parents(".tabs-box-2")
                    .find(".tabs-content-2")
                    .find(".tab-2")
                    .fadeOut(0);
                target
                    .parents(".tabs-box-2")
                    .find(".tabs-content-2")
                    .find(".tab-2")
                    .removeClass("active-tab-2");
                $(target).fadeIn(300);
                $(target).addClass("active-tab-2");
            }
        });
    }

    //service-carousel
    if ($(".service-carousel").length) {
        $(".service-carousel").owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            smartSpeed: 500,
            autoplay: 1000,
            navText: [
                '<span class="fal fa-angle-left"></span>',
                '<span class="fal fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1024: {
                    items: 4,
                },
            },
        });
    }

    //service-carousel
    if ($(".service-carousel-2").length) {
        $(".service-carousel-2").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 500,
            autoplay: 1000,
            navText: [
                '<span class="fal fa-angle-left"></span>',
                '<span class="fal fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1024: {
                    items: 4,
                },
            },
        });
    }

    //Accordion Box
    if ($(".accordion-box").length) {
        $(".accordion-box").on("click", ".acc-btn", function () {
            var outerBox = $(this).parents(".accordion-box");
            var target = $(this).parents(".accordion");

            if ($(this).hasClass("active") !== true) {
                $(outerBox).find(".accordion .acc-btn").removeClass("active");
            }

            if ($(this).next(".acc-content").is(":visible")) {
                return false;
            } else {
                $(this).addClass("active");
                $(outerBox).children(".accordion").removeClass("active-block");
                $(outerBox)
                    .find(".accordion")
                    .children(".acc-content")
                    .slideUp(300);
                target.addClass("active-block");
                $(this).next(".acc-content").slideDown(300);
            }
        });
    }

    // banner-carousel
    if ($(".banner-carousel").length) {
        $(".banner-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            active: true,
            smartSpeed: 1000,
            autoplay: 6000,
            navText: [
                '<span class="fal fa-angle-right"></span>',
                '<span class="fal fa-angle-left"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                1024: {
                    items: 1,
                },
            },
        });
    }

    //two-column-carousel
    if ($(".two-column-carousel").length) {
        $(".two-column-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: [
                '<span class="fal fa-angle-left"></span>',
                '<span class="fal fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 2,
                },
            },
        });
    }

    //three-item-carousel
    if ($(".three-item-carousel").length) {
        $(".three-item-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: [
                '<span class="fal fa-angle-left"></span>',
                '<span class="fal fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
            },
        });
    }

    // Four Item Carousel
    if ($(".four-item-carousel").length) {
        $(".four-item-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 500,
            autoplay: 5000,
            navText: [
                '<span class="fas fa-angle-left"></span>',
                '<span class="fas fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
            },
        });
    }

    // single-item-carousel
    if ($(".single-item-carousel").length) {
        $(".single-item-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            smartSpeed: 3000,
            autoplay: true,
            navText: [
                '<span class="fal fa-angle-left"></span>',
                '<span class="fal fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
            },
        });
    }

    // clients-carousel
    if ($(".clients-carousel").length) {
        $(".clients-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            smartSpeed: 3000,
            autoplay: true,
            navText: [
                '<span class="fas fa-angle-left"></span>',
                '<span class="fas fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
            },
        });
    }

    // gallery-carousel
    if ($(".gallery-carousel").length) {
        $(".gallery-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: [
                '<span class="fal fa-angle-left"></span>',
                '<span class="fal fa-angle-right"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1200: {
                    items: 5,
                },
            },
        });
    }

    //Client Testimonial Carousel
    if (
        $(".client-testimonial-carousel").length &&
        $(".client-thumbs-carousel").length
    ) {
        var $sync3 = $(".client-testimonial-carousel"),
            $sync4 = $(".client-thumbs-carousel"),
            flag = false,
            duration = 500;

        $sync3
            .owlCarousel({
                loop: true,
                items: 1,
                margin: 0,
                nav: true,
                navText: [
                    '<span class="far fa-long-arrow-up"></span>',
                    '<span class="far fa-long-arrow-down"></span>',
                ],
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
            })
            .on("changed.owl.carousel", function (e) {
                if (!flag) {
                    flag = false;
                    $sync4.trigger("to.owl.carousel", [
                        e.item.index,
                        duration,
                        true,
                    ]);
                    flag = false;
                }
            });

        $sync4
            .owlCarousel({
                loop: true,
                margin: 20,
                items: 1,
                nav: false,
                navText: [
                    '<span class="fas fa-long-arrow-up"></span>',
                    '<span class="fas fa-long-arrow-down"></span>',
                ],
                dots: true,
                center: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1,
                        autoWidth: false,
                    },
                    400: {
                        items: 1,
                        autoWidth: false,
                    },
                    600: {
                        items: 1,
                        autoWidth: false,
                    },
                    1000: {
                        items: 1,
                        autoWidth: false,
                    },
                    1200: {
                        items: 1,
                        autoWidth: false,
                    },
                },
            })

            .on("click", ".owl-item", function () {
                $sync3.trigger("to.owl.carousel", [
                    $(this).index(),
                    duration,
                    true,
                ]);
            })
            .on("changed.owl.carousel", function (e) {
                if (!flag) {
                    flag = true;
                    $sync3.trigger("to.owl.carousel", [
                        e.item.index,
                        duration,
                        true,
                    ]);
                    flag = false;
                }
            });
    }

    //Add One Page nav
    if ($(".scroll-nav").length) {
        $(".scroll-nav").onePageNav();
    }

    $(document).ready(function () {
        $("select:not(.ignore)").niceSelect();
    });

    //Sortable Masonary with Filters
    function enableMasonry() {
        if ($(".sortable-masonry").length) {
            var winDow = $(window);
            // Needed variables
            var $container = $(".sortable-masonry .items-container");
            var $filter = $(".filter-btns");

            $container.isotope({
                filter: "*",
                masonry: {
                    columnWidth: ".masonry-item.small-column",
                },
                animationOptions: {
                    duration: 500,
                    easing: "linear",
                },
            });

            // Isotope Filter
            $filter.find("li").on("click", function () {
                var selector = $(this).attr("data-filter");

                try {
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 500,
                            easing: "linear",
                            queue: false,
                        },
                    });
                } catch (err) {}
                return false;
            });

            winDow.on("resize", function () {
                var selector = $filter.find("li.active").attr("data-filter");

                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: "linear",
                        queue: false,
                    },
                });
            });

            var filterItemA = $(".filter-btns li");

            filterItemA.on("click", function () {
                var $this = $(this);
                if (!$this.hasClass("active")) {
                    filterItemA.removeClass("active");
                    $this.addClass("active");
                }
            });
        }
    }

    enableMasonry();

    // Progress Bar
    if ($(".count-bar").length) {
        $(".count-bar").appear(
            function () {
                var el = $(this);
                var percent = el.data("percent");
                $(el).css("width", percent).addClass("counted");
            },
            { accY: -50 }
        );
    }

    if ($(".testimonial-style-two .bxslider").length) {
        $(".testimonial-style-two .bxslider").bxSlider({
            nextText: '<i class="fal fa-angle-right"></i>',
            prevText: '<i class="fal fa-angle-left"></i>',
            mode: "fade",
            auto: "true",
            speed: "700",
            pagerCustom: ".testimonial-style-two .slider-pager .thumb-box",
        });
    }

    if ($(".product-details-content .bxslider").length) {
        $(".product-details-content .bxslider").bxSlider({
            nextSelector: ".product-details-content #slider-next",
            prevSelector: ".product-details-content #slider-prev",
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>',
            mode: "fade",
            auto: "true",
            speed: "700",
            pagerCustom: ".product-details-content .slider-pager .thumb-box",
        });
    }

    //Jquery Spinner / Quantity Spinner
    if ($(".quantity-spinner").length) {
        $("input.quantity-spinner").TouchSpin({
            verticalbuttons: true,
        });
    }

    //Price Range Slider
    if ($(".price-range-slider").length) {
        $(".price-range-slider").slider({
            range: true,
            min: 10,
            max: 99,
            values: [10, 70],
            slide: function (event, ui) {
                $("input.property-amount").val(
                    ui.values[0] + " - " + ui.values[1]
                );
            },
        });

        $("input.property-amount").val(
            $(".price-range-slider").slider("values", 0) +
                " - $" +
                $(".price-range-slider").slider("values", 1)
        );
    }

    // page direction
    function directionswitch() {
        if ($(".page_direction").length) {
            $(".direction_switch button").on("click", function () {
                $("body").toggleClass(function () {
                    return $(this).is(".rtl, .ltr") ? "rtl ltr" : "rtl";
                });
            });
        }
    }

    // Mobile Header Collapse
    function mobileInfoSlide() {
        var $toggle = $(".page-header-mobile-info-toggle"),
            $content = $(".page-header-mobile-info-content");
        $toggle.on("click", function (e) {
            e.preventDefault();
            $content.slideToggle(200);
            $toggle.toggleClass("opened");
        });
    }

    /*	=========================================================================
	When document is Scrollig, do
	========================================================================== */

    jQuery(document).on("ready", function () {
        (function ($) {
            // add your functions
            directionswitch();
            mobileInfoSlide();
        })(jQuery);
    });

    /* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

    $(window).on("scroll", function () {
        headerStyle();
    });

    /* ==========================================================================
   When document is loaded, do
   ========================================================================== */

    $(window).on("load", function () {
        handlePreloader();
        enableMasonry();
    });
})(window.jQuery);
