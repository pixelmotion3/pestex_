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
        <link rel="stylesheet" href="{{ asset('assets/css/tolak.css') }}" />

        <!-- Styles -->
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
                            <p>Tudo Joia</p>    
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
            <!-- Service Start -->
            <section class="service-two service-two--page">
                <div class="container">
                    <div class="sec-title-two text-center">
                        <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Best Service<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                        <h3 class="sec-title-two__title">We Leadership This Service</h3><!-- /.sec-title-two__title -->
                    </div><!-- /.sec-title-two -->
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-two__item wow fadeInUp" data-wow-delay="100ms">
                                <div class="service-two__item__thumb">
                                    <img src="assets/images/resources/service-2-1.jpg" alt="tolak">
                                </div>
                                <div class="service-two__item__normal">
                                    <div class="service-two__item__normal__icon"><span class="icon-cooperation"></span></div>
                                    <h3 class="service-two__item__normal__title">Business of Growth</h3>
                                </div><!-- normal-content -->
                                <div class="service-two__item__hover">
                                    <div class="service-two__item__normal__icon"><span class="icon-cooperation"></span></div>
                                    <h3 class="service-two__item__hover__title">
                                        <a href="business-growth.html">Business of Growth</a>
                                    </h3>
                                    <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                    <a class="service-two__item__hover__btn" href="business-growth.html"><span class="icon-right-arrow"></span></a>
                                </div><!-- hover-content -->
                            </div><!-- /.service-card-two -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-two__item wow fadeInUp" data-wow-delay="150ms">
                                <div class="service-two__item__thumb">
                                    <img src="assets/images/resources/service-2-2.jpg" alt="tolak">
                                </div>
                                <div class="service-two__item__normal">
                                    <div class="service-two__item__normal__icon"><span class="icon-ads-campaign"></span></div>
                                    <h3 class="service-two__item__normal__title">Solution to Business</h3>
                                </div><!-- normal-content -->
                                <div class="service-two__item__hover">
                                    <div class="service-two__item__normal__icon"><span class="icon-ads-campaign"></span></div>
                                    <h3 class="service-two__item__hover__title">
                                        <a href="business-solution.html">Solution to Business</a>
                                    </h3>
                                    <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                    <a class="service-two__item__hover__btn" href="business-solution.html"><span class="icon-right-arrow"></span></a>
                                </div><!-- hover-content -->
                            </div><!-- /.service-card-two -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-two__item wow fadeInUp" data-wow-delay="200ms">
                                <div class="service-two__item__thumb">
                                    <img src="assets/images/resources/service-2-3.jpg" alt="tolak">
                                </div>
                                <div class="service-two__item__normal">
                                    <div class="service-two__item__normal__icon"><span class="icon-headhunter"></span></div>
                                    <h3 class="service-two__item__normal__title">Markting of Solution</h3>
                                </div><!-- normal-content -->
                                <div class="service-two__item__hover">
                                    <div class="service-two__item__normal__icon"><span class="icon-headhunter"></span></div>
                                    <h3 class="service-two__item__hover__title">
                                        <a href="marketing-solution.html">Markting of Solution</a>
                                    </h3>
                                    <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                    <a class="service-two__item__hover__btn" href="marketing-solution.html"><span class="icon-right-arrow"></span></a>
                                </div><!-- hover-content -->
                            </div><!-- /.service-card-two -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-two__item wow fadeInUp" data-wow-delay="250ms">
                                <div class="service-two__item__thumb">
                                    <img src="assets/images/resources/service-2-4.jpg" alt="tolak">
                                </div>
                                <div class="service-two__item__normal">
                                    <div class="service-two__item__normal__icon"><span class="icon-agency"></span></div>
                                    <h3 class="service-two__item__normal__title">Technology Services</h3>
                                </div><!-- normal-content -->
                                <div class="service-two__item__hover">
                                    <div class="service-two__item__normal__icon"><span class="icon-agency"></span></div>
                                    <h3 class="service-two__item__hover__title">
                                        <a href="technology-services.html">Technology Services</a>
                                    </h3>
                                    <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                    <a class="service-two__item__hover__btn" href="technology-services.html"><span class="icon-right-arrow"></span></a>
                                </div><!-- hover-content -->
                            </div><!-- /.service-card-two -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-two__item wow fadeInUp" data-wow-delay="300ms">
                                <div class="service-two__item__thumb">
                                    <img src="assets/images/resources/service-2-5.jpg" alt="tolak">
                                </div>
                                <div class="service-two__item__normal">
                                    <div class="service-two__item__normal__icon"><span class="icon-advertisig-agency"></span></div>
                                    <h3 class="service-two__item__normal__title">Marketing Business</h3>
                                </div><!-- normal-content -->
                                <div class="service-two__item__hover">
                                    <div class="service-two__item__normal__icon"><span class="icon-advertisig-agency"></span></div>
                                    <h3 class="service-two__item__hover__title">
                                        <a href="business-marketing.html">Marketing Business</a>
                                    </h3>
                                    <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                    <a class="service-two__item__hover__btn" href="business-marketing.html"><span class="icon-right-arrow"></span></a>
                                </div><!-- hover-content -->
                            </div><!-- /.service-card-two -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-two__item wow fadeInUp" data-wow-delay="350ms">
                                <div class="service-two__item__thumb">
                                    <img src="assets/images/resources/service-2-6.jpg" alt="tolak">
                                </div>
                                <div class="service-two__item__normal">
                                    <div class="service-two__item__normal__icon"><span class="icon-management"></span></div>
                                    <h3 class="service-two__item__normal__title">Support of Business</h3>
                                </div><!-- normal-content -->
                                <div class="service-two__item__hover">
                                    <div class="service-two__item__normal__icon"><span class="icon-management"></span></div>
                                    <h3 class="service-two__item__hover__title">
                                        <a href="business-support.html">Support of Business</a>
                                    </h3>
                                    <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                    <a class="service-two__item__hover__btn" href="business-support.html"><span class="icon-right-arrow"></span></a>
                                </div><!-- hover-content -->
                            </div><!-- /.service-card-two -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-six" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-six__image count-box wow fadeInLeft" data-wow-delay="00ms">
                                <div class="about-six__image__one wow fadeInUp" data-wow-delay="200ms">
                                    <img src="assets/images/resources/about-6-1.jpg" alt="tolak">
                                </div>
                                <div class="about-six__image__bg-shape"></div>
                                <div class="about-six__image__experiance">
                                    <h3 class="about-six__image__experiance__count"><span class="count-text" data-stop="25" data-speed="1500"></span>+</h3><!-- /.about-six__image__experiance__number -->
                                    years experience
                                </div>
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                            <div class="about-six__content">
                                <div class="sec-title-three text-left">

                                    <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR ABOUT COMPANY<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                                    <h3 class="sec-title-three__title">Our Experience About 29+ Years Experience And Challenge!</h3><!-- /.sec-title-three__title -->
                                </div><!-- /.sec-title-three -->
                                <p class="about-six__content__text">
                                    Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                                    majority have in some we form, by injected humour solution.
                                </p>
                                <ul class="about-six__content__list">
                                    <li>
                                        <h3 class="about-six__content__list__title">
                                            <i class="tolak-icons-two-sign-in-alt1"></i>
                                            Network Infrastructure software
                                        </h3>
                                        <p class="about-six__content__list__text">
                                            Technology is a broad category encompassing all aspec of information technology and the application of technology.
                                        </p>
                                    </li>
                                    <li>
                                        <h3 class="about-six__content__list__title">
                                            <i class="tolak-icons-two-sign-in-alt1"></i>
                                            Solution Expert Team Support
                                        </h3>
                                        <p class="about-six__content__list__text">
                                            Technology is a broad category encompassing all aspec of information technology and the application of technology.
                                        </p>
                                    </li>
                                </ul>
                                <a href="about.html" class="tolak-btn-two tolak-btn-two--home-six">
                                    <span class="tolak-btn-two__left-star"></span>
                                    <span>About More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                    <span class="tolak-btn-two__right-star"></span>
                                </a>
                            </div><!-- /.about__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.about-six -->

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
    </body>
</html>