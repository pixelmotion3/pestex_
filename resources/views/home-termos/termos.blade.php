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
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16760451034"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16760451034'); </script>

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
												Aceito os <a href="/termos-servico" target="_blank" style="color:#3d72fc;">Termos de Utilização</a>
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
												Tenho conhecimento e aceito a <a href="/politica-privacidade"  target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
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
													Aceito os <a href="/termos-servico" target="_blank" style="color:#3d72fc;">Termos de Utilização</a>
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
													Tenho conhecimento e aceito a <a href="/politica-privacidade"  target="_blank" style="color:#3d72fc;">Política de Privacidade</a>
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
						<a href="/">
							<img src="..//assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
						</a>

					</div><!-- /.main-header__logo -->
					<nav class="main-header__nav main-menu">
						<ul class="main-menu__list">
							<li class="megamenu"><a href="/" class="font-semibold">Home</a></li>
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
		    <!-- Termos Start -->
			<section class="termos-one space_between" id="#">
				<div class="container">
					<div class="text-center">
						<h6 class="sec-title__tagline text-titles mt-5"></h6><!-- /.sec-title__tagline -->
						<h3 class="sec-title__title mt-5"><b>{{ $terms_service[0]['terms-title'] }}</b></h3>
						<!-- /.sec-title__title -->
					</div><!-- /.sec-title -->
					<div class="row gutter-y-30 mt-5">
						<p class="feature-one__item__text">{!!  $terms_service[0]['terms-p-text-1'] !!}</p>
					</div>
				</div>
			</section>
			<!-- Termos End -->

			<!-- footer -->
		<section class="mail-section">
            <div class="container">
                <div class="mail-section__wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-4"></div>
                        <div class="col-md-5 col-lg-3">
                            <div class="mail-section__content">
                                <h3 class="mail-section__content__title">Subscreva a Newsletter</h3>
                                <p class="mail-section__content__text">Fique a par de todas as novidades!</p>
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
								<img src="/assets/images/logo-white.png" width="184" alt="Tolak HTML Template">
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
								<img src="assets/images/footer-img.webp" alt="tolak">
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
					<div class="col-md-6 col-lg-2">
						<div class="footer-widget footer-widget--links">
							<h2 class="footer-widget__title">SOS Pragas</h2><!-- /.footer-widget__title -->
							<ul class="list-unstyled footer-widget__links">
								<li><a href="/">Início</a></li>
								<li><a href="sobre">Sobre Nós</a></li>
								<li><a href="servicos">Serviços</a></li>
								{{-- <li><a href="equipamentos">Equipamento</a></li> --}}
								<li><a href="sustentabilidade">Sustentabilidade</a></li>
							</ul><!-- /.list-unstyled footer-widget__links -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6 col-lg-2" style="display: flex;align-items: center;justify-content: center;">
						<a href="https://www.zaask.pt/user/geral3663" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" width="656" height="256" style="max-width: 217px;" data-name="Layer 2" viewBox="0 0 43.28 45.13">
								<defs>
								  <style>
									.cls-1, .cls-2 {
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
									<path class="cls-2" d="M21.66,1.97c1.67,0,3.88,3.27,5.42,3.93,1.54.66,5.28-.9,6.69,0,1.41.9,1.22,4.92,2.07,6.37.85,1.44,4.9,2.34,5.42,3.93.52,1.59-2.07,4.69-2.07,6.37,0,1.67,2.59,4.77,2.07,6.37-.52,1.59-4.43,2.58-5.42,3.93-.98,1.35-.71,5.38-2.07,6.37-1.35.98-5.06-.37-6.69,0-1.63.37-3.74,3.93-5.42,3.93-1.67,0-3.82-3.42-5.42-3.93-1.59-.52-5.34.98-6.69,0-1.35-.98-1.08-5.01-2.07-6.37-.98-1.35-4.9-2.34-5.42-3.93-.52-1.59,2.23-4.7,2.07-6.37-.16-1.67-2.69-4.81-2.07-6.37.62-1.55,4.57-2.49,5.42-3.93.85-1.44.65-5.47,2.07-6.37,1.41-.9,5.16.66,6.69,0,1.54-.66,3.74-3.93,5.42-3.93Z"></path>
									<rect class="cls-4" x="3.67" y="18.58" width="35.93" height=".79"></rect>
									<rect class="cls-4" x="3.67" y="25.77" width="35.93" height=".79"></rect>
									<path class="cls-4" d="M21.64,6.69c7.11,0,13.14,4.69,15.16,11.14h1.64c-2.07-7.33-8.81-12.71-16.79-12.71S6.92,10.5,4.85,17.83h1.64c2.02-6.45,8.05-11.14,15.16-11.14ZM21.64,38.45c-7.09,0-13.11-4.67-15.14-11.1h-1.64c2.08,7.31,8.82,12.67,16.78,12.67s14.7-5.37,16.78-12.67h-1.64c-2.03,6.43-8.05,11.1-15.14,11.1Z"></path>
									<path class="cls-4" d="M14.36,27.35c1.56,2.37,4.24,3.93,7.28,3.93s5.72-1.57,7.28-3.93h-14.56ZM28.95,17.83c-1.56-2.39-4.25-3.97-7.31-3.97s-5.75,1.58-7.31,3.97h14.61Z"></path>
									<g>
									  <polygon class="cls-1" points="21.64 28.03 21.96 29.01 22.99 29.01 22.16 29.62 22.47 30.6 21.64 29.99 20.81 30.6 21.12 29.62 20.29 29.01 21.32 29.01 21.64 28.03"></polygon>
									  <polygon class="cls-1" points="18.59 28.03 18.77 28.6 19.37 28.6 18.88 28.95 19.07 29.51 18.59 29.16 18.1 29.51 18.29 28.95 17.81 28.6 18.4 28.6 18.59 28.03"></polygon>
									  <polygon class="cls-1" points="24.7 28.03 24.51 28.6 23.92 28.6 24.4 28.95 24.21 29.51 24.7 29.16 25.18 29.51 24.99 28.95 25.48 28.6 24.88 28.6 24.7 28.03"></polygon>
									</g>
									<g>
									  <polygon class="cls-1" points="21.64 14.6 21.96 15.58 22.99 15.58 22.16 16.18 22.47 17.16 21.64 16.56 20.81 17.16 21.12 16.18 20.29 15.58 21.32 15.58 21.64 14.6"></polygon>
									  <polygon class="cls-1" points="18.59 15.68 18.77 16.25 19.37 16.25 18.88 16.6 19.07 17.16 18.59 16.81 18.1 17.16 18.29 16.6 17.81 16.25 18.4 16.25 18.59 15.68"></polygon>
									  <polygon class="cls-1" points="24.7 15.68 24.51 16.25 23.92 16.25 24.4 16.6 24.21 17.16 24.7 16.81 25.18 17.16 24.99 16.6 25.48 16.25 24.88 16.25 24.7 15.68"></polygon>
									</g>
									<g>
									  <path class="cls-3" d="M10.48,16.02l.35-.53c.24-.37.57-.51.92-.28h0c.35.24.34.59.11.95l-.15.23.63.41-.2.31-1.66-1.09ZM11.64,16.01c.13-.2.11-.38-.08-.5h0c-.2-.14-.35-.07-.48.13l-.15.23.57.37.15-.23Z"></path>
									  <path class="cls-3" d="M11.58,14.44l.44-.49c.29-.32.63-.43.93-.16h0c.23.22.22.46.1.69l1.01.16-.27.3-.94-.15-.16.18.6.54-.25.27-1.47-1.33ZM12.71,14.56c.16-.18.17-.35.02-.49h0c-.17-.16-.32-.11-.48.07l-.2.22.47.42.2-.22Z"></path>
									  <path class="cls-3" d="M13.52,13.79v-.02c-.37-.46-.31-1.05.15-1.41.46-.36,1.04-.29,1.4.17v.02c.37.46.33,1.04-.15,1.41-.48.37-1.06.28-1.41-.17ZM14.79,12.79v-.02c-.26-.32-.63-.42-.94-.18s-.31.61-.05.94v.02c.28.34.66.4.94.18.29-.23.3-.6.04-.94Z"></path>
									  <path class="cls-3" d="M15,11.47l1.08-.59.14.26-.76.41.28.52.59-.32.14.25-.59.32.39.71-.32.18-.95-1.74Z"></path>
									  <path class="cls-3" d="M16.53,10.7l.34-.14.76,1.83-.34.14-.76-1.83Z"></path>
									  <path class="cls-3" d="M17.73,11.67l.34-.1c.08.19.2.32.52.23.21-.06.33-.22.28-.4-.05-.18-.16-.22-.48-.18-.47.07-.73,0-.83-.37-.09-.31.11-.62.51-.73.41-.12.71,0,.85.35l-.33.09c-.09-.19-.23-.24-.45-.18-.22.06-.3.2-.26.34.04.15.13.21.47.17.47-.07.73,0,.84.38.09.33-.11.67-.53.79-.52.15-.81-.05-.94-.4Z"></path>
									  <path class="cls-3" d="M19.42,11.2l.35-.04c.05.19.15.35.48.31.22-.03.36-.17.33-.35-.02-.18-.12-.24-.45-.25-.48,0-.72-.12-.77-.49-.04-.32.2-.6.61-.65.42-.05.7.11.79.48l-.34.04c-.06-.2-.19-.27-.42-.25-.22.03-.32.15-.31.3.02.16.1.23.44.24.47,0,.73.11.78.5.04.34-.21.64-.65.7-.54.07-.8-.17-.87-.54Z"></path>
									  <path class="cls-3" d="M21.3,9.65h.37s.03,1.98.03,1.98h-.37s-.03-1.98-.03-1.98Z"></path>
									  <path class="cls-3" d="M22.12,10.62v-.02c.07-.57.54-.95,1.12-.88.59.07.94.54.87,1.11v.02c-.07.57-.52.96-1.12.88-.6-.07-.94-.55-.87-1.12ZM23.72,10.81v-.02c.05-.4-.14-.73-.52-.78-.39-.05-.65.21-.7.63v.02c-.06.43.17.74.53.78.37.05.64-.21.69-.64Z"></path>
									  <path class="cls-3" d="M24.85,10.02l.42.14.36,1.62.44-1.37.32.1-.61,1.89-.36-.12-.38-1.72-.47,1.45-.32-.1.61-1.89Z"></path>
									  <path class="cls-3" d="M27.49,11.05l.43.23-.35,2.06-.34-.18.09-.51-.67-.36-.37.36-.31-.16,1.52-1.44ZM26.85,12.09l.52.27.18-.95-.69.67Z"></path>
									  <path class="cls-3" d="M28.93,11.89l.3.22-1.01,1.35.68.51-.18.24-.97-.73,1.19-1.59Z"></path>
									  <path class="cls-3" d="M30.85,13.48l.4.45c.46.52.38,1.03-.05,1.41l-.02.02c-.43.38-.96.4-1.42-.13l-.39-.45,1.49-1.31ZM29.97,15.04c.29.33.63.33.95.04h.02c.32-.3.39-.61.08-.96l-.14-.16-1.05.92.14.16Z"></path>
									  <path class="cls-3" d="M32.26,15.19l.66,1.05-.25.16-.46-.74-.46.29.37.59-.23.15-.37-.59-.49.31.49.78-.25.16-.69-1.09,1.68-1.06Z"></path>
									</g>
									<g>
									  <path class="cls-3" d="M12.24,27.91l.97,1.44-.34.23-.68-1.01-.63.43.55.81-.32.22-.55-.81-.67.45.72,1.07-.34.23-1.01-1.49,2.3-1.55Z"></path>
									  <path class="cls-3" d="M13.09,31.18l.32-1.55.42.4-.25,1.12,1.1-.32.39.36-1.51.41-.34,1.66-.43-.4.27-1.24-1.22.34-.38-.36,1.63-.43Z"></path>
									  <path class="cls-3" d="M14.46,32.5l.02-.03c.42-.72,1.21-.94,1.87-.55.55.32.82.84.55,1.44l-.45-.26c.13-.35.05-.62-.29-.82-.42-.24-.89-.07-1.2.46l-.02.03c-.31.54-.24,1.01.2,1.27.33.19.67.16.91-.15l.44.25c-.4.54-.98.59-1.55.26-.75-.44-.89-1.16-.47-1.9Z"></path>
									  <path class="cls-3" d="M17.74,32.66l1.66.5-.12.39-1.17-.35-.22.73.94.28-.11.37-.94-.28-.23.78,1.23.37-.12.39-1.72-.52.8-2.66Z"></path>
									  <path class="cls-3" d="M19.87,33.23l.51.05-.22,2.36,1.18.11-.04.41-1.69-.16.26-2.77Z"></path>
									  <path class="cls-3" d="M21.95,33.37l1.73-.18.04.41-1.21.12.08.76.97-.1.04.39-.97.1.08.81,1.28-.13.04.41-1.79.18-.28-2.76ZM22.57,32.58l.4-.04.47.48-.34.04-.31-.18-.27.24-.33.03.38-.57Z"></path>
									  <path class="cls-3" d="M24.12,33.12l.58-.2,1.76,1.51-.66-1.9.44-.15.91,2.62-.51.18-1.88-1.6.7,2.01-.44.15-.91-2.62Z"></path>
									  <path class="cls-3" d="M27.39,33.39l-.02-.03c-.47-.69-.31-1.5.33-1.93.53-.36,1.11-.37,1.53.14l-.43.29c-.25-.27-.53-.32-.86-.09-.41.27-.46.77-.11,1.28l.02.03c.35.52.8.66,1.23.37.32-.21.44-.53.26-.88l.42-.28c.3.6.1,1.14-.45,1.51-.72.49-1.43.3-1.91-.41Z"></path>
									  <path class="cls-3" d="M29,30.45l.37-.36,1.94,1.98-.37.36-1.94-1.98Z"></path>
									  <path class="cls-3" d="M30.25,29.07l.39-.55,2.79.86-.31.44-.69-.22-.61.86.43.57-.28.4-1.73-2.36ZM31.58,30.15l.47-.67-1.29-.41.81,1.08Z"></path>
									</g>
									<g>
									  <path class="cls-4" d="M7.55,23.97l2.27-2.27c.13-.15.21-.33.21-.53,0-.43-.35-.78-.78-.78h-2.14v.78c0,.15.06.3.16.41l.46.46.26-.26-.45-.45s-.06-.1-.06-.16v-.07h1.93s-2.25,2.26-2.25,2.26h0c-.13.15-.21.34-.21.54,0,.43.35.78.78.78h2.14v-.78c0-.15-.06-.3-.16-.41l-.46-.46-.26.26.45.45s.06.1.06.16v.06h-1.93ZM13.13,23.87v-1.19c0-.22-.01-.44-.09-.65-.18-.48-.65-.65-1.2-.65-.71,0-1.29.32-1.33,1.04h.74c.02-.3.23-.46.58-.46.44,0,.54.2.54.5v.2l-.94.07c-.61.04-1.08.39-1.08,1,0,.52.39,1,1.16,1,.46,0,.82-.22.97-.48.02.24.21.45.54.45.18,0,.25-.03.38-.09v-.57s-.05.01-.1.01c-.13,0-.18-.06-.18-.2ZM12.38,23.39c0,.47-.34.73-.82.73-.24,0-.46-.15-.46-.4,0-.26.23-.4.46-.42l.81-.06v.15ZM16.59,23.87v-1.19c0-.22-.01-.44-.09-.65-.18-.48-.65-.65-1.2-.65-.71,0-1.29.32-1.33,1.04h.74c.02-.3.23-.46.58-.46.44,0,.54.2.54.5v.2l-.94.07c-.61.04-1.08.39-1.08,1,0,.52.39,1,1.16,1,.46,0,.82-.22.97-.48.02.24.21.45.54.45.18,0,.25-.03.38-.09v-.57s-.05.01-.1.01c-.13,0-.18-.06-.18-.2ZM15.84,23.39c0,.47-.34.73-.82.73-.24,0-.46-.15-.46-.4,0-.26.23-.4.46-.42l.81-.06v.15ZM19.02,22.77c-.31-.05-.39-.06-.68-.09-.17-.02-.37-.09-.37-.32,0-.17.11-.28.25-.34.12-.05.22-.05.33-.05.16,0,.33.06.42.15.07.08.13.18.13.3h.73c0-.23-.11-.47-.28-.66-.23-.25-.62-.38-1-.38s-.74.12-.97.32c-.19.17-.33.39-.33.72,0,.41.3.76.73.85.28.06.6.08.89.12.2.03.32.15.32.34,0,.35-.39.41-.65.41-.22,0-.36-.04-.49-.14-.1-.08-.17-.23-.17-.38h-.72c0,.3.15.57.34.74.26.25.63.37,1.03.37.44,0,.84-.11,1.09-.37.17-.17.28-.39.28-.7,0-.5-.37-.82-.87-.9ZM22.17,22.73l1.14-1.24h-.97l-1.21,1.3v-2.4h-.77v4.3h.77v-.84l.51-.55.9,1.4h.89l-1.27-1.96Z"></path>
									  <g>
										<path class="cls-5" d="M24.56,24.32c0-.22.18-.41.42-.41s.42.18.42.41-.18.41-.42.41-.42-.18-.42-.41Z"></path>
										<path class="cls-5" d="M25.72,24.56l1.23-1.29c.32-.34.53-.64.53-.94,0-.28-.15-.45-.44-.45s-.48.17-.53.61h-.69c.04-.77.51-1.19,1.25-1.19s1.16.41,1.16,1.01c0,.44-.26.81-.65,1.18l-.63.62h1.3v.58h-2.52v-.12Z"></path>
										<path class="cls-5" d="M28.55,23.1v-.16c0-1.03.6-1.64,1.46-1.64s1.45.59,1.45,1.63v.15c0,1.02-.56,1.66-1.46,1.66s-1.45-.62-1.45-1.64ZM30.71,23.08v-.15c0-.67-.23-1.05-.7-1.05s-.71.36-.71,1.05v.16c0,.7.25,1.05.72,1.05s.69-.36.69-1.06Z"></path>
										<path class="cls-5" d="M31.45,24.56l1.23-1.29c.32-.34.53-.64.53-.94,0-.28-.15-.45-.44-.45s-.48.17-.53.61h-.69c.04-.77.51-1.19,1.25-1.19s1.16.41,1.16,1.01c0,.44-.26.81-.65,1.18l-.63.62h1.3v.58h-2.52v-.12Z"></path>
										<path class="cls-5" d="M35.84,24.02h-1.64v-.28l1.44-2.4h.93v2.14h.44v.54h-.44v.66h-.73v-.66ZM35.85,23.48v-1.57l-.9,1.57h.9Z"></path>
									  </g>
									</g>
								  </g>
								</g>
							  </svg>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="footer-widget footer-widget--links footer-widget--last">
							<h2 class="footer-widget__title">Links Úteis</h2><!-- /.footer-widget__title -->
							<ul class="list-unstyled footer-widget__links">
								<li><a href="contactos" target="_blank">Contactos</a></li>
								<li><a href="/termos-servico" target="_blank">Termos de Serviço</a></li>
								<li><a href="/politica-privacidade" target="_blank">Política de Privacidade</a></li>
								<li><a href="https://www.livroreclamacoes.pt/Inicio/ " target="_blank">Livro de Reclamações</a></li>
							</ul><!-- /.list-unstyled footer-widget__links -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
			<div class="main-footer__bottom">
				<div class="container">
					<div class="footer-developer">
						<div class="">
							<p class="main-footer__copyright">
								Copyright SOS Pragas <span class="dynamic-year"></span> &copy; Todos os direitos reservados.
							</p>
						</div>
						<div class="">
							<p class="main-footer__copyright">
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
                <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-dark.png" width="155" alt=""></a>
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
