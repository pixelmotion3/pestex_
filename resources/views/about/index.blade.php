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
                        <div class="main-slider-three__bg" style="background-image: url({{ asset('assets/images/backgrounds/slider-3-1.jpg') }});"></div><!-- slider-bg -->
                        <div class="main-slider-three__shape-one" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-1.png') }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-two" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-2.png') }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-three" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-3.png') }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-four" style="background-image: url({{ asset('©assets/images/shapes/slider-3-shape-4.png') }});"></div><!-- slider-shape -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-slider-three__thumb">
                                        <img src="{{ asset('assets/images/backgrounds/slider-3-layer.png') }}" alt="tolak" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title__anim">Best IT Solution</span>
                                            <span class="main-slider-three__title__anim">Services Team</span>
                                            <span class="main-slider-three__title__anim">Technology.</span>
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-three__text">
                                            Business a soluion and emirate in the Arab known <br>for luxury city for Company.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-three__btn">
                                            <a href="https://pestex.pixeldev05.com/services" class="tolak-btn"><b>Service Work</b><span></span></a><!-- slider-btn -->
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
                </div>
                <div class="item">
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg" style="background-image: url({{ asset('assets/images/backgrounds/slider-3-2.jpg') }});"></div><!-- slider-bg -->
                        <div class="main-slider-three__shape-one" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-1.png') }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-two" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-2.png') }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-three" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-3.png') }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-four" style="background-image: url({{ asset('assets/images/shapes/slider-3-shape-4.png') }});"></div><!-- slider-shape -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-slider-three__thumb">
                                        <img src="{{ asset('assets/images/backgrounds/slider-3-layer-2.png') }}" alt="tolak" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title__anim">Best IT Solution</span>
                                            <span class="main-slider-three__title__anim">Services Team</span>
                                            <span class="main-slider-three__title__anim">Technology.</span>
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-three__text">
                                            Business a soluion and emirate in the Arab known <br>for luxury city for Company.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-three__btn">
                                            <a href="https://pestex.pixeldev05.com/services" class="tolak-btn"><b>Service Work</b><span></span></a><!-- slider-btn -->
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
                </div>
            </div>
        </section>
        <!-- Feature -->
             
        <!-- service-section -->
        <section class="service-section fadeInUp">
            <div class="image-layer" style="background-image: url(assets/images/background/service-1.jpg);"></div>
            <div class="auto-container">
                <div class="sec-title text-center light">
                    <h6 >Our Services</h6>
                    <h2>Delivering a Higher Standard Cleaning Services</h2>
                    <p class="text-white mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, velit! Placeat atque impedit qui accusantium, ipsa voluptas vero? <br/>Eum explicabo accusamus voluptatem voluptatum ipsa repudiandae est, ipsam ea obcaecati pariatur</p>
                </div>
            </div>
        </section>
        <div class="mt-5" style="padding:200px;">
            <section class="why-choose-five bg-light p-5" style="border-radius:30px; margin-top: -200px;">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-6">
                            <div class="wow slideInLeft">
                                <img src="assets/images/resources/why-choose-5-1.jpg" alt="tolak" style="border-radius: 30px">
                            </div><!-- /.why-choose-five__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="why-choose-five__content">
                                <div class="sec-title-four text-left">

                                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>OUR CHOOSE MORE<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                                    <h3 class="sec-title-four__title">We Preparing For Your Success Choose Best Solutions.</h3><!-- /.sec-title-four__title -->
                                </div><!-- /.sec-title-four -->
                                <p class="why-choose-five__content__text">
                                    Business tailored design, management & support services Business business agency e lit, sed do eiusmod tempor
                                    majority have in some we form, by injected humour solution.
                                </p>
                                <div class="row gutter-y-30">
                                    <div class="col-md-4">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon"><i class="tolak-icons-two-deal"></i></div>
                                            <h3 class="why-choose-five__box__title">Technological Solutions</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon"><i class="tolak-icons-two-solutions-three"></i></div>
                                            <h3 class="why-choose-five__box__title">Financial Management</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon"><i class="tolak-icons-two-smart-grid"></i></div>
                                            <h3 class="why-choose-five__box__title">Product Development</h3>
                                        </div>
                                    </div>
                                </div>
                                <ul class="why-choose-five__list">
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>Team Support</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>Business Management</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>Business tailored</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>Consultancy & solution</span>
                                    </li>
                                </ul>
                                <a href="about.html" class="tolak-btn-two tolak-btn-two--home-seven">
                                    <span class="tolak-btn-two__left-star"></span>
                                    <span>Read More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                    <span class="tolak-btn-two__right-star"></span>
                                </a>
                            </div><!-- /.why-choose-five__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.why-choose-five -->
        </div>
        
        <!-- service-section end -->
        <h2 class="text-center h2 text-body" style="margin-top:50px;">We Preparing for your success <br/>Choose Best Options</h2>
        <p class="text-center p mt-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nesciunt atque. Iure, labore voluptatum quia<br/> omnis molestias tempora similique doloribus nisi temporibus veniam. Natus minus amet repellat vitae autem iste.</p>
        <section class="cta-four mt-5">
            <div class="container mt-5">
                <div class="cta-four__bg" style="background-image: url(assets/images/resources/cta-4-bg.jpg);">
                    <div class="cta-four__shape" style="background-image: url(assets/images/shapes/cta-4-border.png);"></div>
                    <div class="cta-four__overlay" style="background-image: url(assets/images/shapes/cta-4-bg-overlay.png);"></div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="cta-four__content">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="icon-play-button"></i>
                                </a>
                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Watch Video<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                    <h3 class="sec-title-two__title">Want to learn to Video idea Business</h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="cta-four__content__text">
                                    Business tailored it design, management & support services business agency elit, sed do eiusmod tempor.
                                </p>
                                <div class="cta-four__content__bar"></div>
                                <div class="cta-four__content__info">
                                    <div class="cta-four__content__info__icon"><i class="icofont-speech-comments"></i></div>
                                    <p class="cta-four__content__info__text">
                                        Collaborate Consulting exists to find the place where business interests <a href="contact.html">Meet.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-four__image mt-5">
                                <img src="assets/images/resources/cta-4-1.png" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials-three">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-3.jpg);"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our testimonial say<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">What Customers Awesome Reviews</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonials-three__image">
                            <img src="assets/images/resources/testimonial-3-1.jpg" alt="tolak" style="border-radius:30px;">
                            <img class="testimonials-three__image__left" src="assets/images/resources/testimonial-3-2.png" alt="tolak" style="border-radius:30px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-three__content" style="border-radius:30px;">
                            <h3 class="testimonials-three__content__title">
                                Highly Skilled Busines Client Defense Solution
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
                                            <span class="testimonials-card-three__content__quote">“</span>If you are accused of committing a crime, you will need the very best criminal defense attorneys in Fresno. We are especially skilled in the following practice area
                                            simperative that you.
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <!--
                                            <div class="testimonials-card-three__image">
                                                <img src="assets/images/resources/testi-1-4.jpg" alt="Lataro Marsena">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                Lataro Marsena
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">Founder Ceo</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>If you are accused of committing a crime, you will need the very best criminal defense attorneys in Fresno. We are especially skilled in the following practice area
                                            simperative that you.
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <!--
                                            <div class="testimonials-card-three__image">
                                                <img src="assets/images/resources/testi-1-5.jpg" alt="Marsena Baran">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                Marsena Baran
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">Founder</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>If you are accused of committing a crime, you will need the very best criminal defense attorneys in Fresno. We are especially skilled in the following practice area
                                            simperative that you.
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <!--
                                            <div class="testimonials-card-three__image">
                                                <img src="assets/images/resources/testi-1-3.jpg" alt="David Cooper">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                David Cooper
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">Manager</p><!-- /.testimonials-card-three__designation -->
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
                                <div class="contact-two__info__shape" style="background-image: url(assets/images/shapes/contact-2-shape-1.png);"></div>
                                <h4 class="contact-two__info__title">Contact Information :</h4>
                                <p class="contact-two__info__text">
                                    Business tailored it design, management & support business agency elit, sed do eiusmod tempor.
                                </p>
                                <ul class="contact-two__info__box-wrapper">
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-phone-call"></i></div>
                                        <h4 class="contact-two__info__box__title">Call This Now</h4>
                                        <p class="contact-two__info__box__text"><a href="tel:025461556695">+025461556695</a></p>
                                    </li>
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-open-mail"></i></div>
                                        <h4 class="contact-two__info__box__title">Your Message</h4>
                                        <p class="contact-two__info__box__text"><a href="mailto:amar@mail.com">amar@mail.com</a></p>
                                    </li>
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-pin"></i></div>
                                        <h4 class="contact-two__info__box__title">Your location</h4>
                                        <p class="contact-two__info__box__text">Dhaka ,56 Besta</p>
                                    </li>
                                </ul>
                                <div class="contact-two__info__social">
                                    <h5 class="contact-two__info__social__title">Follow Social:</h5>
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
                                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our COntact Us<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                    <h3 class="sec-title-two__title">Get free Business touch Customers me.</h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="contact-two__content__text">
                                    Business tailored it design, management & support services<br> business agency elit, sed do eiusmod tempor.
                                </p>
                                <form class="contact-two__form contact-form-validated form-one" action="inc/sendemail.php">
                                    <div class="form-one__group">
                                        <div class="form-one__control">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="email" name="email" placeholder="Email address">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="Message"></textarea><!-- /# -->
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="tolak-btn"><b>Send Request</b><span></span></button>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact -->
        <footer class="footer" style="max-height:200px; mt-5">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-dark" style="background-color: black;height:200px;">
                    <img class="pull-right mt-5 mr-5" src="assets/images/footer-logo.png" style="max-width: 200px;max-height: 200px;"/>
                </div>
                <div class="col-md-9" style="height:200px;">
                    <h3 class="h3 mt-5">Titulo</h3>
                    <p>Paragrafo We are dolor sit amet caadwdjqdq</p>
                </div>
            </div>
            <div class="row" style="height:50px;z-index:10;background-color:darkblue;color:white;">
                <div class="col-md-3" style="background-color: darkblue;margin-top:-50px;height:50px;">
                    <p class="text-center text-white mt-3">Copyright</p>
                </div>
                <div class="col-md-3 text-white" style="background-color: darkblue;color:white;margin-top:-50px;height:50px;">
                    <p class="text-white"> ©2024 <i class="fa fa-copyright mt-3" aria-hidden="true"></i> Todos direitos reservados</p>
                </div>
                <div class="col-md-3 text-white" style="background-color: darkblue;color:white;margin-top:-50px;height:50px;">
                    <p class="mt-3 text-white">Politica de publicidade</p>
                </div>
                <div class="col-md-3 text-white" style="background-color: darkblue;color:white;margin-top:-50px;height:50px;">
                    <p class="mt-3 text-white">Desenvolvido por Pixel in Motion</p>
                </div>
            </div>
            </div>
        </footer>
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