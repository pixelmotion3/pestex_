<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@if (session('success'))
    <div id="success-alert" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div id="error-alert" class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<script>
    // Esconde o alerta após 5 segundos
    setTimeout(function() {
        let successAlert = document.getElementById('success-alert');
        let errorAlert = document.getElementById('error-alert');

        if (successAlert) {
            successAlert.style.display = 'none';
        }

        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 8000); // 8000ms = 8 segundos
</script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Pixel Code -->

    <script>
        ! function(f, b, e, v, n, t, s)

        {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?

                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };

            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';

            n.queue = [];
            t = b.createElement(e);
            t.async = !0;

            t.src = v;
            s = b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',

            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '679051084651182');

        fbq('track', 'PageView');
    </script>

    <noscript><img height="1" width="1" style="display:none"
            src=https://www.facebook.com/tr?id=679051084651182&ev=PageView&noscript=1 /></noscript>

    <!-- End Meta Pixel Code -->
    <title>{{ $main_screen[0]['meta-title'] }}</title>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <!-- Meta Description -->
    <meta name="description" content="{{ $main_screen[0]['meta-desctiption'] }}">

    <!-- Meta Keywords (opcional, com pouco uso atualmente) -->
    <meta name="keywords" content="{{ $main_screen[0]['meta-keywords'] }}">

    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-TH5LZNRJ');
    </script>

	<!-- Google tag (gtag.js) --> <script async src=https://www.googletagmanager.com/gtag/js?id=G-GBGZRZMGGF></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-GBGZRZMGGF'); </script>

    <!-- End Google Tag Manager -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon01.png">
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

    <!--sanito -->
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/tolak.min.css') }}" />

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

        .input-container {
            position: relative;
            display: inline-block;
        }

        .input-icon {
            position: absolute;
            left: 10px;
            top: 10px;
            transform: translateY(-50%);
            max-width: 50px;
            max-height: 50px;
            fill: black;
            /* Adjust color as needed */
        }

        .input-with-inline-icon {
            padding-left: 10px;
            /* Adjust to make space for the icon */
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
            color: grey;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
            color: grey;
        }

        .btn {
            background-color: #ff6600;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #002255;
            color: white;
        }


        .btn1:hover {
            background-color: #ff6600;
            color: white;
            transition: all 500ms ease;
        }

        .btn1 {
            background-color: #002255;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .btn2 {
            background-color: #ff6600;
            color: white !important;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
        }

        .btn2:hover {
            background-color: #002255;
            color: white;
        }

        .theme-btn-three1 {
            position: relative;
            display: inline-block;
            font-size: 14px;
            line-height: 24px;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            padding: 16px 54px;
            border-radius: 5px;
            transition: all 500ms ease;
        }

        .theme-btn-three1:hover {
            color: white !important;
        }


        .custom-select {
            background-color: #A9A9A9;
            width: 100%;
            color: white;
        }

        .custom-select:focus {
            border: 2px solid dodgerblue;
        }

        .quote_border_inbox {
            border-top-right-radius: 30px;
        }

        .active {
            color: white !important;
        }

        svg {
            transform: scale(0.7)
        }
    </style>
    <!-- jequery plugins -->

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}" defer ></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</head>

<body class="custom-cursor" style="overflow-x: hidden;">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(/assets/images/logo-dark.png);"></div>
    </div>
    <!-- Modal -->
    <div class="modal fade rounded-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-4" id="exampleModalLabel">Agende uma visita grátis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-2">
                    <div class="tab-content p-2 bg-white" id="myTabModalContent" style="border-radius:30px;">
                        <div class="tab-pane fade show active" id="modal-quote" role="tabpanel"
                            aria-labelledby="modal-quote-tab">
                            <div class="container bg-white">
                                <form class="form-contacts" method="POST"
                                    action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormScheduleInspection', [], false) }}">
                                    @csrf
                                    @method('post')
                                    <div class="row text-center" style="border-radius:50%;">
                                        <input class="input-field rounded" type="hidden" value="ScheduleInspection"
                                            placeholder="type_form" name="type_form">
                                        <div class="input-container mt-1" style="width: 92%;">
                                            <i class="far fa-user icon"></i>
                                            <input class="input-field rounded" type="text" placeholder="Nome"
                                                name="name" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="far fa-envelope icon"></i>
                                            <input class="input-field rounded" type="email" placeholder="Email"
                                                name="email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="icon">
                                                <img src="assets/images/Telefone.png" alt="Imagem telefone"
                                                    style="max-height: 25px; max-width:25px;" />
                                            </i>
                                            <input class="input-field rounded" type="number" placeholder="Telefone"
                                                name="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" name="confirmed"
                                                id="flexCheckDefault" required>
                                            <label class="form-check-label text-left" for="flexCheckDefault"
                                                style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
                                                Aceito os <a href="/termos-servico" target="_blank"
                                                    style="color:#3d72fc;">Termos de Utilização</a>
                                            </label>
                                            @error('confirmed')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                                required>
                                            <label class="form-check-label text-left" for="flexCheckDefault"
                                                style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
                                                Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                    target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
                                            </label>
                                        </div>
                                        <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                            style="display: flex;justify-content: center;"></div>
                                        <div class="col-md-12 ml-4 mb-5" style="max-width: 92%">
                                            <button class="btn btn-dark mt-2" type="submit"
                                                name="quote_form">Agendar vistoria</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2  quote_border_inbox" id="modal-contact" role="tabpanel"
                            aria-labelledby="modal-contact-tab">
                            <div class="tab-pane fade show active quote_border_inbox" id="modal-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="container">
                                    <form class="form-contacts" method="post"
                                        action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormContactForm', [], false) }}">
                                        @csrf
                                        @method('POST')
                                        <div class="row text-center">
                                            <h2 class="h2 mt-5 text-muted">
                                                {{ $main_screen[0]['quote-form-tab-2-h2'] }}</h2>
                                            <p class="mb-5 text-muted">{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                                            <div class="input-container mt-3" style="width: 92%;">
                                                <i class="far fa-user icon"></i>
                                                <input class="input-field rounded" type="hidden" value="ContactForm"
                                                    placeholder="type_form" name="type_form">
                                                <input class="input-field rounded" type="text" placeholder="Nome"
                                                    name="name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-container" style="width: 92%;">
                                                <i class="far fa-envelope icon"></i>
                                                <input class="input-field rounded" type="email" placeholder="Email"
                                                    name="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-container" style="width: 92%;">
                                                <i class="icon">
                                                    <img src="assets/images/Telefone.png" alt="Imagem telefone"
                                                        style="max-height: 25px; max-width:25px;" />
                                                </i>
                                                <input class="input-field rounded" type="text"
                                                    placeholder="Telefone" name="phone">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-check col-md-12">
                                                <input class="form-check-input" type="checkbox" name="confirmed"
                                                    id="flexCheckDefault" required>
                                                <label class="form-check-label text-left" for="flexCheckDefault"
                                                    style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
                                                    Aceito os <a href="/termos-servico" target="_blank"
                                                        style="color:#3d72fc;">Termos de Utilização</a>
                                                </label>
                                                @error('confirmed')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-check col-md-12">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                                    required>
                                                <label class="form-check-label text-left" for="flexCheckDefault"
                                                    style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
                                                    Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                        target="_blank" style="color:#3d72fc;">Política de
                                                        Privacidade</a>
                                                </label>
                                            </div>
                                            <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                                style="display: flex;justify-content: center;"></div>
                                            <div class="col-md-12 ml-4" style="max-width: 92%;">
                                                <button class="btn btn-dark w-100 mt-2" type="submit"
                                                    name="form_contact">Contacte-nos Agora!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <header class="main-header sticky-header sticky-header--one-page">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="/">
                            <img src="/assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
                        </a>

                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="megamenu scrollToLink current"><a href=""
                                    class="font-semibold">Home</a></li>
                            <li class="scrollToLink"><a href="#sobrenos" class="font-semibold">Sobre</a></li>
                            <li class="scrollToLink"><a href="#servicos" class="font-semibold">Serviços</a></li>
                            <li class="scrollToLink"><a href="#sustentabilidade"
                                    class="font-semibold">Sustentabilidade</a></li>
                            <li class="scrollToLink contactenos-link2"><a href="#contact-us"
                                    class="font-semibold">Contactos</a></li>
                            <li class="scrollToLink contactenos-link" style="display: none;"><a
                                    href="tel:00351219747353" class="font-semibold">CONTACTE-NOS</a></li>
                        </ul>
                    </nav>

                    <div class="main-header-two__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <a href="tel:00351219747353" class="btn mt-2 theme-btn-three thm-btn contactenos-btn"
                            type="submit" name="quote_form">CONTACTE-NOS</a>
                    </div>
                </div>
            </div>
        </header><!-- /.main-header -->
        <!-- main-slider-start -->
        <section class="main-slider-one" id="home">
            <div class="main-slider-one__carousel tolak-owl__carousel owl-carousel"
                data-owl-options='{
						"loop": false,
						"animateOut": "fadeOut",
						"animateIn": "fadeIn",
						"items": 1,
						"autoplay": true,
						"autoplayTimeout": 7000,
						"smartSpeed": 1000,
						"nav": false,
						"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
						"dots": true,
						"margin": 0
						}'>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__shape tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                        </div>
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ $main_screen[0]['carrousel-bg-img-path'] }});"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title text-titles">
                                            {{ $main_screen[0]['carrousel-h5'] }}</h5>
                                        <!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title">{{ $main_screen[0]['carrousel-h2'] }}
                                            <br /> {{ $main_screen[0]['carrousel-h2-a'] }}</h2><!-- slider-title -->
                                        <div class="main-slider-one__text">
                                            <p class="main-slider-one__text__one">{{ $main_screen[0]['carrousel-p'] }}
                                            </p>
                                        </div><!-- slider-text -->
                                        <div class="main-slider-one__bottom">
                                            <div class="main-slider-one__btn">
                                                <a href="tel:00351219747353"
                                                    class="btn1 theme-btn-three1 thm-btn1"><b>{{ $main_screen[0]['carrousel-a-1'] }}</b><span></span></a><!-- slider-btn -->
                                            </div>
                                            <!--
            <div class="main-slider-one__social">
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
            </div><!-- slider-social -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__floating-text">SOS PRAGAS</div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__shape tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                        </div>
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ $main_screen[0]['carrousel-bg-img-path-1'] }});"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title text-titles">
                                            {{ $main_screen[0]['carrousel-h5-1'] }}
                                        </h5><!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title">
                                            {{ $main_screen[0]['carrousel-h2-1'] }}<br />
                                            {{ $main_screen[0]['carrousel-h2-b'] }}</h2><!-- slider-title -->
                                        <div class="main-slider-one__text">
                                            <p class="main-slider-one__text__one">
                                                {{ $main_screen[0]['carrousel-p-1'] }}.
                                            </p>
                                        </div><!-- slider-text -->
                                        <div class="main-slider-one__bottom">
                                            <div class="main-slider-one__btn">
                                                <a href="tel:00351219747353"
                                                    class="btn1 theme-btn-three1 thm-btn1"><b>{{ $main_screen[0]['carrousel-a-1-1'] }}</b><span></span></a><!-- slider-btn -->
                                            </div>
                                            <!--
             <div class="main-slider-one__social">
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
             </div><!-- slider-social -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__floating-text">SOS PRAGAS</div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__shape tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                            <!--
         <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
         -->
                        </div>
                        <div class="main-slider-one__bg"
                            style="background-image: url({{ $main_screen[0]['carrousel-bg-img-path-2'] }});"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <h5 class="main-slider-one__sub-title text-titles">
                                            {{ $main_screen[0]['carrousel-h5-2'] }}
                                        </h5><!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title">
                                            {{ $main_screen[0]['carrousel-h2-2'] }}<br />
                                            {{ $main_screen[0]['carrousel-h2-c'] }}</h2><!-- slider-title -->
                                        <div class="main-slider-one__text">
                                            <p class="main-slider-one__text__one">
                                                {{ $main_screen[0]['carrousel-p-2'] }}
                                            </p>
                                        </div><!-- slider-text -->
                                        <div class="main-slider-one__bottom">
                                            <div class="main-slider-one__btn">
                                                <a href="tel:00351219747353"
                                                    class="btn1 theme-btn-three1 thm-btn1"><b>{{ $main_screen[0]['carrousel-a-1-2'] }}</b><span></span></a><!-- slider-btn -->
                                            </div>
                                            <!--
             <div class="main-slider-one__social">
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
             </div><!-- slider-social -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__floating-text">SOS PRAGAS</div>
                    </div>
                </div><!-- item -->
            </div>
            <!-- formulario -->
            <div class="main-slider-one__project fadeInUp text-center shadow-lg bg-light" data-wow-delay="600ms"
                style="min-width: 400px;z-index:1;border-radius:30px;">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item w-50 rounded-top-lg" role="presentation">
                        <button class="nav-link active w-100 text-muted p-4" id="quote-tab" data-bs-toggle="tab"
                            style="border-top-left-radius:30px;border-top-right-radius:30px; border:none; background-color: transparent;"
                            data-bs-target="#quote" type="button" role="tab" aria-controls="quote"
                            aria-selected="true">
                            <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-1'] }}</strong>
                        </button>
                    </li>
                    <li class="nav-item w-50 rounded-top-lg " role="presentation">
                        <button class="nav-link w-100 text-muted p-4" id="contact-tab" data-bs-toggle="tab"
                            style="background-color: transparent;border:none;border-top-left-radius:35px;border-top-right-radius:35px;"
                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                            aria-selected="false">
                            <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-2'] }}</strong>
                        </button>
                    </li>
                </ul>
                <div class="tab-content p-2 bg-white mb-5" id="myTabContent" style="border-radius:30px;">
                    <div class="tab-pane fade show active" id="quote" role="tabpanel"
                        aria-labelledby="quote-tab">
                        <div class="container-fluid bg-white">
                            <form class="form-contacts" method="POST"
                                action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormRequestQuote', [], false) }}">
                                @csrf
                                @method('post')
                                <div class="row" style="border-radius:50%;">
                                    <div class="col mt-3 border" style="margin-left:30px;margin-right:15px;"
                                        id="home_desktop">
                                        {{-- <i class="fa fa-home mt-3" aria-hidden="true" style="font-size:4rem;"></i> --}}
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 63.2 64">
                                            <!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
                                            <path
                                                d="M31.6,16.2c.3,0,.6.1.8.3l26.1,20.6c.6.5.7,1.4.2,2-.4.6-1.4.7-2,.2l-25.2-19.9L6.3,39.3c-.6.4-1.5.4-1.9-.2-.4-.6-.4-1.5.2-2l9.8-7.7v-11.8c0-.8.6-1.4,1.4-1.4h5.5c.8,0,1.4.6,1.4,1.4v5.3l8.1-6.4c.3-.2.6-.3.9-.3h0ZM19.9,19h-2.7v8.2l2.7-2.2v-6.1ZM48.7,34.7l2.7,2.2v21.9c0,.8-.6,1.4-1.4,1.4h-11.7c-.8,0-1.4-.6-1.4-1.4v-6.9c0-3.1-2.4-5.5-5.5-5.5s-5.5,2.4-5.5,5.5v6.9c0,.8-.6,1.4-1.4,1.4h-11.7c-.8,0-1.4-.6-1.4-1.4v-21.9l2.7-2.2v22.7h8.9v-5.5c0-4.5,3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2v5.5h8.9v-22.7h0Z" />
                                        </svg>
                                        <p>Residência</p>
                                    </div>
                                    <div class="col border mt-3" style="margin-right:30px;margin-left:15px;"
                                        id="company_desktop">
                                        {{-- <i class="far fa-building mt-3" aria-hidden="true" style="font-size:4rem;"></i> --}}
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 63.2 64">
                                            <!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
                                            <defs>
                                                <style>
                                                    .st0 {
                                                        stroke: #000;
                                                        stroke-miterlimit: 10;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="Layer_38">
                                                <path class="st0"
                                                    d="M26.4,38.2h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z" />
                                                <path class="st0"
                                                    d="M26.4,30.6h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z" />
                                                <path class="st0"
                                                    d="M26.4,23h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z" />
                                                <path class="st0"
                                                    d="M59.9,57.7h-4.2v-20.4c0-.6-.4-1-1-1h-9.4V15.8c0-.4-.2-.8-.6-.9L19.3,4.4c-.3-.1-.7,0-.9,0-.3.2-.4.5-.4.8v17.9h-9.4c-.6,0-1,.4-1,1v33.4h-3.4c-.6,0-1,.4-1,1s.4,1,1,1h55.7c.6,0,1-.4,1-1s-.4-1-1-1ZM9.5,25.3h8.4v32.4h-8.4V25.3ZM19.9,6.8l23.3,9.6v41.2h-5.5v-9.7c0-.6-.4-1-1-1h-10.4c-.6,0-1,.4-1,1v9.7h-5.4V6.8ZM27.4,57.7v-8.7h8.4v8.7h-8.4ZM45.2,57.7v-19.4h8.4v19.4h-8.4Z" />
                                            </g>
                                        </svg>
                                        <p>Empresa</p>
                                    </div>
									<input type="hidden" name="form_start" value="{{ now()->timestamp }}">
									<input class="input-field rounded" type="hidden" value="" placeholder="type_form" name="user_email_check" id="user_email_check">
                                    <input class="input-field rounded" type="hidden" name="customer_type"
                                        id="customer_type" value="home" required>
                                    {{-- <div class="input-container mt-3" style="width: 92%;" required>
										<select name="products">
											@isset($services)
                    							@foreach ($services as $service)
													<option value="{{ $service['a'] }}" selected class="text-muted">{{ $service['a'] }}</option>
													<option value="baratas" class="text-muted">Baratas</option>
													<option value="percevejos" class="text-muted">Percevejos</option>
												@endforeach
                							@endisset
										</select>
									</div> --}}
                                    <input class="input-field rounded" type="hidden" value="QuoteForm"
                                        placeholder="type_form" name="type_form">
                                    <div class="input-container mt-3" style="width: 92%;">
                                        <i class="far fa-map-marker-alt icon" aria-hidden="true"></i>
                                        <input class="input-field rounded" type="text" placeholder="Localidade"
                                            name="locality" required>
                                        @error('locality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input class="input-field rounded" type="hidden" value="QuoteForm"
                                        placeholder="type_form" name="type_form">
                                    <div class="input-container mt-1" style="width: 92%;">
                                        <i class="far fa-user icon"></i>
                                        <input class="input-field rounded" type="text" placeholder="Nome"
                                            name="name" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-container" style="width: 92%;">
                                        <i class="far fa-envelope icon"></i>
                                        <input class="input-field rounded" type="email" placeholder="Email"
                                            name="email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-container" style="width: 92%;">
                                        <i class="icon" style="color:black;">
                                            <img src="assets/images/Telefone.png" alt="Imagem telefone"
                                                style="max-height: 25px; max-width:25px;" />
                                        </i>
                                        <input class="input-field rounded" type="number" placeholder="Telefone"
                                            name="phone" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check col-md-12">
                                        <input class="form-check-input" type="checkbox" name="confirmed"
                                            id="flexCheckDefault" required>
                                        <label class="form-check-label text-left" for="flexCheckDefault"
                                            style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
                                            Aceito os <a href="/termos-servico" target="_blank"
                                                style="color:#3d72fc;">Termos de Utilização</a>
                                        </label>
                                        @error('confirmed')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check col-md-12">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            required>
                                        <label class="form-check-label text-left" for="flexCheckDefault"
                                            style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
                                            Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
                                        </label>
                                    </div>
                                    {{-- <div class="form-check">
										<input class="form-check-input"
											type="checkbox" id="flexCheckDefault" required>
										<label class="form-check-label text-left" for="flexCheckDefault" style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
											Autorizo tratamento de dados pessoais para marketing de produtos e serviços
										</label>
									</div> --}}
                                    <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                        style="display: flex;justify-content: center;"></div>
                                    <div class="ml-4 mb-5" style="max-width: 92%">
                                        <button class="btn mt-2 theme-btn-three thm-btn" type="submit"
                                            name="quote_form">Obter
                                            Orçamento Grátis</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade p-2  quote_border_inbox" id="contact" role="tabpanel"
                        aria-labelledby="contact-tab">
                        <div class="tab-pane fade show active quote_border_inbox" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="container-fluid">
                                <form class="form-contacts" method="post"
                                    action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormContactForm', [], false) }}">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <input class="input-field rounded" type="hidden" value="ContactForm"
                                            placeholder="type_form" name="type_form">
                                        <h2 class="h2 mt-5 text-muted">{{ $main_screen[0]['quote-form-tab-2-h2'] }}
                                        </h2>
                                        <p>{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                                        <div class="input-container mt-3" style="width: 92%;">
                                            <i class="far fa-user icon"></i>
                                            <input class="input-field rounded" type="text" placeholder="Nome"
                                                name="name" required>
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="far fa-envelope icon"></i>
                                            <input class="input-field rounded" type="email" placeholder="Email"
                                                name="email" required>
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="icon">
                                                <img src="assets/images/Telefone.png" alt="Imagem telefone"
                                                    style="max-height: 25px; max-width:25px;" />
                                            </i>
                                            <input class="input-field rounded" type="text" placeholder="Telefone"
                                                name="phone" required>
                                        </div>
                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" name="confirmed"
                                                id="flexCheckDefault" required>
                                            <label class="form-check-label text-left" for="flexCheckDefault"
                                                style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
                                                Aceito os <a href="/termos-servico" target="_blank"
                                                    style="color:#3d72fc;">Termos de Utilização</a>
                                            </label>
                                            @error('confirmed')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                                required>
                                            <label class="form-check-label text-left" for="flexCheckDefault"
                                                style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
                                                Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                    target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
                                            </label>
                                        </div>
                                        <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                            style="display: flex;justify-content: center;"></div>
                                        <div class="col-md-12 ml-4" style="max-width: 92%;">
                                            <button class="btn theme-btn-three thm-btn w-100 mt-2" type="submit"
                                                name="form_contact">Contacte-nos Agora!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="main-slider-one__project2 fadeInUp text-center shadow-lg bg-light" style="display: none;"
                data-wow-delay="600ms" style="min-width: 400px;z-index:1;border-radius:30px;">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item w-50 rounded-top-lg" role="presentation">
                        <button class="nav-link active w-100 text-muted p-4" id="quote-tab" data-bs-toggle="tab"
                            style="border-top-left-radius:30px;border-top-right-radius:30px; border:none; background-color: transparent;"
                            data-bs-target="#quote2" type="button" role="tab" aria-controls="quote"
                            aria-selected="true">
                            <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-1'] }}</strong>
                        </button>
                    </li>
                    <li class="nav-item w-50 rounded-top-lg " role="presentation">
                        <button class="nav-link w-100 text-muted p-4" id="contact-tab" data-bs-toggle="tab"
                            style="background-color: transparent;border:none;border-top-left-radius:35px;border-top-right-radius:35px;"
                            data-bs-target="#contact2" type="button" role="tab" aria-controls="contact"
                            aria-selected="false">
                            <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-2'] }}</strong>
                        </button>
                    </li>
                </ul>
                <div class="tab-content p-2 bg-white mb-5" id="myTabContent" style="border-radius:30px;">
                    <div class="tab-pane fade show active" id="quote2" role="tabpanel"
                        aria-labelledby="quote-tab">
                        <div class="container-fluid bg-white">
                            <form class="form-contacts" method="POST"
                                action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormRequestQuote', [], false) }}">
                                @csrf
                                @method('post')
                                <div class="row" style="border-radius:50%;">
                                    <div class="col mt-3 border" style="margin-left:30px;margin-right:15px;"
                                        id="home_mobile">
                                        {{-- <i class="fa fa-home mt-3" aria-hidden="true" style="font-size:4rem;"></i> --}}
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 63.2 64">
                                            <!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
                                            <path
                                                d="M31.6,16.2c.3,0,.6.1.8.3l26.1,20.6c.6.5.7,1.4.2,2-.4.6-1.4.7-2,.2l-25.2-19.9L6.3,39.3c-.6.4-1.5.4-1.9-.2-.4-.6-.4-1.5.2-2l9.8-7.7v-11.8c0-.8.6-1.4,1.4-1.4h5.5c.8,0,1.4.6,1.4,1.4v5.3l8.1-6.4c.3-.2.6-.3.9-.3h0ZM19.9,19h-2.7v8.2l2.7-2.2v-6.1ZM48.7,34.7l2.7,2.2v21.9c0,.8-.6,1.4-1.4,1.4h-11.7c-.8,0-1.4-.6-1.4-1.4v-6.9c0-3.1-2.4-5.5-5.5-5.5s-5.5,2.4-5.5,5.5v6.9c0,.8-.6,1.4-1.4,1.4h-11.7c-.8,0-1.4-.6-1.4-1.4v-21.9l2.7-2.2v22.7h8.9v-5.5c0-4.5,3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2v5.5h8.9v-22.7h0Z" />
                                        </svg>
                                        <p>Residência</p>
                                    </div>
                                    <div class="col border mt-3" style="margin-right:30px;margin-left:15px;"
                                        id="company_mobile">
                                        {{-- <i class="far fa-building mt-3" aria-hidden="true" style="font-size:4rem;"></i> --}}
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            viewBox="0 0 63.2 64">
                                            <!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
                                            <defs>
                                                <style>
                                                    .st0 {
                                                        stroke: #000;
                                                        stroke-miterlimit: 10;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="Layer_38">
                                                <path class="st0"
                                                    d="M26.4,38.2h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z" />
                                                <path class="st0"
                                                    d="M26.4,30.6h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z" />
                                                <path class="st0"
                                                    d="M26.4,23h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z" />
                                                <path class="st0"
                                                    d="M59.9,57.7h-4.2v-20.4c0-.6-.4-1-1-1h-9.4V15.8c0-.4-.2-.8-.6-.9L19.3,4.4c-.3-.1-.7,0-.9,0-.3.2-.4.5-.4.8v17.9h-9.4c-.6,0-1,.4-1,1v33.4h-3.4c-.6,0-1,.4-1,1s.4,1,1,1h55.7c.6,0,1-.4,1-1s-.4-1-1-1ZM9.5,25.3h8.4v32.4h-8.4V25.3ZM19.9,6.8l23.3,9.6v41.2h-5.5v-9.7c0-.6-.4-1-1-1h-10.4c-.6,0-1,.4-1,1v9.7h-5.4V6.8ZM27.4,57.7v-8.7h8.4v8.7h-8.4ZM45.2,57.7v-19.4h8.4v19.4h-8.4Z" />
                                            </g>
                                        </svg>
                                        <p>Empresa</p>
                                    </div>
									<input type="hidden" name="form_start" value="{{ now()->timestamp }}">
									<input class="input-field rounded" type="hidden" value="" placeholder="type_form" name="user_email_check" id="user_email_check">
                                    <input class="input-field rounded" type="hidden" value="QuoteFom"
                                        placeholder="type_form" name="type_form">
                                    <input class="input-field rounded" type="hidden" name="customer_type"
                                        id="customer_type" value="home" required>
                                    {{-- <div class="input-container mt-3" style="width: 92%;" required>
										<select name="products">
											<option value="ratos" selected class="text-muted">Ratos</option>
											<option value="baratas" class="text-muted">Baratas</option>
											<option value="percevejos" class="text-muted">Percevejos</option>
										</select>
									</div> --}}
                                    <div class="input-container mt-3" style="width: 92%;">
                                        <i class="far fa-map-marker-alt icon" aria-hidden="true"></i>
                                        <input class="input-field rounded" type="text" placeholder="Localidade"
                                            name="locality" required>
                                        @error('locality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-container mt-1" style="width: 92%;">
                                        <i class="far fa-user icon"></i>
                                        <input class="input-field rounded" type="text" placeholder="Nome"
                                            name="name" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-container" style="width: 92%;">
                                        <i class="far fa-envelope icon"></i>
                                        <input class="input-field rounded" type="email" placeholder="Email"
                                            name="email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-container" style="width: 92%;">
                                        <i class="icon" style="color:black;">
                                            <img src="assets/images/Telefone.png" alt="Imagem telefone"
                                                style="max-height: 25px; max-width:25px;" />
                                        </i>
                                        <input class="input-field rounded" type="number" placeholder="Telefone"
                                            name="phone" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check col-md-12">
                                        <input class="form-check-input" type="checkbox" name="confirmed"
                                            id="flexCheckDefault" required>
                                        <label class="form-check-label text-left" for="flexCheckDefault"
                                            style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
                                            Aceito os <a href="/termos-servico" target="_blank"
                                                style="color:#3d72fc;">Termos de Utilização</a>
                                        </label>
                                        @error('confirmed')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check col-md-12">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                            required>
                                        <label class="form-check-label text-left" for="flexCheckDefault"
                                            style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
                                            Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
                                        </label>
                                    </div>
                                    {{-- <div class="form-check">
										<input class="form-check-input"
											type="checkbox" id="flexCheckDefault" required>
										<label class="form-check-label text-left" for="flexCheckDefault" style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
											Autorizo tratamento de dados pessoais para marketing de produtos e serviços
										</label>
									</div> --}}
                                    <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                        style="display: flex;justify-content: center;"></div>
                                    <div class="ml-4 mb-5" style="max-width: 92%">
                                        <button class="btn mt-2 theme-btn-three thm-btn" type="submit"
                                            name="quote_form">Obter
                                            Orçamento Grátis</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade p-2  quote_border_inbox" id="contact2" role="tabpanel"
                        aria-labelledby="contact-tab">
                        <div class="tab-pane fade show active quote_border_inbox" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="container-fluid">
                                <form class="form-contacts" method="post"
                                    action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormContactForm', [], false) }}">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <input class="input-field rounded" type="hidden" value="ContactForm"
                                            placeholder="type_form" name="type_form">
                                        <h2 class="h2 mt-5 text-muted">{{ $main_screen[0]['quote-form-tab-2-h2'] }}
                                        </h2>
                                        <p>{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                                        <div class="input-container mt-3" style="width: 92%;">
                                            <i class="far fa-user icon"></i>
                                            <input class="input-field rounded" type="text" placeholder="Nome"
                                                name="name" required>
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="far fa-envelope icon"></i>
                                            <input class="input-field rounded" type="email" placeholder="Email"
                                                name="email" required>
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="icon">
                                                <img src="assets/images/Telefone.png" alt="Imagem telefone"
                                                    style="max-height: 25px; max-width:25px;" />
                                            </i>
                                            <input class="input-field rounded" type="text" placeholder="Telefone"
                                                name="phone" required>
                                        </div>

                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" name="confirmed"
                                                id="flexCheckDefault" required>
                                            <label class="form-check-label text-left" for="flexCheckDefault"
                                                style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
                                                Aceito os <a href="/termos-servico" target="_blank"
                                                    style="color:#3d72fc;">Termos de Utilização</a>
                                            </label>
                                            @error('confirmed')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                                required>
                                            <label class="form-check-label text-left" for="flexCheckDefault"
                                                style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
                                                Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                    target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
                                            </label>
                                        </div>
                                        <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                            style="display: flex;justify-content: center;"></div>
                                        <div class="col-md-12 ml-4" style="max-width: 92%;">
                                            <button class="btn theme-btn-three thm-btn w-100 mt-2" type="submit"
                                                name="form_contact">Contacte-nos Agora!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <!-- Feature Start -->
        <section class="feature-one space_between" id="#">
            <div class="container">
                <div class="text-center">
                    <h6 class="sec-title__tagline text-titles mt-5"><span
                            class="sec-title__tagline__left"></span><b>{{ $company_status[0]['company-status-h6'] }}</b><span
                            class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title mt-5"><b>{{ $company_status[0]['company-status-h3'] }}</b></h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30 mt-5">
                    <div class="col-md-4 wow fadeInUp mt-5" data-wow-delay="00ms">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item__number" style="-webkit-text-stroke: 1px black;"></div>
                            <div class="service-one__item__icon">
                                <span>
                                    <img src="assets/images/DiagnosticoPreciso.png" />
                                </span>
                            </div>
                            <h4 class="feature-one__item__title"><b>{{ $company_status[0]['company-status-1h4'] }}</b>
                            </h4>
                            <p class="feature-one__item__text">{{ $company_status[0]['company-status-1p'] }}</p>
                            <div class="feature-one__item__arrow"
                                style="background-image: url(assets/images/shapes/feature-1-shape-1.png);margin-top:-40px;">
                            </div>
                        </div><!-- feature-item -->
                    </div>
                    <div class="col-md-4 wow fadeInUp mt-5" data-wow-delay="400ms">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item__number" style="-webkit-text-stroke: 1px black;"></div>
                            <div class="service-one__item__icon">
                                <span>
                                    <img src="assets/images/MetodosSegurosEficazes.png" />
                                </span>
                            </div>
                            <h4 class="feature-one__item__title">
                                <b>{{ $company_status[0]['company-status-2h4'] }}</b></h4>
                            <p class="feature-one__item__text">{{ $company_status[0]['company-status-2p'] }}</p>
                            <div class="feature-one__item__arrow feature-one__item__arrow--sm-hide"
                                style="background-image: url(assets/images/shapes/feature-1-shape-2.png);margin-top:-40px;">
                            </div>
                        </div><!-- feature-item -->
                    </div>
                    <div class="col-md-4 wow fadeInUp mt-5" data-wow-delay="600ms">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item__number" style="-webkit-text-stroke: 1px black;"></div>
                            <div class="service-one__item__icon">
                                <span>
                                    <img src="assets/images/PrevencaoContinua.png" />
                                </span>
                            </div>
                            <h4 class="feature-one__item__title">
                                <b>{{ $company_status[0]['company-status-3h4'] }}</b></h4>
                            <p class="feature-one__item__text">{{ $company_status[0]['company-status-3p'] }}</p>
                        </div><!-- feature-item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->
        <!-- Service Start -->
        <section class="service-one" id="servicos">
            <div class="container">
                <div class="text-center">
                    <h6 class="sec-title__tagline text-titles"><span
                            class="sec-title__tagline__left"></span><b>{{ $best_service[0]['best-service-h6-1'] }}</b><span
                            class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title mt-5"><b>{{ $best_service[0]['best-service-h3-1'] }}</b></h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ $best_service[0]['best-service-img-path-1'] }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content" style="height: 300px;">
                                <div class="service-one__item__icon">
                                    <span>
                                        <img src="assets/images/Ratos.png" />
                                    </span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a
                                        href="servicos/{{ $best_service[0]['best-service-id-1'] }}"><b>{{ $best_service[0]['best-service-a-1'] }}</b></a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    {{ $best_service[0]['best-service-p-1'] }}
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <!--
           <a class="service-one__item__bottom__rm" href="business-growth.html">Read More<span class="fas fa-angle-double-right"></span></a>
          -->
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="450ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ $best_service[0]['best-service-img-path-2'] }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content" style="height: 300px;">
                                <div class="service-one__item__icon">
                                    <span>
                                        <img src="assets/images/Baratas.png" />
                                    </span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a
                                        href="servicos/{{ $best_service[0]['best-service-id-2'] }}"><b>{{ $best_service[0]['best-service-a-2'] }}</b></a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    {{ $best_service[0]['best-service-p-2'] }}
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <!--
           <a class="service-one__item__bottom__rm" href="business-growth.html">Read More<span class="fas fa-angle-double-right"></span></a>
          -->
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ $best_service[0]['best-service-img-path-3'] }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content" style="height: 300px;">
                                <div class="service-one__item__icon">
                                    <span>
                                        <img src="assets/images/Percevejos.png" />
                                    </span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a
                                        href="servicos/{{ $best_service[0]['best-service-id-3'] }}"><b>{{ $best_service[0]['best-service-a-3'] }}</b></a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    {{ $best_service[0]['best-service-p-3'] }}
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                {{--
									<a class="service-one__item__bottom__rm" href="business-growth.html">Read More<span class="fas fa-angle-double-right"></span></a>
								--}}
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>

                    <div class="col-lg-12 col-md-12 text-center text-white mt-5"
                        style="max-width:250px;margin-left:auto;margin-right:auto;">
                        <button type="button" class="btn theme-btn-three thm-btn" data-toggle="modal"
                            data-target="#exampleModal">
                            AGENDAR VISTORIA GRÁTIS
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- services -->
        <section class="service-section" id="#servicos">
            <div class="image-layer"
                style="background-image: url({{ $our_service_1[0]['our-services-bg-img-path-1'] }});"></div>
            <div class="container">
                <div class="text-center light text-white">
                    <h6 class="sec-title__tagline text-white"><span
                            class="sec-title__tagline__left1"></span><b>{{ $our_service_1[0]['our-services-h6-1'] }}</b><span
                            class="sec-title__tagline__right1"></span></h6>
                    <h2 class="h2 text-white"><b>{{ $our_service_1[0]['our-services-h2-1'] }}</b></h2>
                    <p class="text-white mt-3">{{ $our_service_1[0]['our-services-h2-2'] }}</p>
                </div>

                <div class="tabs-box" style="margin-top: 30px;">
                    <div class="tab-btn-one">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                {{ $our_service_1[0]['our-services-tab-1'] }}</li>
                            <li class="tab-btn" data-tab="#tab-2">{{ $our_service_2[0]['our-services-tab-2'] }}</li>
                        </ul>
                    </div>
                    <div class="tabs-content" style="margin-bottom: 150px;">
                        <div class="tab bg-light active-tab p-5" id="tab-1"
                            style="border-bottom:1px solid lightgray;">
                            <div class="mt-5">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_2">
                                            <div class="content-box">
                                                <h2>{!! $our_service_1[0]['our-services-tab-1-h2'] !!}</h2>
                                                <div class="text">
                                                    <p>{{ $our_service_1[0]['our-services-tab-1-p'] }}<br />{{ $our_service_1[0]['our-services-tab-1-p-1'] }}
                                                    </p>
                                                </div>
                                                <ul class="list-item clearfix">
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-1'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-2'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-3'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-4'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-5'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-6'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-7'] }}</li>
                                                    <li>{{ $our_service_1[0]['our-services-tab-1-li-8'] }}</li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a data-toggle="modal" data-target="#exampleModal"
                                                        class="btn2 theme-btn-three thm-btn">CONTACTE-NOS</a>
                                                </div>
                                                <div class="other-text">
                                                    <p>{{ $our_service_1[0]['our-services-tab-1-a-2'] }} <a
                                                            data-toggle="modal" data-target="#exampleModal">Agende uma
                                                            visita grátis.</a></p>
                                                    <div class="arrow"
                                                        style="background-image: url(assets/images/icons/arrow-1.png);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_2">
                                            <div class="image-box">
                                                <figure class="image wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;"><img src="{{ $our_service_1[0]['img-1'] }}"
                                                        alt=""></figure>
                                                <div class="image-content" style="background-color: #002255">
                                                    <h6>VISITA GRÁTIS</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab bg-light p-5" id="tab-2" style="border-bottom:1px solid lightgray;">
                            <div class="mt-5">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_2">
                                            <div class="content-box">
                                                <h2>{!! $our_service_2[0]['our-services-tab-2-h2'] !!}</h2>
                                                <div class="text">
                                                    <p>{{ $our_service_2[0]['our-services-tab-2-p'] }}<br />{{ $our_service_2[0]['our-services-tab-2-p-1'] }}
                                                    </p>
                                                </div>
                                                <ul class="list-item clearfix">
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-1'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-2'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-3'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-4'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-5'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-6'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-7'] }}</li>
                                                    <li>{{ $our_service_2[0]['our-services-tab-2-li-8'] }}</li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a data-toggle="modal" data-target="#exampleModal"
                                                        class="btn2 theme-btn-three thm-btn">CONTACTE-NOS</a>
                                                </div>
                                                <div class="other-text">
                                                    <p>{{ $our_service_2[0]['our-services-tab-2-p-2'] }} <a
                                                            data-toggle="modal" data-target="#exampleModal">Agende
                                                            uma visita grátis!</a></p>
                                                    <div class="arrow"
                                                        style="background-image: url(assets/images/icons/arrow-1.png);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_2">
                                            <div class="image-box">
                                                <figure class="image wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;"><img src="{{ $our_service_2[0]['img-2'] }}"
                                                        alt=""></figure>
                                                <div class="image-content" style="background-color: #002255">
                                                    <h6>VISITA GRÁTIS</h6>
                                                </div>
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
        <!-- service-section -->
        {{-- sobre --}}
        <section class="about-one" id="sobrenos">

            <div class="about-one__bg"
                style="background-image: url({{ $about_now[0]['about-now-1-bg-img-path'] }});">
            </div>
            <div class="about-one__shape"
                style="background-image: url({{ $about_now[0]['about-now-2-img-path'] }});">
            </div>

            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="1000ms">
                        <div class="about-one__content">
                            <div class="text-titles">
                                <h6 class="sec-title__tagline text-titles">{{ $about_now[0]['about-now-h6'] }}</h6>
                                <!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">{{ $about_now[0]['about-now-h3'] }}</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                                {{ $about_now[0]['about-now-p'] }}.
                            </p>
                            <ul class="about-one__content__list text-white">
                                <li><span class="icofont-checked"></span>
                                    <p class="text-white">{{ $about_now[0]['about-now-li-1'] }}</p>
                                </li>
                                <li><span class="icofont-checked"></span>
                                    <p class="text-white">{{ $about_now[0]['about-now-li-2'] }}</p>
                                </li>
                                <li><span class="icofont-checked"></span>
                                    <p class="text-white">{{ $about_now[0]['about-now-li-3'] }}</p>
                                </li>
                                <li><span class="icofont-checked"></span>
                                    <p class="text-white">{{ $about_now[0]['about-now-li-4'] }}</p>
                                </li>
                                <li><span class="icofont-checked"></span>
                                    <p class="text-white">{{ $about_now[0]['about-now-li-5'] }}</p>
                                </li>
                                <li><span class="icofont-checked"></span>
                                    <p class="text-white">{{ $about_now[0]['about-now-li-6'] }}</p>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <!--
         <div class="about-one__content__btn">
          <a href="about.html" class="tolak-btn"><b>Contact</b><span></span></a>

          <h5 class="about-one__content__btn__text">Watching video</h5>
          <img class="about-one__content__btn__arrow" src="assets/images/shapes/arrow.png" alt="tolak">

         </div>
         -->
                            <!--
         <div class="about-one__video-btn">
          <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
           <i class="fa fa-play"></i>
           <span class="video-popup__btn-ripple"></span>
          </a>
         </div>
         -->
                        </div><!-- /.about__content -->
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-1 bg-primary rounded" style="margin-right: -100px;z-index:2;">

                    </div>
                    <div class="col-xl-6">
                        <div class="tolak-stretch-element-inside-column">
                            <div class="about-one__image wow slideInRight">
                                <img src="{{ $about_now[0]['about-now-img-path'] }}" alt="tolak">
                            </div><!-- /.about__image -->
                        </div><!-- /.tolak-stretch-element-inside-column  -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->
        {{-- /sobre --}}
        {{-- sustentabilidade --}}
        <section class="why-choose-two" id="sustentabilidade">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="why-choose-two__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline text-titles"><span
                                        class="sec-title__tagline__left"></span><i><b>{{ $choose_us[0]['choose-us-p-1'] }}</b></i><span
                                        class="sec-title__tagline__right"></span></h6>
                                <!-- /.sec-title-two__tagline -->
                                <h3 class="sec-title-two__title"><b>{{ $choose_us[0]['choose-us-h3'] }}</b></h3>
                                <!-- /.sec-title-two__title -->
                            </div><!-- /.sec-title-two -->
                            <p class="why-choose-two__content__text">
                                {{ $choose_us[0]['choose-us-p-2'] }}
                                <br />
                                {{-- {{ $choose_us[0]['choose-us-p-2-1'] }} --}}
                            </p>
                            <div class="why-choose-two__item wow fadeInUp rounded-lg" data-wow-delay="00ms">
                                <div class="why-choose-two__item__icon rounded-lg">
                                    <img src="assets/images/produtos_ecologicos_seguros.png"
                                        alt="Produtos ecologicos seguros">
                                </div>
                                <h4 class="why-choose-two__item__title">{{ $choose_us[0]['choose-us-h4-1'] }}</h4>
                            </div><!-- why-choose-two__item -->
                            <div class="why-choose-two__item why-choose-two__item--reverse wow fadeInUp rounded-lg"
                                data-wow-delay="500ms">
                                <div class="why-choose-two__item__icon rounded-lg">
                                    <img src="assets/images/metodos_preventivos.png" alt="metodos preventivos">
                                </div>
                                <h4 class="why-choose-two__item__title">{{ $choose_us[0]['choose-us-h4-2'] }}</h4>
                            </div><!-- why-choose-two__item -->
                            <div class="why-choose-two__item wow fadeInUp rounded-lg" data-wow-delay="200ms">
                                <div class="why-choose-two__item__icon rounded-lg">
                                    <img src="assets/images/compromisso_meio_ambiente.png"
                                        alt="compromisso com o meio ambiente">
                                </div>
                                <h4 class="why-choose-two__item__title">{{ $choose_us[0]['choose-us-h4-3'] }}</h4>
                            </div><!-- why-choose-two__item -->
                        </div><!-- /.why-choose-two__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="why-choose-two__image">
                            <img src="{{ $choose_us[0]['choose-us-img'] }}" alt="tolak">
                            <div class="why-choose-two__image__two wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ $choose_us[0]['choose-us-img-1'] }}" alt="tolak">
                            </div>
                            <div class="why-choose-two__image__three wow fadeInUp" data-wow-delay="300ms">
                                <img src="{{ $choose_us[0]['choose-us-img-2'] }}" alt="tolak">
                            </div>
                            <div class="why-choose-two__image__four wow fadeInUp" data-wow-delay="400ms">
                                <img src="{{ $choose_us[0]['choose-us-img-3'] }}" alt="tolak">
                            </div>
                        </div><!-- /.why-choose-two__image -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.why-choose-two -->
        {{-- /sustentabilidade --}}
        <section class="testimonials-one testimonials-one--page">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline text-titles"><span
                            class="sec-title__tagline__left"></span><i><b>{{ $testimonial_say[0]['testimonial-say-p-strong'] }}</b></i><span
                            class="sec-title__tagline__right"></span></h6>
                    <!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title"><b>{{ $testimonial_say[0]['testimonial-say-h2'] }}</b></h3>
                    <!-- /.sec-title-two__title -->
                </div>
                <div class="testimonials-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme wow fadeInUp animated" data-wow-delay="200ms" style="margin-bottom: 40px; visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;"
                    data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": true,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 2,
					"margin": 30
				},
				"1000": {
					"items": 2,
					"margin": 30
				},
				"1400": {
					"items": 3,
					"margin": 30
				},
				"1500": {
					"items": 4,
					"margin": 30
				}
			}
			}'>
                    @isset($reviews)
                        @foreach ($reviews as $review)
						<div class="testimonials-card">
                                <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                                <div class="testimonials-card__bg-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                        <path
                                            d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z">
                                        </path>
                                    </svg>
                                </div><!-- /.testimonials-card__bg-hover -->
                                <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                                <div class="testimonials-card__content">
                                    {{ $review['p'] }}
                                </div><!-- /.testimonials-card__content -->
                                <h3 class="testimonials-card__name">
                                    {{ $review['name'] }}
                                </h3><!-- /.testimonials-card__name -->
                                <p class="testimonials-card__designation"></p><!-- /.testimonials-card__designation -->
                                <div class="testimonials-card__rating">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $review['rating'])
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @endif
                                    @endfor
                                </div><!-- /.testimonials-card__rating -->
                                <div class="testimonials-card__image">
                                </div><!-- /.testimonials-card__image -->
                            </div><!-- /.testimonials-card -->
                            {{-- <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary w-100">
						<i class="fa fa-quote-left mt-5" aria-hidden="true" style="font-size:50px;color:#ff6600;"></i>
						<blockquote>
							<p class="text-center text-white-50 mt-3">
								<i>
									{{ $review['p'] }}
								</i>
							</p>
							<h3 class="h3 text-white mt-2"><strong>{{ $review['name'] }}</strong></h3>
							<div class="d-flex justify-content-around m-5">
								@for ($i = 0; $i < 5; $i++)
									@if ($i < $review['rating'])
										<i class="fa fa-star text-primary" aria-hidden="true"></i>
									@else
										<i class="fa fa-star text-white" aria-hidden="true"></i>
									@endif
								@endfor
							</div>
						</blockquote>

					</div> --}}
                        @endforeach
                    @endisset
                </div>
        </section>

        <section class="funfact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="funfact-one__image">
                            <img src="{{ $collapse[0]['collapse-bg-img'] }}" alt="tolak">
                            <img class="funfact-one__image__shape" src="assets/images/shapes/counter-border-1.png"
                                alt="tolak">
                            <div class="funfact-one__item count-box tolak-tilt"
                                data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'
                                style="background-color: #002255;">
                                <h3 class="funfact-one__item__count">+<span class="count-text"
                                        data-stop="{{ $collapse[0]['collapse-h3-1'] }}" data-speed="1500"></span>
                                </h3>
                                <!-- /.funfact-one__number -->
                                <p class="funfact-one__item__text">{{ $collapse[0]['collapse-p-1'] }}</p>
                                <!-- /.funfact-one__title -->
                            </div><!-- /.funfact-one__item -->
                            <div class="funfact-one__item funfact-one__item--two count-box tolak-tilt"
                                data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'
                                style="background-color: #002255;">
                                <h3 class="funfact-one__item__count"><span class="count-text"
                                        data-stop="{{ $collapse[0]['collapse-h3-2'] }}" data-speed="1500"></span>
                                </h3>
                                <!-- /.funfact-one__number -->
                                <p class="funfact-one__item__text">{{ $collapse[0]['collapse-p-2'] }}</p>
                                <!-- /.funfact-one__title -->
                            </div><!-- /.funfact-one__item -->
                            <div class="funfact-one__item funfact-one__item--three count-box tolak-tilt"
                                data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'
                                style="background-color: #002255;">
                                <h3 class="funfact-one__item__count"><span class="count-text"
                                        data-stop="{{ $collapse[0]['collapse-h3-3'] }}" data-speed="1500"></span>
                                </h3>
                                <!-- /.funfact-one__number -->
                                <p class="funfact-one__item__text">{{ $collapse[0]['collapse-p-3'] }}</p>
                                <!-- /.funfact-one__title -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="funfact-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
							@isset($faqs)
								<?php $i = 0; ?>
								@foreach ($faqs as $index => $faq)
									@if(($faq['screen'] == "" || $faq['screen'] == null || $faq['screen'] == 0 || $faq['screen'] == 1))
										@if($index == 0 && ($faq['service'] == "" || $faq['service'] == null))
											<div class="accrodion active">
												<div class="accrodion-title" id="accordion-{{$i+1}}">
													<h4 id="accordion-icon-{{$i+1}}">
														<i class="fa fa-check-circle"></i>
														{{ $faq['question'] }}
														<span class="accrodion-title__icon" style="color: #002255"></span><!-- /.accrodion-title__icon -->
													</h4>
												</div><!-- /.accordian-title -->
												<div class="accrodion-content">
													<div class="inner">
														<p>
															{!! $faq['response'] !!}
														</p>
													</div><!-- /.accordian-content -->
												</div>
											</div><!-- /.accordian-item -->
										@else
											@if(($faq['service'] == "" || $faq['service'] == null))
												<div class="accrodion">
													<div class="accrodion-title" id="accordion-{{$i+1}}">
														<h4>
															<i class="fa fa-check-circle" id="accordion-icon-{{$i+1}}"></i>
															{{ $faq['question'] }}
															<span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
														</h4>
													</div><!-- /.accordian-title -->
													<div class="accrodion-content">
														<div class="inner">
															<p>
																{!! $faq['response'] !!}
															</p>
														</div><!-- /.accordian-content -->
													</div>
												</div>
											@endif
										@endif
									@endif
								@endforeach
							@endisset
                            {{-- <div class="accrodion active">
                                <div class="accrodion-title" id="accordion-1">
                                    <h4 id="accordion-icon-1">
                                        <i class="fa fa-check-circle"></i>
                                        {{ $collapse[0]['collapse-h4-1'] }}
                                        <span class="accrodion-title__icon"
                                            style="color: #002255"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-1'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-1-1'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-1-2'] }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title" id="accordion-2">
                                    <h4>
                                        <i class="fa fa-check-circle" id="accordion-icon-2"></i>
                                        {{ $collapse[0]['collapse-h4-2'] }}
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-2'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-2-1'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-2-2'] }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title" id="accordion-3">
                                    <h4>
                                        <i class="fa fa-check-circle" id="accordion-icon-3"></i>
                                        {{ $collapse[0]['collapse-h4-3'] }}
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-3'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-3-1'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-3-2'] }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title" id="accordion-4">
                                    <h4>
                                        <i class="fa fa-check-circle" id="accordion-icon-4"></i>
                                        {{ $collapse[0]['collapse-h4-4'] }}
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-4'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-4-1'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-4-2'] }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title" id="accordion-5">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        {{ $collapse[0]['collapse-h4-5'] }}
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-5'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-5-1'] }}
                                        </p>
                                        <p>
                                            {{ $collapse[0]['collapse-div-p-5-1'] }}
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item --> --}}
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->
        <!-- CTA Start -->
        <section class="cta-two" style="margin-top: 200px;">
            <div class="cta-two__shape"
                style="background-image: url({{ $call_now[0]['call-now-bg-image-1-path'] }});"></div>
            <div class="container">
                <div class="cta-two__bg"
                    style="background-image: url({{ $call_now[0]['call-now-bg-image-2-path'] }});">
                    <div class="row">
                        <div class="col-lg-4 wow fadeInLeft" data-wow-delay="600ms">
                            <div class="cta-two__info"
                                style="background-image: url({{ $call_now[0]['call-now-bg-image-3-path'] }});">
                                <div class="cta-two__info__icon">
                                    {{-- <span class="icon-phone-call"></span> --}}
                                    <img src="assets/images/call_now.png" alt="Produtos ecologicos seguros">
                                </div>
                                <h4 class="cta-two__info__title">{{ $call_now[0]['call-now-h4-1'] }}</h4>
                                <p class="cta-two__info__text">
                                    <a
                                        href="tel:{{ $call_now[0]['call-now-p-a-1'] }}">{{ $call_now[0]['call-now-p-a-1'] }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta-two__content">
                                <h4 class="cta-two__content__title">
                                    {{ $call_now[0]['call-now-p-a-3'] }}<!-- <a href="tel:025461556695">{{ $call_now[0]['call-now-a-3'] }}!</a>-->
                                </h4>
                                <p class="cta-two__content__text">
                                    {{ $call_now[0]['call-now-p'] }}
                                    {{-- <br />{{ $call_now[0]['call-now-p-1'] }} --}}
                                </p>
                                <!--
          <a class="cta-two__content__rm" href="contact.html">{{ $call_now[0]['call-now-a-2'] }}<span class="fas fa-angle-double-right"></span></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-two__image">
                                <img src="{{ $call_now[0]['call-now-bg-image-4-path'] }}" alt="tolak">
                            </div>
                            <a href="tel:025461556695"
                                class="cta-two__call-text">{{ $call_now[0]['call-now-a-3'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-four mt-5">
            <div class="container" style="margin-top:100px;">
                <div class="cta-four__bg"
                    style="background-image: url({{ $video_contact[0]['watch-video-bg-img'] }});">
                    <div class="cta-four__shape"
                        style="background-image: url(assets/images/shapes/cta-4-border.png);"></div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="cta-four__content">
                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline"><span class="sec-title__tagline__left"
                                            style="color:#ff6600;"></span><i
                                            style="color:#ff6600;">{{ $video_contact[0]['watch-video-p-strong-1'] }}</i><span
                                            class="sec-title__tagline__right" style="color:#ff6600;"></span>
                                    </h6>
                                    <h3 class="sec-title-two__title">{{ $video_contact[0]['watch-video-h2'] }}</h3>

                                </div>
                                <p class="cta-four__content__text">
                                    {{ $video_contact[0]['watch-video-p-2'] }}<br />{{ $video_contact[0]['watch-video-p-2-1'] }}
                                </p>
                                <div class="cta-four__content__bar" style="background-color: #ff6600;"></div>
                                <div class="cta-four__content__info">
                                    <div class="cta-four__content__info__icon" style="color:#002255;"><i
                                            class="icofont-speech-comments"></i>
                                    </div>
                                    <p class="cta-four__content__info__text">
                                        {{ $video_contact[0]['watch-video-p-3'] }}<br /><a
                                            href="{{ $video_contact[0]['watch-video-p-3-1'] }}"
                                            target="_blank">{{ $video_contact[0]['watch-video-p-3-1'] }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-four__image">
                                <img src="{{ $video_contact[0]['watch-video-bg-img-1'] }}" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <div class="container mt-3 mb-5">
                <div class="row wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">
                    <div class="col-md-6 services-background-image w-100 h-75"
                        style="background-image: url({{ $video_contact[0]['contact-us-bg-img'] }});border-radius:30px;">

                    </div>
                    <div class="col-md-6 pb-5 text-center apointement-box" style="z-index:10;">
                        <div class="contact-three__content">
                            <div class="sec-title-four text-center">

                                <h6 class="sec-title-four__tagline"><span
                                        class="sec-title-four__tagline__left-border"></span>FALE CONNOSCO<span
                                        class="sec-title-four__tagline__right-border"></span></h6>
                                <!-- /.sec-title-four__tagline -->

                                <h3 class="sec-title-four__title">{{ $video_contact[0]['contact-us-h2-part-1'] }}
                                    </br>{{ $video_contact[0]['contact-us-h2-part-2'] }}</h3>
                                <!-- /.sec-title-four__title -->
                            </div><!-- /.sec-title-four -->
                            <form class="contact-three__form form-one form-contacts" method="POST"
                                action="{{ 'https://desinfestacoes.sospragas.pt' . route('FrontPage.thankYouFormContactForm', [], false) }}">
                                @csrf
                                @method('POST')
                                <div class="form-one__group">
									<input type="hidden" name="form_start" value="{{ now()->timestamp }}">
									<input class="input-field rounded" type="hidden" value="" placeholder="type_form" name="user_email_check" id="user_email_check">

                                    <input class="input-field rounded" type="hidden" value="ContactForm"
                                        placeholder="type_form" name="type_form">
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="name" placeholder="Nome *" required>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="text" name="phone" placeholder="Telefone">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email *" required>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Mensagem *"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div style="max-width: 280px;width: 280px !important;">
                                        <div class="form-one__control form-one__control--full">
                                            <div class="pull-left" style="margin-left: 20px;">
                                                <input class="form-check-input" type="checkbox" name="confirmed"
                                                    id="flexCheckDefault" required="">
                                                <label class="form-check-label text-left" for="flexCheckDefault"
                                                    style="min-width: 280px;width: 280px;max-width:580px; color:grey;font-size:12px;">
                                                    Aceito os <a href="/termos-servico" target="_blank"
                                                        style="color:#3d72fc;">Termos de Utilização</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <div class="pull-left" style="margin-left: 20px;">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexCheckDefault" required="">
                                                <label class="form-check-label text-left" for="flexCheckDefault"
                                                    style="min-width: 280px;width: 280px;max-width:580px;color:grey;font-size:12px;">
                                                    Tenho conhecimento e aceito a <a href="/politica-privacidade"
                                                        target="_blank" style="color:#3d72fc;">Política de
                                                        Privacidade</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-captcha" data-sitekey="f27e3306-f27a-4bc0-a162-3678fc648a4e"
                                        style="display: flex;justify-content: center;"></div>
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit"
                                            class="tolak-btn-two tolak-btn-two--home-six pull-left"
                                            style="border-radius: 5px;">
                                            <span class="tolak-btn-two__left-star"></span>
                                            <span>ENVIAR MENSAGEM<i
                                                    class="tolak-icons-two-arrow-right-short"></i></span>
                                            <span class="tolak-btn-two__right-star"></span>
                                        </button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                            <!--
         <div class="contact-three__content__info wow fadeInUp" data-wow-delay="200ms">
          <div class="contact-three__content__info__icon" style="color: #ff650c;"><i class="icon-phone-call mt-n2"></i></div>
          <h5 class="contact-three__content__info__title">Get Contact Now</h5>
          <p class="contact-three__content__info__text"><a href="tel:{{ $call_now[0]['call-now-p-a-1'] }}">{{ $call_now[0]['call-now-p-a-1'] }}</a></p>
         </div>
        -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->

        <footer class="container-fluid footer mt-5" style="max-height:200px;margin-top:150px;">
            <div class="row">
                <div class="col-md-3">
                    <img class="pull-left" src="assets/images/footer-logo.png" style="margin-left: -20px;" />
                </div>
                <div class="col-md-7" style="height:200px;">
                    <h3 class="h3 mt-5" style="font-weight: 600;color: #000;">Cuidamos do seu bem-estar, eliminamos
                        pragas</h3>
                    <p style="color: #ff6600">Solicite um orçamento sem compromisso</p>
                </div>
                <div class="col-md-2" style="height:200px;display: flex;justify-content: center;">
                    <a href="https://www.zaask.pt/user/geral3663" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" width="156" height="156"
                            style="max-width: 156px;" data-name="Layer 2" viewBox="0 0 43.28 45.13">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill: #1096d4;
                                    }

                                    .cls-3 {
                                        fill: #414042;
                                    }

                                    .cls-4 {
                                        fill: #fff;
                                    }

                                    .cls-5 {
                                        fill: #363431;
                                    }

                                    .cls-2 {
                                        stroke: #1096d4;
                                        stroke-miterlimit: 10;
                                        stroke-width: 3.93px;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g>
                                    <path class="cls-2"
                                        d="M21.66,1.97c1.67,0,3.88,3.27,5.42,3.93,1.54.66,5.28-.9,6.69,0,1.41.9,1.22,4.92,2.07,6.37.85,1.44,4.9,2.34,5.42,3.93.52,1.59-2.07,4.69-2.07,6.37,0,1.67,2.59,4.77,2.07,6.37-.52,1.59-4.43,2.58-5.42,3.93-.98,1.35-.71,5.38-2.07,6.37-1.35.98-5.06-.37-6.69,0-1.63.37-3.74,3.93-5.42,3.93-1.67,0-3.82-3.42-5.42-3.93-1.59-.52-5.34.98-6.69,0-1.35-.98-1.08-5.01-2.07-6.37-.98-1.35-4.9-2.34-5.42-3.93-.52-1.59,2.23-4.7,2.07-6.37-.16-1.67-2.69-4.81-2.07-6.37.62-1.55,4.57-2.49,5.42-3.93.85-1.44.65-5.47,2.07-6.37,1.41-.9,5.16.66,6.69,0,1.54-.66,3.74-3.93,5.42-3.93Z" />
                                    <rect class="cls-4" x="3.67" y="18.58" width="35.93" height=".79" />
                                    <rect class="cls-4" x="3.67" y="25.77" width="35.93" height=".79" />
                                    <path class="cls-4"
                                        d="M21.64,6.69c7.11,0,13.14,4.69,15.16,11.14h1.64c-2.07-7.33-8.81-12.71-16.79-12.71S6.92,10.5,4.85,17.83h1.64c2.02-6.45,8.05-11.14,15.16-11.14ZM21.64,38.45c-7.09,0-13.11-4.67-15.14-11.1h-1.64c2.08,7.31,8.82,12.67,16.78,12.67s14.7-5.37,16.78-12.67h-1.64c-2.03,6.43-8.05,11.1-15.14,11.1Z" />
                                    <path class="cls-4"
                                        d="M14.36,27.35c1.56,2.37,4.24,3.93,7.28,3.93s5.72-1.57,7.28-3.93h-14.56ZM28.95,17.83c-1.56-2.39-4.25-3.97-7.31-3.97s-5.75,1.58-7.31,3.97h14.61Z" />
                                    <g>
                                        <polygon class="cls-1"
                                            points="21.64 28.03 21.96 29.01 22.99 29.01 22.16 29.62 22.47 30.6 21.64 29.99 20.81 30.6 21.12 29.62 20.29 29.01 21.32 29.01 21.64 28.03" />
                                        <polygon class="cls-1"
                                            points="18.59 28.03 18.77 28.6 19.37 28.6 18.88 28.95 19.07 29.51 18.59 29.16 18.1 29.51 18.29 28.95 17.81 28.6 18.4 28.6 18.59 28.03" />
                                        <polygon class="cls-1"
                                            points="24.7 28.03 24.51 28.6 23.92 28.6 24.4 28.95 24.21 29.51 24.7 29.16 25.18 29.51 24.99 28.95 25.48 28.6 24.88 28.6 24.7 28.03" />
                                    </g>
                                    <g>
                                        <polygon class="cls-1"
                                            points="21.64 14.6 21.96 15.58 22.99 15.58 22.16 16.18 22.47 17.16 21.64 16.56 20.81 17.16 21.12 16.18 20.29 15.58 21.32 15.58 21.64 14.6" />
                                        <polygon class="cls-1"
                                            points="18.59 15.68 18.77 16.25 19.37 16.25 18.88 16.6 19.07 17.16 18.59 16.81 18.1 17.16 18.29 16.6 17.81 16.25 18.4 16.25 18.59 15.68" />
                                        <polygon class="cls-1"
                                            points="24.7 15.68 24.51 16.25 23.92 16.25 24.4 16.6 24.21 17.16 24.7 16.81 25.18 17.16 24.99 16.6 25.48 16.25 24.88 16.25 24.7 15.68" />
                                    </g>
                                    <g>
                                        <path class="cls-3"
                                            d="M10.48,16.02l.35-.53c.24-.37.57-.51.92-.28h0c.35.24.34.59.11.95l-.15.23.63.41-.2.31-1.66-1.09ZM11.64,16.01c.13-.2.11-.38-.08-.5h0c-.2-.14-.35-.07-.48.13l-.15.23.57.37.15-.23Z" />
                                        <path class="cls-3"
                                            d="M11.58,14.44l.44-.49c.29-.32.63-.43.93-.16h0c.23.22.22.46.1.69l1.01.16-.27.3-.94-.15-.16.18.6.54-.25.27-1.47-1.33ZM12.71,14.56c.16-.18.17-.35.02-.49h0c-.17-.16-.32-.11-.48.07l-.2.22.47.42.2-.22Z" />
                                        <path class="cls-3"
                                            d="M13.52,13.79v-.02c-.37-.46-.31-1.05.15-1.41.46-.36,1.04-.29,1.4.17v.02c.37.46.33,1.04-.15,1.41-.48.37-1.06.28-1.41-.17ZM14.79,12.79v-.02c-.26-.32-.63-.42-.94-.18s-.31.61-.05.94v.02c.28.34.66.4.94.18.29-.23.3-.6.04-.94Z" />
                                        <path class="cls-3"
                                            d="M15,11.47l1.08-.59.14.26-.76.41.28.52.59-.32.14.25-.59.32.39.71-.32.18-.95-1.74Z" />
                                        <path class="cls-3" d="M16.53,10.7l.34-.14.76,1.83-.34.14-.76-1.83Z" />
                                        <path class="cls-3"
                                            d="M17.73,11.67l.34-.1c.08.19.2.32.52.23.21-.06.33-.22.28-.4-.05-.18-.16-.22-.48-.18-.47.07-.73,0-.83-.37-.09-.31.11-.62.51-.73.41-.12.71,0,.85.35l-.33.09c-.09-.19-.23-.24-.45-.18-.22.06-.3.2-.26.34.04.15.13.21.47.17.47-.07.73,0,.84.38.09.33-.11.67-.53.79-.52.15-.81-.05-.94-.4Z" />
                                        <path class="cls-3"
                                            d="M19.42,11.2l.35-.04c.05.19.15.35.48.31.22-.03.36-.17.33-.35-.02-.18-.12-.24-.45-.25-.48,0-.72-.12-.77-.49-.04-.32.2-.6.61-.65.42-.05.7.11.79.48l-.34.04c-.06-.2-.19-.27-.42-.25-.22.03-.32.15-.31.3.02.16.1.23.44.24.47,0,.73.11.78.5.04.34-.21.64-.65.7-.54.07-.8-.17-.87-.54Z" />
                                        <path class="cls-3"
                                            d="M21.3,9.65h.37s.03,1.98.03,1.98h-.37s-.03-1.98-.03-1.98Z" />
                                        <path class="cls-3"
                                            d="M22.12,10.62v-.02c.07-.57.54-.95,1.12-.88.59.07.94.54.87,1.11v.02c-.07.57-.52.96-1.12.88-.6-.07-.94-.55-.87-1.12ZM23.72,10.81v-.02c.05-.4-.14-.73-.52-.78-.39-.05-.65.21-.7.63v.02c-.06.43.17.74.53.78.37.05.64-.21.69-.64Z" />
                                        <path class="cls-3"
                                            d="M24.85,10.02l.42.14.36,1.62.44-1.37.32.1-.61,1.89-.36-.12-.38-1.72-.47,1.45-.32-.1.61-1.89Z" />
                                        <path class="cls-3"
                                            d="M27.49,11.05l.43.23-.35,2.06-.34-.18.09-.51-.67-.36-.37.36-.31-.16,1.52-1.44ZM26.85,12.09l.52.27.18-.95-.69.67Z" />
                                        <path class="cls-3"
                                            d="M28.93,11.89l.3.22-1.01,1.35.68.51-.18.24-.97-.73,1.19-1.59Z" />
                                        <path class="cls-3"
                                            d="M30.85,13.48l.4.45c.46.52.38,1.03-.05,1.41l-.02.02c-.43.38-.96.4-1.42-.13l-.39-.45,1.49-1.31ZM29.97,15.04c.29.33.63.33.95.04h.02c.32-.3.39-.61.08-.96l-.14-.16-1.05.92.14.16Z" />
                                        <path class="cls-3"
                                            d="M32.26,15.19l.66,1.05-.25.16-.46-.74-.46.29.37.59-.23.15-.37-.59-.49.31.49.78-.25.16-.69-1.09,1.68-1.06Z" />
                                    </g>
                                    <g>
                                        <path class="cls-3"
                                            d="M12.24,27.91l.97,1.44-.34.23-.68-1.01-.63.43.55.81-.32.22-.55-.81-.67.45.72,1.07-.34.23-1.01-1.49,2.3-1.55Z" />
                                        <path class="cls-3"
                                            d="M13.09,31.18l.32-1.55.42.4-.25,1.12,1.1-.32.39.36-1.51.41-.34,1.66-.43-.4.27-1.24-1.22.34-.38-.36,1.63-.43Z" />
                                        <path class="cls-3"
                                            d="M14.46,32.5l.02-.03c.42-.72,1.21-.94,1.87-.55.55.32.82.84.55,1.44l-.45-.26c.13-.35.05-.62-.29-.82-.42-.24-.89-.07-1.2.46l-.02.03c-.31.54-.24,1.01.2,1.27.33.19.67.16.91-.15l.44.25c-.4.54-.98.59-1.55.26-.75-.44-.89-1.16-.47-1.9Z" />
                                        <path class="cls-3"
                                            d="M17.74,32.66l1.66.5-.12.39-1.17-.35-.22.73.94.28-.11.37-.94-.28-.23.78,1.23.37-.12.39-1.72-.52.8-2.66Z" />
                                        <path class="cls-3"
                                            d="M19.87,33.23l.51.05-.22,2.36,1.18.11-.04.41-1.69-.16.26-2.77Z" />
                                        <path class="cls-3"
                                            d="M21.95,33.37l1.73-.18.04.41-1.21.12.08.76.97-.1.04.39-.97.1.08.81,1.28-.13.04.41-1.79.18-.28-2.76ZM22.57,32.58l.4-.04.47.48-.34.04-.31-.18-.27.24-.33.03.38-.57Z" />
                                        <path class="cls-3"
                                            d="M24.12,33.12l.58-.2,1.76,1.51-.66-1.9.44-.15.91,2.62-.51.18-1.88-1.6.7,2.01-.44.15-.91-2.62Z" />
                                        <path class="cls-3"
                                            d="M27.39,33.39l-.02-.03c-.47-.69-.31-1.5.33-1.93.53-.36,1.11-.37,1.53.14l-.43.29c-.25-.27-.53-.32-.86-.09-.41.27-.46.77-.11,1.28l.02.03c.35.52.8.66,1.23.37.32-.21.44-.53.26-.88l.42-.28c.3.6.1,1.14-.45,1.51-.72.49-1.43.3-1.91-.41Z" />
                                        <path class="cls-3" d="M29,30.45l.37-.36,1.94,1.98-.37.36-1.94-1.98Z" />
                                        <path class="cls-3"
                                            d="M30.25,29.07l.39-.55,2.79.86-.31.44-.69-.22-.61.86.43.57-.28.4-1.73-2.36ZM31.58,30.15l.47-.67-1.29-.41.81,1.08Z" />
                                    </g>
                                    <g>
                                        <path class="cls-4"
                                            d="M7.55,23.97l2.27-2.27c.13-.15.21-.33.21-.53,0-.43-.35-.78-.78-.78h-2.14v.78c0,.15.06.3.16.41l.46.46.26-.26-.45-.45s-.06-.1-.06-.16v-.07h1.93s-2.25,2.26-2.25,2.26h0c-.13.15-.21.34-.21.54,0,.43.35.78.78.78h2.14v-.78c0-.15-.06-.3-.16-.41l-.46-.46-.26.26.45.45s.06.1.06.16v.06h-1.93ZM13.13,23.87v-1.19c0-.22-.01-.44-.09-.65-.18-.48-.65-.65-1.2-.65-.71,0-1.29.32-1.33,1.04h.74c.02-.3.23-.46.58-.46.44,0,.54.2.54.5v.2l-.94.07c-.61.04-1.08.39-1.08,1,0,.52.39,1,1.16,1,.46,0,.82-.22.97-.48.02.24.21.45.54.45.18,0,.25-.03.38-.09v-.57s-.05.01-.1.01c-.13,0-.18-.06-.18-.2ZM12.38,23.39c0,.47-.34.73-.82.73-.24,0-.46-.15-.46-.4,0-.26.23-.4.46-.42l.81-.06v.15ZM16.59,23.87v-1.19c0-.22-.01-.44-.09-.65-.18-.48-.65-.65-1.2-.65-.71,0-1.29.32-1.33,1.04h.74c.02-.3.23-.46.58-.46.44,0,.54.2.54.5v.2l-.94.07c-.61.04-1.08.39-1.08,1,0,.52.39,1,1.16,1,.46,0,.82-.22.97-.48.02.24.21.45.54.45.18,0,.25-.03.38-.09v-.57s-.05.01-.1.01c-.13,0-.18-.06-.18-.2ZM15.84,23.39c0,.47-.34.73-.82.73-.24,0-.46-.15-.46-.4,0-.26.23-.4.46-.42l.81-.06v.15ZM19.02,22.77c-.31-.05-.39-.06-.68-.09-.17-.02-.37-.09-.37-.32,0-.17.11-.28.25-.34.12-.05.22-.05.33-.05.16,0,.33.06.42.15.07.08.13.18.13.3h.73c0-.23-.11-.47-.28-.66-.23-.25-.62-.38-1-.38s-.74.12-.97.32c-.19.17-.33.39-.33.72,0,.41.3.76.73.85.28.06.6.08.89.12.2.03.32.15.32.34,0,.35-.39.41-.65.41-.22,0-.36-.04-.49-.14-.1-.08-.17-.23-.17-.38h-.72c0,.3.15.57.34.74.26.25.63.37,1.03.37.44,0,.84-.11,1.09-.37.17-.17.28-.39.28-.7,0-.5-.37-.82-.87-.9ZM22.17,22.73l1.14-1.24h-.97l-1.21,1.3v-2.4h-.77v4.3h.77v-.84l.51-.55.9,1.4h.89l-1.27-1.96Z" />
                                        <g>
                                            <path class="cls-5"
                                                d="M24.56,24.32c0-.22.18-.41.42-.41s.42.18.42.41-.18.41-.42.41-.42-.18-.42-.41Z" />
                                            <path class="cls-5"
                                                d="M25.72,24.56l1.23-1.29c.32-.34.53-.64.53-.94,0-.28-.15-.45-.44-.45s-.48.17-.53.61h-.69c.04-.77.51-1.19,1.25-1.19s1.16.41,1.16,1.01c0,.44-.26.81-.65,1.18l-.63.62h1.3v.58h-2.52v-.12Z" />
                                            <path class="cls-5"
                                                d="M28.55,23.1v-.16c0-1.03.6-1.64,1.46-1.64s1.45.59,1.45,1.63v.15c0,1.02-.56,1.66-1.46,1.66s-1.45-.62-1.45-1.64ZM30.71,23.08v-.15c0-.67-.23-1.05-.7-1.05s-.71.36-.71,1.05v.16c0,.7.25,1.05.72,1.05s.69-.36.69-1.06Z" />
                                            <path class="cls-5"
                                                d="M31.45,24.56l1.23-1.29c.32-.34.53-.64.53-.94,0-.28-.15-.45-.44-.45s-.48.17-.53.61h-.69c.04-.77.51-1.19,1.25-1.19s1.16.41,1.16,1.01c0,.44-.26.81-.65,1.18l-.63.62h1.3v.58h-2.52v-.12Z" />
                                            <path class="cls-5"
                                                d="M35.84,24.02h-1.64v-.28l1.44-2.4h.93v2.14h.44v.54h-.44v.66h-.73v-.66ZM35.85,23.48v-1.57l-.9,1.57h.9Z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row copy"
                style="height:50px;z-index:10;background-color:#002255;color:white;border-color:#002255;">

                <div class="col-md-3 text-white"
                    style="background-color: #002255;color:white;margin-top:-50px;height:50px;/* text-align: center; *//* width: 00px; */">
                    <p class="text-white copy-hover" style="width: 600px;">Copyright SOS Pragas <span
                            id="year"></span> <i class="fa fa-copyright mt-3" aria-hidden="true"></i> Todos
                        direitos reservados</p>
                </div>
                <div class="col-md-3 text-white"
                    style="background-color: #002255;color:white;margin-top:-50px;height:50px;text-align: center;">
                    <p class="mt-3 text-white copy-hover"><a href="/politica-privacidade" target="_blank">Política
                            de Privacidade</a></p>
                </div>
                <div class="col-md-3 text-white"
                    style="background-color: #002255;color:white;margin-top:-50px;height:50px;text-align: center;">
                    <p class="mt-3 text-white copy-hover"><a href="/termos-servico" target="_blank">Termos de
                            Serviços</a></p>
                </div>
                <div class="col-md-3 text-white"
                    style="background-color: #002255;color:white;margin-top:-50px;height:50px;text-align: center;">
                    <p class="mt-3 text-white copy-hover"><a href="https://pixelinmotion.pt"
                            target="_blank">Desenvolvido por Pixel in Motion</a></p>
                </div>
            </div>
        </footer>
    </div>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="/assets/images/logo-dark.png"
                        width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container">
                <ul class="main-menu__list one-page-scroll-menu">
                    <li class="megamenu scrollToLink"><a href="/">Home</a></li>
                    <li class="scrollToLink"><a href="/sobre">Sobre</a></li>
                    <li class="scrollToLink"><a href="/servicos">Serviços</a></li>
                    <li class="scrollToLink"><a href="/sustentabilidade">Sustentabilidade</a></li>
                    <li class="scrollToLink"><a href="/contactos">Contactos</a></li>
                    <li class="scrollToLink"><a href="#">Contacta-nos</a></li>
                </ul>
            </div>
            <!-- /.mobile-nav__container -->

            {{-- <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@tolak.com">needhelp@tolak.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact --> --}}
            {{-- <div class="mobile-nav__social">
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
            </div> --}}
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>
	<style>
		.whatsapp-float {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 20px;
			right: 20px;
			/* background-color: #25d366; */
			color: #fff;
			border-radius: 50%;
			text-align: center;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
			z-index: 1000;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: transform 0.3s ease;
		}

		.whatsapp-float:hover {
			transform: scale(1.1);
		}

		.whatsapp-float img {
			width: 100%;
			height: 100%;
		}

	</style>
	<a href="https://wa.me/+351937824676" class="whatsapp-float" target="_blank" aria-label="Fale conosco no WhatsApp">
		<img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
	</a>
    @include('includes.cookies')
    <script>
        $(document).ready(function() {

            const currentYear = new Date().getFullYear();
            $('#year').text(currentYear);

            $('#quote-tab').addClass('bg-white');
            $('#contact-tab').addClass('bg-light');
            $('#modal-quote-tab').addClass('bg-white');
            $('#modal-contact-tab').addClass('bg-light');
            $('#home').removeClass('border');
            $('#home').addClass('active-tab');

            $('#modal-home').removeClass('border');
            $('#modal-home').addClass('active-tab');

            $('#customer_type').val('home');
            $('#modal-customer_type').val('home');
            $("#accordion-1").addClass('active-collapse');

            $(".accordion-1").addClass('text-white');

            $("#contact-tab").click(function() {
                $('#quote-tab').removeClass('bg-white');
                $('#quote-tab').addClass('bg-light');
                $('#contact-tab').addClass('bg-white');
                //$('#contact-tab').addClass('bg-light');
                $("#myTabContent").css("border-top-right-radius", "0px");
                $("#myTabContent").css("border-top-left-radius", "30px");
            });
            $('#quote-tab').click(function() {
                $('#contact-tab').removeClass('bg-white');
                $('#contact-tab').addClass('bg-light');
                $('#quote-tab').addClass('bg-white');
                $('#quote-tab').addClass('bg-light');
                $("#myTabContent").css("border-top-right-radius", "30px");
                $("#myTabContent").css("border-top-left-radius", "0px");
            })

            $("#home_mobile").click(function() {
                $('#company_mobile').removeClass('active-tab');
                $('#company_mobile').addClass('border');
                $('#home_mobile').removeClass('border');
                $('#home_mobile').addClass('active-tab');
                $('#customer_type').val('residência');
                $("#home_mobile").val("residência");

            })
            $("#company_mobile").click(function() {
                $('#home_mobile').removeClass('active-tab');
                $('#home_mobile').addClass('border');
                $('#company_mobile').removeClass('border');
                $('#company_mobile').addClass('active-tab');
                $('#customer_type').val('empresa');
                $("#company_mobile").val("empresa");
            })

            $("#home_desktop").click(function() {
                $('#company_desktop').removeClass('active-tab');
                $('#company_desktop').addClass('border');
                $('#home_desktop').removeClass('border');
                $('#home_desktop').addClass('active-tab');
                $('#customer_type').val('residência');
                $("#home_desktop").val("residência");

            })
            $("#company_desktop").click(function() {
                $('#home_desktop').removeClass('active-tab');
                $('#home_desktop').addClass('border');
                $('#company_desktop').removeClass('border');
                $('#company_desktop').addClass('active-tab');
                $('#customer_type').val('empresa');
                $("#company_desktop").val("empresa");
            })

            $("#modal-contact-tab").click(function() {
                $('#modal-quote-tab').removeClass('bg-white');
                $('#modal-quote-tab').addClass('bg-light');
                $('#modal-contact-tab').addClass('bg-white');
                //$('#contact-tab').addClass('bg-light');
                $("#myTabContent").css("border-top-right-radius", "0px");
                $("#myTabContent").css("border-top-left-radius", "30px");
            });
            $('#modal-quote-tab').click(function() {
                $('#modal-contact-tab').removeClass('bg-white');
                $('#modal-contact-tab').addClass('bg-light');
                $('#modal-quote-tab').addClass('bg-white');
                $('#modal-quote-tab').addClass('bg-light');
                $("#myTabContent").css("border-top-right-radius", "30px");
                $("#myTabContent").css("border-top-left-radius", "0px");
            })

            $("#modal-home").click(function() {
                $('#modal-company').removeClass('active-tab');
                $('#modal-company').addClass('border');
                $('#modal-home').removeClass('border');
                $('#modal-home').addClass('active-tab');
                $('#modal-customer_type').val('residência');
                $("#modal-home").val("residência");

            })
            $("#modal-company").click(function() {
                $('#modal-home').removeClass('active-tab');
                $('#modal-home').addClass('border');
                $('#modal-company').removeClass('border');
                $('#modal-company').addClass('active-tab');
                $('#modal-customer_type').val('empresa');
                $("#modal-company").val("empresa");
            })


            $("#accordion-1").click(function() {
                $("#accordion-1").addClass('active-collapse');
                $('#accordion-2').removeClass('active-collapse');
                $('#accordion-3').removeClass('active-collapse');
                $('#accordion-4').removeClass('active-collapse');
                $('#accordion-5').removeClass('active-collapse');
            })

            $("#accordion-2").click(function() {
                $("#accordion-1").removeClass('active-collapse');
                $('#accordion-2').addClass('active-collapse');
                $('#accordion-3').removeClass('active-collapse');
                $('#accordion-4').removeClass('active-collapse');
                $('#accordion-5').removeClass('active-collapse');
            })

            $("#accordion-3").click(function() {
                $("#accordion-1").removeClass('active-collapse');
                $('#accordion-2').removeClass('active-collapse');
                $('#accordion-3').addClass('active-collapse');
                $('#accordion-4').removeClass('active-collapse');
                $('#accordion-5').removeClass('active-collapse');
            })

            $("#accordion-4").click(function() {
                $("#accordion-1").removeClass('active-collapse');
                $('#accordion-2').removeClass('active-collapse');
                $('#accordion-3').removeClass('active-collapse');
                $('#accordion-4').addClass('active-collapse');
                $('#accordion-5').removeClass('active-collapse');
            })

            $("#accordion-5").click(function() {
                $("#accordion-1").removeClass('active-collapse');
                $('#accordion-2').removeClass('active-collapse');
                $('#accordion-3').removeClass('active-collapse');
                $('#accordion-4').removeClass('active-collapse');
                $('#accordion-5').addClass('active-collapse');
            })
        });
    </script>


    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
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
    <script src="{{ asset('assets/vendors/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart/custome-chart.js') }}"></script>

    <!-- template js -->
    <script src="{{ asset('assets/js/tolak.js') }}"></script>

    <!-- sanito -->

    <script src="{{ asset('assets/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}" defer ></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script>
        $(".form-contacts").on('submit', (e) => {
            // e.target é o formulário que disparou o evento
            let recaptchaResponse = $(e.target).find("textarea[name='g-recaptcha-response']").val();
            if (recaptchaResponse == "") {
                alert("Por favor preencha o hCaptcha");
                e.preventDefault();
            }
            s

        });
    </script>
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-TH5LZNRJ height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
