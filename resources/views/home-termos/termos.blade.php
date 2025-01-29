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
							<svg xmlns="http://www.w3.org/2000/svg" width="125" height="157" viewBox="0 0 65 67" fill="none">
								<path d="M32.5215 3.34155C34.969 3.34155 38.1959 8.1352 40.4486 9.10123C42.7013 10.0673 48.1769 7.79019 50.247 9.10123C52.317 10.4123 52.0329 16.3059 53.275 18.4206C54.513 20.5313 60.4431 21.8505 61.2021 24.1803C61.9571 26.5102 58.1741 31.0481 58.1741 33.4997C58.1741 35.9473 61.9571 40.4893 61.2021 42.8191C60.4471 45.149 54.7159 46.598 53.275 48.5788C51.834 50.5596 52.2277 56.4573 50.247 57.8982C48.2662 59.3391 42.8393 57.3543 40.4486 57.8982C38.0579 58.4421 34.9731 63.6579 32.5215 63.6579C30.0739 63.6579 26.9241 58.6572 24.5943 57.8982C22.2644 57.1432 16.7767 59.3391 14.7959 57.8982C12.8151 56.4573 13.2089 50.5636 11.7679 48.5788C10.327 46.598 4.59977 45.149 3.84074 42.8191C3.08577 40.4893 7.1082 35.9392 6.86872 33.4997C6.62924 31.0603 2.93559 26.4574 3.84074 24.1803C4.74589 21.9032 10.5259 20.5354 11.7679 18.4206C13.0059 16.31 12.7258 10.4123 14.7959 9.10123C16.866 7.79019 22.3415 10.0673 24.5943 9.10123C26.8429 8.1352 30.0698 3.34155 32.5215 3.34155Z" fill="#0096D7"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M28.2831 9.86663C27.6048 10.4708 26.6964 11.2194 25.69 11.6517L25.6883 11.6524C24.4872 12.1675 23.1609 12.1565 22.2207 12.0942C21.3281 12.0351 20.3591 11.8892 19.5262 11.7637C19.421 11.7479 19.3179 11.7324 19.2175 11.7174C18.2438 11.5722 17.468 11.47 16.8373 11.4595C16.6136 11.4557 16.4566 11.4653 16.3526 11.4763C16.3185 11.5466 16.276 11.6438 16.2277 11.7747C16.0333 12.3017 15.8695 13.0237 15.7014 13.9546C15.6508 14.2349 15.5969 14.553 15.5405 14.8865C15.4317 15.5285 15.3133 16.2272 15.1903 16.8215C15.0059 17.7121 14.7215 18.8717 14.1622 19.8252L14.1614 19.8266C13.4954 20.9605 12.4123 21.7362 11.6143 22.2399C10.8521 22.721 9.9759 23.1751 9.22435 23.5646C9.13384 23.6115 9.04513 23.6575 8.95866 23.7024C8.08382 24.1573 7.39504 24.53 6.8773 24.892C6.69498 25.0195 6.57378 25.119 6.49594 25.1888C6.50971 25.2653 6.53239 25.3681 6.56988 25.5011C6.72215 26.0411 7.01392 26.7209 7.42517 27.5727C7.54875 27.8287 7.69184 28.117 7.84183 28.4193C8.13151 29.003 8.44689 29.6386 8.69709 30.1927C9.07171 31.0224 9.5231 32.128 9.63118 33.2288C9.76179 34.5594 9.31621 35.8417 8.95743 36.7138C8.62326 37.526 8.18331 38.3868 7.80535 39.1263C7.74717 39.2401 7.69046 39.3511 7.63583 39.4586C7.18742 40.3407 6.85317 41.0353 6.65925 41.6103C6.60949 41.7579 6.57813 41.872 6.55823 41.9567C6.62457 42.0172 6.7192 42.0969 6.8513 42.195C7.32934 42.5497 7.9914 42.9252 8.84462 43.3757C9.00989 43.4629 9.18491 43.5542 9.36612 43.6488C10.0386 43.9997 10.7962 44.3951 11.4562 44.791C12.25 45.2673 13.3006 45.9675 14.0126 46.9463L14.0142 46.9485C14.7257 47.9286 15.0675 49.1444 15.2754 50.0472C15.4484 50.7986 15.5904 51.6425 15.7164 52.3913C15.7501 52.592 15.7828 52.7858 15.8145 52.9692C15.9792 53.92 16.1314 54.6655 16.321 55.2296C16.3778 55.3987 16.4277 55.5192 16.4661 55.6018C16.5563 55.6128 16.6859 55.623 16.8637 55.6248C17.4585 55.6309 18.2146 55.5456 19.1697 55.4084C19.3551 55.3817 19.5509 55.3526 19.7537 55.3225C20.5037 55.2111 21.3486 55.0856 22.1147 55.0178C23.0367 54.9363 24.2985 54.885 25.45 55.2581L25.4542 55.2594C26.605 55.6344 27.5958 56.4172 28.2942 57.0252C28.8749 57.5308 29.4853 58.1294 30.0271 58.6607C30.173 58.8038 30.3138 58.9419 30.4479 59.0721C31.1401 59.7445 31.7017 60.2582 32.1867 60.6031C32.3214 60.6989 32.4268 60.7644 32.5048 60.8087C32.5796 60.7637 32.6793 60.6985 32.8058 60.6047C33.2921 60.2443 33.8493 59.7135 34.5487 59.0164C34.6374 58.9279 34.7291 58.8361 34.8233 58.7418C35.4065 58.1579 36.0837 57.4797 36.7463 56.9152C37.4632 56.3044 38.5382 55.4867 39.833 55.1921C40.9031 54.9486 42.0794 55.0198 42.9844 55.1097C43.6229 55.1732 44.3477 55.2742 45.0118 55.3667C45.3116 55.4085 45.5989 55.4485 45.8605 55.4826C46.7955 55.6045 47.5459 55.6734 48.1324 55.6556C48.3343 55.6495 48.4757 55.6337 48.5689 55.619C48.6083 55.5361 48.6612 55.4107 48.7221 55.2293C48.9117 54.6648 49.064 53.9189 49.2287 52.9678C49.2604 52.7846 49.293 52.591 49.3267 52.3906C49.4527 51.6414 49.5948 50.797 49.7679 50.0453C49.9757 49.143 50.3177 47.9264 51.0306 46.9463C51.7429 45.9672 52.7941 45.2669 53.588 44.7908C54.2478 44.3951 55.0054 43.9999 55.6778 43.6492C55.8594 43.5544 56.0348 43.4629 56.2004 43.3755C57.0539 42.9251 57.7158 42.5497 58.1933 42.1952C58.3358 42.0894 58.4346 42.005 58.5011 41.9432C58.4836 41.8536 58.4531 41.7265 58.3995 41.5557C58.2211 40.9874 57.9059 40.2941 57.4803 39.4279C57.398 39.2604 57.3102 39.0839 57.2194 38.9012C56.8814 38.2215 56.5006 37.4558 56.1993 36.7471C55.8372 35.8955 55.3987 34.7108 55.3987 33.5C55.3987 32.2887 55.8368 31.1039 56.1992 30.2514C56.5009 29.5416 56.8822 28.7751 57.2205 28.095C57.311 27.913 57.3984 27.7372 57.4805 27.5703C57.9062 26.7042 58.2212 26.0114 58.3996 25.4434C58.4487 25.2868 58.4785 25.167 58.4966 25.0792C58.4306 25.0222 58.3379 24.9481 58.2106 24.8577C57.7156 24.5062 57.0368 24.1404 56.1557 23.6903C56.0476 23.6351 55.9357 23.5783 55.8209 23.5199C55.0811 23.1441 54.2204 22.7068 53.4739 22.2471C52.6723 21.7534 51.5581 20.9787 50.8818 19.8266C50.8816 19.8261 50.8813 19.8257 50.881 19.8252C50.3209 18.8709 50.036 17.7115 49.8513 16.8202C49.7276 16.2233 49.609 15.5226 49.5001 14.8792C49.444 14.5477 49.3905 14.2315 49.3402 13.9525C49.1722 13.0216 49.0088 12.3001 48.8147 11.7736C48.7667 11.6433 48.7244 11.5464 48.6905 11.4762C48.5864 11.4653 48.4294 11.4557 48.2059 11.4595C47.5752 11.47 46.7994 11.5722 45.8257 11.7174C45.7253 11.7324 45.6222 11.7479 45.517 11.7637C44.6841 11.8892 43.7151 12.0351 42.8225 12.0942C41.8823 12.1565 40.556 12.1675 39.3549 11.6524C38.3472 11.2204 37.4378 10.4719 36.7586 9.86733C36.2796 9.44098 35.7528 8.9337 35.27 8.46876C35.0517 8.25859 34.8425 8.05708 34.6507 7.87559C33.9656 7.22745 33.3987 6.73045 32.9134 6.39989C32.7343 6.27789 32.605 6.20574 32.5208 6.1638C32.4364 6.20574 32.3066 6.278 32.1267 6.40043C31.6413 6.73087 31.0742 7.22774 30.3895 7.8756C30.1966 8.05809 29.9859 8.26102 29.7662 8.4727C29.2847 8.93641 28.7597 9.44207 28.2831 9.86663ZM29.0032 1.81148C29.8282 1.2499 31.0624 0.566284 32.5216 0.566284C33.9808 0.566284 35.2148 1.25085 36.0386 1.81202C36.9171 2.41046 37.7566 3.17224 38.4658 3.84327C38.7419 4.10445 38.9937 4.34721 39.2315 4.57637C39.6638 4.99315 40.0495 5.36495 40.4493 5.72075C41.0629 6.2669 41.3998 6.48435 41.5294 6.54467C41.5286 6.54421 41.5282 6.54389 41.5282 6.54369C41.5295 6.539 41.7715 6.60054 42.4555 6.55522C43.1015 6.51242 43.8271 6.40368 44.7021 6.27256C44.8018 6.25762 44.9035 6.24238 45.0072 6.22693C45.9427 6.08745 47.0648 5.92661 48.1133 5.9091C49.089 5.89282 50.5053 5.97963 51.7322 6.75668C53.0321 7.57997 53.6733 8.90453 54.0231 9.85323C54.3967 10.8666 54.6281 11.9965 54.8031 12.9672C54.8788 13.3865 54.9424 13.7649 55.0022 14.1198C55.0964 14.68 55.1809 15.1818 55.287 15.6938C55.4511 16.4859 55.5885 16.8607 55.6552 16.9909C55.661 16.9888 55.8205 17.1728 56.3847 17.5203C56.9218 17.8511 57.5529 18.1723 58.313 18.5593C58.4325 18.6201 58.5551 18.6825 58.681 18.7468C59.5321 19.1816 60.5554 19.7144 61.4245 20.3315C62.2293 20.903 63.3652 21.8595 63.8413 23.3209L63.8427 23.325C64.3039 24.7484 63.993 26.1597 63.6958 27.1064C63.3771 28.1212 62.888 29.1529 62.4624 30.019C62.3515 30.2446 62.2448 30.4592 62.1426 30.6648C61.8183 31.3175 61.5386 31.8805 61.308 32.423C61.1632 32.7635 61.0663 33.0324 61.0077 33.2413C60.9648 33.3942 60.9536 33.4759 60.9508 33.4998C60.9536 33.5236 60.9648 33.6049 61.0075 33.757C61.0662 33.9657 61.1631 34.2346 61.3079 34.5751C61.5383 35.117 61.8176 35.6793 62.1415 36.3311C62.2441 36.5377 62.3511 36.7532 62.4625 36.9798C62.8882 37.8463 63.3773 38.8783 63.6959 39.8934C63.993 40.8401 64.3039 42.2516 63.8427 43.675C63.3809 45.1001 62.2993 46.0606 61.5023 46.6523C60.6479 47.2866 59.6453 47.8342 58.7915 48.2848C58.5672 48.4032 58.353 48.5151 58.1478 48.6222C57.5035 48.9586 56.9476 49.2489 56.443 49.5515C56.1255 49.7419 55.8887 49.9025 55.7183 50.037C55.594 50.1352 55.5369 50.1946 55.5205 50.2123C55.5088 50.2333 55.47 50.3055 55.4153 50.4533C55.34 50.6565 55.2604 50.9308 55.1774 51.2912C55.0452 51.8655 54.9406 52.4855 54.8194 53.2043C54.7812 53.4307 54.7413 53.667 54.6985 53.9147C54.5338 54.8657 54.3231 55.9882 53.9844 56.9967C53.6684 57.9374 53.0903 59.2625 51.8799 60.143C50.6991 61.002 49.2979 61.1739 48.301 61.2042C47.2381 61.2365 46.111 61.1134 45.1429 60.9872C44.7663 60.9381 44.4201 60.8897 44.0933 60.844C43.4984 60.7608 42.9678 60.6866 42.4352 60.6336C41.6356 60.5541 41.2357 60.5737 41.088 60.6002C41.0882 60.6002 41.0882 60.6003 41.0883 60.6003C41.0903 60.6056 40.8625 60.7009 40.3463 61.1407C39.868 61.5481 39.3711 62.045 38.7741 62.6418C38.6748 62.7412 38.5727 62.8433 38.4674 62.9482C37.7903 63.623 36.9672 64.4302 36.1109 65.0647C35.3171 65.653 34.0568 66.4338 32.5216 66.4338C31.0247 66.4338 29.7779 65.7018 28.9695 65.1269C28.1026 64.5104 27.2723 63.7264 26.5799 63.0538C26.3986 62.8777 26.2266 62.7091 26.0617 62.5476C25.5421 62.0383 25.0936 61.5989 24.6494 61.2122C24.3701 60.9691 24.1441 60.7935 23.9633 60.6729C23.8345 60.5869 23.7605 60.5506 23.7365 60.5394C23.7106 60.5343 23.6296 60.5204 23.4752 60.5142C23.2582 60.5056 22.9723 60.5148 22.6035 60.5474C22.0175 60.5992 21.3974 60.6911 20.6788 60.7976C20.4496 60.8316 20.2104 60.867 19.959 60.9031C19.0034 61.0404 17.8705 61.1866 16.8064 61.1757C15.8138 61.1654 14.3745 61.0241 13.1633 60.143C11.9532 59.2627 11.375 57.9383 11.0589 56.9976C10.7201 55.9893 10.5094 54.8671 10.3448 53.9163C10.3018 53.6683 10.2619 53.4318 10.2237 53.2051C10.1025 52.4868 9.998 51.8671 9.86576 51.2928C9.78274 50.9322 9.70308 50.6575 9.62769 50.4538C9.57321 50.3066 9.53442 50.2337 9.52204 50.2115C9.50481 50.193 9.4476 50.1338 9.32474 50.0367C9.15436 49.9022 8.91774 49.7416 8.60041 49.5513C8.09568 49.2484 7.53957 48.958 6.89501 48.6213C6.6903 48.5144 6.47668 48.4028 6.25295 48.2847C5.39937 47.834 4.39725 47.2866 3.54293 46.6525C2.74581 46.0609 1.66528 45.1017 1.20186 43.6792L1.2005 43.675C0.72669 42.2128 1.08389 40.7714 1.39916 39.8365C1.73962 38.8269 2.25445 37.7947 2.68735 36.9431C2.75073 36.8184 2.81258 36.6971 2.87285 36.579C3.26114 35.8177 3.58347 35.1858 3.82382 34.6016C4.07561 33.9896 4.0969 33.7462 4.10288 33.7429C4.07995 33.5976 3.97027 33.2135 3.6378 32.4772C3.42283 32.0011 3.19668 31.5465 2.94427 31.0391C2.78352 30.7159 2.61211 30.3714 2.42615 29.9862C1.99719 29.0977 1.5203 28.0474 1.22711 27.0077C0.952637 26.0344 0.693138 24.5855 1.26164 23.1553C1.79884 21.8039 2.8967 20.9018 3.69616 20.3428C4.55556 19.7418 5.55911 19.2134 6.39767 18.7773C6.48397 18.7325 6.56872 18.6885 6.65196 18.6453C7.44538 18.2334 8.10155 17.8927 8.65128 17.5457C9.2225 17.1852 9.37977 16.9955 9.38373 16.9986C9.38379 16.9987 9.38382 16.9988 9.38381 16.9989C9.44862 16.8757 9.58753 16.5022 9.75446 15.696C9.86028 15.1849 9.94448 14.6848 10.0384 14.1267C10.0985 13.7702 10.1625 13.39 10.2387 12.9681C10.414 11.9969 10.6458 10.8668 11.0197 9.85322C11.3698 8.90457 12.0112 7.57989 13.311 6.75668C14.5379 5.97963 15.9542 5.89282 16.9299 5.9091C17.9784 5.92661 19.1005 6.08745 20.036 6.22693C20.1397 6.24238 20.2413 6.25761 20.341 6.27255C21.216 6.40368 21.9417 6.51242 22.5877 6.55522C23.2717 6.60054 23.5137 6.539 23.5149 6.54369C23.515 6.54384 23.5148 6.54404 23.5144 6.54432C23.6449 6.48271 23.9809 6.26474 24.5908 5.72145C24.9893 5.36652 25.3733 4.9963 25.8036 4.58137C26.0427 4.35082 26.2962 4.10647 26.5743 3.84326C27.2839 3.17196 28.1238 2.41004 29.0032 1.81148Z" fill="#0096D7"/>
								<path d="M58.7949 38.2048H6.19873V39.3535H58.7949V38.2048Z" fill="white"/>
								<path d="M58.7949 27.6586H6.19873V28.8073H58.7949V27.6586Z" fill="white"/>
								<path d="M32.4971 10.2511C42.9003 10.2511 51.7245 17.1189 54.6835 26.556H57.0783C54.0462 15.8322 44.1789 7.94971 32.4971 7.94971C20.8154 7.94971 10.9481 15.8322 7.91602 26.556H10.3108C13.2698 17.1189 22.098 10.2511 32.4971 10.2511ZM32.4971 56.7385C22.1183 56.7385 13.3104 49.8992 10.3311 40.4945H7.93222C10.9846 51.1859 20.8357 59.04 32.4971 59.04C44.1586 59.04 54.0097 51.1859 57.062 40.4945H54.6632C51.6879 49.9032 42.8759 56.7385 32.4971 56.7385Z" fill="white"/>
								<path d="M21.8423 40.4943C24.1275 43.9606 28.0485 46.2499 32.5012 46.2499C36.9539 46.2499 40.8749 43.9566 43.1601 40.4943H21.8423ZM43.1925 26.5558C40.9154 23.0569 36.9742 20.7393 32.4971 20.7393C28.0201 20.7393 24.0788 23.0569 21.8018 26.5558H43.1925Z" fill="white"/>
								<path d="M36.9702 41.4923L36.6982 42.3244H35.8296L36.5318 42.8358L36.2639 43.6639L36.9702 43.1524L37.6764 43.6639L37.4045 42.8358L38.1107 42.3244H37.2381L36.9702 41.4923Z" fill="#0096D7"/>
								<path d="M32.4972 41.4923L32.964 42.9292H34.4739L33.2522 43.8181L33.719 45.2509L32.4972 44.3661L31.2755 45.2509L31.7423 43.8181L30.5205 42.9292H32.0304L32.4972 41.4923Z" fill="#0096D7"/>
								<path d="M28.0282 41.4923L28.2961 42.3244H29.1688L28.4626 42.8358L28.7345 43.6639L28.0282 43.1524L27.322 43.6639L27.5899 42.8358L26.8877 42.3244H27.7563L28.0282 41.4923Z" fill="#0096D7"/>
								<path d="M29.8871 49.1039L30.638 49.1729L30.3133 52.623L32.0383 52.7854L31.9815 53.378L29.5015 53.1426L29.8871 49.1039Z" fill="#1A1A1A"/>
								<path d="M18.6889 41.2369L20.0974 43.3517L19.6022 43.6845L18.6118 42.1989L17.6863 42.8159L18.4819 44.0052L18.0111 44.3218L17.2155 43.1284L16.2292 43.786L17.2723 45.3527L16.7771 45.6856L15.3159 43.4937L18.6889 41.2369Z" fill="#1A1A1A"/>
								<path d="M19.923 46.0427L20.4019 43.7697L21.0189 44.3582L20.6495 45.998L22.265 45.5434L22.8292 46.0792L20.6089 46.6759L20.1015 49.095L19.4765 48.4984L19.8783 46.6921L18.0924 47.1833L17.5322 46.6515L19.923 46.0427Z" fill="#1A1A1A"/>
								<path d="M22.5978 50.7625C22.3218 50.6042 22.1026 50.4175 21.9403 50.2064C21.7779 49.9994 21.6683 49.7721 21.6115 49.5326C21.5547 49.2931 21.5547 49.0415 21.6074 48.7817C21.6602 48.5179 21.7658 48.25 21.9241 47.978L21.9484 47.9375C22.1026 47.6736 22.2853 47.4544 22.5004 47.284C22.7155 47.1135 22.9428 46.9958 23.1864 46.9268C23.4299 46.8578 23.6816 46.8415 23.9413 46.874C24.2011 46.9065 24.4528 46.9958 24.7004 47.1378C24.8993 47.2555 25.0738 47.3895 25.2199 47.5437C25.3661 47.698 25.4756 47.8644 25.5487 48.043C25.6217 48.2216 25.6583 48.4124 25.6502 48.6153C25.642 48.8182 25.5893 49.0293 25.4878 49.2444L24.8262 48.8588C24.9277 48.5991 24.948 48.3718 24.883 48.1769C24.8181 47.978 24.6598 47.8076 24.4041 47.6574C24.2498 47.5681 24.0915 47.5153 23.9332 47.5031C23.7709 47.4869 23.6166 47.5113 23.4664 47.5681C23.3162 47.6249 23.1701 47.7183 23.0281 47.8482C22.886 47.978 22.7602 48.1404 22.6465 48.3352L22.6222 48.3758C22.3908 48.7736 22.3015 49.1349 22.3502 49.4596C22.3989 49.7843 22.5897 50.0441 22.9144 50.2348C23.158 50.3769 23.3974 50.4337 23.6288 50.4053C23.8602 50.3769 24.0631 50.247 24.2458 50.0197L24.883 50.3931C24.7328 50.592 24.5705 50.7422 24.3919 50.8518C24.2133 50.9614 24.0266 51.0304 23.8358 51.0547C23.641 51.0832 23.4421 51.071 23.231 51.0223C23.02 50.9736 22.8089 50.8883 22.5978 50.7625Z" fill="#1A1A1A"/>
								<path d="M26.7457 48.2463L29.1771 48.9851L29.0025 49.5574L27.2937 49.0378L26.969 50.1013L28.3409 50.5194L28.1745 51.0633L26.8026 50.6452L26.4576 51.7817L28.2557 52.3297L28.0812 52.902L25.5605 52.1348L26.7457 48.2463Z" fill="#1A1A1A"/>
								<path d="M32.9521 49.3186L35.4809 49.0589L35.5418 49.6515L33.768 49.8341L33.8817 50.9422L35.3064 50.7961L35.3632 51.3603L33.9385 51.5064L34.0602 52.6876L35.9314 52.4928L35.9923 53.0854L33.3702 53.3573L32.9521 49.3186ZM33.8614 48.1618L34.4499 48.101L35.1399 48.7991L34.6407 48.8519L34.1902 48.584L33.7964 48.9371L33.3093 48.9858L33.8614 48.1618Z" fill="#1A1A1A"/>
								<path d="M36.1426 48.9486L36.995 48.6523L39.5806 50.8604L38.6105 48.0881L39.2599 47.8608L40.5993 51.6966L39.8606 51.9563L37.1046 49.6224L38.1315 52.5611L37.4821 52.7884L36.1426 48.9486Z" fill="#1A1A1A"/>
								<path d="M43.7447 49.9195C43.4809 50.0981 43.2211 50.2158 42.9614 50.2726C42.7016 50.3294 42.454 50.3294 42.2145 50.2767C41.975 50.2239 41.7477 50.1184 41.5326 49.956C41.3175 49.7936 41.1227 49.5826 40.9481 49.3228L40.9237 49.2863C40.7533 49.0306 40.6356 48.7708 40.5747 48.507C40.5138 48.2431 40.5056 47.9833 40.5503 47.7357C40.5949 47.4882 40.6883 47.2527 40.8304 47.0335C40.9725 46.8144 41.1592 46.6236 41.3946 46.4653C41.5854 46.3354 41.7802 46.238 41.9831 46.173C42.182 46.1081 42.3809 46.0797 42.5757 46.0919C42.7706 46.1 42.9573 46.1528 43.1359 46.2461C43.3145 46.3395 43.4809 46.4775 43.6352 46.6642L42.9979 47.0944C42.8112 46.8915 42.6123 46.7738 42.4053 46.7494C42.1983 46.721 41.975 46.79 41.7274 46.9564C41.5813 47.0579 41.4636 47.1756 41.3824 47.3136C41.3012 47.4516 41.2525 47.6018 41.2363 47.7642C41.2201 47.9265 41.2404 48.097 41.2972 48.2797C41.35 48.4623 41.4433 48.649 41.5691 48.8357L41.5935 48.8723C41.8492 49.2538 42.1374 49.4892 42.4499 49.5866C42.7625 49.6841 43.079 49.6232 43.3916 49.4121C43.627 49.2538 43.7812 49.063 43.8543 48.8438C43.9274 48.6247 43.899 48.3811 43.7731 48.1214L44.3861 47.7073C44.4997 47.9265 44.5647 48.1416 44.589 48.3487C44.6134 48.5557 44.5931 48.7546 44.5322 48.9413C44.4713 49.128 44.3779 49.3025 44.244 49.4689C44.1101 49.6353 43.9477 49.7815 43.7447 49.9195Z" fill="#1A1A1A"/>
								<path d="M43.3184 44.9909L43.8582 44.4551L46.7157 47.341L46.1759 47.8768L43.3184 44.9909Z" fill="#1A1A1A"/>
								<path d="M45.1411 42.958L45.7094 42.1503L49.8049 43.3883L49.3543 44.0296L48.3436 43.717L47.4506 44.9875L48.092 45.8277L47.682 46.4081L45.1411 42.958ZM47.1056 44.5248L47.7957 43.5425L45.9083 42.9458L47.1056 44.5248Z" fill="#1A1A1A"/>
								<path d="M21.2935 35.5948L24.7819 32.1064C24.9868 31.8844 25.1021 31.594 25.1021 31.2866C25.1021 30.6205 24.5599 30.0782 23.8938 30.0782H20.5975V31.2866C20.5975 31.5214 20.6871 31.7477 20.8451 31.9228L21.5539 32.6316L21.951 32.2345L21.255 31.5385C21.191 31.4702 21.1568 31.3805 21.1568 31.2866V31.1841H24.1286L20.6573 34.6597L20.6445 34.6768C20.4395 34.8989 20.3242 35.1892 20.3242 35.4966C20.3242 36.1627 20.8665 36.705 21.5326 36.705H24.8288V35.4966C24.8288 35.2618 24.7392 35.0355 24.5812 34.8604L23.8724 34.1516L23.4753 34.5487L24.1713 35.2447C24.2354 35.313 24.2695 35.4027 24.2695 35.4966V35.5948H21.2935ZM29.8886 35.4497V33.6222C29.8886 33.2891 29.8715 32.939 29.7476 32.6273C29.4616 31.8886 28.7443 31.6239 27.9031 31.6239C26.8058 31.6239 25.9262 32.1149 25.8579 33.2251H27.0022C27.0321 32.7725 27.3523 32.5248 27.9031 32.5248C28.5735 32.5248 28.7357 32.8365 28.7357 33.3019V33.6051L27.2882 33.7076C26.3489 33.7759 25.623 34.3139 25.623 35.249C25.623 36.0517 26.2293 36.7904 27.4035 36.7904C28.1038 36.7904 28.6717 36.4488 28.898 36.0517C28.9364 36.4189 29.2182 36.7434 29.7306 36.7434C30.0167 36.7434 30.1192 36.6964 30.3156 36.611V35.74C30.3156 35.74 30.2387 35.7571 30.1661 35.7571C29.9654 35.7614 29.8886 35.676 29.8886 35.4497ZM28.7357 34.711C28.7357 35.4411 28.2148 35.8382 27.4761 35.8382C27.1089 35.8382 26.7759 35.6034 26.7759 35.2234C26.7759 34.8263 27.126 34.6085 27.4847 34.5786L28.7357 34.4847V34.711ZM35.213 35.4497V33.6222C35.213 33.2891 35.1959 32.939 35.0721 32.6273C34.786 31.8886 34.0687 31.6239 33.2275 31.6239C32.1302 31.6239 31.2506 32.1149 31.1823 33.2251H32.3266C32.3565 32.7725 32.6767 32.5248 33.2275 32.5248C33.8979 32.5248 34.0601 32.8365 34.0601 33.3019V33.6051L32.6127 33.7076C31.6734 33.7759 30.9475 34.3139 30.9475 35.249C30.9475 36.0517 31.5538 36.7904 32.728 36.7904C33.4282 36.7904 33.9961 36.4488 34.2224 36.0517C34.2608 36.4189 34.5427 36.7434 35.055 36.7434C35.3411 36.7434 35.4436 36.6964 35.64 36.611V35.74C35.64 35.74 35.5631 35.7571 35.4906 35.7571C35.2856 35.7614 35.213 35.676 35.213 35.4497ZM34.0559 34.711C34.0559 35.4411 33.535 35.8382 32.7963 35.8382C32.4291 35.8382 32.096 35.6034 32.096 35.2234C32.096 34.8263 32.4462 34.6085 32.8048 34.5786L34.0559 34.4847V34.711ZM38.9619 33.7545C38.4794 33.6777 38.3556 33.6691 37.9115 33.6136C37.6468 33.5752 37.3436 33.4727 37.3436 33.1226C37.3436 32.8664 37.5144 32.6871 37.7237 32.6017C37.903 32.5248 38.0652 32.5248 38.236 32.5248C38.4837 32.5248 38.7399 32.6102 38.8808 32.7511C38.996 32.875 39.0814 33.0244 39.0814 33.2165H40.2087C40.2087 32.8579 40.0379 32.4864 39.7731 32.2046C39.4145 31.8161 38.8167 31.6282 38.2317 31.6282C37.6169 31.6282 37.096 31.8075 36.7373 32.1192C36.4427 32.3754 36.2335 32.7255 36.2335 33.2251C36.2335 33.8485 36.6861 34.3993 37.3607 34.5402C37.7963 34.6341 38.2873 34.664 38.7228 34.7281C39.0259 34.775 39.2138 34.9629 39.2138 35.249C39.2138 35.787 38.6075 35.8724 38.2104 35.8724C37.8688 35.8724 37.6511 35.804 37.4632 35.6546C37.3138 35.5308 37.1985 35.2959 37.1985 35.0782H36.0926C36.0926 35.5436 36.3274 35.9492 36.6135 36.2225C37.0191 36.611 37.5785 36.7904 38.2061 36.7904C38.8765 36.7904 39.4956 36.6196 39.8927 36.2225C40.1489 35.9663 40.3197 35.6162 40.3197 35.1422C40.3069 34.3694 39.739 33.8784 38.9619 33.7545ZM43.8081 33.682L45.5673 31.7776H44.0814L42.2155 33.7759V30.0782H41.0328V36.7007H42.2155V35.4027L43.0011 34.5487L44.3845 36.6964H45.7594L43.8081 33.682Z" fill="white"/>
								<path d="M36.9702 23.418L36.6982 24.246H35.8296L36.5318 24.7574L36.2639 25.5895L36.9702 25.074L37.6764 25.5895L37.4045 24.7574L38.1107 24.246H37.2381L36.9702 23.418Z" fill="#0096D7"/>
								<path d="M28.0282 23.418L28.2961 24.246H29.1688L28.4626 24.7574L28.7345 25.5895L28.0282 25.074L27.322 25.5895L27.5899 24.7574L26.8877 24.246H27.7563L28.0282 23.418Z" fill="#0096D7"/>
								<path d="M32.4972 21.8268L32.964 23.2637H34.4739L33.2522 24.1526L33.719 25.5894L32.4972 24.7005L31.2755 25.5894L31.7423 24.1526L30.5205 23.2637H32.0304L32.4972 21.8268Z" fill="#0096D7"/>
								<path d="M16.0381 24.1443L16.5373 23.3569C16.6226 23.2189 16.72 23.1052 16.8214 23.0119C16.9229 22.9185 17.0285 22.8536 17.1421 22.817C17.2558 22.7765 17.3735 22.7683 17.4952 22.7846C17.617 22.8008 17.7428 22.8495 17.8686 22.9307L17.8808 22.9388C18.0107 23.02 18.1081 23.1134 18.1731 23.2189C18.238 23.3244 18.2745 23.434 18.2867 23.5517C18.2989 23.6694 18.2827 23.7912 18.2421 23.9211C18.2015 24.051 18.1406 24.1809 18.0554 24.3107L17.8362 24.6517L18.7698 25.2443L18.4815 25.6989L16.0381 24.1443ZM17.7266 24.1119C17.824 23.9617 17.8605 23.8237 17.8402 23.6978C17.82 23.5761 17.7388 23.4705 17.6048 23.3812L17.5927 23.3731C17.4465 23.2798 17.3167 23.2554 17.203 23.296C17.0894 23.3366 16.9879 23.434 16.8945 23.5801L16.6834 23.913L17.5196 24.4447L17.7266 24.1119Z" fill="#1A1A1A"/>
								<path d="M17.6128 21.7895L18.2541 21.0589C18.3597 20.9412 18.4692 20.8397 18.5829 20.7626C18.6965 20.6855 18.8102 20.6327 18.9239 20.6084C19.0375 20.58 19.1552 20.584 19.2689 20.6124C19.3825 20.6449 19.4962 20.7058 19.6098 20.8073L19.622 20.8194C19.7073 20.8925 19.7722 20.9737 19.8128 21.0549C19.8574 21.136 19.8818 21.2213 19.8899 21.3065C19.898 21.3918 19.894 21.477 19.8737 21.5622C19.8534 21.6475 19.8209 21.7327 19.7803 21.8139L21.2619 22.029L20.8762 22.4674L19.4921 22.2644L19.2648 22.5242L20.1456 23.2995L19.7884 23.7054L17.6128 21.7895ZM19.2648 21.9438C19.5084 21.6678 19.5124 21.4283 19.2811 21.2253L19.2689 21.2132C19.1431 21.1036 19.0213 21.063 18.9117 21.0914C18.798 21.1198 18.6844 21.201 18.5708 21.3309L18.2825 21.6556L18.9767 22.2644L19.2648 21.9438Z" fill="#1A1A1A"/>
								<path d="M45.969 20.1774L46.5494 20.839C46.7159 21.0257 46.8336 21.2165 46.9066 21.4032C46.9797 21.5899 47.0081 21.7725 46.9959 21.9471C46.9837 22.1216 46.935 22.2921 46.8417 22.4545C46.7524 22.6168 46.6266 22.767 46.4683 22.905L46.4398 22.9294C46.2815 23.0674 46.1151 23.1729 45.9406 23.2419C45.7661 23.3109 45.5916 23.3434 45.413 23.3312C45.2344 23.319 45.0557 23.2703 44.8772 23.1729C44.6986 23.0795 44.524 22.9334 44.3576 22.7426L43.7812 22.0851L45.969 20.1774ZM44.6742 22.4545C44.8893 22.702 45.1166 22.8238 45.3521 22.8238C45.5875 22.8238 45.827 22.7183 46.0705 22.5072L46.0948 22.4869C46.2126 22.3854 46.3059 22.2759 46.3749 22.1703C46.4439 22.0607 46.4845 21.9511 46.4967 21.8334C46.5089 21.7157 46.4926 21.598 46.448 21.4762C46.4033 21.3545 46.3222 21.2286 46.2126 21.1028L46.0056 20.8674L44.4672 22.219L44.6742 22.4545Z" fill="#1A1A1A"/>
								<path d="M48.0431 22.6949L49.0091 24.2292L48.6479 24.4565L47.97 23.3769L47.2962 23.803L47.8402 24.6676L47.4951 24.8827L46.9512 24.0182L46.2328 24.4728L46.9512 25.6093L46.59 25.8366L45.5874 24.2414L48.0431 22.6949Z" fill="#1A1A1A"/>
								<path d="M22.516 21.0341C22.3415 21.1721 22.1628 21.2695 21.9761 21.3263C21.7894 21.3832 21.6027 21.3994 21.42 21.375C21.2374 21.3507 21.0629 21.2898 20.8965 21.1964C20.73 21.099 20.5799 20.9691 20.45 20.8068L20.4297 20.7824C20.2957 20.616 20.2024 20.4415 20.1456 20.2548C20.0887 20.068 20.0684 19.8813 20.0887 19.6987C20.109 19.516 20.1658 19.3374 20.2592 19.167C20.3525 18.9965 20.4825 18.8422 20.6529 18.7083C20.8234 18.5743 20.9979 18.4769 21.1846 18.4242C21.3713 18.3714 21.554 18.3511 21.7326 18.3755C21.9152 18.3958 22.0898 18.4526 22.2562 18.55C22.4226 18.6474 22.5728 18.7732 22.7067 18.9437L22.7271 18.9681C22.861 19.1304 22.9543 19.309 23.0152 19.4917C23.0761 19.6784 23.0964 19.861 23.0802 20.0437C23.064 20.2264 23.0071 20.4049 22.9138 20.5754C22.8204 20.7418 22.6865 20.8961 22.516 21.0341ZM22.2521 20.6891C22.3617 20.6038 22.4388 20.5064 22.4957 20.3968C22.5484 20.2872 22.5769 20.1736 22.5809 20.0559C22.585 19.9382 22.5606 19.8123 22.5119 19.6865C22.4632 19.5607 22.3901 19.4349 22.2927 19.3131L22.2725 19.2887C22.1791 19.171 22.0776 19.0777 21.964 19.0046C21.8544 18.9315 21.7367 18.8828 21.619 18.8585C21.5013 18.8341 21.3835 18.8382 21.2618 18.8666C21.14 18.895 21.0263 18.9518 20.9167 19.0411C20.8031 19.1304 20.7219 19.2278 20.6651 19.3374C20.6082 19.447 20.5798 19.5607 20.5758 19.6824C20.5717 19.8042 20.5961 19.926 20.6407 20.0518C20.6895 20.1776 20.7625 20.2994 20.8599 20.4252L20.8802 20.4496C20.9817 20.5754 21.0872 20.6728 21.2049 20.7418C21.3186 20.8108 21.4404 20.8595 21.5581 20.8798C21.6758 20.9001 21.7976 20.8961 21.9153 20.8636C22.037 20.8311 22.1466 20.7703 22.2521 20.6891Z" fill="#1A1A1A"/>
								<path d="M22.6016 17.3606L24.1724 16.4879L24.3794 16.8613L23.2794 17.4742L23.7015 18.2333L24.5661 17.7503L24.769 18.1156L23.9045 18.5986L24.4849 19.6377L24.0141 19.9015L22.6016 17.3606Z" fill="#1A1A1A"/>
								<path d="M24.8379 16.1997L25.3371 15.9846L26.4737 18.6554L25.9744 18.8665L24.8379 16.1997Z" fill="#1A1A1A"/>
								<path d="M28.0079 18.1683C27.8172 18.2251 27.6507 18.2495 27.5006 18.2454C27.3504 18.2413 27.2205 18.2089 27.1068 18.1602C26.9932 18.1074 26.8998 18.0343 26.8186 17.9369C26.7375 17.8395 26.6766 17.7258 26.6279 17.596L27.1271 17.4498C27.1555 17.5188 27.1921 17.5797 27.2286 17.6366C27.2692 17.6934 27.3179 17.738 27.3788 17.7705C27.4397 17.803 27.5087 17.8233 27.5939 17.8273C27.6792 17.8314 27.7806 17.8151 27.8983 17.7827C28.0526 17.738 28.1703 17.6609 28.2433 17.5554C28.3164 17.4498 28.3367 17.3321 28.2961 17.2022C28.2758 17.1373 28.2514 17.0845 28.219 17.0439C28.1865 17.0034 28.1459 16.9749 28.0891 16.9546C28.0363 16.9344 27.9673 16.9262 27.8861 16.9222C27.805 16.9222 27.7035 16.9262 27.5858 16.9425C27.4113 16.9668 27.2611 16.979 27.1231 16.979C26.9891 16.979 26.8714 16.9587 26.774 16.9181C26.6766 16.8775 26.5913 16.8166 26.5223 16.7355C26.4533 16.6543 26.4006 16.5487 26.364 16.4189C26.3316 16.3052 26.3234 16.1916 26.3397 16.082C26.3559 15.9724 26.4006 15.8668 26.4614 15.7694C26.5264 15.672 26.6116 15.5868 26.7172 15.5137C26.8227 15.4366 26.9526 15.3798 27.0947 15.3351C27.395 15.2458 27.6507 15.2458 27.8658 15.327C28.0769 15.4122 28.2393 15.5827 28.3448 15.8425L27.8699 15.9805C27.8009 15.8384 27.7116 15.7491 27.6101 15.7085C27.5046 15.668 27.3747 15.672 27.2123 15.7207C27.054 15.7654 26.9445 15.8344 26.8836 15.9277C26.8227 16.0211 26.8105 16.1185 26.8389 16.2281C26.8552 16.2849 26.8754 16.3336 26.9039 16.3702C26.9323 16.4107 26.9688 16.4392 27.0216 16.4595C27.0744 16.4797 27.1393 16.4919 27.2205 16.4919C27.3016 16.4919 27.4072 16.4838 27.533 16.4676C27.7035 16.4432 27.8537 16.431 27.9876 16.431C28.1216 16.431 28.2393 16.4513 28.3448 16.4919C28.4463 16.5325 28.5356 16.5934 28.6046 16.6746C28.6736 16.7598 28.7304 16.8694 28.771 17.0074C28.8076 17.1292 28.8156 17.2509 28.7954 17.3687C28.7751 17.4864 28.7345 17.596 28.6655 17.7015C28.6005 17.807 28.5072 17.8963 28.3976 17.9816C28.292 18.0627 28.1622 18.1236 28.0079 18.1683Z" fill="#1A1A1A"/>
								<path d="M37.1 15.1125L37.717 15.3074L38.2447 17.6778L38.8819 15.6767L39.3487 15.8269L38.4679 18.5911L37.9321 18.4206L37.3598 15.904L36.686 18.0228L36.2192 17.8726L37.1 15.1125Z" fill="#1A1A1A"/>
								<path d="M40.9968 16.5973L41.6219 16.9261L41.1145 19.9419L40.6193 19.6821L40.7492 18.9393L39.771 18.4198L39.2352 18.9474L38.7847 18.712L40.9968 16.5973ZM40.0673 18.1275L40.8263 18.5253L41.078 17.1331L40.0673 18.1275Z" fill="#1A1A1A"/>
								<path d="M43.1193 17.8282L43.5536 18.1489L42.0801 20.1378L43.0746 20.8765L42.8189 21.2175L41.3901 20.1581L43.1193 17.8282Z" fill="#1A1A1A"/>
								<path d="M30.3863 17.6658C30.1914 17.6902 30.021 17.6902 29.8708 17.6618C29.7247 17.6333 29.5988 17.5846 29.4933 17.5156C29.3877 17.4466 29.3066 17.3573 29.2416 17.2518C29.1767 17.1463 29.132 17.0245 29.1036 16.8865L29.6191 16.8175C29.6354 16.8905 29.6597 16.9555 29.6922 17.0164C29.7246 17.0773 29.7652 17.13 29.818 17.1706C29.8708 17.2112 29.9398 17.2437 30.021 17.2599C30.1021 17.2761 30.2077 17.2761 30.3254 17.264C30.4877 17.2437 30.6135 17.1828 30.7028 17.0894C30.7921 16.9961 30.8287 16.8824 30.8124 16.7485C30.8043 16.6835 30.7881 16.6267 30.7597 16.5821C30.7313 16.5374 30.6988 16.5009 30.6461 16.4725C30.5974 16.4441 30.5283 16.4238 30.4512 16.4116C30.37 16.3994 30.2726 16.3913 30.1549 16.3872C29.9804 16.3872 29.8261 16.3751 29.6922 16.3507C29.5582 16.3304 29.4486 16.2898 29.3553 16.237C29.2619 16.1843 29.1889 16.1112 29.1361 16.0179C29.0833 15.9286 29.0468 15.8149 29.0265 15.681C29.0103 15.5633 29.0184 15.4496 29.0549 15.3441C29.0915 15.2385 29.1442 15.1411 29.2214 15.0559C29.2985 14.9707 29.3959 14.8976 29.5136 14.8408C29.6313 14.7839 29.7652 14.7433 29.9154 14.7231C30.228 14.6825 30.4796 14.719 30.6785 14.8326C30.8774 14.9463 31.0073 15.1411 31.0722 15.4131L30.5811 15.478C30.5324 15.3278 30.4634 15.2264 30.366 15.1695C30.2685 15.1127 30.1346 15.0965 29.9723 15.1208C29.8099 15.1411 29.6881 15.1939 29.6151 15.2751C29.542 15.3563 29.5136 15.4537 29.5258 15.5633C29.5339 15.6201 29.5461 15.6729 29.5704 15.7134C29.5907 15.7581 29.6273 15.7906 29.676 15.819C29.7247 15.8474 29.7896 15.8677 29.8667 15.8799C29.9479 15.8961 30.0494 15.9002 30.1793 15.9042C30.3497 15.9042 30.504 15.9164 30.6379 15.9367C30.7719 15.957 30.8855 15.9935 30.9789 16.0503C31.0763 16.1072 31.1494 16.1802 31.2062 16.2695C31.263 16.3588 31.2995 16.4806 31.3198 16.6267C31.336 16.7525 31.328 16.8743 31.2914 16.988C31.2549 17.1016 31.194 17.2071 31.1128 17.2964C31.0316 17.3898 30.9261 17.4669 30.8043 17.5319C30.6866 17.6049 30.5446 17.6455 30.3863 17.6658Z" fill="#1A1A1A"/>
								<path d="M34.3765 17.6363C34.1573 17.612 33.9585 17.5511 33.788 17.4537C33.6175 17.3563 33.4754 17.2386 33.3658 17.0924C33.2562 16.9463 33.1751 16.7799 33.1264 16.5932C33.0777 16.4065 33.0655 16.2076 33.0898 16.0006L33.0939 15.9681C33.1182 15.757 33.1791 15.5663 33.2684 15.3958C33.3618 15.2253 33.4795 15.0792 33.6256 14.9655C33.7717 14.8519 33.9341 14.7666 34.1249 14.7139C34.3156 14.6611 34.5145 14.6489 34.7296 14.6733C34.9448 14.6976 35.1356 14.7585 35.306 14.8519C35.4765 14.9452 35.6145 15.0629 35.7281 15.2091C35.8418 15.3552 35.923 15.5176 35.9717 15.7043C36.0204 15.891 36.0366 16.0899 36.0082 16.3009L36.0042 16.3334C35.9798 16.5445 35.923 16.7352 35.8337 16.9057C35.7444 17.0762 35.6267 17.2223 35.4846 17.34C35.3425 17.4577 35.1761 17.543 34.9894 17.5957C34.7987 17.6485 34.5957 17.6647 34.3765 17.6363ZM34.4374 17.2061C34.5754 17.2223 34.7012 17.2101 34.8149 17.1736C34.9285 17.1371 35.03 17.0762 35.1193 16.995C35.2086 16.9138 35.2776 16.8083 35.3344 16.6865C35.3913 16.5648 35.4278 16.4227 35.4481 16.2685L35.4522 16.236C35.4684 16.0899 35.4643 15.9478 35.44 15.8179C35.4156 15.688 35.371 15.5703 35.302 15.4688C35.233 15.3674 35.1518 15.2862 35.0463 15.2212C34.9407 15.1563 34.8189 15.1157 34.6769 15.0995C34.5348 15.0832 34.4049 15.0914 34.2872 15.1319C34.1695 15.1685 34.068 15.2294 33.9787 15.3105C33.8894 15.3917 33.8164 15.4973 33.7636 15.619C33.7068 15.7408 33.6702 15.8788 33.654 16.0371L33.6499 16.0696C33.6296 16.2279 33.6378 16.374 33.6662 16.5039C33.6987 16.6378 33.7474 16.7515 33.8164 16.853C33.8854 16.9544 33.9747 17.0356 34.0762 17.0965C34.1857 17.1533 34.3035 17.1939 34.4374 17.2061Z" fill="#1A1A1A"/>
								<path d="M31.8677 14.5969L32.4116 14.5847L32.4643 17.4869L31.9204 17.4991L31.8677 14.5969Z" fill="#1A1A1A"/>
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
