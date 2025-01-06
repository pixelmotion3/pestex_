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
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/tolak.css') }}" />

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
            fill: black; /* Adjust color as needed */
        }

        .input-with-inline-icon {
            padding-left: 10px; /* Adjust to make space for the icon */
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

        .theme-btn-three1{
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

        .theme-btn-three1:hover{
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

        .active{
            color: white !important;
        }

        svg{
            transform: scale(0.7)
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

<body class="custom-cursor" style="overflow-x: hidden;">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- Modal -->
    <div class="modal fade rounded-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <button class="nav-link active w-100 text-muted p-4" id="modal-quote-tab"
                                data-bs-toggle="tab"
                                style="border-top-left-radius:30px;border-top-right-radius:30px; border:none; background-color: transparent;"
                                data-bs-target="#modal-quote" type="button" role="tab" aria-controls="modal-quote"
                                aria-selected="true">
                                <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-1'] }}</strong>
                            </button>
                        </li>
                        <li class="nav-item w-50 rounded-top-lg " role="presentation">
                            <button class="nav-link w-100 text-muted p-4" id="modal-contact-tab" data-bs-toggle="tab"
                                style="background-color: transparent;border:none;border-top-left-radius:35px;border-top-right-radius:35px;"
                                data-bs-target="#modal-contact" type="button" role="tab"
                                aria-controls="modal-contact" aria-selected="false">
                                <strong class="text-body">{{ $main_screen[0]['quote-form-tab-title-2'] }}</strong>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-2 bg-white" id="myTabModalContent" style="border-radius:30px;">
                        <div class="tab-pane fade show active" id="modal-quote" role="tabpanel"
                            aria-labelledby="modal-quote-tab">
                            <div class="container bg-white">
                                <form method="POST" action="{{ route('FrontPage.QuoteForm') }}">
                                    @csrf
                                    @method('post')
                                    <div class="row text-center" style="border-radius:50%;">
                                        <div class="col mt-3 border" style="margin-left:30px;margin-right:15px;"
                                            id="modal-home">
                                            <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 63.2 64">
                                                <!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
                                                <path d="M31.6,16.2c.3,0,.6.1.8.3l26.1,20.6c.6.5.7,1.4.2,2-.4.6-1.4.7-2,.2l-25.2-19.9L6.3,39.3c-.6.4-1.5.4-1.9-.2-.4-.6-.4-1.5.2-2l9.8-7.7v-11.8c0-.8.6-1.4,1.4-1.4h5.5c.8,0,1.4.6,1.4,1.4v5.3l8.1-6.4c.3-.2.6-.3.9-.3h0ZM19.9,19h-2.7v8.2l2.7-2.2v-6.1ZM48.7,34.7l2.7,2.2v21.9c0,.8-.6,1.4-1.4,1.4h-11.7c-.8,0-1.4-.6-1.4-1.4v-6.9c0-3.1-2.4-5.5-5.5-5.5s-5.5,2.4-5.5,5.5v6.9c0,.8-.6,1.4-1.4,1.4h-11.7c-.8,0-1.4-.6-1.4-1.4v-21.9l2.7-2.2v22.7h8.9v-5.5c0-4.5,3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2v5.5h8.9v-22.7h0Z"/>
                                            </svg>
                                            <p>Casa</p>
                                        </div>
                                        <div class="col border mt-3" style="margin-right:30px;margin-left:15px;"
                                            id="modal-company">
                                            <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 63.2 64">
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
                                                  <path class="st0" d="M26.4,38.2h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z"/>
                                                  <path class="st0" d="M26.4,30.6h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z"/>
                                                  <path class="st0" d="M26.4,23h10.4c.6,0,1-.4,1-1s-.4-1-1-1h-10.4c-.6,0-1,.4-1,1s.4,1,1,1Z"/>
                                                  <path class="st0" d="M59.9,57.7h-4.2v-20.4c0-.6-.4-1-1-1h-9.4V15.8c0-.4-.2-.8-.6-.9L19.3,4.4c-.3-.1-.7,0-.9,0-.3.2-.4.5-.4.8v17.9h-9.4c-.6,0-1,.4-1,1v33.4h-3.4c-.6,0-1,.4-1,1s.4,1,1,1h55.7c.6,0,1-.4,1-1s-.4-1-1-1ZM9.5,25.3h8.4v32.4h-8.4V25.3ZM19.9,6.8l23.3,9.6v41.2h-5.5v-9.7c0-.6-.4-1-1-1h-10.4c-.6,0-1,.4-1,1v9.7h-5.4V6.8ZM27.4,57.7v-8.7h8.4v8.7h-8.4ZM45.2,57.7v-19.4h8.4v19.4h-8.4Z"/>
                                                </g>
                                              </svg>
                                            <p>Empresa</p>
                                        </div>
                                        <input class="input-field rounded" type="hidden" name="customer_type"
                                            id="modal-customer_type" value="home" required>

                                        <div class="input-container mt-3" style="width: 92%;" required>
                                            <select name="products">
                                                <option value="ratos" selected class="text-white">Ratos</option>
                                                <option value="baratas" class="text-muted">Baratas</option>
                                                <option value="percevejos" class="text-muted">Percevejos</option>
                                            </select>
                                        </div>

                                        <div class="input-container mt-3" style="width: 92%;">
                                            <i class="far fa-map-marker-alt icon"></i>
                                            <input class="input-field rounded" type="text"
                                                placeholder="Localidade" name="locality" required>
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
                                            <i class="icon">
                                                <img src="assets/images/Telefone.png" style="max-height: 25px; max-width:25px;"/>
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
											<input class="form-check-input" type="checkbox"
												name="confirmed" id="flexCheckDefault" required>
											<label class="form-check-label text-left" for="flexCheckDefault" style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
												Aceito os <a href="/home/termos-servico" target="_blank" style="color:#3d72fc;">Termos de Utilizaçao</a>
											</label>
											@error('confirmed')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>

										<div class="form-check col-md-12">
											<input class="form-check-input"
												type="checkbox" id="flexCheckDefault" required>
											<label class="form-check-label text-left" for="flexCheckDefault" style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
												Tenho conhecimento e aceito a <a href="/home/politica-privacidade"  target="_blank" style="color:#3d72fc;">Politica de Privacidade</a>
											</label>
										</div>
                                        <div class="col-md-12 ml-4 mb-5" style="max-width: 92%">
                                            <button class="btn btn-dark mt-2" type="submit" name="quote_form">Obter
                                                Orçamento Grátis</button>
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
                                    <form method="post" action="{{ route('FrontPage.ContactForm') }}">
                                        @csrf
                                        @method('POST')
                                        <div class="row text-center">
                                            <h2 class="h2 mt-5 text-muted">{{ $main_screen[0]['quote-form-tab-2-h2'] }}</h2>
                                            <p class="mb-5 text-muted">{{ $main_screen[0]['quote-form-tab-2-p'] }}</p>
                                            <div class="input-container mt-3" style="width: 92%;">
                                                <i class="far fa-user icon"></i>
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
                                                    <img src="assets/images/Telefone.png" style="max-height: 25px; max-width:25px;"/>
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
												<input class="form-check-input" type="checkbox"
													name="confirmed" id="flexCheckDefault" required>
												<label class="form-check-label text-left" for="flexCheckDefault" style="min-width: 280px;max-width:280px; color:grey;font-size:12px;">
													Aceito os <a href="/home/termos-servico" target="_blank" style="color:#3d72fc;">Termos de Utilizaçao</a>
												</label>
												@error('confirmed')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>

											<div class="form-check col-md-12">
												<input class="form-check-input"
													type="checkbox" id="flexCheckDefault" required>
												<label class="form-check-label text-left" for="flexCheckDefault" style="min-width: 280px;max-width:280px;color:grey;font-size:12px;">
													Tenho conhecimento e aceito a <a href="/home/politica-privacidade"  target="_blank" style="color:#3d72fc;">Politica de Privacidade</a>
												</label>
											</div>
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
						<a href="/home">
							<img src="../assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
						</a>

					</div><!-- /.main-header__logo -->
					<nav class="main-header__nav main-menu">
						<ul class="main-menu__list">
							<li class="megamenu"><a href="/home" class="font-semibold">Home</a></li>
							<li class="scrollToLink"><a href="/sobre" class="font-semibold">Sobre</a></li>
							<li class="scrollToLink"><a href="/servicos" class="font-semibold">Serviços</a></li>
							<li class="scrollToLink"><a href="/sustentabilidade" class="font-semibold">Sustentabilidade</a></li>
							<li class="scrollToLink"><a href="/equipamentos" class="font-semibold">Equipamentos</a></li>
							<li class="scrollToLink contactenos-link2"><a href="/contactos" class="font-semibold">Contactos</a></li>
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
		<!-- privacy policy Start -->
		<section class="termos-one space_between" id="#">
			<div class="container">
				<div class="text-center">
					<h6 class="sec-title__tagline text-titles mt-5"></h6><!-- /.sec-title__tagline -->
					<h3 class="sec-title__title mt-5"><b>{{ $privacy_policy[0]['privacy-policy-title'] }}</b></h3>
					<!-- /.sec-title__title -->
				</div><!-- /.sec-title -->
				<div class="row gutter-y-30 mt-5">
					<p class="feature-one__item__text">{!! $privacy_policy[0]['privacy-policy-p-text-1'] !!}</p>
				</div>
			</div>
		</section>
		<!-- privacy policy End -->

		<!-- footer -->
		<section class="mail-section">
            <div class="container">
                <div class="mail-section__wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-4"></div>
                        <div class="col-md-5 col-lg-3">
                            <div class="mail-section__content">
                                <h3 class="mail-section__content__title">Subscreva a Newsletter</h3>
                                <p class="mail-section__content__text">Esteja a par das nossas novidades</p>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-5">
                            <form  method="POST" action="{{ route('NewsLatterPage.NewsletterForm') }}">
								@csrf
								@method('post')
                                <input type="text" name="email" placeholder="Insira o seu email">
                                <button type="submit" class="tolak-btn">
                                    <b>Subscrever</b><span></span>
                                    <span class="sr-only">Subscrever</span><!-- /.sr-only -->
                                </button>
                            </form><!-- /.footer-widget__newsletter mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<footer class="main-footer background-black">
            {{-- <div class="main-footer__bg background-black" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div> --}}
			<div class="main-footer__bg background-black" style=""></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-shape-1-orange.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="assets/images/logo-white.png" width="184" alt="Tolak HTML Template">
                            </a>
                            <ul class="footer-widget__info">
                                <li><span class="icofont-location-pin"></span>Rua de Entremuros 54, Fração BB, São Julião do Tojal, 2660-533</li>
                                <li><span class="icofont-email"></span><a href="mailto:geral@sospragas.pt">geral@sospragas.pt</a></li>
                                <li><span class="icofont-phone"></span><a href="tel:219747353">219 747 353</a></li>
                            </ul>
                            <div class="footer-widget__social">
                                <a href="https://facebook.com">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                {{-- <a href="https://pinterest.com">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://twitter.com">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a> --}}
                                <a href="https://instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div>
                            <div class="footer-widget__image">
                                <img src="../assets/images/footer-img.webp" alt="tolak">
                            </div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--posts">
                            <h2 class="footer-widget__title">SOS Pragas</h2><!-- /.footer-widget__title -->
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
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">SOS Pragas</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="/home">Início</a></li>
                                <li><a href="/sobre">Sobre Nós</a></li>
                                <li><a href="/servicos">Serviços</a></li>
                                <li><a href="/equipamentos">Equipamento</a></li>
                                <li><a href="/sustentabilidade">Sustentabilidade</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget footer-widget--links footer-widget--last">
                            <h2 class="footer-widget__title">Links Úteis</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="/contactos" target="_blank">Contactos</a></li>
                                <li><a href="/home/termos-servico" target="_blank">Termos de Serviço</a></li>
                                <li><a href="/home/politica-privacidade" target="_blank">Política de Privacidade</a></li>
                                <li><a href="https://www.livroreclamacoes.pt/Inicio/ " target="_blank">Livro de Reclamações</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="main-footer__copyright">
                                Copyright SOSpragas <span class="dynamic-year"></span> &copy; Todos os direitos reservados.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="main-footer__copyright text-right">
                                <a href="https://pixelinmotion.pt" style="color:#ff6600;" target="_blank">Desenvolvido por Pixel in Motion</a>
                            </p>
                        </div>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->
	</div>
	<div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155" alt=""></a>
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

            $("#home").click(function() {
                $('#company').removeClass('active-tab');
                $('#company').addClass('border');
                $('#home').removeClass('border');
                $('#home').addClass('active-tab');
                $('#customer_type').val('home');
                $("#home").val("home");

            })
            $("#company").click(function() {
                $('#home').removeClass('active-tab');
                $('#home').addClass('border');
                $('#company').removeClass('border');
                $('#company').addClass('active-tab');
                $('#customer_type').val('company');
                $("#company").val("company");
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
                $('#modal-customer_type').val('home');
                $("#modal-home").val("home");

            })
            $("#modal-company").click(function() {
                $('#modal-home').removeClass('active-tab');
                $('#modal-home').addClass('border');
                $('#modal-company').removeClass('border');
                $('#modal-company').addClass('active-tab');
                $('#modal-customer_type').val('company');
                $("#modal-company").val("company");
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
