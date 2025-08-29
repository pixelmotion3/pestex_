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
            .input-container { display: flex; width: 60%; margin-bottom: 15px; margin-left: 20px;margin-right: 20px;}
            .icon { padding: 10px; color: black; min-width: 50px; text-align: center; }
            .input-field { width: 100%; padding: 10px; outline: none; }
            .input-field:focus { border: 2px solid dodgerblue; }
            .btn { background-color: #ff6600; color: white; padding: 15px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9; }
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
    <body class="custom-cursor">

            <div class="custom-cursor__cursor"></div>
            <div class="custom-cursor__cursor-two"></div>

            <div class="preloader">
                <div class="preloader__image" style="background-image: url(/assets/images/logo-dark.png);"></div>
            </div>
            <!-- Modal -->
            <div class="modal fade rounded-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title ml-4" id="exampleModalLabel">Formulario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-2">
                            <ul class="nav nav-tabs" id="myTabModal" role="tablist">
                                <li class="nav-item w-50 rounded-top-lg" role="presentation">
                                    <button class="nav-link active w-100 text-muted p-4" id="modal-quote-tab" data-bs-toggle="tab" style="border-top-left-radius:30px;border-top-right-radius:30px; border:none; background-color: transparent;"
                                        data-bs-target="#modal-quote" type="button" role="tab" aria-controls="modal-quote" aria-selected="true">
                                            <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-1'] }}</strong>
                                    </button>
                                </li>
                                <li class="nav-item w-50 rounded-top-lg " role="presentation">
                                    <button class="nav-link w-100 text-muted p-4" id="modal-contact-tab" data-bs-toggle="tab" style="background-color: transparent;border:none;border-top-left-radius:35px;border-top-right-radius:35px;"
                                        data-bs-target="#modal-contact" type="button" role="tab" aria-controls="modal-contact" aria-selected="false">
                                        <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-2'] }}</strong>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content p-2 bg-white" id="myTabModalContent" style="border-radius:30px;">
                                <div class="tab-pane fade show active" id="modal-quote" role="tabpanel" aria-labelledby="modal-quote-tab">
                                    <div class="container bg-white">
                                        <form method="POST" action="{{ route('FrontPage.QuoteForm') }}">
                                            @csrf
                                            @method('post')
                                            <div class="row text-center" style="border-radius:50%;">
												<input class="input-field rounded" type="hidden" value="" placeholder="type_form" name="user_email_check" id="user_email_check">
                                                <div class="col mt-3 border" style="margin-left:30px;margin-right:15px;" id="modal-home">
                                                    <i class="fa fa-home mt-3" aria-hidden="true" style="font-size:4rem;"></i>
                                                    <p>Casa</p>
                                                </div>
                                                <div class="col border mt-3" style="margin-right:30px;margin-left:15px;" id="modal-company">
                                                    <i class="far fa-building mt-3" aria-hidden="true" style="font-size:4rem;"></i>
                                                    <p>Empresa</p>
                                                </div>
                                                <input class="input-field rounded" type="hidden" name="customer_type" id="modal-customer_type" value="home" required>

                                                <div class="input-container mt-3" style="width: 92%;" required>
                                                    <select name="products">
                                                        <option value="ratos" selected class="text-white">Ratos</option>
                                                        <option value="baratas" class="text-muted">Baratas</option>
                                                        <option value="percevejos" class="text-muted">Percevejos</option>
                                                    </select>
                                                </div>

                                                <div class="input-container mt-3" style="width: 92%;">
                                                    <i class="far fa-smile icon"></i>
                                                    <input class="input-field rounded" type="text" placeholder="Localidade" name="locality" required>
                                                    @error('locality')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-container mt-1" style="width: 92%;">
                                                    <i class="far fa-smile icon"></i>
                                                    <input class="input-field rounded" type="text" placeholder="Nome" name="name" required>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="input-container" style="width: 92%;">
                                                    <i class="far fa-envelope icon"></i>
                                                    <input class="input-field rounded" type="email" placeholder="Email" name="email" required>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="input-container" style="width: 92%;">
                                                    <i class="fa fa-phone icon"></i>
                                                    <input class="input-field rounded" type="number" placeholder="Telefone" name="phone">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 form-check">
                                                    <input class="form-check-input form-check-input float-left" type="checkbox" name="confirmed" id="flexCheckDefault" required>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    Concordo com os Termos de Utilização
                                                    </label>
                                                    @error('confirmed')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 ml-4 mb-5" style="max-width: 92%">
                                                    <button class="btn btn-dark mt-2" type="submit" name="quote_form">Obter Orçamento Grátis</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-2  quote_border_inbox" id="modal-contact" role="tabpanel" aria-labelledby="modal-contact-tab" >
                                    <div class="tab-pane fade show active quote_border_inbox" id="modal-home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="container">
                                            <form method="post" action="{{ route('FrontPage.ContactForm') }}">
                                                @csrf
                                                @method('POST')
                                                <div class="row text-center">
                                                    <h2 class="h2 mt-5">{{ $main_screen[0]['quote-form-tab-2-h2'] }}</h2>
                                                    <p class="mb-5">{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                                                    <div class="input-container mt-3" style="width: 92%;">
                                                        <i class="far fa-smile icon"></i>
                                                        <input class="input-field rounded" type="text" placeholder="name" name="name">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="input-container" style="width: 92%;">
                                                        <i class="far fa-envelope icon"></i>
                                                        <input class="input-field rounded" type="email" placeholder="email" name="email">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="input-container" style="width: 92%;">
                                                        <i class="fa fa-phone icon"></i>
                                                        <input class="input-field rounded" type="text" placeholder="Telefone" name="usrnm">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 form-check">
                                                        <input class="form-check-input form-check-input float-left" type="checkbox" name="confirmed" id="flexCheckDefault" required>
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        Concordo com os Termos de Utilização
                                                        </label>
                                                        @error('confirmed')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 ml-4" style="max-width: 92%;">
                                                        <button class="btn btn-dark w-100 mt-2" type="submit" name="form_contact">Contacte-nos Agora!</button>
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
								<li class="megamenu scrollToLink current"><a href="/" class="font-semibold">Home</a></li>
								<li class="scrollToLink"><a href="/sobre" class="font-semibold">Sobre</a></li>
								<li class="scrollToLink"><a href="/servicos" class="font-semibold">Serviços</a></li>
								<li class="scrollToLink"><a href="/sustentabilidade" class="font-semibold">Sustentabilidade</a></li>
								<li class="scrollToLink"><a href="/blogs" class="font-semibold">Blog</a></li>
								<li class="scrollToLink contactenos-link2"><a href="contact-us" class="font-semibold">Contactos</a></li>
								<li class="scrollToLink contactenos-link" style="display: none;"><a href="tel:00351219747353" class="font-semibold">CONTACTE-NOS</a></li>
							</ul>
						</nav>

						<div class="main-header-two__right">
							<div class="mobile-nav__btn mobile-nav__toggler">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<a href="tel:00351219747353" class="btn mt-2 theme-btn-three thm-btn contactenos-btn" type="submit" name="quote_form">CONTACTE-NOS</a>
						</div>
					</div>
				</div>
			</header><!-- /.main-header -->
            <!-- main-slider-start -->
            <section class="main-slider-one">
                <div class="main-slider-one__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
                    "loop": false,
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
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <!--
                                <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                                -->
                            </div>
                            <div class="main-slider-one__bg" style="background-image: url({{ $main_screen[0]['carrousel-bg-img-path'] }});"></div>
                            <!--
                            <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%" />
                            </svg>
                            -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title">{{ $main_screen[0]['carrousel-h5'] }}</h5><!-- slider-sub-title -->
                                            <h2 class="main-slider-one__title">Get Our Business<br> This It Soluti<span>o</span>n</h2><!-- slider-title -->
                                            <div class="main-slider-one__text">
                                                <p class="main-slider-one__text__one">{{ $main_screen[0]['carrousel-p'] }}</p>
                                            </div><!-- slider-text -->
                                            <div class="main-slider-one__bottom">
                                                <div class="main-slider-one__btn">
                                                    <a href="services.html" class="tolak-btn tolak-btn--base"><b>{{ $main_screen[0]['carrousel-a-1'] }}</b><span></span></a><!-- slider-btn -->
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
                            <div class="main-slider-one__floating-text">Tolak</div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <!--
                                <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                                -->
                            </div>
                            <div class="main-slider-one__bg" style="background-image: url({{ $main_screen[0]['carrousel-bg-img-path-1'] }});"></div>
                            <!--
                            <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%" />
                            </svg>
                            -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title">{{ $main_screen[0]['carrousel-h5-1'] }}</h5><!-- slider-sub-title -->
                                            <h2 class="main-slider-one__title">Get Our Business<br> This It Soluti<span>o</span>n</h2><!-- slider-title -->
                                            <div class="main-slider-one__text">
                                                <p class="main-slider-one__text__one">{{ $main_screen[0]['carrousel-p-1'] }}.</p>
                                            </div><!-- slider-text -->
                                            <div class="main-slider-one__bottom">
                                                <div class="main-slider-one__btn">
                                                    <a href="services.html" class="tolak-btn tolak-btn--base"><b>{{ $main_screen[0]['carrousel-a-1-1'] }}</b><span></span></a><!-- slider-btn -->
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
                            <div class="main-slider-one__floating-text">Tolak</div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <!--
                                <img src="assets/images/shapes/slider-1-shape-1.png" alt="tolak">
                                -->
                            </div>
                            <div class="main-slider-one__bg" style="background-image: url({{ $main_screen[0]['carrousel-bg-img-path-2'] }});"></div>
                            <!--
                            <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0" width="100%" height="100%" />
                                <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0" width="100%" height="100%" />
                            </svg>
                            -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-slider-one__content">
                                            <h5 class="main-slider-one__sub-title">{{ $main_screen[0]['carrousel-h5-2'] }}</h5><!-- slider-sub-title -->
                                            <h2 class="main-slider-one__title">Get Our Business<br> This It Soluti<span>o</span>n</h2><!-- slider-title -->
                                            <div class="main-slider-one__text">
                                                <p class="main-slider-one__text__one">{{ $main_screen[0]['carrousel-p-2'] }}</p>
                                            </div><!-- slider-text -->
                                            <div class="main-slider-one__bottom">
                                                <div class="main-slider-one__btn">
                                                    <a href="services.html" class="tolak-btn tolak-btn--base"><b>{{ $main_screen[0]['carrousel-a-1-2'] }}</b><span></span></a><!-- slider-btn -->
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
                            <div class="main-slider-one__floating-text">Pestex</div>
                        </div>
                    </div><!-- item -->
                </div>
                <!-- formulario -->
                <div class="main-slider-one__project fadeInUp text-center shadow-lg bg-light" data-wow-delay="200ms" style="min-width: 400px;z-index:1;border-radius:30px;background-color: black;">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item w-50 rounded-top-lg" role="presentation">
                            <button class="nav-link active w-100 text-muted p-4" id="quote-tab" data-bs-toggle="tab" style="border-top-left-radius:30px;border-top-right-radius:30px; border:none; background-color: transparent;"
                                data-bs-target="#quote" type="button" role="tab" aria-controls="quote" aria-selected="true">
                                    <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-1'] }}</strong>
                            </button>
                        </li>
                        <li class="nav-item w-50 rounded-top-lg " role="presentation">
                            <button class="nav-link w-100 text-muted p-4" id="contact-tab" data-bs-toggle="tab" style="background-color: transparent;border:none;border-top-left-radius:35px;border-top-right-radius:35px;"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-2'] }}</strong>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-2 bg-white" id="myTabContent" style="border-radius:30px;">
                        <div class="tab-pane fade show active" id="quote" role="tabpanel" aria-labelledby="quote-tab">
                            <div class="container bg-white">
                                <form method="POST" action="{{ route('FrontPage.QuoteForm') }}">
                                    @csrf
                                    @method('post')
									<input class="input-field rounded" type="hidden" value="" placeholder="type_form" name="user_email_check" id="user_email_check">
                                    <div class="row" style="border-radius:50%;">
                                        <div class="col mt-3 border" style="margin-left:30px;margin-right:15px;" id="home"">
                                            <i class="fa fa-home mt-3" aria-hidden="true" style="font-size:4rem;"></i>
                                            <p>Casa</p>
                                        </div>
                                        <div class="col border mt-3" style="margin-right:30px;margin-left:15px;" id="company">
                                            <i class="far fa-building mt-3" aria-hidden="true" style="font-size:4rem;"></i>
                                            <p>Empresa</p>
                                        </div>
                                        <input class="input-field rounded" type="hidden" name="customer_type" id="customer_type" value="home" required>

                                        <div class="input-container mt-3" style="width: 92%;" required>
                                            <select name="products">
                                                <option value="ratos" selected class="text-white">Ratos</option>
                                                <option value="baratas" class="text-muted">Baratas</option>
                                                <option value="percevejos" class="text-muted">Percevejos</option>
                                            </select>
                                        </div>

                                        <div class="input-container mt-3" style="width: 92%;">
                                            <i class="far fa-smile icon"></i>
                                            <input class="input-field rounded" type="text" placeholder="Localidade" name="locality" required>
                                            @error('locality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="input-container mt-1" style="width: 92%;">
                                            <i class="far fa-smile icon"></i>
                                            <input class="input-field rounded" type="text" placeholder="Nome" name="name" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="far fa-envelope icon"></i>
                                            <input class="input-field rounded" type="email" placeholder="Email" name="email" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="input-container" style="width: 92%;">
                                            <i class="fa fa-phone icon"></i>
                                            <input class="input-field rounded" type="number" placeholder="Telefone" name="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-check">
                                            <input class="form-check-input form-check-input float-left" type="checkbox" name="confirmed" id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                               Concordo com os Termos de Utilização
                                            </label>
                                            @error('confirmed')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 ml-4 mb-5" style="max-width: 92%">
                                            <button class="btn btn-dark mt-2" type="submit" name="quote_form">Obter Orçamento Grátis</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2  quote_border_inbox" id="contact" role="tabpanel" aria-labelledby="contact-tab" >
                            <div class="tab-pane fade show active quote_border_inbox" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container">
                                    <form method="post" action="{{ route('FrontPage.ContactForm') }}">
                                        @csrf
                                        @method('POST')
                                        <div class="row">
                                            <h2 class="h2 mt-5">{{ $main_screen[0]['quote-form-tab-2-h2'] }}</h2>
                                            <p class="mb-5">{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                                            <div class="input-container mt-3" style="width: 92%;">
                                                <i class="far fa-smile icon"></i>
                                                <input class="input-field rounded" type="text" placeholder="name" name="name">
                                            </div>

                                            <div class="input-container" style="width: 92%;">
                                                <i class="far fa-envelope icon"></i>
                                                <input class="input-field rounded" type="email" placeholder="email" name="email">
                                            </div>

                                            <div class="input-container" style="width: 92%;">
                                                <i class="fa fa-phone icon"></i>
                                                <input class="input-field rounded" type="text" placeholder="Phone" name="usrnm">
                                            </div>
                                            <div class="col-md-12 form-check">
                                                <input class="form-check-input form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree to the terms of service
                                                </label>
                                            </div>
                                            <div class="col-md-12 ml-4" style="max-width: 92%;">
                                                <button class="btn btn-dark w-100 mt-2" type="submit" name="form_contact">Contacte-nos Agora!</button>
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
            <section class="feature-one">
                <div class="container">
                    <div class="sec-title text-center mb-5">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>{{ $company_status[0]['company-status-h6'] }}<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">{{ $company_status[0]['company-status-h3'] }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="row gutter-y-30">
                        <div class="col-md-4 wow fadeInUp mt-5" data-wow-delay="00ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number" style="-webkit-text-stroke: 1px black;"></div>
                                <div class="service-one__item__icon">
                                    <span class="icon-social-care"></span>
                                </div>
                                <h4 class="feature-one__item__title">{{ $company_status[0]['company-status-1h4'] }}</h4>
                                <p class="feature-one__item__text">{{ $company_status[0]['company-status-1p'] }}</p>
                                <div class="feature-one__item__arrow" style="background-image: url(assets/images/shapes/feature-1-shape-1.png);margin-top:-40px;"></div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-md-4 wow fadeInUp mt-5" data-wow-delay="500ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number" style="-webkit-text-stroke: 1px black;"></div>
                                <div class="service-one__item__icon">
                                    <span class="icon-note-pad"></span>
                                </div>
                                <h4 class="feature-one__item__title">{{ $company_status[0]['company-status-2h4'] }}</h4>
                                <p class="feature-one__item__text">{{ $company_status[0]['company-status-2p'] }}</p>
                                <div class="feature-one__item__arrow feature-one__item__arrow--sm-hide" style="background-image: url(assets/images/shapes/feature-1-shape-2.png);margin-top:-40px;"></div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-md-4 wow fadeInUp mt-5" data-wow-delay="200ms">
                            <div class="feature-one__item text-center">
                                <div class="feature-one__item__number" style="-webkit-text-stroke: 1px black;"></div>
                                <div class="service-one__item__icon">
                                    <span class="icon-advertisement"></span>
                                </div>
                                <h4 class="feature-one__item__title">{{ $company_status[0]['company-status-3h4'] }}</h4>
                                <p class="feature-one__item__text">{{ $company_status[0]['company-status-3p'] }}</p>
                            </div><!-- feature-item -->
                        </div>
                    </div>
					<div class="col-lg-12 col-md-12 text-center text-white mt-5" style="max-width:250px;margin-left:auto;margin-right:auto;">
						<a href="/sobre" type="button" class="btn btn-primary">
							SOS PRAGAS. QUEM SOMOS
						</a>
					</div>
                </div>
            </section>
            <!-- Feature End -->
            <!-- Service Start -->
            <section class="service-one">
                <div class="container">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>{{ $best_service[0]['best-service-h6-1'] }}<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">{{ $best_service[0]['best-service-h3-1'] }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="{{ $best_service[0]['best-service-img-path-1'] }}" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-cooperation"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="business-growth.html">{{ $best_service[0]['best-service-a-1'] }}</a>
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
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="150ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="{{ $best_service[0]['best-service-img-path-2'] }}" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-ads-campaign"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="business-solution.html">{{ $best_service[0]['best-service-a-2'] }}</a>
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
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="{{ $best_service[0]['best-service-img-path-3'] }}" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-headhunter"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="marketing-solution.html">{{ $best_service[0]['best-service-a-3'] }}</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                       {{ $best_service[0]['best-service-p-3'] }}
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

						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="{{ $best_service[0]['best-service-img-path-4'] }}" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-headhunter"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="marketing-solution.html">{{ $best_service[0]['best-service-a-4'] }}</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                       {{ $best_service[0]['best-service-p-4'] }}
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

						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="{{ $best_service[0]['best-service-img-path-5'] }}" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-headhunter"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="marketing-solution.html">{{ $best_service[0]['best-service-a-5'] }}</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                       {{ $best_service[0]['best-service-p-5'] }}
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

						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-one__item text-center">
                                <div class="service-one__item__image">
                                    <img src="{{ $best_service[0]['best-service-img-path-6'] }}" alt="tolak">
                                </div>
                                <div class="service-one__item__content">
                                    <div class="service-one__item__icon">
                                        <span class="icon-headhunter"></span>
                                    </div><!-- /.service-icon -->
                                    <h3 class="service-one__item__title">
                                        <a href="marketing-solution.html">{{ $best_service[0]['best-service-a-6'] }}</a>
                                    </h3><!-- /.service-title -->
                                    <p class="service-one__item__text">
                                       {{ $best_service[0]['best-service-p-6'] }}
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

                         <div class="col-lg-12 col-md-12 text-center text-white mt-5" style="max-width:250px;margin-left:auto;margin-right:auto;">
                            <a type="button" href="/servicos" class="btn btn-primary">
                                VER MAIS
							</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- services -->
            <section class="service-section">
                <div class="image-layer" style="background-image: url({{ $our_service_1[0]['our-services-bg-img-path-1'] }});"></div>
                    <div class="container">
                        <div class="sec-title text-center light">
                            <h6>{{ $our_service_1[0]['our-services-h6-1'] }}</h6>
                            <h2>{{ $our_service_1[0]['our-services-h2-1'] }}<br/>{{ $our_service_1[0]['our-services-h2-2'] }}</h2>
                        </div>

                        <div class="tabs-box" style="margin-top:140px;">
                            <div class="tab-btn-one">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">{{ $our_service_1[0]['our-services-tab-1'] }}</li>
                                    <li class="tab-btn" data-tab="#tab-2">{{ $our_service_2[0]['our-services-tab-2'] }}</li>
                                </ul>
                            </div>
                            <div class="tabs-content" style="margin-bottom: 150px;">
                                <div class="tab bg-light active-tab p-5" id="tab-1" style="border-bottom:1px solid lightgray;">
                                   <div class="mt-5">
                                        <h2 class="h2"><strong>{{ $our_service_1[0]['our-services-tab-1-h2'] }}</strong></h2>
                                        <div class="text mt-3">
                                            <p>{{ $our_service_1[0]['our-services-tab-1-p'] }}<br/>{{ $our_service_1[0]['our-services-tab-1-p-1'] }}</p>
                                        </div>
                                        <ul class="list-item clearfix mt-5">
                                            <li>{{ $our_service_1[0]['our-services-tab-1-li-1'] }}</li>
                                            <li>{{ $our_service_1[0]['our-services-tab-1-li-2'] }}</li>
                                            <li>{{ $our_service_1[0]['our-services-tab-1-li-3'] }}</li>
                                        </ul>
                                        <div class="btn-box mt-5">
                                            <a data-toggle="modal" data-target="#exampleModal" class="theme-btn-three thm-btn">Contacte-nos Agora!</a>
                                        </div>
                                        <div class="other-text">
                                            <p>{{ $our_service_1[0]['our-services-tab-1-p-2'] }}, <a data-toggle="modal" data-target="#exampleModal">{{ $our_service_1[0]['our-services-tab-1-a-2'] }}</a></p>
                                            <div class="arrow" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab bg-light p-5" id="tab-2" style="border-bottom:1px solid lightgray;">
                                    <div class="mt-5">
                                        <h2 class="h2"><strong>{{ $our_service_2[0]['our-services-tab-2-h2'] }}</strong></h2>
                                        <div class="text mt-3">
                                            <p>{{ $our_service_2[0]['our-services-tab-2-p'] }}<br/>{{ $our_service_2[0]['our-services-tab-2-p-1'] }}</p>
                                        </div>
                                        <ul class="list-item clearfix mt-5">
                                            <li>{{ $our_service_2[0]['our-services-tab-2-li-1'] }}</li>
                                            <li>{{ $our_service_2[0]['our-services-tab-2-li-2'] }}</li>
                                            <li>{{ $our_service_2[0]['our-services-tab-2-li-3'] }}</li>
                                        </ul>
                                        <div class="btn-box mt-5">
                                            <a data-toggle="modal" data-target="#exampleModal" class="theme-btn-three thm-btn">Contacte-nos Agora!</a>
                                        </div>
                                        <div class="other-text">
                                            <p>{{ $our_service_2[0]['our-services-tab-2-p-2'] }}, <a data-toggle="modal" data-target="#exampleModal">{{ $our_service_2[0]['our-services-tab-2-a'] }}</a></p>
                                            <div class="arrow" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            <!-- Service End
            <section class="about-one" id="about">
                <div class="about-one__bg" style="background-image: url({{ $about_now[0]['about-now-1-bg-img-path'] }});"></div>
                <div class="about-one__shape" style="background-image: url({{ $about_now[0]['about-now-2-img-path'] }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="about-one__content">
                                <div>
                                    <h6 class="sec-title__tagline">{{ $about_now[0]['about-now-h6'] }}</h6><!-- /.sec-title__tagline
                                    <h3 class="sec-title__title">{{ $about_now[0]['about-now-h3'] }}</h3><!-- /.sec-title__title
                                </div><!-- /.sec-title
                                <p class="about-one__content__text">
                                    {{ $about_now[0]['about-now-p'] }}
                                </p>
                                <ul class="about-one__content__list">
                                    <li><span class="icofont-checked"></span>
                                        <p>{{ $about_now[0]['about-now-li-1'] }}</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>{{ $about_now[0]['about-now-li-2'] }}</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>{{ $about_now[0]['about-now-li-3'] }}</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>{{ $about_now[0]['about-now-li-4'] }}</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>{{ $about_now[0]['about-now-li-5'] }}</p>
                                    </li>
                                    <li><span class="icofont-checked"></span>
                                        <p>{{ $about_now[0]['about-now-li-6'] }}</p>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <!--
                                <div class="about-one__content__btn">
                                    <a href="about.html" class="tolak-btn"><b>About More</b><span></span></a>
                                    <h5 class="about-one__content__btn__text">Watching video</h5>
                                    <img class="about-one__content__btn__arrow" src="assets/images/shapes/arrow.png" alt="tolak">
                                </div>
                                <div class="about-one__video-btn">
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="fa fa-play"></i>
                                        <span class="video-popup__btn-ripple"></span>
                                    </a>
                                </div>

                            </div><!-- /.about__content
                        </div><!-- /.col-xl-6
                        <div class="col-xl-6">
                            <div class="tolak-stretch-element-inside-column">
                                <div class="about-one__image wow slideInRight">
                                    <img src="assets/images/resources/about-1-1.jpg" alt="tolak">
                                    <div class="about-one__image__text">
                                        <span></span>36+ expressions challenge
                                    </div>
                                </div><!-- /.about__image
                            </div><!-- /.tolak-stretch-element-inside-column
                        </div><!-- /.col-lg-6
                    </div><!-- /.row
                </div><!-- /.container
            </section><!-- /.about-one
            <!-- service-section -->
            {{-- sobre --}}
			<section class="about-one" id="sobrenos">

				<div class="about-one__bg" style="background-image: url({{ $about_now[0]['about-now-1-bg-img-path'] }});">
				</div>
				<div class="about-one__shape" style="background-image: url({{ $about_now[0]['about-now-2-img-path'] }});">
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
								<div class="clearfix">

								</div>
								<a type="button" href="/sobre" class="btn btn-primary about-one__content__text" style="max-width: 200px;">
									SAIBA MAIS
								</a>
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
			{{-- /sobre --}}<!-- /.about-one -->
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
										<img src="assets/images/produtos_ecologicos_seguros.png" alt="Produtos ecologicos seguros">
									</div>
									<h4 class="why-choose-two__item__title">{{ $choose_us[0]['choose-us-h4-1'] }}</h4>
									<a href="team.html" class="why-choose-two__item__rm"><span class="icon-right-arrow"></span></a>
								</div><!-- why-choose-two__item -->
								<div class="why-choose-two__item why-choose-two__item--reverse wow fadeInUp rounded-lg"
									data-wow-delay="500ms">
									<div class="why-choose-two__item__icon rounded-lg">
										<img src="assets/images/metodos_preventivos.png" alt="metodos preventivos">
									</div>
									<h4 class="why-choose-two__item__title">{{ $choose_us[0]['choose-us-h4-2'] }}</h4>
									<a href="services.html" class="why-choose-two__item__rm"><span class="icon-right-arrow"></span></a>
								</div><!-- why-choose-two__item -->
								<div class="why-choose-two__item wow fadeInUp rounded-lg" data-wow-delay="200ms">
									<div class="why-choose-two__item__icon rounded-lg">
										<img src="assets/images/compromisso_meio_ambiente.png" alt="compromisso com o meio ambiente">
									</div>
									<h4 class="why-choose-two__item__title">{{ $choose_us[0]['choose-us-h4-3'] }}</h4>
									<a href="team.html" class="why-choose-two__item__rm"><span class="icon-right-arrow"></span></a>
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
            <section>
                <div class="container">
					<div class="sec-title-two text-center">
						<h6 class="sec-title-two__tagline text-titles"><span
								class="sec-title__tagline__left"></span><i><b>{{ $testimonial_say[0]['testimonial-say-p-strong'] }}</b></i><span
								class="sec-title__tagline__right"></span></h6>
						<!-- /.sec-title-two__tagline -->
						<h3 class="sec-title-two__title"><b>{{ $testimonial_say[0]['testimonial-say-h2'] }}</b></h3>
						<!-- /.sec-title-two__title -->
					</div>
					<div class="testimonials-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme wow fadeInUp animated" data-wow-delay="200ms" style="margin-bottom: 40px; visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;" data-owl-options='{
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
					"1200": {
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
									<path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z"></path>
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
									data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }' style="background-color: #002255;">
									<h3 class="funfact-one__item__count">+<span class="count-text" data-stop="{{ $collapse[0]['collapse-h3-1'] }}"
											data-speed="1500"></span></h3>
									<!-- /.funfact-one__number -->
									<p class="funfact-one__item__text">{{ $collapse[0]['collapse-p-1'] }}</p>
									<!-- /.funfact-one__title -->
								</div><!-- /.funfact-one__item -->
								<div class="funfact-one__item funfact-one__item--two count-box tolak-tilt"
									data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }' style="background-color: #002255;">
									<h3 class="funfact-one__item__count"><span class="count-text" data-stop="{{ $collapse[0]['collapse-h3-2'] }}"
											data-speed="1500"></span></h3>
									<!-- /.funfact-one__number -->
									<p class="funfact-one__item__text">{{ $collapse[0]['collapse-p-2'] }}</p>
									<!-- /.funfact-one__title -->
								</div><!-- /.funfact-one__item -->
								<div class="funfact-one__item funfact-one__item--three count-box tolak-tilt"
									data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }' style="background-color: #002255;">
									<h3 class="funfact-one__item__count"><span class="count-text" data-stop="{{ $collapse[0]['collapse-h3-3'] }}"
											data-speed="1500"></span></h3>
									<!-- /.funfact-one__number -->
									<p class="funfact-one__item__text">{{ $collapse[0]['collapse-p-3'] }}</p>
									<!-- /.funfact-one__title -->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="funfact-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
								<div class="accrodion active">
									<div class="accrodion-title" id="accordion-1">
										<h4 id="accordion-icon-1">
											<i class="fa fa-check-circle"></i>
											{{ $collapse[0]['collapse-h4-1'] }}
											<span class="accrodion-title__icon" style="color: #002255"></span><!-- /.accrodion-title__icon -->
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
								</div><!-- /.accordian-item -->
							</div>
						</div><!-- /.col-lg-6 -->
					</div>
				</div><!-- /.container -->
			</section><!-- /.funfact-one -->
            <!-- CTA Start -->
            <section class="cta-two  mt-12">
                <div class="cta-two__shape" style="background-image: url({{ $call_now[0]['call-now-bg-image-1-path'] }});"></div>
                <div class="container">
                    <div class="cta-two__bg" style="background-image: url({{ $call_now[0]['call-now-bg-image-2-path'] }});">
                        <div class="row">
                            <div class="col-lg-4 wow fadeInLeft" data-wow-delay="600ms">
                                <div class="cta-two__info" style="background-image: url({{ $call_now[0]['call-now-bg-image-3-path'] }});">
                                    <div class="cta-two__info__icon"><span class="icon-phone-call"></span></div>
                                    <h4 class="cta-two__info__title">{{ $call_now[0]['call-now-h4-1'] }}</h4>
                                    <p class="cta-two__info__text">
                                        <a href="tel:{{ $call_now[0]['call-now-p-a-1'] }}">{{ $call_now[0]['call-now-p-a-1'] }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cta-two__content">
                                    <h4 class="cta-two__content__title">{{ $call_now[0]['call-now-p-a-3'] }}<!-- <a href="tel:025461556695">{{ $call_now[0]['call-now-a-3'] }}!</a>--></h4>
                                    <p class="cta-two__content__text">{{ $call_now[0]['call-now-p'] }}<br/>{{ $call_now[0]['call-now-p-1'] }}</p>
<!--
                                    <a class="cta-two__content__rm" href="contact.html">{{ $call_now[0]['call-now-a-2'] }}<span class="fas fa-angle-double-right"></span></a> -->
                                </div>
                            </div>
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="cta-two__image">
                                    <img src="{{ $call_now[0]['call-now-bg-image-4-path'] }}" alt="tolak">
                                </div>
                                <a href="tel:025461556695" class="cta-two__call-text">{{ $call_now[0]['call-now-a-3'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta-four mt-5">
				<div class="container" style="margin-top:100px;">
					<div class="cta-four__bg" style="background-image: url({{ $video_contact[0]['watch-video-bg-img'] }});">
							<div class="cta-four__shape" style="background-image: url(assets/images/shapes/cta-4-border.png);"></div>
						<div class="row">
							<div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
								<div class="cta-four__content">
									{{-- <a class="video-popup" style="color: white;background-color:#ff6600;">
										<i class="icon-play-button"></i>
									</a> --}}
									<div class="sec-title-two text-left">
										<h6 class="sec-title-two__tagline"><span
												class="sec-title__tagline__left" style="color:#ff6600;"></span><i style="color:#ff6600;">{{ $video_contact[0]['watch-video-p-strong-1'] }}</i><span
												class="sec-title__tagline__right" style="color:#ff6600;"></span>
										</h6><!-- /.sec-title-two__tagline -->
										<h3 class="sec-title-two__title">{{ $video_contact[0]['watch-video-h2'] }}</h3>
										<!-- /.sec-title-two__title -->
									</div><!-- /.sec-title-two -->
									<p class="cta-four__content__text">
										{{ $video_contact[0]['watch-video-p-2'] }}<br />{{ $video_contact[0]['watch-video-p-2-1'] }}
									</p>
									<div class="cta-four__content__bar" style="background-color: #ff6600;"></div>
									<div class="cta-four__content__info">
										<div class="cta-four__content__info__icon" style="color:#002255;"><i class="icofont-speech-comments"></i>
										</div>
										<p class="cta-four__content__info__text">
											{{ $video_contact[0]['watch-video-p-3'] }}<br />{{ $video_contact[0]['watch-video-p-3-1'] }}
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

            <!-- <section>
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12 services-background-image p-5" style="background-image: url({{ $video_contact[0]['watch-video-bg-img'] }});">
                            <p class="text-primary mt-5 ml-5"><strong> << {{ $video_contact[0]['watch-video-p-strong-1'] }} >></strong></p>
                            <h2 class="text-white h2 mt-5">{{ $video_contact[0]['watch-video-h2'] }} </h2>
                            <p class="text-white mt-5">{{ $video_contact[0]['watch-video-p-2'] }}<br/>{{ $video_contact[0]['watch-video-p-2-1'] }}</p>
                            <div class="progress mt-5 w-25">
                              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                              <div class="p-2 bd-highlight">
                                  <i class="fa fa-comments mt-5" aria-hidden="true" style="font-size: 4rem;"></i>
                              </div>
                              <div class="p-2 bd-highlight">
                                <p class="text-white mt-5">{{ $video_contact[0]['watch-video-p-3'] }}<br/>{{ $video_contact[0]['watch-video-p-3-1'] }}</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section> -->
        <section>
            <div class="container mt-5 mb-5">
                <div class="row wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">
                    <div class="col-md-6 services-background-image w-100 h-75" style="background-image: url({{ $video_contact[0]['contact-us-bg-img'] }});border-radius:30px;">

                    </div>
                    <div class="col-md-6 pb-5 text-center apointement-box" style="z-index:10;">
                        <div class="contact-three__content">
                            <div class="sec-title-four text-center">

                                <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>CONTACT US<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                                <h3 class="sec-title-four__title">{{ $video_contact[0]['contact-us-h2-part-1'] }} </br>{{ $video_contact[0]['contact-us-h2-part-2'] }}</h3><!-- /.sec-title-four__title -->
                            </div><!-- /.sec-title-four -->
                            <form class="contact-three__form form-one" method="POST" action="{{ route('FrontPage.store') }}">
                                @csrf
                                @method('POST')
                                <div class="form-one__group">
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
                                    <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="tolak-btn-two tolak-btn-two--home-six pull-left">
                                            <span class="tolak-btn-two__left-star"></span>
                                            <span>Send Request<i class="tolak-icons-two-arrow-right-short"></i></span>
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
        {{-- <section class="blog-four">
            <div class="container mt-5 p-5">
                <div class="blog-four__wrapper">
                    <div class="sec-title-three text-center">

                        <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR Latest blog<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                        <h3 class="sec-title-three__title">The Best Solution News And Blog</h3><!-- /.sec-title-three__title -->
                    </div><!-- /.sec-title-three -->
                    <div class="blog-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav tolak-owl__carousel--with-shadow owl-carousel owl-theme" data-owl-options='{
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
                        <div class="item">
                            <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' id="blog-details-right">
                                <div class="blog-card-four__image">
                                    <img src="assets/images/blog/blog-4-1.png" alt="We Solution For This Consulting Blog">
                                    <img src="assets/images/blog/blog-4-1.png" alt="We Solution For This Consulting Blog">
                                    <div class="blog-card-four__date">
                                        <i class="icofont-calendar"></i>15 Nov 2023
                                    </div><!-- /.blog-card-four__date -->
                                    <a href="blog-details-right" class="blog-card-four__image__link"><span class="sr-only">We Solution For This Consulting Blog</span><!-- /.sr-only --></a>
                                </div><!-- /.blog-card-four__image -->
                                <div class="blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><i class="tolak-icons-two-user"></i>By: <a href="blog-list-right.html">Admin</a></li>
                                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                    </ul>
                                    <h3 class="blog-card-four__title"><a href="blog-details-right-1">We Solution For This Consulting Blog</a></h3><!-- /.blog-card-four__title -->
                                    <p class="blog-card-four__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-four__text -->
                                    <a class="blog-card-four__rm" href="blog-details-right.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card-four -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' id="blog-details-right-1" >
                                <div class="blog-card-four__image">
                                    <img src="assets/images/blog/blog-4-2.png" alt="Are you Looking For a Solution Related">
                                    <img src="assets/images/blog/blog-4-2.png" alt="Are you Looking For a Solution Related">
                                    <div class="blog-card-four__date">
                                        <i class="icofont-calendar"></i>20 Nov 2023
                                    </div><!-- /.blog-card-four__date -->
                                    <a href="blog-details-right-1" class="blog-card-four__image__link"><span class="sr-only">Are you Looking For a Solution Related</span><!-- /.sr-only --></a>
                                </div><!-- /.blog-card-four__image -->
                                <div class="blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><i class="tolak-icons-two-user"></i>By: <a href="blog-list-right.html">Admin</a></li>
                                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                    </ul>
                                    <h3 class="blog-card-four__title"><a href="blog-details-right.html">Are you Looking For a Solution Related</a></h3><!-- /.blog-card-four__title -->
                                    <p class="blog-card-four__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-four__text -->
                                    <a class="blog-card-four__rm" href="blog-details-right.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card-four -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="blog-card-four__image">
                                    <img src="assets/images/blog/blog-4-3.png" alt="This Specific IT Issue as Network Security">
                                    <img src="assets/images/blog/blog-4-3.png" alt="This Specific IT Issue as Network Security">
                                    <div class="blog-card-four__date">
                                        <i class="icofont-calendar"></i>25 Nov 2023
                                    </div><!-- /.blog-card-four__date -->
                                    <a href="blog-details-right.html" class="blog-card-four__image__link"><span class="sr-only">This Specific IT Issue as Network Security</span><!-- /.sr-only --></a>
                                </div><!-- /.blog-card-four__image -->
                                <div class="blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><i class="tolak-icons-two-user"></i>By: <a href="blog-list-right.html">Admin</a></li>
                                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                    </ul>
                                    <h3 class="blog-card-four__title"><a href="blog-details-right.html">This Specific IT Issue as Network Security</a></h3><!-- /.blog-card-four__title -->
                                    <p class="blog-card-four__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-four__text -->
                                    <a class="blog-card-four__rm" href="blog-details-right.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card-four -->
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.blog-two --> --}}



        <!-- footer -->
        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--about">
                            <a href="/" class="footer-widget__logo">
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
                                <img src="assets/images/footer-img.webp" alt="tolak">
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
                                <li><a href="services.html">Serviços</a></li>
                                <li><a href="blog-list-right.html">News</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>

        <script>
            $(document).ready(function(){
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
                //$("#myTabContent").css("border-top-right-radius", "30px");
                $("#contact-tab").click(function(){
                    $('#quote-tab').removeClass('bg-white');
                    $('#quote-tab').addClass('bg-light');
                    $('#contact-tab').addClass('bg-white');
                    //$('#contact-tab').addClass('bg-light');
                    $("#myTabContent").css("border-top-right-radius", "0px");
                    $("#myTabContent").css("border-top-left-radius", "30px");
                });
                $('#quote-tab').click(function(){
                    $('#contact-tab').removeClass('bg-white');
                    $('#contact-tab').addClass('bg-light');
                    $('#quote-tab').addClass('bg-white');
                    $('#quote-tab').addClass('bg-light');
                    $("#myTabContent").css("border-top-right-radius", "30px");
                    $("#myTabContent").css("border-top-left-radius", "0px");
                })

                $("#home").click(function(){
                    $('#company').removeClass('active-tab');
                    $('#company').addClass('border');
                    $('#home').removeClass('border');
                    $('#home').addClass('active-tab');
                    $('#customer_type').val('home');
                    $("#home").val("home");

                })
                $("#company").click(function(){
                    $('#home').removeClass('active-tab');
                    $('#home').addClass('border');
                    $('#company').removeClass('border');
                    $('#company').addClass('active-tab');
                    $('#customer_type').val('company');
                    $("#company").val("company");
                })




                $("#modal-contact-tab").click(function(){
                    $('#modal-quote-tab').removeClass('bg-white');
                    $('#modal-quote-tab').addClass('bg-light');
                    $('#modal-contact-tab').addClass('bg-white');
                    //$('#contact-tab').addClass('bg-light');
                    $("#myTabContent").css("border-top-right-radius", "0px");
                    $("#myTabContent").css("border-top-left-radius", "30px");
                });
                $('#modal-quote-tab').click(function(){
                    $('#modal-contact-tab').removeClass('bg-white');
                    $('#modal-contact-tab').addClass('bg-light');
                    $('#modal-quote-tab').addClass('bg-white');
                    $('#modal-quote-tab').addClass('bg-light');
                    $("#myTabContent").css("border-top-right-radius", "30px");
                    $("#myTabContent").css("border-top-left-radius", "0px");
                })

                $("#modal-home").click(function(){
                    $('#modal-company').removeClass('active-tab');
                    $('#modal-company').addClass('border');
                    $('#modal-home').removeClass('border');
                    $('#modal-home').addClass('active-tab');
                    $('#modal-customer_type').val('home');
                    $("#modal-home").val("home");

                })
                $("#modal-company").click(function(){
                    $('#modal-home').removeClass('active-tab');
                    $('#modal-home').addClass('border');
                    $('#modal-company').removeClass('border');
                    $('#modal-company').addClass('active-tab');
                    $('#modal-customer_type').val('company');
                    $("#modal-company").val("company");
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
    </body>
</html>
