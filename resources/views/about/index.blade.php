<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />    
    
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
        
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
        
        <link rel="stylesheet" href="{{ asset('assets/vendors/icofont/icofont.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons-two/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons/style.css') }}" />


        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
        
        <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/tolak.css') }}" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .input-container { display: flex; width: 60%; margin-bottom: 15px; margin-left: 20px;margin-right: 20px;}
            .icon { padding: 10px; color: black; min-width: 50px; text-align: center; }
            .input-field { width: 100%; padding: 10px; outline: none; }
            .input-field:focus { border: 2px solid dodgerblue; }
            .btn { background-color: dodgerblue; color: white; padding: 15px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9; }
            .btn:hover { opacity: 1; }
            .custom-select{
                background-color:#A9A9A9;
                width:100%;
                color:white;
            } 
            .custom-select:focus{
                border: 2px solid dodgerblue;
            }

            @media screen and (max-width: 770px) {
                .apointement-box {
                    margin-left:0px;
                    margin-top:0px
                }
            }

            .quote_border_inbox{
                border-top-right-radius:30px;
            }


        </style>
         <!-- jequery plugins -->
        
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
          
        <script src="{{ asset('assets/js/owl.js') }}"></script>
        <script src="{{ asset('assets/js/wow.js') }}"></script>
        <script src="{{ asset('assets/js/validation.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('assets/js/appear.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    
        <!-- main-js -->
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </head>
    <body class="custom-cursor">  
        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="/">
                            <img src="assets/images/logo-dark.png" alt="Tolak HTML" width="184">
                        </a>
                    </div><!-- /.main-header__logo -->

                    @include('includes.nav') 
                   
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        <section class="main-slider-three" id="home">
            <div class="main-slider-three__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "items": 1,
            "autoplay": true,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": false,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "dots": false,
            "margin": 0
            }'>
                <div class="item">
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg" style="background-image: url({{ $main[0]['bg-1'] }});"></div><!-- slider-bg -->
                        <div class="main-slider-three__shape-one" style="background-image: url({{ $main[0]['shape-one-1'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-two" style="background-image: url({{ $main[0]['shape-two-1'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-three" style="background-image: url({{ $main[0]['shape-three-1'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-four" style="background-image: url({{ $main[0]['shape-four-1'] }});"></div><!-- slider-shape -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-slider-three__thumb">
                                        <img src="{{ $main[0]['thumb-1'] }}" alt="tolak" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-1'] }}</span>
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-2'] }}</span>
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-3'] }}</span>
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-three__text">
                                            {{ $main[0]['p-1'] }}
                                        </p><!-- slider-text -->
                                        <div class="main-slider-three__btn">
                                            <a href="/servicos" class="tolak-btn"><b>{{ $main[0]['div-a-b'] }}</b><span></span></a><!-- slider-btn -->
                                            {{-- <div class="main-slider-three__btn__video">
                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                    <i class="icon-play-button"></i>
                                                    <span class="video-popup__btn-ripple"></span>
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="item">
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg" style="background-image: url({{ $main[0]['bg-2'] }});"></div><!-- slider-bg -->
                        <div class="main-slider-three__shape-one" style="background-image: url({{ $main[0]['shape-one-2'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-two" style="background-image: url({{ $main[0]['shape-two-2'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-three" style="background-image: url({{ $main[0]['shape-three-2'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-four" style="background-image: url({{ $main[0]['shape-four-2'] }});"></div><!-- slider-shape -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-slider-three__thumb">
                                        <img src="{{ $main[0]['thumb-2'] }}" alt="tolak" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-1-1'] }}</span>
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-2-1'] }}</span>
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-3-1'] }}</span>
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-three__text">
                                            {{ $main[0]['p-1-1'] }}
                                        </p><!-- slider-text -->
                                        <div class="main-slider-three__btn">
                                            <a href="/servicos" class="tolak-btn"><b>{{ $main[0]['div-a-b-1'] }}</b><span></span></a><!-- slider-btn -->
                                            <div class="main-slider-three__btn__video">
                                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                    <i class="icon-play-button"></i>
                                                    <span class="video-popup__btn-ripple"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- Feature -->
             
        <!-- service-section -->
        <section class="service-section fadeInUp">
            <div class="image-layer" style="background-image: url({{ $service[0]['image-layer-path'] }});"></div>
            <div class="auto-container">
                <div class="text-center light">
                    <h6 class="sec-title__tagline h6 text-white"><span
                        class="sec-title__tagline__left"></span>{{ $service[0]['h6'] }}<span
                        class="sec-title__tagline__right"></span></h6>
                    <h2 class="h3 text-white">{{ $service[0]['h2'] }}</h2>
                    <p class="text-white mt-5">{{ $service[0]['p'] }}</p>
                </div>
            </div>
        </section>
        <div class="mt-5" style="padding:200px;">
            <section class="why-choose-five bg-light p-5" style="border-radius:30px; margin-top: -200px;">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-6">
                            <div class="wow slideInLeft">
                                <img src="{{ $service[0]['img-path'] }}" alt="tolak" style="border-radius: 30px">
                            </div><!-- /.why-choose-five__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="why-choose-five__content">
                                <div class="sec-title-four text-left">
                                    <h6 class="sec-title__tagline text-titles"><span
                                        class="sec-title__tagline__left"></span>{{ $service[0]['h6-span'] }}<span
                                        class="sec-title__tagline__right"></span></h6>

                                    <h3 class="sec-title-four__title">{{ $service[0]['h3'] }}</h3><!-- /.sec-title-four__title -->
                                </div><!-- /.sec-title-four -->
                                <p class="why-choose-five__content__text">
                                    {{ $service[0]['p-1'] }}
                                </p>
                                <div class="row gutter-y-30">
                                    <div class="col-md-4">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon"><i class="tolak-icons-two-deal"></i></div>
                                            <h3 class="why-choose-five__box__title">{{ $service[0]['h3-1'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon"><i class="tolak-icons-two-solutions-three"></i></div>
                                            <h3 class="why-choose-five__box__title">{{ $service[0]['h3-2'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon"><i class="tolak-icons-two-smart-grid"></i></div>
                                            <h3 class="why-choose-five__box__title">{{ $service[0]['h3-3'] }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <ul class="why-choose-five__list">
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-1'] }}</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-2'] }}</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-3'] }}</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-4'] }}</span>
                                    </li>
                                </ul>
                                {{-- <a href="about.html" class="tolak-btn-two tolak-btn-two--home-seven">
                                    <span class="tolak-btn-two__left-star"></span>
                                    <span>{{ $service[0]['a-span'] }}<i class="tolak-icons-two-arrow-right-short"></i></span>
                                    <span class="tolak-btn-two__right-star"></span>
                                </a> --}}
                            </div><!-- /.why-choose-five__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.why-choose-five -->
        </div>
        
        <!-- service-section end -->
        <h2 class="text-center h2 text-body">{{ $video[0]['h2'] }}</h2>
        <p class="text-center p mt-3 mb-5 p-5">{{ $video[0]['p'] }}</p>
        <section class="cta-four mt-5">
            <div class="container mt-5">
                <div class="cta-four__bg" style="background-image: url({{ $video[0]['bg-img'] }});">
                    <div class="cta-four__shape" style="background-image: url({{ $video[0]['shape-img'] }});"></div>
                    <div class="cta-four__overlay" style="background-image: url({{ $video[0]['overlay-img'] }});"></div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="cta-four__content">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="icon-play-button"></i>
                                </a>
                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ $video[0]['h6-span'] }}<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                    <h3 class="sec-title-two__title">{{ $video[0]['h3'] }}</h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="cta-four__content__text">
                                    {{ $video[0]['p-1'] }}
                                </p>
                                <div class="cta-four__content__bar"></div>
                                <div class="cta-four__content__info">
                                    <div class="cta-four__content__info__icon"><i class="icofont-speech-comments"></i></div>
                                    <p class="cta-four__content__info__text">
                                        {{ $video[0]['div-p'] }} <a href="contact.html">Saiba mais.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-four__image mt-5">
                                <img src="{{ $video[0]['img-path'] }}" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials-three">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url({{ $testimonial[0]['img-path'] }});"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span><b>{{ $testimonial[0]['h6'] }}</b><span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">{{ $testimonial[0]['h3'] }}</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonials-three__image">
                            <img src="{{ $testimonial[0]['img-path-1'] }}" alt="tolak" style="border-radius:30px;">
                            <img class="testimonials-three__image__left" src="{{ $testimonial[0]['img-path-2'] }}" alt="tolak" style="border-radius:30px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-three__content" style="border-radius:30px;">
                            <h3 class="testimonials-three__content__title">
                                {{ $testimonial[0]['h3-1'] }}
                            </h3>
                            <div class="testimonials-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                        "items": 1,
                        "margin": 0,
                        "loop": false,
                        "smartSpeed": 700,
                        "nav": false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "dots": true,
                        "autoplay": false
                        }'>
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“ </span>
                                            {{ $testimonial[0]['span'] }}
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <!--
                                            <div class="testimonials-card-three__image">
                                                <img src="assets/images/resources/testi-1-4.jpg" alt="Lataro Marsena">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                {{ $testimonial[0]['h3-2'] }}
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">{{ $testimonial[0]['p'] }}</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>
                                            {{ $testimonial[0]['span-1'] }}
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <!--
                                            <div class="testimonials-card-three__image">
                                                <img src="assets/images/resources/testi-1-5.jpg" alt="Marsena Baran">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                {{ $testimonial[0]['h3-3'] }}
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">{{ $testimonial[0]['p-1'] }}</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>
                                            {{ $testimonial[0]['span-2'] }}
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <!--
                                            <div class="testimonials-card-three__image">
                                                <img src="assets/images/resources/testi-1-3.jpg" alt="David Cooper">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                {{ $testimonial[0]['h3-4'] }}
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">{{ $testimonial[0]['p-2'] }}</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                            </div><!-- /.testimonials-three__carousel -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-three -->
        <section class="contact-two">
            <div class="container">
                <div class="contact-two__wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-two__info">
                                <div class="contact-two__info__shape" style="background-image: url({{ $contact_info[0]['bg-img'] }});"></div>
                                <h4 class="contact-two__info__title"><b>{{ $contact_info[0]['h4'] }}</b></h4>
                                <p class="contact-two__info__text">
                                    {{ $contact_info[0]['p'] }}
                                </p>
                                <ul class="contact-two__info__box-wrapper">
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-phone-call"></i></div>
                                        <h4 class="contact-two__info__box__title">{{ $contact_info[0]['h4-1'] }}</h4>
                                        <p class="contact-two__info__box__text"><a href="tel:025461556695">{{ $contact_info[0]['p-1'] }}</a></p>
                                    </li>
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-open-mail"></i></div>
                                        <h4 class="contact-two__info__box__title">{{ $contact_info[0]['h4-1'] }}</h4>
                                        <p class="contact-two__info__box__text"><a href="mailto:{{ $contact_info[0]['p-1'] }}">{{ $contact_info[0]['p-1'] }}</a></p>
                                    </li>
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-pin"></i></div>
                                        <h4 class="contact-two__info__box__title">{{ $contact_info[0]['h4-2'] }}</h4>
                                        <p class="contact-two__info__box__text">{{ $contact_info[0]['p-2'] }}</p>
                                    </li>
                                </ul>
                                <div class="contact-two__info__social">
                                    <h5 class="contact-two__info__social__title">Siga-nos:</h5>
                                    <div class="contact-two__info__social__wrap">
                                        <a href="https://facebook.com">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://pinterest.com">
                                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                            <span class="sr-only">Pinterest</span>
                                        </a>
                                        <a href="https://twitter.com">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://instagram.com">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div>
                                </div><!-- contact-social -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-two__content">
                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span><b>{{ $contact_info[0]['h-6'] }}</b><span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                    <h3 class="sec-title-two__title"><b>{{ $contact_info[0]['h-3'] }}</b></h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="contact-two__content__text">
                                    {{ $contact_info[0]['p-3'] }}
                                </p>
                                <form class="contact-two__form contact-form-validated form-one" action="inc/sendemail.php">
                                    <div class="form-one__group">
                                        <div class="form-one__control">
                                            <input type="text" name="name" placeholder="Nome">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="email" name="email" placeholder="Email">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="Mensagem"></textarea><!-- /# -->
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="tolak-btn"><b>enviar</b><span></span></button>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact -->
        <section class="mail-section">
            <div class="container" style="margin-top: 150px;">
                <div class="mail-section__wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-4"></div>
                        <div class="col-md-5 col-lg-3">
                            <div class="mail-section__content">
                                <h3 class="mail-section__content__title">Our Newsletter</h3>
                                <p class="mail-section__content__text">We are dolor sit amet csectetur</p>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-5">
                            <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-section__newsletter mc-form">
                                <input type="text" name="EMAIL" placeholder="Enter your email">
                                <button type="submit" class="tolak-btn">
                                    <b>Subscribe</b><span></span>
                                    <span class="sr-only">Subscribe</span><!-- /.sr-only -->
                                </button>
                            </form><!-- /.footer-widget__newsletter mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="assets/images/logo-light.png" width="184" alt="Tolak HTML Template">
                            </a>
                            <ul class="footer-widget__info">
                                <li><span class="icofont-clock-time"></span>Open Hours of Government:<br> Mon - Fri: 8.00 am. - 6.00 pm.</li>
                                <li><span class="icofont-location-pin"></span>13/A, Miranda Halim City .</li>
                                <li><span class="icofont-phone"></span><a href="tel:09969569535">099 695 695 35</a></li>
                            </ul>
                            <div class="footer-widget__social">
                                <a href="https://facebook.com">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://pinterest.com">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://twitter.com">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div>
                            <div class="footer-widget__image">
                                <img src="assets/images/resources/footer-about.jpg" alt="tolak">
                            </div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--posts">
                            <h2 class="footer-widget__title">Recent Posts</h2><!-- /.footer-widget__title -->
                            <ul class="footer-widget__posts list-unstyled">
                                <li class="footer-widget__posts__item">
                                    <div class="footer-widget__posts__image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="footer-widget__posts__content">
                                        <p class="footer-widget__posts__meta">23 jun 2023</p><!-- /.sidebar__posts__date -->
                                        <h4 class="footer-widget__posts__title"><a href="blog-details.html">We round Solution york Blog</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="footer-widget__posts__item">
                                    <div class="footer-widget__posts__image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="footer-widget__posts__content">
                                        <p class="footer-widget__posts__meta">23 jun 2023</p><!-- /.sidebar__posts__date -->
                                        <h4 class="footer-widget__posts__title"><a href="blog-details.html">We Should be Descriptive</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                            </ul><!-- /.sidebar__posts list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">Service</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="about.html">Why choose us</a></li>
                                <li><a href="services.html">Our Service</a></li>
                                <li><a href="reviews.html">Partners</a></li>
                                <li><a href="contact.html">Core values</a></li>
                                <li><a href="project.html">Our projects</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget footer-widget--links footer-widget--last">
                            <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="packages.html">Packages</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog-grid-right.html">News</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="main-footer__copyright">
                                &copy; Copyright <span class="dynamic-year"></span> by Tolak HTML Template.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled main-footer__bottom__list">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog-list-right.html">News</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->
            <!--
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>     
        -->
        <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
        <script src="{{ asset('assets/vendors/tilt/tilt.jquery.js') }}"></script>
        <script src="{{ asset('assets/vendors/simpleParallax/simpleParallax.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
        <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/progress-bar/knob.js') }}"></script>

        <!-- chart js -->
        <script src="{{ asset('assets/vendors/chart/chart.js') }}"></script>
        <script src="{{ asset('assets/vendors/chart/custome-chart.js') }}"></script>

        <!-- template js -->
        <script src="{{ asset('assets/js/tolak.js') }}"></script>
        
        <!-- sanito -->
        
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.js') }}"></script>
        <script src="{{ asset('assets/js/wow.js') }}"></script>
        <script src="{{ asset('assets/js/validation.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('assets/js/appear.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>  
    </body>
</html>