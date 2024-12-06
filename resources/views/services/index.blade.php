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
        .input-container {
            display: flex;
            width: 60%;
            margin-bottom: 15px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .icon {
            padding: 10px;
            color: black;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }

        .custom-select {
            background-color: #A9A9A9;
            width: 100%;
            color: white;
        }

        .custom-select:focus {
            border: 2px solid dodgerblue;
        }

        @media screen and (max-width: 770px) {
            .apointement-box {
                margin-left: 0px;
                margin-top: 0px
            }
        }

        .quote_border_inbox {
            border-top-right-radius: 30px;
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

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"></div>
        <div class="page-header__shape-two"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-header__content">
                        <h2 class="page-header__title">{{ $main_screen[0]['h2'] }}</h2>
                        <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="/">Home</a></li>
                            <li><span>Services</span></li>
                        </ul><!-- /.thm-breadcrumb list-unstyled -->
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                        <img src="../{{ $main_screen[0]['bg-img-path'] }}" alt="tolak">
                        <div class="page-header__layer__shape"></div>
                        <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <div class="sec-title text-center" style="margin-top:200px;">
        <h1 class="text-center h1 text-body">{{ $main_screen[0]['h1'] }}</h1>
        <p class="text-center mt-5" style="padding-left: 250px;padding-right: 250px;">{{ $main_screen[0]['p'] }}</p>
    </div>
    <section class="service-one">
        <div class="container" style="margin-top:-150px;">
            <div class="row">
                @isset($services)
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="100ms">
                            <a href="/servicos/{{ $service->id }}">
                                <div class="service-one__item text-center">
                                    <div class="service-one__item__image">
                                        <img src="../{{ $service['img'] }}" alt="tolak">
                                    </div>
                                    <div class="service-one__item__content">
                                        <div class="service-one__item__icon">
                                            <span class="icon-cooperation"></span>
                                        </div><!-- /.service-icon -->
                                        <h3 class="service-one__item__title">
                                            <a href="business-growth.html">{{ $service['a'] }}</a>
                                        </h3><!-- /.service-title -->
                                        <p class="service-one__item__text">
                                            {{ $service['p'] }}
                                        </p><!-- /.service-text -->
                                    </div>
                                    <div class="service-one__item__bottom">
                                        <div class="service-one__item__bottom__number"></div>
                                        <!--
                                                                <a class="service-one__item__bottom__rm" href="business-growth.html">Read More<span class="fas fa-angle-double-right"></span></a>
                                                            -->
                                    </div>
                                </div><!-- /.service-card-one -->
                            </a>
                        </div>
                    @endforeach
                @endisset

                <!-- <div class="col-lg-12 col-md-12 text-center text-white mt-5">
                            <a class="btn btn-primary w-25" href="#myTab"><small>Abrir formulario</small></a>
                        </div> -->
            </div>
        </div>
    </section>
    <!-- CTA Start -->
    <section class="cta-one">
        <div class="cta-one__bg">
            <div class="cta-one__bg__shape-left" style="background-image: url(../{{ $main_screen[0]['bg-img'] }});">
            </div>
            <div class="cta-one__bg__shape" style="background-image: url(../{{ $main_screen[0]['bg-img-1'] }});"></div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="cta-one__image">
                        <img src="../{{ $main_screen[0]['bg-img-2'] }}" alt="tolak" style="border-radius:30px;">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                    <div class="cta-one__content">
                        <div class="cta-one__box">
                            <div class="cta-one__box__icon"><span class="icon-best-price"></span></div>
                            <h3 class="cta-one__box__title">{{ $main_screen[0]['h3-a'] }}</h3>
                            <p class="cta-one__box__text">{{ $main_screen[0]['p-a-1'] }}</p>
                        </div>
                        <!--
                                <div class="cta-one__author">
                                    <img src="assets/images/resources/cta-1-author-1.jpg" alt="tolak">
                                    <img src="assets/images/resources/cta-1-author-2.jpg" alt="tolak">
                                    <img src="assets/images/resources/cta-1-author-3.jpg" alt="tolak">
                                    <a class="cta-one__author__rm" href="contact.html">More <span class="fas fa-arrow-right"></span></a>
                                </div>
                                <p class="cta-one__content__text">29,0000 customers with our services <a href="contact.html">( Let’s Started )</a></p>
                                -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-one__info wow fadeInLeft" data-wow-delay="100ms">
                        <div class="contact-one__info__icon"><span class="icon-customer-service"></span></div>
                        <h3 class="contact-one__info__title">{{ $main_screen[0]['h3'] }}</h3>
                        <p class="contact-one__info__text"><a href="tel:255225551">{{ $main_screen[0]['p-a'] }}</a>,
                            <a href="tel:6544144444">+6544144444</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-one__image wow fadeInRight" data-wow-delay="200ms">
                        <img src="../{{ $main_screen[0]['bg-img-3'] }}" alt="tolak">
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
        <div class="container contact-one__container wow fadeInUp" data-wow-delay="100ms">
            <div class="contact-one__wrapper" style="background-image: url({{ $main_screen[0]['bg-img-4'] }});">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-one__image-two">
                            <img src="../{{ $main_screen[0]['bg-img-5'] }}" alt="tolak" style="border-radius:30px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-one__content">
                            <div>
                                <h6 class="sec-title__tagline"><span
                                        class="sec-title__tagline__left"></span>{{ $main_screen[0]['h6'] }}<span
                                        class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">{{ $main_screen[0]['h3-1'] }}</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="contact-one__content__text">
                                {{ $main_screen[0]['p-1'] }}
                            </p>
                            <form class="contact-one__form contact-form-validated form-one"
                                action="inc/sendemail.php">
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
                                        <button type="submit" class="tolak-btn"><b>Contacte-nos
                                                Agora!</b><span></span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact -->
    @include('includes.footer_aux')
    <!--
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>
        -->
</body>

</html>
