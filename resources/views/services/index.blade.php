<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@if(session('success'))
	<div id="success-alert" class="alert alert-success">
		{{ session('success') }}
	</div>
@endif

@if(session('error'))
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
}, 5000); // 5000ms = 5 segundos
</script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $main_screen[0]['meta-title'] }}</title>

	<!-- Meta Description -->
    <meta name="description" content="{{ $main_screen[0]['meta-desctiption'] }}">

    <!-- Meta Keywords (opcional, com pouco uso atualmente) -->
    <meta name="keywords" content="{{ $main_screen[0]['meta-keywords'] }}">
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
            background-color: #ff6600;
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

<body class="custom-cursor" style="overflow-x: hidden;">
	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>
	<header class="main-header sticky-header sticky-header--one-page">
		<div class="container-fluid">
			<div class="main-header__inner">
				<div class="main-header__logo">
					<a href="/">
						<img src="/assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
					</a>

				</div><!-- /.main-header__logo -->
				<nav class="main-header__nav main-menu">
					<ul class="main-menu__list">
						<li class="megamenu scrollToLink"><a href="/" class="font-semibold">Home</a></li>
						<li class="scrollToLink"><a href="/sobre" class="font-semibold">Sobre</a></li>
						<li class="scrollToLink current"><a href="servicos" class="font-semibold">Serviços</a></li>
						<li class="scrollToLink"><a href="/sustentabilidade" class="font-semibold">Sustentabilidade</a></li>
						{{-- <li class="scrollToLink"><a href="/equipamentos" class="font-semibold">Equipamentos</a></li> --}}
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
	</header>
    <section class="page-header" style="background-image: url(../{{ $main_screen[0]['bg-img-path-1'] }});background-size: cover;background-repeat: no-repeat;background-position: center;">
        {{-- <div class="page-header__bg"></div> --}}
        {{-- <div class="page-header__shape"></div> --}}
        <div class="page-header__shape-two"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-header__content">
                        <h2 class="page-header__title">{{ $main_screen[0]['h2'] }}</h2>
                        {{-- <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="/">Home</a></li>
                            <li><span>Serviços</span></li>
                        </ul><!-- /.thm-breadcrumb list-unstyled --> --}}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                        <img src="../{{ $main_screen[0]['bg-img-path'] }}" alt="tolak">
                        {{-- <div class="page-header__layer__shape"></div> --}}
                        {{-- <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div> --}}
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    {{-- <div class="sec-title text-center" style="margin-top:200px;">
        <h1 class="text-center h1 text-body">{{ $main_screen[0]['h1'] }}</h1>
        <p class="text-center mt-5" style="padding-left: 250px;padding-right: 250px;">{{ $main_screen[0]['p'] }}</p>
    </div> --}}
	<div class="sec-title text-center" style="margin-top:10%;">
		<h2 class="text-center h2 text-body" style="font-weight: 600;">{{ $video[0]['h2'] }}</h2>
		<p class="text-center p mt-0 p-5"style="font-size: 1.5pts !important;margin: 0px 10% 0px;">{{ $video[0]['p'] }}</p>
	</div>
    <section class="service-one">
        <div class="container" style="margin-top:-150px;">
            <div class="row">
                @isset($services)
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="100ms">
                            <a href="/servicos/{{ $service['slug'] }}">
                                <div class="service-one__item text-center">
                                    <div class="service-one__item__image">
										<img src="../{{ $service['img'] }}" alt="tolak">


                                    </div>
                                    <div class="service-one__item__content" style="height: 300px;">
                                        <div class="service-one__item__icon">
											@if ($service['a'] == "Roedores" || $service['a'] == "roedores")
												<img src="../assets/svg/icons/new-white/rato.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Baratas" || $service['a'] == "baratas")
												<img src="../assets/svg/icons/new-white/traca-cereiais.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Percevejos" || $service['a'] == "percevejos")
												<img src="../assets/svg/icons/new-white/percevejo.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Formigas" || $service['a'] == "formigas")
												<img src="../assets/svg/icons/new-white/formiga.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Processionária do Pinheiro" || $service['a'] == "processionária do pinheiro")
												<img src="../assets/svg/icons/new-white/processionario-pinheiro.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Mosquitos" || $service['a'] == "mosquitos")
												<img src="../assets/svg/icons/new-white/mosquito.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Ácaros" || $service['a'] == "ácaros")
												<img src="../assets/svg/icons/new-white/acaros.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Vespas" || $service['a'] == "vespas")
												<img src="../assets/svg/icons/new-white/vespas.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Moscas" || $service['a'] == "moscas")
												<img src="../assets/svg/icons/new-white/mosca.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Traças" || $service['a'] == "traças")
												<img src="../assets/svg/icons/new-white/traca.svg" width="60" alt="tolak">
											@endif
											@if ($service['a'] == "Pulgas" || $service['a'] == "pulgas")
												<img src="../assets/svg/icons/new-white/pulga.svg" width="60" alt="tolak">
											@endif

											@if ($service['a'] == "Gorgulho das Farinhas" || $service['a'] == "gorgulho das farinhas")
												<img src="../assets/svg/icons/new-white/gorgulho-farinhas.svg" width="60" alt="tolak">
											@endif

											@if ($service['a'] == "Traça de Cereais" || $service['a'] == "traça de cereais")
												<img src="../assets/svg/icons/new-white/traca-cereiais.svg" width="60" alt="tolak">
											@endif

											@if ($service['a'] == "Peixinho-de-Prata" || $service['a'] == "peixinho-de-prata")
												<img src="../assets/svg/icons/new-white/peixinho-prata.svg" width="60" alt="tolak">
											@endif

											@if ($service['a'] == "Térmitas" || $service['a'] == "térmitas")
												<img src="../assets/svg/icons/new-white/termita.svg" width="60" alt="tolak">
											@endif
                                            {{-- <span class="icon-cooperation"></span> --}}
                                        </div><!-- /.service-icon -->
                                        <h3 class="service-one__item__title">
                                            <a href="servicos/{{ $service['slug'] }}">{{ $service['a'] }}</a>
                                        </h3><!-- /.service-title -->
                                        <p class="service-one__item__text">
                                            {{ $service['p'] }}
                                        </p><!-- /.service-text -->
                                    </div>
                                    <div class="service-one__item__bottom">
                                        <div class="service-one__item__bottom__number"></div>
										<a class="service-one__item__bottom__rm" href="servicos/{{ $service['slug'] }}">SAIBA MAIS<span class="fas fa-angle-double-right"></span></a>
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
            {{-- <div class="cta-one__bg__shape" style="background-image: url(../{{ $main_screen[0]['bg-img-1'] }});"></div> --}}
			<div class="cta-one__bg__shape"></div>
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
                            <div class="cta-one__box__icon">
								{{-- <span class="icon-best-price"></span> --}}
								<svg xmlns="http://www.w3.org/2000/svg" style="width: 60%;" fill="#ff6600" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" id="svg897" xml:space="preserve"  viewBox="0 0 682.66669 682.66669"><defs id="defs901"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath911"><path d="M 0,512 H 512 V 0 H 0 Z" id="path909"/></clipPath></defs><g id="g903" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)"><g id="g905"><g id="g907" clip-path="url(#clipPath911)"><g id="g913" transform="translate(488.6212,205.3983)"><path d="m 0,0 -0.534,0.534 c -11.511,11.511 -30.667,12.138 -42.744,1.448 -25.439,-22.519 -66.161,-58.545 -83.69,-74.051 -5.484,-4.852 -12.516,-7.497 -19.839,-7.497 h -25.904 -105.234 105.234 c 16.569,0 30,13.431 30,30 v 0 c 0,16.568 -13.431,30 -30,30 h -56.016 c -16.283,0 -32.238,4.575 -46.046,13.205 v 0 c -34.426,21.515 -79.163,16.319 -107.743,-12.512 l -91.105,-91.907 v -79.618 h 100 l 30,30.832 h 180.265 c 19.731,0 38.734,7.263 53.416,20.445 29.268,26.278 79.767,71.616 108.856,97.718 C 11.102,-30.468 11.578,-11.578 0,0 Z" style="fill:none;stroke:#ff6600 ;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path915"/></g><g id="g917" transform="translate(297,497)"><path d="m 0,0 c 0,0 -90,-90 -90,-150 0,-49.706 40.294,-90 90,-90 49.706,0 90,40.294 90,90 C 90,-90 0,0 0,0 Z" style="fill:none;stroke:#ff6600 ;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path919"/></g><g id="g921" transform="translate(267,347)"><path d="M 0,0 H 60" style="fill:none;stroke:#ff6600 ;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path923"/></g><g id="g925" transform="translate(297,317)"><path d="M 0,0 V 60" style="fill:none;stroke:#ff6600 ;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path927"/></g></g></g></g></svg>
							</div>
                            <h3 class="cta-one__box__title">{{ $main_screen[0]['h3-a'] }}</h3>
                            <p class="cta-one__box__text">{{ $main_screen[0]['p-a-1'] }}</p>
                        </div>
						<a href="tel:00351219747353" class="btn mt-5 theme-btn-three thm-btn contactenos-btn thm-btn2" type="submit" name="quote_form">CONTACTE-NOS</a>
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
                        <div class="contact-one__info__icon">
							{{-- <span class="icon-customer-service"></span> --}}
							<svg xmlns="http://www.w3.org/2000/svg" style="width: 30%;" fill="#fff" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 510 510"><path d="m73.18 378.613h-53.76c-2.27 0-4.434-.964-5.951-2.653s-2.246-3.943-2.003-6.201c7.397-68.88 57.073-125.109 122.552-142.177-27.196-14.878-45.705-43.784-45.705-76.866 0-48.201 39.292-87.536 87.494-87.536 48.246 0 87.535 39.336 87.535 87.536 0 33.083-18.51 61.991-45.721 76.868 59.811 15.588 106.419 63.829 119.669 124.536h14.511l15.445-47.533c1.721-5.296 6.656-8.881 12.224-8.881s10.503 3.585 12.224 8.881l15.444 47.533h49.979c5.569 0 10.504 3.586 12.224 8.881 1.721 5.296-.164 11.098-4.669 14.37l-40.434 29.378 15.445 47.533c1.72 5.295-.165 11.097-4.669 14.37-4.505 3.273-10.605 3.273-15.11 0l-40.434-29.377-40.434 29.377c-4.505 3.273-10.605 3.273-15.11 0s-6.39-9.075-4.669-14.37l15.444-47.533-35.972-26.136h-20.296c1.659 1.489 2.657 3.638 2.657 5.955v26.323c0 3.309-2.037 6.277-5.126 7.466 0 0-12.298 4.733-12.298 4.733-1.888 6.539-4.51 12.841-7.798 18.802l5.345 12.068c1.339 3.023.681 6.559-1.657 8.897l-18.609 18.608c-2.338 2.338-5.874 2.997-8.897 1.658 0 0-12.054-5.34-12.054-5.34-5.955 3.298-12.271 5.911-18.817 7.795l-4.732 12.295c-1.189 3.089-4.156 5.127-7.466 5.127h-26.322c-3.31 0-6.278-2.038-7.466-5.127 0 0-4.732-12.294-4.732-12.294-6.558-1.888-12.865-4.512-18.83-7.802l-12.068 5.346c-3.023 1.339-6.559.68-8.897-1.658l-18.608-18.608c-2.341-2.341-2.999-5.882-1.654-8.907 0 0 5.358-12.051 5.359-12.05-3.297-5.952-5.91-12.264-7.807-18.807l-12.307-4.736c-3.088-1.189-5.126-4.157-5.126-7.466v-26.323c0-2.317.998-4.466 2.657-5.955zm102.627-140.362c-73.94 0-135.327 53.778-147.213 124.362h62.788c1.291-3.101 2.753-6.13 4.383-9.075l-5.361-12.055c-1.345-3.025-.687-6.566 1.654-8.907l18.608-18.609c2.341-2.341 5.882-2.998 8.907-1.653 0 0 12.055 5.36 12.055 5.36 5.965-3.298 12.269-5.91 18.81-7.794l4.757-12.328c1.191-3.085 4.157-5.12 7.464-5.12h26.322c3.311 0 6.28 2.04 7.468 5.131l4.733 12.319c6.539 1.884 12.841 4.495 18.803 7.792l12.055-5.36c3.025-1.345 6.566-.688 8.907 1.653l18.609 18.609c2.338 2.338 2.996 5.873 1.657 8.897 0 0-5.341 12.059-5.342 12.059 1.631 2.947 3.093 5.978 4.383 9.081h28.933c.101-.54.238-1.078.411-1.612 1.721-5.295 6.656-8.881 12.224-8.881h19.049c-15.888-65.353-74.799-113.869-145.064-113.869zm135.701 129.869 34.448 25.028c4.505 3.273 6.39 9.075 4.669 14.37l-13.158 40.497 34.448-25.028c4.505-3.273 10.605-3.273 15.11-.001l34.448 25.029-13.158-40.497c-1.721-5.295.164-11.097 4.669-14.37l34.448-25.028h-42.58c-5.568 0-10.503-3.585-12.224-8.881l-13.158-40.496-13.158 40.496c-1.721 5.296-6.656 8.881-12.224 8.881zm-135.701-145.869c39.427 0 71.535-32.145 71.535-71.535s-32.108-71.536-71.535-71.536c-39.389 0-71.494 32.147-71.494 71.536 0 39.388 32.105 71.535 71.494 71.535zm11.909 97.194-4.231-11.013h-15.338l-4.254 11.024c-.949 2.459-3.049 4.293-5.614 4.903-7.759 1.844-15.159 4.909-21.961 9.1-2.247 1.386-5.034 1.572-7.447.5l-10.777-4.792-10.837 10.837 4.792 10.777c1.073 2.413.886 5.199-.499 7.447-4.195 6.807-7.262 14.214-9.131 22.004-.615 2.56-2.449 4.654-4.906 5.6 0 0-10.99 4.229-10.99 4.229v15.336l10.99 4.23c2.455.945 4.289 3.036 4.904 5.594 1.869 7.763 4.933 15.192 9.126 21.973 1.391 2.249 1.581 5.041.506 7.457 0 0-4.792 10.778-4.792 10.778l10.843 10.843 10.782-4.776c2.404-1.065 5.177-.881 7.419.493 6.806 4.17 14.21 7.264 21.999 9.11 2.57.609 4.673 2.446 5.622 4.911 0 0 4.23 10.99 4.23 10.99h15.336l4.23-10.99c.948-2.463 3.049-4.3 5.616-4.91 7.755-1.843 15.176-4.905 21.95-9.094 2.246-1.389 5.033-1.58 7.448-.51 0 0 10.781 4.776 10.781 4.776l10.849-10.849-4.776-10.782c-1.065-2.404-.88-5.177.493-7.419 4.171-6.807 7.266-14.212 9.111-21.978.611-2.568 2.447-4.669 4.91-5.617 0 0 10.99-4.23 10.99-4.23v-15.336l-10.99-4.229c-2.464-.949-4.302-3.053-4.911-5.622-1.844-7.782-4.909-15.182-9.099-21.982-1.383-2.244-1.572-5.026-.504-7.437l4.776-10.782-10.843-10.842-10.777 4.792c-2.413 1.072-5.199.886-7.447-.5-6.802-4.191-14.202-7.256-21.961-9.1-2.569-.611-4.671-2.449-5.618-4.914zm-11.909 24.36c29.787 0 53.938 24.124 53.938 53.911 0 29.786-24.153 53.938-53.938 53.938-29.787 0-53.912-24.151-53.912-53.938 0-29.788 24.123-53.911 53.912-53.911zm0 16c-20.948 0-37.912 16.963-37.912 37.911 0 20.949 16.963 37.938 37.912 37.938 20.95 0 37.938-16.988 37.938-37.938 0-20.949-16.989-37.911-37.938-37.911zm302.012-281.73c-11.311-13.325-36.147-42.583-44.854-52.841l-44.854 52.841h16.134c4.419 0 8 3.582 8 8v141.146c0 4.415-3.584 8-8 8-4.415 0-8-3.585-8-8v-133.146h-16.998c-4.797 0-8.827-2.595-10.814-6.928-1.978-4.286-1.342-9.095 1.768-12.697 0 0 53.682-63.241 53.682-63.241 2.299-2.735 5.418-4.209 9.082-4.209 3.565 0 6.683 1.423 9.034 4.153.012.015.025.029.037.043l53.712 63.276c3.055 3.59 3.7 8.395 1.724 12.675-1.994 4.348-6.052 6.928-10.789 6.928h-17.023v88.837c0 4.415-3.585 8-8 8-4.416 0-8-3.585-8-8v-96.837c0-4.418 3.581-8 8-8zm-24.159 126.991c0-4.415 3.584-8 8-8 4.415 0 8 3.585 8 8v22.155c0 4.415-3.585 8-8 8-4.416 0-8-3.585-8-8zm0 44.309c0-4.415 3.584-8 8-8 4.415 0 8 3.585 8 8v21.609c0 4.415-3.585 8-8 8-4.416 0-8-3.585-8-8zm-41.415 21.609c0 4.415-3.584 8-8 8-4.415 0-8-3.585-8-8v-21.609c0-4.415 3.585-8 8-8 4.416 0 8 3.585 8 8zm-50.318-106.218c-9.892-11.653-28.376-33.428-36.078-42.502l-36.079 42.502h11.415c4.418 0 8 3.582 8 8v72.422c0 4.415-3.585 8-8 8s-8-3.585-8-8v-64.422h-13.468c-4.575 0-8.418-2.475-10.313-6.607-1.887-4.088-1.279-8.675 1.685-12.11 0 0 46.098-54.305 46.097-54.305 2.194-2.608 5.167-4.015 8.663-4.015 3.399 0 6.372 1.356 8.614 3.959.012.015.025.029.037.043l46.125 54.338c2.914 3.425 3.531 8.008 1.647 12.09-1.902 4.147-5.774 6.607-10.291 6.607h-13.49v111.969c0 4.415-3.585 8-8 8s-8-3.585-8-8v-119.969c0-4.418 3.582-8 8-8z"/></svg>
						</div>
                        <h3 class="contact-one__info__title">{{ $main_screen[0]['h3'] }}</h3>
                        {{-- <p class="contact-one__info__text"><a href="tel:255225551">{{ $main_screen[0]['p-a'] }}</a>,
                            <a href="tel:6544144444">+6544144444</a>
                        </p> --}}
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
                                        class="sec-title__tagline__left"></span><b>{{ $main_screen[0]['h6'] }}</b><span
                                        class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">{{ $main_screen[0]['h3-1'] }}</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="contact-one__content__text">
                                {{ $main_screen[0]['p-1'] }}
                            </p>

                            <form class="contact-two__form form-one" method="POST" action="{{ 'https://sospragas.pt' . route('ServicePage.ContactFormService', [], false) }}">
								@csrf
								@method('post')
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
                                        <button type="submit" class="tolak-btn2"><b>ENVIAR MENSAGEM</b><span></span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact -->
    {{-- @include('includes.footer_aux') --}}
	<section class="mail-section" style="margin-top: 6%;">
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
						<form  method="POST" action="{{ 'https://sospragas.pt' . route('NewsLatterPage.NewsletterForm', [], false) }}">
							@csrf
							@method('post')
							<input type="text" name="EMAIL" placeholder="Insira o seu email">
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
				<div class="col-md-6 col-lg-4">
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
					<li class="megamenu "><a href="/">Home</a></li>
					<li class=""><a href="/sobre">Sobre</a></li>
					<li class=""><a href="/servicos">Serviços</a></li>
					<li class=""><a href="/sustentabilidade">Sustentabilidade</a></li>
					{{-- <li class=""><a href="/equipamentos">Equipamentos</a></li> --}}
					<li class=""><a href="/contactos">Contactos</a></li>
					<li class=""><a href="/contato">Contacta-nos</a></li>
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
