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

    <title>{{ config('app.name') }}</title>
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon01.png">
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
	<link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons-two/style.css') }}" />
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
					<a href="/home">
						<img src="assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
					</a>

				</div><!-- /.main-header__logo -->
				<nav class="main-header__nav main-menu">
					<ul class="main-menu__list">
						<li class="megamenu scrollToLink"><a href="home" class="font-semibold">Home</a></li>
						<li class="scrollToLink current"><a href="sobre" class="font-semibold">Sobre</a></li>
						<li class="scrollToLink"><a href="servicos" class="font-semibold">Serviços</a></li>
						<li class="scrollToLink"><a href="sustentabilidade" class="font-semibold">Sustentabilidade</a></li>
						{{-- <li class="scrollToLink"><a href="equipamentos" class="font-semibold">Equipamentos</a></li> --}}
						<li class="scrollToLink contactenos-link2"><a href="contactos" class="font-semibold">Contactos</a></li>
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
        <section class="main-slider-three">
            <div class="main-slider-three__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
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
                    <div class="main-slider-three__item">
                        <div class="main-slider-three__bg" style="background-image: url({{ $main[0]['bg-1'] }});"></div><!-- slider-bg -->
                        <div class="main-slider-three__shape-one" style="background-image: url({{ $main[0]['shape-one-1'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-two" style="background-image: url({{ $main[0]['shape-two-1'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-three" style="background-image: url({{ $main[0]['shape-three-1'] }});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-four" style="background-image: url({{ $main[0]['shape-four-1'] }});"></div><!-- slider-shape -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-slider-three__thumb">
                                        <img src="{{ $main[0]['thumb-1'] }}" alt="tolak" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-1'] }}</span>
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-2'] }}</span>
                                            <span class="main-slider-three__title__anim">{{ $main[0]['h2-span-3'] }}</span>
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-three__text">
                                            {{ $main[0]['p-1'] }}
                                        </p><!-- slider-text -->
                                        <div class="main-slider-three__btn">
                                            <b><a href="/contactos" class="tolak-btn"><b style="text-transform: uppercase;font-weight: 700;">{{ $main[0]['div-a-b'] }}</b><span></span></a><!-- slider-btn --></b>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Feature -->

        <!-- service-section -->
        <section class="service-section fadeInUp">
            <div class="image-layer" style="background-image: url({{ $service[0]['image-layer-path'] }});"></div>
            <div class="auto-container">
                <div class="text-center light">
                    <h6 class="sec-title__tagline h6 text-white"><span
                        class="sec-title__tagline__left"></span><b style="color:#ff6600;">{{ $service[0]['h6'] }}</b><span
                        class="sec-title__tagline__right"></span></h6>
                    <h2 class="h3 text-white">{{ $service[0]['h2'] }}</h2>
                    <p class="text-white mt-5">{{ $service[0]['p'] }}</p>
                </div>
            </div>
        </section>
        <div class="mt-5 why-choose-five-container">
            <section class="why-choose-five bg-light p-5" style="border-radius:30px; margin-top: -200px;">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-6">
                            <div class="wow slideInLeft">
                                <img src="{{ $service[0]['img-path'] }}" alt="tolak" style="border-radius: 30px">
                            </div><!-- /.why-choose-five__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="why-choose-five__content">
                                <div class="sec-title-four text-left">
                                    <h6 class="sec-title__tagline text-titles"><span
                                        class="sec-title__tagline__left"></span><b><i>{{ $service[0]['h6-span'] }}</i></b><span
                                        class="sec-title__tagline__right"></span></h6>

                                    <h3 class="sec-title-four__title">{{ $service[0]['h3'] }}</h3><!-- /.sec-title-four__title -->
                                </div><!-- /.sec-title-four -->
                                <p class="why-choose-five__content__text">
                                    {{ $service[0]['p-1'] }}
                                </p>
								<style>
									.why-choose-five__box__icon:hover {
										.svg-cion {
											fill: white !important;
											-webkit-font-smoothing:antialiased;
											transition: all 500ms ease;
										}
										.st1, .st0 {
											stroke: white;
											-webkit-font-smoothing:antialiased;
											transition: all 500ms ease;
										}
									}
								</style>
                                <div class="why-aboutus-content">
                                    <div class="why-aboutus-content-div">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="svg-cion" style="width: 65%;" fill="#ff6600" id="Capa_1" version="1.1" viewBox="0 0 512 512">
													<!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
													<defs>
													  <style>
														.st0 {
														  fill: none;
														  stroke: #ff6600;
														  stroke-miterlimit: 10;
														  stroke-width: 22px;
														}
													  </style>
													</defs>
													<path class="st0" d="M215.3,441.9v14.4c0,22.5,18.2,40.7,40.7,40.7h0c22.5,0,40.7-18.2,40.7-40.7v-14.4"/>
													<path class="st0" d="M392.6,248.6c0-75.4-61.2-136.6-136.6-136.6s-136.6,61.2-136.6,136.6,29.1,97.3,71.9,120.3v68.1h129.4v-68.1c42.8-23.1,71.9-68.3,71.9-120.3Z"/>
													<line class="st0" x1="190.5" y1="374" x2="324.7" y2="374"/>
													<line class="st0" x1="256" y1="65" x2="256"/>
													<line class="st0" x1="385.8" y1="118.8" x2="431.7" y2="72.8"/>
													<line class="st0" x1="439.5" y1="248.5" x2="504.5" y2="248.5"/>
													<line class="st0" x1="385.8" y1="378.3" x2="431.7" y2="424.3"/>
													<line class="st0" x1="126.2" y1="378.3" x2="80.3" y2="424.3"/>
													<line class="st0" x1="72.5" y1="248.5" x2="7.5" y2="248.5"/>
													<line class="st0" x1="126.2" y1="118.8" x2="80.3" y2="72.8"/>
													<polyline class="st0" points="205.3 245.5 237.1 277.3 306.7 207.7"/>
												  </svg>
												{{-- <i class="tolak-icons-two-deal"></i> --}}
											</div>
                                            <h3 class="why-choose-five__box__title">{{ $service[0]['h3-1'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="why-aboutus-content-div">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="svg-cion" style="width: 65%;" fill="#ff6600" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svg="http://www.w3.org/2000/svg" id="svg9" version="1.1" viewBox="0 0 682.7 682.7">
													<!-- Generator: Adobe Illustrator 29.1.0, SVG Export Plug-In . SVG Version: 2.1.0 Build 142)  -->
													<defs>
													  <style>
														.st0, .st1 {
														  fill: none;
														}

														.st1 {
														  stroke: #ff6600;
														  stroke-linecap: round;
														  stroke-linejoin: round;
														  stroke-width: 20px;
														}

														.st2 {
														  clip-path: url(#clippath);
														}
													  </style>
													  <clipPath id="clippath">
														<rect class="st0" width="682.7" height="682.7"/>
													  </clipPath>
													</defs>
													<g id="g15">
													  <g id="g17">
														<g class="st2">
														  <g id="g19">
															<g id="g25">
															  <path id="path27" class="st1" d="M19.9,422.4c-27.5-109.3,1.5-229.9,87-315.4,129.4-129.4,339.2-129.4,468.6,0s13.3,13.8,19.3,21.1l27.8-23.4c6.5-5.5,16.4-.9,16.4,7.7v112.1c0,6.2-5.6,10.9-11.7,9.9l-110.5-19.1c-8.4-1.4-11.2-12-4.7-17.5l28.1-23.7c-4.8-5.7-9.9-11.2-15.2-16.6-101.5-101.5-266.2-101.5-367.7,0-81.2,81.2-97.5,202.9-48.7,300.3"/>
															</g>
															<g id="g29">
															  <path id="path31" class="st1" d="M575.5,575.6c102.7-102.7,123.9-256.1,63.5-379.7"/>
															</g>
															<g id="g33">
															  <path id="path35" class="st1" d="M573.8,225c48.7,97.4,32.4,218.9-48.8,300.1-101.5,101.5-266.2,101.5-367.7,0-5.3-5.3-10.3-10.8-15.1-16.4l28.1-23.7c6.5-5.5,3.6-16.1-4.7-17.5l-110.5-19.1c-6.1-1.1-11.7,3.6-11.7,9.9v112.1c0,8.5,9.9,13.1,16.4,7.7l27.8-23.4c6,7.2,12.4,14.1,19.2,20.9,119.5,119.5,307.7,128.6,438.1,26.9,11.5-8.7,21.8-17.8,30.9-27.3"/>
															</g>
															<g id="g37">
															  <path id="path39" class="st1" d="M341.3,462.7c12.2,1.5,25.8-.2,40.1-3.9,45.3-9.5,84.1-38.1,84.1-103.2s-107.2-210.2-124.2-210.2-124.2,126.3-124.2,210.2,64.4,107.1,124.2,107.1"/>
															</g>
															<g id="g41">
															  <path id="path43" class="st1" d="M341.3,202.7v329.3"/>
															</g>
															<g id="g45">
															  <path id="path47" class="st1" d="M341.3,410.7l-76.3-76.3"/>
															</g>
															<g id="g49">
															  <path id="path51" class="st1" d="M341.3,303.5l-45.2-45.2"/>
															</g>
															<g id="g53">
															  <path id="path55" class="st1" d="M341.3,410.7l76.3-76.3"/>
															</g>
															<g id="g57">
															  <path id="path59" class="st1" d="M341.3,303.5l45.2-45.2"/>
															</g>
														  </g>
														</g>
													  </g>
													</g>
												  </svg>
												{{-- <i class="tolak-icons-two-solutions-three"></i> --}}
											</div>
                                            <h3 class="why-choose-five__box__title">{{ $service[0]['h3-2'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="why-aboutus-content-div">
                                        <div class="why-choose-five__box">
                                            <div class="why-choose-five__box__icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="svg-cion" style="width: 65%;" id="Layer_1" fill="#ff6600" height="512" viewBox="0 0 512 512" width="512" data-name="Layer 1"><path d="m335.649 360.525a8 8 0 0 0 -6.776-5.485l-46.55-4.866-19.013-42.768a8 8 0 0 0 -14.62 0l-19.013 42.768-46.55 4.866a8 8 0 0 0 -4.518 13.9l34.8 31.3-9.756 45.775a8 8 0 0 0 11.828 8.593l40.519-23.42 40.52 23.424a8 8 0 0 0 11.828-8.593l-9.756-45.775 34.8-31.3a8 8 0 0 0 2.257-8.419zm-51.195 30.915a8 8 0 0 0 -2.475 7.617l6.97 32.7-28.949-16.735a8 8 0 0 0 -8.008 0l-28.945 16.733 6.97-32.7a8 8 0 0 0 -2.475-7.617l-24.858-22.358 33.252-3.476a8 8 0 0 0 6.478-4.707l13.586-30.547 13.582 30.55a8 8 0 0 0 6.478 4.707l33.252 3.476zm188.634 25.4a8 8 0 0 0 -6.776-5.486l-46.549-4.867-19.014-42.766a8 8 0 0 0 -14.62 0l-19.013 42.766-46.55 4.867a8 8 0 0 0 -4.517 13.906l34.8 31.3-9.756 45.774a8 8 0 0 0 11.828 8.594l40.52-23.424 40.52 23.424a8 8 0 0 0 11.828-8.594l-9.756-45.774 34.8-31.3a8 8 0 0 0 2.255-8.42zm-51.194 30.914a8 8 0 0 0 -2.475 7.616l6.969 32.7-28.945-16.732a8 8 0 0 0 -8.008 0l-28.944 16.732 6.968-32.7a8 8 0 0 0 -2.474-7.616l-24.858-22.354 33.252-3.476a8 8 0 0 0 6.478-4.707l13.582-30.55 13.582 30.55a8 8 0 0 0 6.478 4.707l33.252 3.476zm-376.206-36.4a8 8 0 0 0 -4.518 13.906l34.8 31.3-9.756 45.774a8 8 0 0 0 11.828 8.594l40.52-23.424 40.52 23.424a8 8 0 0 0 11.828-8.594l-9.757-45.774 34.8-31.3a8 8 0 0 0 -4.518-13.906l-46.55-4.867-19.013-42.766a8 8 0 0 0 -14.621 0l-19.014 42.766zm59.291 5.859 13.582-30.55 13.582 30.55a8 8 0 0 0 6.478 4.707l33.252 3.476-24.858 22.358a8 8 0 0 0 -2.475 7.616l6.969 32.7-28.945-16.732a8 8 0 0 0 -8.007 0l-28.945 16.73 6.97-32.7a8 8 0 0 0 -2.475-7.616l-24.858-22.352 33.251-3.48a8 8 0 0 0 6.479-4.707zm98.936-309.284h-84.671a22.759 22.759 0 0 0 -22.733 22.733v145.158a22.76 22.76 0 0 0 22.733 22.734h84.671a12.254 12.254 0 0 0 12.24-12.241v-2.67a46.835 46.835 0 0 0 20.67 4.764q1.23 0 2.472-.061h115.135a30.027 30.027 0 0 0 28.1-39.628 32.571 32.571 0 0 0 19.912-44.087 33.551 33.551 0 0 0 2.386-51.083 37.424 37.424 0 0 0 -25.022-52.142 8.077 8.077 0 0 0 -1.765-.228c-21.988-.379-35.985-.433-54.451-.205 12.7-26.316 12.357-45.533-1.076-70.33-9.451-17.443-21.516-27.475-35.866-29.805a103.357 103.357 0 0 0 -17.475-.753 9.867 9.867 0 0 0 -7.405 3.87c-4.287 5.489-3.988 15.159 1.282 41.387.437 2.174.888 4.421.986 5.154 2.657 20.02-13.313 42.355-27.4 62.06q-1.816 2.538-3.592 5.037c-4.016 5.663-6.7 6.36-12.591 7.889-1.316.342-2.752.718-4.3 1.176v-6.489a12.254 12.254 0 0 0 -12.24-12.24zm-3.76 174.625h-80.911a6.741 6.741 0 0 1 -6.733-6.734v-145.158a6.74 6.74 0 0 1 6.733-6.733h80.911zm24.319-141.585c6.994-1.817 14.227-3.7 21.62-14.12q1.754-2.474 3.556-4.987c15.814-22.117 33.738-47.184 30.248-73.471-.167-1.26-.562-3.225-1.16-6.2-2.539-12.636-3.872-21.4-3.984-26.179a73.608 73.608 0 0 1 9.33.62c9.2 1.494 17.4 8.771 24.364 21.632 9.62 17.76 12.478 32.13.049 57.155a14.931 14.931 0 0 0 13.571 21.574c18.878-.248 32.8-.208 54.734.166a21.413 21.413 0 0 1 11.09 33.629 8 8 0 0 0 2.489 11.882 17.584 17.584 0 0 1 -1.943 31.732 8 8 0 0 0 -3.154 12.572 16.642 16.642 0 0 1 -15.273 27.149 8 8 0 0 0 -6.558 13.861 13.969 13.969 0 0 1 -9.1 24.363h-115.261c-.143 0-.285 0-.428.011-8.152.442-15.54-2.031-22.509-7.531v-121.227a60.325 60.325 0 0 1 8.319-2.631z"/></svg>
												{{-- <i class="tolak-icons-two-smart-grid"></i> --}}
											</div>
                                            <h3 class="why-choose-five__box__title">{{ $service[0]['h3-3'] }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <ul class="why-choose-five__list">
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-1'] }}</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-2'] }}</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-3'] }}</span>
                                    </li>
                                    <li>
                                        <i class="tolak-icons-two-arrow-circle-right"></i>
                                        <span>{{ $service[0]['li-i-4'] }}</span>
                                    </li>
                                </ul>
                                {{-- <a href="about.html" class="tolak-btn-two tolak-btn-two--home-seven">
                                    <span class="tolak-btn-two__left-star"></span>
                                    <span>{{ $service[0]['a-span'] }}<i class="tolak-icons-two-arrow-right-short"></i></span>
                                    <span class="tolak-btn-two__right-star"></span>
                                </a> --}}
                            </div><!-- /.why-choose-five__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.why-choose-five -->
        </div>

        <!-- service-section end -->
        <h2 class="text-center h2 text-body" style="font-weight: 600;">{{ $video[0]['h2'] }}</h2>
        <p class="text-center p mt-0 p-5"style="font-size: 1.5pts !important;margin: 0px 10% 0px;">{{ $video[0]['p'] }}</p>
        <section class="cta-four">
            <div class="container mt-5">
                <div class="cta-four__bg" style="background-image: url({{ $video[0]['bg-img'] }});">
                    <div class="cta-four__shape" style="background-image: url({{ $video[0]['shape-img'] }});"></div>
                    <div class="cta-four__overlay" style="background-image: url({{ $video[0]['overlay-img'] }});"></div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="cta-four__content">

                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline">
										<span class="sec-title__tagline__left"></span>
										<b><i>{{ $video[0]['h6-span'] }}</i></b>
										<span class="sec-title__tagline__right"></span>
									</h6><!-- /.sec-title-two__tagline -->
                                    <h3 class="sec-title-two__title">{{ $video[0]['h3'] }}</h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="cta-four__content__text">
                                    {{ $video[0]['p-1'] }}
                                </p>
                                <div class="cta-four__content__bar"></div>
                                <div class="cta-four__content__info">
                                    <div class="cta-four__content__info__icon"><i class="icofont-speech-comments"></i></div>
                                    <div>
										<p class="cta-four__content__info__text">
											{{ $video[0]['div-p'] }}
										</p>
										<p class="cta-four__content__info__text"><a href="sustentabilidade">Saiba mais</a></p>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-four__image mt-5">
                                <img src="{{ $video[0]['img-path'] }}" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonials-three">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url({{ $testimonial[0]['img-path'] }});"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline">
						<span class="sec-title__tagline__left"></span>
						<i><b>{{ $testimonial[0]['h6'] }}</b></i>
						<span class="sec-title__tagline__right"></span>
					</h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">{{ $testimonial[0]['h3'] }}</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonials-three__image">
                            <img src="{{ $testimonial[0]['img-path-1'] }}" alt="tolak" style="border-radius:30px;">
                            <img class="testimonials-three__image__left" src="{{ $testimonial[0]['img-path-2'] }}" alt="tolak" style="border-radius:30px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-three__content" style="border-radius:30px;">
                            <h3 class="testimonials-three__content__title">
                                {{ $testimonial[0]['h3-1'] }}
                            </h3>
                            <div class="testimonials-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                        "items": 1,
                        "margin": 0,
                        "loop": false,
                        "smartSpeed": 700,
                        "nav": false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "dots": true,
                        "autoplay": false
                        }'>
							@isset($testimonial_abouts)
								@foreach ($testimonial_abouts as $testimonial)
								<div class="item">
									<div class="testimonials-card-three">
										<div class="testimonials-card-three__content">
											<span class="testimonials-card-three__content__quote">“ </span>
											{{ $testimonial['p'] }}
										</div><!-- /.testimonials-card-three__content -->
										<div class="testimonials-card-three__author">
											<!--
											<div class="testimonials-card-three__image">
												<img src="assets/images/resources/testi-1-4.jpg" alt="Lataro Marsena">
											</div><!-- /.testimonials-card-three__image -->
											<h3 class="testimonials-card-three__name">
												{{ $testimonial['name'] }}
											</h3><!-- /.testimonials-card-three__name -->
											{{-- <p class="testimonials-card-three__designation">{{ $testimonial[0]['p'] }}</p><!-- /.testimonials-card-three__designation --> --}}
										</div>
									</div><!-- /.testimonials-card-three -->
								</div><!-- /.item -->

								@endforeach
							@endisset


                            </div><!-- /.testimonials-three__carousel -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-three -->
        <section class="contact-two">
            <div class="container">
                <div class="contact-two__wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-two__info">
                                <div class="contact-two__info__shape" style="background-image: url({{ $contact_info[0]['bg-img'] }});"></div>
                                <h4 class="contact-two__info__title"><b>{{ $contact_info[0]['h4'] }}</b></h4>
                                <p class="contact-two__info__text">
                                    {{ $contact_info[0]['p'] }}
                                </p>
								<style>
									.contact-two__info__box__icon:hover {
										.svg-phone {
											fill: white;
											-webkit-font-smoothing:antialiased;
											transition: all 500ms ease;
										}
									}
								</style>
                                <ul class="contact-two__info__box-wrapper">
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="svg-phone" fill="#ff6600" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 473.806 473.806; width: 40px;" xml:space="preserve">
												<g>
													<g>
														<path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z"/>
														<path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z"/>
														<path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
													</g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												</svg>
											{{-- <i class="icon-phone-call"></i> --}}
										</div>
                                        <h4 class="contact-two__info__box__title">{{ $contact_info[0]['h4-1'] }}</h4>
                                        <p class="contact-two__info__box__text"><a href="tel:025461556695">{{ $contact_info[0]['p-1'] }}</a></p>
                                    </li>
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-open-mail"></i></div>
                                        <h4 class="contact-two__info__box__title">{{ $contact_info[0]['h4-4'] }}</h4>
                                        <p class="contact-two__info__box__text"><a href="mailto:{{ $contact_info[0]['p-3-1'] }}">{{ $contact_info[0]['p-3-1'] }}</a></p>
                                    </li>
                                    <li class="contact-two__info__box">
                                        <div class="contact-two__info__box__icon"><i class="icon-pin"></i></div>
                                        <h4 class="contact-two__info__box__title">{{ $contact_info[0]['h4-2'] }}</h4>
                                        <p class="contact-two__info__box__text">{{ $contact_info[0]['p-2'] }}</p>
                                    </li>
                                </ul>
                                <div class="contact-two__info__social">
                                    <h5 class="contact-two__info__social__title">Siga-nos:</h5>
                                    <div class="contact-two__info__social__wrap">
                                        <a href="{{ $contact_info[0]['a-1'] }}" target="_blank">
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
                                        <a href="{{ $contact_info[0]['a-2'] }}" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div>
                                </div><!-- contact-social -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-two__content">
                                <div class="sec-title-two text-left">
                                    <h6 class="sec-title-two__tagline">
										<span class="sec-title__tagline__left"></span>
										<i><b>{{ $contact_info[0]['h-6'] }}</b></i>
										<span class="sec-title__tagline__right"></span>
									</h6><!-- /.sec-title-two__tagline -->
                                    <h3 class="sec-title-two__title"><b>{{ $contact_info[0]['h-3'] }}</b></h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="contact-two__content__text">
                                    {{ $contact_info[0]['p-3'] }}
                                </p>
                                {{-- <form class="contact-two__form contact-form-validated form-one" action="inc/sendemail.php"> --}}
								<form class="contact-two__form form-one" method="POST" action="{{ route('About.ContactFormAbout') }}">
									@csrf
									@method('post')
                                    <div class="form-one__group">
                                        <div class="form-one__control">
                                            <input type="text" name="name" placeholder="Nome">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="email" name="email" placeholder="Email">
											<input type="hidden" name="phone" placeholder="phone">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="Mensagem"></textarea><!-- /# -->
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="tolak-btn" style="font-weight: 700 !important;"><b><i>enviar</i></b><span></span></button>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact -->
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
                                <li><a href="home">Início</a></li>
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
                                <li><a href="home/termos-servico" target="_blank">Termos de Serviço</a></li>
                                <li><a href="home/politica-privacidade" target="_blank">Política de Privacidade</a></li>
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
					<a href="index.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155" alt=""></a>
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