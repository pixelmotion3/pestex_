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
            <div class="page-header__bg"></div>
            <div class="page-header__shape"></div>
            <div class="page-header__shape-two"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Service page</h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                            <img src="assets/images/backgrounds/page-banner-layer.png" alt="tolak">
                            <div class="page-header__layer__shape"></div>
                            <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        
            
        
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