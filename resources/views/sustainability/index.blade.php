<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <!-- favicons Icons -->
        <!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" /> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
        
        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons-two/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons/style.css') }}" />        
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
        <link rel="stylesheet" href="{{ asset('assets/css/tolak-color-2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/tolak-color-3.css') }}" />
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
                            <a href="index.html">
                                <img src="assets/images/logo-dark.png" alt="Tolak HTML" width="184">
                            </a>
                        </div><!-- /.main-header__logo -->

                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="megamenu scrollToLink current"><a href="https://pestex.pixeldev05.com/">Home</a></li>
                                <li class="scrollToLink"><a href="https://pestex.pixeldev05.com/about">About</a></li>
                                <li class="scrollToLink"><a href="https://pestex.pixeldev05.com/services">Services</a></li>
                                <li class="scrollToLink"><a href="https://pestex.pixeldev05.com/sustainability">Sustainability</a></li>
                            </ul>
                        </nav><!-- /.main-header__nav -->
                       
                    </div><!-- /.main-header__inner -->
                </div><!-- /.container-fluid -->
            </header><!-- /.main-header -->

            <section class="page-header">
                <!-- /.page-header__bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="page-header__content">
                                <h2 class="page-header__title">Service Page</h2>
                            </div>
                        </div>
                        <div class="col-md-5">
                    
                        </div>
                    </div>
                </div><!-- /.container -->
            </section><!-- /.page-header -->
            <section class="tab-one">
                <div class="container tabs-box">
                    <div class="sec-title-four text-center">

                        <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Best Of Skill Tab<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                        <h3 class="sec-title-four__title">These are Specific Teachable Skill Defined</h3><!-- /.sec-title-four__title -->
                    </div><!-- /.sec-title-four -->
                    <ul class="list-unstyled tab-buttons tab-one__tab-title">
                        <li data-tab="#technological-solutions" class="tab-btn active-btn technological-solutions">
                            <div class="tab-one__tab-title__trinagle"></div>
                            <div class="tab-one__tab-title__icon"><i class="tolak-icons-two-solutions-three"></i></div>
                            <h3 class="tab-one__tab-title__text">Technological Solutions</h3>
                            <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                        </li>
                        <li data-tab="#competitor-research" class="tab-btn competitor-research">
                            <div class="tab-one__tab-title__trinagle"></div>
                            <div class="tab-one__tab-title__icon"><i class=" tolak-icons-two-lightbulb-dollar"></i></div>
                            <h3 class="tab-one__tab-title__text">Competitor Research</h3>
                            <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                        </li>
                        <li data-tab="#consulting-planning" class="tab-btn consulting-planning">
                            <div class="tab-one__tab-title__trinagle"></div>
                            <div class="tab-one__tab-title__icon"><i class="tolak-icons-two-solution-1"></i></div>
                            <h3 class="tab-one__tab-title__text">Consulting Planning</h3>
                            <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                        </li>
                        <li data-tab="#management-solutions" class="tab-btn management-solutions">
                            <div class="tab-one__tab-title__trinagle"></div>
                            <div class="tab-one__tab-title__icon"><i class=" tolak-icons-two-cybersecurity"></i></div>
                            <h3 class="tab-one__tab-title__text">Management Solutions</h3>
                            <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                        </li>
                    </ul><!-- /.list-unstyl tab-title -->
                    <div class="tabs-content">
                        <div class="tab fadeInUp animated active-tab" id="technological-solutions" style="border:none;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tab-one__thumb">
                                        <img src="assets/images/resources/tab-1-1.jpg" alt="toalk">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-one__content">
                                        <h3 class="tab-one__content__title">
                                            The Bestd23d32d Subjective Interpersonal Skills That Business.
                                        </h3>
                                        <p class="tab-one__content__text">
                                            Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                        </p>
                                        <ul class="tab-one__content__list">
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
                                                <span>Consultancy &amp; solution</span>
                                            </li>
                                        </ul>
                                        <!--
                                        <div class="cta-three__author">
                                            <img src="assets/images/resources/cta-1-author-1.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-2.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-3.jpg" alt="tolak">
                                            <a class="cta-three__author__rm" href="contact.html">More <span class="fas fa-arrow-right"></span></a>
                                        </div>
                                        <a href="about.html" class="tolak-btn-two tolak-btn-two--home-six">
                                            <span class="tolak-btn-two__left-star"></span>
                                            <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                            <span class="tolak-btn-two__right-star"></span>
                                        </a>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab fadeInUp animated" id="competitor-research"  style="border:none;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tab-one__thumb">
                                        <img src="assets/images/resources/tab-1-2.jpg" alt="toalk">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-one__content">
                                        <h3 class="tab-one__content__title">
                                            d2d23d2The Best Subjective Interpersonal Skills That Business.
                                        </h3>
                                        <p class="tab-one__content__text">
                                            Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                        </p>
                                        <ul class="tab-one__content__list">
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
                                                <span>Consultancy &amp; solution</span>
                                            </li>
                                        </ul>
                                       <!--
                                        <div class="cta-three__author">
                                            <img src="assets/images/resources/cta-1-author-1.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-2.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-3.jpg" alt="tolak">
                                            <a class="cta-three__author__rm" href="contact.html">More <span class="fas fa-arrow-right"></span></a>
                                        </div>
                                        <a href="about.html" class="tolak-btn-two tolak-btn-two--home-six">
                                            <span class="tolak-btn-two__left-star"></span>
                                            <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                            <span class="tolak-btn-two__right-star"></span>
                                        </a>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab fadeInUp animated" id="consulting-planning" style="border:none;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tab-one__thumb">
                                        <img src="assets/images/resources/tab-1-3.jpg" alt="toalk">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-one__content">
                                        <h3 class="tab-one__content__title">
                                            The Best Subjective Interpersonal Skills That Business.
                                        </h3>
                                        <p class="tab-one__content__text">
                                            Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                        </p>
                                        <ul class="tab-one__content__list">
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
                                                <span>Consultancy &amp; solution</span>
                                            </li>
                                        </ul>
                                        <!--
                                        <div class="cta-three__author">
                                            <img src="assets/images/resources/cta-1-author-1.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-2.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-3.jpg" alt="tolak">
                                            <a class="cta-three__author__rm" href="contact.html">More <span class="fas fa-arrow-right"></span></a>
                                        </div>
                                        <a href="about.html" class="tolak-btn-two tolak-btn-two--home-six">
                                            <span class="tolak-btn-two__left-star"></span>
                                            <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                            <span class="tolak-btn-two__right-star"></span>
                                        </a>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab fadeInUp animated" id="management-solutions" style="border:none;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tab-one__thumb">
                                        <img src="assets/images/resources/tab-1-4.jpg" alt="toalk">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tab-one__content">
                                        <h3 class="tab-one__content__title">
                                            The Best Subjective Interpersonal Skills That Business.
                                        </h3>
                                        <p class="tab-one__content__text">
                                            Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                        </p>
                                        <ul class="tab-one__content__list">
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
                                                <span>Consultancy &amp; solution</span>
                                            </li>
                                        </ul>
                                        <!--
                                        <div class="cta-three__author">
                                            <img src="assets/images/resources/cta-1-author-1.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-2.jpg" alt="tolak">
                                            <img src="assets/images/resources/cta-1-author-3.jpg" alt="tolak">
                                            <a class="cta-three__author__rm" href="contact.html">More <span class="fas fa-arrow-right"></span></a>
                                        </div>
                                        <a href="about.html" class="tolak-btn-two tolak-btn-two--home-six">
                                            <span class="tolak-btn-two__left-star"></span>
                                            <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                            <span class="tolak-btn-two__right-star"></span>
                                        </a>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.tab-content -->
                </div>
            </section><!-- tab-one -->
            <!-- Feature End -->
             <!-- Service Start -->
            <div class="page-wrapper">
                <section class="service-five">
                    <div class="container">
                        <div class="sec-title-three text-center">

                            <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR BEST SERVICE<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                            <h3 class="sec-title-three__title">We Are Service Your Business</h3><!-- /.sec-title-three__title -->
                        </div><!-- /.sec-title-three -->
                        <div class="row" data-owl-options='{
                            "items": 1,
                            "margin": 30,
                            "loop": false,
                            "smartSpeed": 700,
                            "nav": false,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "dots": false,
                            "autoplay": false,
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 3
                                }
                            }
                            }'>
                            <div class="col-md-4 item">
                                <div class="service-five__item text-center">
                                    <div class="service-five__item__image">
                                        <img src="assets/images/resources/service-5-1.jpg" alt="tolak">
                                    </div>
                                    <div class="service-five__item__content">
                                        <div class="service-five__item__icon">
                                            <span class="tolak-icons-two-solution-1"></span>
                                        </div><!-- /.service-icon -->
                                        <h3 class="service-five__item__title">
                                            <a href="business-marketing.html">Operational Efficiency</a>
                                        </h3><!-- /.service-title -->
                                        <p class="service-five__item__text">
                                            Solution the we create this business Solution
                                        </p><!-- /.service-text -->
                                    </div>
                                </div><!-- /.service-card-one -->
                            </div>
                            <div class="col-md-4 item">
                                <div class="service-five__item text-center">
                                    <div class="service-five__item__image">
                                        <img src="assets/images/resources/service-5-2.jpg" alt="tolak">
                                    </div>
                                    <div class="service-five__item__content">
                                        <div class="service-five__item__icon">
                                            <span class=" tolak-icons-two-solutions-three"></span>
                                        </div><!-- /.service-icon -->
                                        <h3 class="service-five__item__title">
                                            <a href="business-solution.html">Business Solutions</a>
                                        </h3><!-- /.service-title -->
                                        <p class="service-five__item__text">
                                            Solution the we create this business Solution
                                        </p><!-- /.service-text -->
                                    </div>
                                </div><!-- /.service-card-one -->
                            </div>
                            <div class="col-md-4 item">
                                <div class="service-five__item text-center">
                                    <div class="service-five__item__image">
                                        <img src="assets/images/resources/service-5-3.jpg" alt="tolak">
                                    </div>
                                    <div class="service-five__item__content">
                                        <div class="service-five__item__icon">
                                            <span class="tolak-icons-two-cybersecurity"></span>
                                        </div><!-- /.service-icon -->
                                        <h3 class="service-five__item__title">
                                            <a href="technology-services.html">Digital Of Agency</a>
                                        </h3><!-- /.service-title -->
                                        <p class="service-five__item__text">
                                            Solution the we create this business Solution
                                        </p><!-- /.service-text -->
                                    </div>
                                </div><!-- /.service-card-one -->
                            </div>
                        </div>
                    </div>
                </section>
                <div style="margin-left:auto;margin-right:auto;" class="text-center mb-5">
                    <button class="btn btn-warning " style="width:15%;">Ver todos os serviços</button>
                </div>
            </div>
            <section class="mail-section">
                <div class="container">
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
            <!-- Service End 
             
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
        <script>
            $(document).ready(function(){
                $(".technological-solutions").click(function(){                    
                    $('.technological-solutions').addClass('active-btn');
                    $('.competitor-research').removeClass('active-btn');
                    $('.consulting-planning').removeClass('active-btn');
                    $('.management-solutions').removeClass('active-btn');
                    $('#technological-solutions').addClass('active-tab');
                    $('#competitor-research').removeClass('active-tab');
                    $('#consulting-planning').removeClass('active-tab');
                    $('#management-solutions').removeClass('active-tab');
                });

                $(".competitor-research").click(function(){                    
                    $('.technological-solutions').removeClass('active-btn');
                    $('.competitor-research').addClass('active-btn');
                    $('.consulting-planning').removeClass('active-btn');
                    $('.management-solutions').removeClass('active-btn');
                    $('#technological-solutions').removeClass('active-tab');
                    $('#competitor-research').addClass('active-tab');
                    $('#consulting-planning').removeClass('active-tab');
                    $('#management-solutions').removeClass('active-tab');
                });

                $(".consulting-planning").click(function(){                    
                    $('.technological-solutions').removeClass('active-btn');
                    $('.competitor-research').removeClass('active-btn');
                    $('.consulting-planning').addClass('active-btn');
                    $('.management-solutions').removeClass('active-btn');
                    $('#technological-solutions').removeClass('active-tab');
                    $('#competitor-research').removeClass('active-tab');
                    $('#consulting-planning').addClass('active-tab');
                    $('#management-solutions').removeClass('active-tab');
                });

                $(".management-solutions").click(function(){                    
                    $('.technological-solutions').removeClass('active-btn');
                    $('.competitor-research').removeClass('active-btn');
                    $('.consulting-planning').removeClass('active-btn');
                    $('.management-solutions').addClass('active-btn');
                    $('#technological-solutions').removeClass('active-tab');
                    $('#competitor-research').removeClass('active-tab');
                    $('#consulting-planning').removeClass('active-tab');
                    $('#management-solutions').addClass('active-tab');
                });
            });
        </script>
    </body>
</html>