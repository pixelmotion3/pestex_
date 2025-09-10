<!DOCTYPE html>
<html lang="pt-PT">
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
	setTimeout(function () {
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
	<meta name="description" content="Soluções personalizadas para cada problema. Desfrute de um Ambiente Saudável">
	<title>SOS Pragas</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		! function (f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function () {
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

		fbq('init', '1312432023376979');

		fbq('track', 'PageView');
	</script>

	<noscript><img height="1" width="1" style="display:none"
			src=https://www.facebook.com/tr?id=1312432023376979&ev=PageView&noscript=1 /></noscript>

	<!-- End Meta Pixel Code -->

	<!-- Meta Keywords (opcional, com pouco uso atualmente) -->
	<meta name="keywords" content="">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon01.png">
	<!-- Fonts -->
	{{--
	<link rel="preconnect" href="https://fonts.bunny.net"> --}}

	{{--
	<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" /> --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"
		integrity="sha512-j+F4W//4Pu39at5I8HC8q2l1BNz4OF3ju39HyWeqKQagW6ww3ZF9gFcu8rzUbyTDY7gEo/vqqzGte0UPpo65QQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>


	<!-- Google tag (gtag.js) -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			setTimeout(function () {
				const gtagScript = document.createElement('script');
				gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-973E1T9CZV';
				gtagScript.async = true;
				document.head.appendChild(gtagScript);

				window.dataLayer = window.dataLayer || [];

				function gtag() {
					dataLayer.push(arguments);
				}
				gtag('js', new Date());
				gtag('config', 'G-973E1T9CZV');
			}, 5000);
		});
	</script>
	<link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendors/tolak-icons-two/style.css') }}" />

	<!-- Styles -->
	@vite(['resources/css/app.css'])

	<style>
		.btn-call-now {
			transition: transform 0.3s ease;
			/* 0.3s = duração | ease = suavidade */
		}

		.btn-call-now:hover {
			transform: scale(1.04);
		}
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
	{{--
	<script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
	{{--
	<script src="{{ asset('assets/js/jquery.js') }}" defer></script> --}}

	<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/validation.js') }}" defer></script>
	<script src="{{ asset('assets/js/appear.js') }}" defer></script>
	<script src="{{ asset('assets/js/scrollbar.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}" defer></script>

	<!-- main-js -->
	@once
		<script src="{{ asset('assets/js/script.min.js') }}" defer></script>
	@endonce
	{{--
	<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"
		defer>
		</script>
	<script nomodule src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}" defer></script>
	<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}" defer></script>
	<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
	{{--
	<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script> --}}
	<script nomodule src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}" defer></script>







	<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}" defer></script>
	<script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}" defer></script>
	<link rel="stylesheet" href="https://sospragas.pt/assets/vendors/owl-carousel/css/owl.theme.default.min.css">
	<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
	<script src="{{ asset('assets/vendors/tilt/tilt.jquery.js') }}"></script>
	{{-- @vite(['resources/js/app.js']) --}}
	{{--
	<script src="{{ asset('assets/vendors/alljstest.min.js') }}"></script> --}}









	<!-- sanito -->

	{{--
	<script src="{{ asset('assets/js/jquery.js') }}" defer></script> --}}



	{{--
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}" defer></script> --}}



	{{--
	<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script> --}}
	<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}" defer></script>
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

		.lazy-background {
			background-image: none;
			background-size: cover;
			background-position: center;
			min-height: 300px;
			/* ou altura necessária */
		}

		.input-field::placeholder {
			color: #000 !important;
			Cor do placeholder com melhor contraste
			/* opacity: 1 !important; Garante que o placeholder não fique muito claro */
		}
		.pulse-cta {
			animation: pulse 2s infinite;
		}

		@keyframes pulse {
			0% {
				transform: scale(1);
				opacity: 1;
			}

			50% {
				transform: scale(1.1);
				/* aumenta 10% */
				opacity: 0.7;
				/* fica mais transparente */
			}

			100% {
				transform: scale(1);
				opacity: 1;
			}
		}

		.owl-nav {
			display: none !important;
		}
	</style>
	<script type="application/ld+json">
		{
		"@context": "https://schema.org",
		"@type": "LocalBusiness",
		"name": "SOS Pragas",
		"image": "https://sospragas.pt/assets/images/logo-dark.webp",
		"url": "https://sospragas.pt",
		"telephone": "+351 219 747 353",
		"priceRange": "€€",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Rua de Entremuros 54",
			"addressLocality": "Fração BB",
			"addressRegion": "São Julião do Tojal",
			"postalCode": "2660-533",
			"addressCountry": "PT"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "38.85585061580261",
			"longitude": "-9.118817642591889"
		},
		"openingHoursSpecification": [
			{
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": [
				"Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday"
			],
			"opens": "08:00",
			"closes": "18:00"
			}
		],
		"sameAs": [
			"https://www.facebook.com/profile.php?id=61564657894807&locale=ky_KG",
			"https://www.facebook.com/profile.php?id=61564657894807&locale=ky_KG"
		],
		"description": "Empresa especializada em desinfestação de insetos e controlo de pragas em Portugal. Atendimento rápido, profissional e seguro.",
		"logo": "https://sospragas.pt/assets/images/logo-dark.webp"
		}
	</script>
	<style>

		.main-slider-three__content {
			margin-block: 1rem;
		}
		.main-slider-three__shape-one {
			opacity: 0;
			position: absolute;
			right: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-size: auto;
			background-repeat: no-repeat;
			background-position: right top;
			transition: transform 1s ease, opacity 1s ease;
			transform: scaleX(-1);    /* inverte a imagem horizontalmente */
		}

		ul.custom-list {
			list-style: none; /* remove os marcadores padrão */
			padding: 0;
			margin: 0;
			display: flex; /* deixa os itens na horizontal */
			gap: 15px; /* espaço entre os itens */
		}

		ul.custom-list li {
			display: flex;
			align-items: center;
		}

		ul.custom-list li::before {
			content: "•"; /* adiciona um ponto como marcador */
			color: #ff6600; /* cor do ponto */
			margin-right: 4px; /* espaço entre o ponto e o texto */
			font-size: 2em; /* ajusta o tamanho do ponto, se necessário */
		}
		.main-slider-three__title__anim:last-child {
			color: #ff6600;
		}

		.main-slider-three__title__anim {
			position: relative;
			display: inline-block;
			overflow: hidden;
			margin-bottom: -16px;
		}
		.main-slider-three__title__anim:last-child:before {
			position: absolute;
			width: 100%;
			height: 0px;
			content: "";
			left: 0;
			bottom: 2px;
			background-color: currentColor;
		}
		.section-alert {
			display: flex;
			justify-content: center;
			padding: 1rem;
			background: #eb0707;
		}

		.section-alert p {
			color: #fff;
			text-align: center;
		}

		.main-slider-three__title {
			max-width: 550px;
			font-size: 50px;
    		line-height: 53px;
			color: var(--tolak-white, #fff);
			margin: 0 0 0;
			opacity: 0;
			transition: transform 3.2s ease, opacity 3.2s ease;
			transform: translate(-200px);
			font-weight: 700;
		}
		.card-time {
			background: #eb0707;
			border-radius: 4px;
			padding: 21px;
			text-align: center;
			width: 55%;
			margin-bottom: 15px;
		}

		.card-time h2 {
			color: #fff;
			font-size: 30px;
			font-weight: 600;
		}
		.card-time span {
			color: #f0d807;
		}

		.cta-one__bg {
			position: absolute;
			right: 0px;
			top: 0px;
			bottom: 0px;
			height: auto;
			width: 100%;
			background-color: #ff6600;
			margin: auto;
		}
		.testimonials-three__content {
			position: relative;
			z-index: 2;
			background-color: var(--tolak-white, #fff);
			margin: 0px 0 0 0px;
			padding: 70px 60px;
			box-shadow: 0 0 117px #0c3eb914;
		}

		.service-five {
			position: relative;
			background-color: #f7f8fc;
			padding-block: 6rem;
		}

		.pricing-one__card {
			position: relative;
			z-index: 2;
			background-color: #fff;
			border-radius: 70px 70px 5px 5px;
			padding: 0 30px 46px;
			margin-top: 70px;
			transition: .5s ease;
		}

		.pricing-one__card:hover:before {
			height: 100%;
			opacity: 1;
		}
		.pricing-one__card:hover .pricing-one__card__price, .pricing-one__card:hover .pricing-one__card__title {
			color: #000;
		}

		.pricing-one__card__icon {
			width: 151px;
			height: 151px;
			background-color: #ff6600;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 73px;
			color: #fff;
			position: relative;
			top: -70px;
			border-radius: 50%;
			border: 5px solid #041e1f;
			margin: 0px auto -70px;
			transition: 0.5s;
		}

		.pricing-one__card:before {
			position: absolute;
			content: "";
			left: 0;
			color: #000;
			top: 0;
			width: 100%;
			height: 0;
			z-index: -1;
			opacity: 0;
			border-radius: 70px 70px 5px 5px;
			background-color: #fff;
			transition: all .5s;
		}

		.pricing-one__card__title {
			font-size: 27px;
			color: var(--tolak-black2, #222222);
			font-weight: 600;
			text-transform: none;
			font-family: var(--tolak-font, "Rubik", sans-serif);
			margin: 27px 0px 12px;
			transition: 0.3s;
		}

		, .pricing-one__card__title {
			color: #000;
		}
		.pricing-one__card:hover .pricing-one__card__price {
			color: #ff6600;
		}
		.pricing-one__card__price {
			color: #ff6600;
			font-size: 35px;
			font-weight: 600;
			margin: 0 0 33px;
			transition: .3s ease;
		}

		.form-one__group {
			display: flex;
			grid-gap: 30px;
			margin: 0;
			flex-direction: column;
		}

		.tolak-btn2 {
			display: inline-block;
			vertical-align: middle;
			-webkit-appearance: none;
			border: none;
			outline: none !important;
			background-color: #bd1c1c;
			color: var(--tolak-white, #fff);
			font-size: 14px;
			line-height: 24px;
			border-radius: 6px;
			padding: 12.7px 32.5px;
			transition: .5s;
			text-transform: capitalize;
			position: relative;
			overflow: hidden;
			text-align: center;
			width: 100%;
			font-weight: 600;
		}

		.contact-two__content {
			position: relative;
			padding: 35px;
			background-color: #fafbfc;
			border-radius: 10px;
			box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
		}
		.contact-two__wrapper {
			position: relative;
			border: 1px solid var(--tolak-border-color, #dddddd);
			border-radius: 20px;
			padding: 35px;
		}

		.testimonials-three {
			position: relative;
			z-index: 0 !important;
			background-color: rgb(18, 36, 56);
			padding: 50px 0px;
		}

		.service-five__item__image img {
			width: 100%;
			height: auto;
		}
		@media (min-width: 1200px) {
			.container, .container-sm, .container-md, .container-lg, .container-xl {
				max-width: 1300px;
			}
		}

		.tolak-btn {
			width: 100%; /* volta a ocupar só o conteúdo */
		}
		.card-time {
			width: 100%;
		}
		/* A partir de telas grandes (desktop) */
		@media (min-width: 992px) {
			.tolak-btn {
				width: 50%; /* volta a ocupar só o conteúdo */
			}

			.card-time {
				width: 60%;
			}

		}

		@media (max-width: 767px) {
			.main-slider-three__content {
				padding-top: 90px;
				padding-bottom: 100px;
			}
		}
		/* Card principal */
		.urgency-card {
			background: #fff;
			text-align: center;
			margin: 5rem 1rem;
			padding: 1rem;
			border-radius: 17px;
			visibility: visible;
			animation-delay: 500ms;
			animation-name: fadeInUp;
			display: flex;
			flex-direction: column;
			align-items: center;
			gap: 4px;
		}

		.testimonials-three__image__left {
			position: absolute;
			left: 440px !important;
			top: 34px;
			animation: topToBottom 2.5s linear 0s infinite;
		}
		/* Número grande */
		.urgency-number {
			font-size: 30px;
		}

		/* Título */
		.urgency-title {
			font-weight: 600;
			color: #000;
		}

		/* Texto menor */
		.urgency-text {
			color: #000;
			font-size: 15px;
		}

		.img-animale {
			position: absolute;
			top: -19rem;
			z-index: 9999999999999 !important;
			width: 30rem;
		}

		.card-discont {
			visibility: visible;
			padding-inline: 8rem;
		}

		.img-animale-2 {
			position: absolute;
			z-index: 9999;
			width: 37rem;
			height: 20rem;
			top: -18rem;
			left: 0;
		}

		@media (max-width: 767px) {
			.urgency-card {
				margin: 1rem;
			}
			.img-animale {
				position: absolute;
				top: -7rem;
				z-index: 9999999999999;
				width: 10rem;
			}

			.card-discont {
				visibility: visible;
				padding-inline: 1rem;
			}

			.img-animale-2 {
				position: absolute;
				z-index: 9999;
				width: 15rem;
				height: 20rem;
				top: -3rem;
				left: 0;
			}

		}


		@keyframes topToBottom {

			0%, 100% {
				transform: translateY(0);
			}
			25%, 75% {
				transform: translateY(8px);
			}
			50% {
				transform: translateY(16px);
			}
		}

	</style>

</head>

<body class="custom-cursor" style="overflow-x: hidden;">
	@include('includes.clickcease')



	<div class="">

		<section class="section-alert">
			<div>
				<p class="p-2 text-white rounded-1 fw-semibold transition duration-300 transform hover:scale-105 pulse-cta">{{$urgency[0]['sec-1-span-1']}}</p>
			</div>
		</section>

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
                        <div class="main-slider-three__bg" style="background-image: url(/{{$urgency[0]['sec-2-img-2']}});"></div><!-- slider-bg -->
                        <div class="main-slider-three__shape-one" style="background-image: url(/{{$urgency[0]['sec-2-img-4']}});"></div><!-- slider-shape -->
                        <div class="main-slider-three__shape-two" style="background-image: url(/{{$urgency[0]['sec-2-img-5']}});"></div><!-- slider-shape -->
                        <div class="container">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="main-slider-three__content">
										<img src="/{{$urgency[0]['sec-2-img-1']}}" alt="logo SOSPRAGAS" width="284">
										<div style="margin-block: 30px;">
											<h2 class="main-slider-three__title">
												<span class="main-slider-three__title__anim">{{$urgency[0]['sec-2-h-1']}}</span>
												<span class="main-slider-three__title__anim">{{$urgency[0]['sec-2-h-2']}}</span>
											</h2><!-- slider-title -->
											<ul class="custom-list">
												@foreach(explode("\r\n", $urgency[0]['sec-2-span-1']) as $feature)
													<div class="d-flex align-items-center gap-2">
														<li>{{$feature}}</li>
													</div>
												@endforeach
												{{-- <li>{{$urgency[0]['sec-2-span-1']}}</li>
												<li>Baratas</li>
												<li>Percevejos</li> --}}
											</ul>
										</div>
										<div class="card-time">
											<span>{{$urgency[0]['sec-2-span-2']}}</span>
											<h2  id="timer">{{$urgency[0]['sec-2-span-4']}}</h2>
										</div>
										<div class="main-slider-three__btn">
											<a href="tel:+351219747353" class="tolak-btn"><b style="text-transform: uppercase;font-weight: 700;">{{$urgency[0]['sec-2-span-3']}}</b><span></span></a><!-- slider-btn -->
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="main-slider-three__thumb">
										<img src="/{{$urgency[0]['sec-2-img-3']}}"
											alt="tolak">
									</div>
								</div>

							</div>
						</div>
                    </div>
                </div>

            </div>
        </section>

		{{-- <section class="main-slider-three">

			<div class="owl-stage-outer">
				<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 100%;">
					<div class="owl-item active" style="width: 100%;">
						<div class="item">
							<div class="main-slider-three__item">
								<div class="main-slider-three__bg"
									style="background-image: url(/{{$urgency[0]['sec-2-img-2']}});">
								</div>
								<div class="main-slider-three__shape-one"
									style="background-image: url(/{{$urgency[0]['sec-2-img-4']}});">
								</div>
								<div class="main-slider-three__shape-two" style="background-image: url(/{{$urgency[0]['sec-2-img-5']}});"></div>
								<div class="container">
									<div class="row">
										<div class="col-12 col-lg-6">
											<div class="main-slider-three__content">
												<img src="/{{$urgency[0]['sec-2-img-1']}}" alt="logo SOSPRAGAS" width="284">
												<div style="margin-block: 30px;">
													<h2 class="main-slider-three__title">
														<span class="main-slider-three__title__anim">{{$urgency[0]['sec-2-h-1']}}</span>
														<span class="main-slider-three__title__anim">{{$urgency[0]['sec-2-h-2']}}</span>
													</h2>
													<ul class="custom-list">
														@foreach(explode("\r\n", $urgency[0]['sec-2-span-1']) as $feature)
															<div class="d-flex align-items-center gap-2">
																<li>{{$feature}}</li>
															</div>
														@endforeach
													</ul>
												</div>
												<div class="card-time">
													<span>{{$urgency[0]['sec-2-span-2']}}</span>
													<h2  id="timer">{{$urgency[0]['sec-2-span-4']}}</h2>
												</div>
												<div class="main-slider-three__btn">
													<a href="tel:+351219747353" class="tolak-btn"><b style="text-transform: uppercase;font-weight: 700;">{{$urgency[0]['sec-2-span-3']}}</b><span></span></a><!-- slider-btn -->
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="main-slider-three__thumb">
												<img src="/{{$urgency[0]['sec-2-img-3']}}"
													alt="tolak">
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

		<section class="cta-one">
			<div class="cta-one__bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-lg-4" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInLeft;">
						<div class="img-animale" style="">
							<img src="/{{$urgency[0]['sec-3-img-1']}}" alt="tolak">
						</div>
					</div>
					<div class="col-lg-8 mt-8 mt-lg-0 d-flex" data-wow-delay="500ms">
						<div class="urgency-card">
							<div style="width: 49px;display: flex;">
								<img src="/{{$urgency[0]['sec-3-span-1']}}" alt="tolak">
							</div>
							<span class="urgency-number"></span>
							<p class="urgency-title">{{$urgency[0]['sec-3-h-1']}}</p>
							<span class="urgency-text">{{$urgency[0]['sec-3-span-2']}}</span>
						</div>
						<div class="urgency-card">
							<div style="width: 49px;display: flex;">
								<img src="/{{$urgency[0]['sec-3-span-3']}}" alt="tolak">
							</div>
							<p class="urgency-title">{{$urgency[0]['sec-3-h-2']}}</p>
							<span class="urgency-text">{{$urgency[0]['sec-3-span-4']}}</span>
						</div>
					</div>
					{{-- <div class="col-lg-4" data-wow-delay="500ms">

					</div> --}}
				</div>
			</div>
		</section>

		<section class="testimonials-three">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(/assets/images/backgrounds/testimonial-bg-3.jpg);"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h3 class="sec-title-two__title">{{$urgency[0]['sec-4-h-1']}}</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row">

                    <div class="col-lg-6">
                        <div class="testimonials-three__content" style="border-radius:30px;">
                            <h4 class="testimonials-three__content__title">
                                Os nossos clientes são 5 estrelas
                            </h4>
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
							@isset($comments)
								@foreach ($comments as $comment)
								<div class="item">
									<div class="testimonials-card-three">
										<div class="testimonials-card-three__content">
											<span class="testimonials-card-three__content__quote">“ </span>
											<span style="color: #444444;">{{$comment['comment']}}</span>
										</div>
										<div class="testimonials-card-three__author">
											<h3 class="testimonials-card-three__name">
												{{$comment['name']}}
											</h3>
										</div>
									</div>
								</div>
								@endforeach
							@endisset


                            </div><!-- /.testimonials-three__carousel -->
                        </div>
                    </div>
					<div class="col-lg-6">
                        <div class="testimonials-three__image slideInLeft">
							<img src="/{{$urgency[0]['sec-4-img-1']}}" alt="tolak" style="border-radius: 30px; visibility: visible; animation-name: slideInLeft;" class="wow slideInLeft animated animated">
                            {{-- <img src="/{{$urgency[0]['sec-4-img-1']}}" alt="tolak" style="border-radius:30px; visibility: visible; animation-name: slideInLeft;"> --}}
                            <img class="testimonials-three__image__left" src="/{{$urgency[0]['sec-4-img-2']}}" alt="tolak" style="border-radius:30px;">
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section>

		<section class="service-five">
            <div class="container">
                <div class="sec-title-three text-center">
                    <h3 class="sec-title-three__title">{{$urgency[0]['sec-5-h-1']}}</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
			</div>
			<div class="container-lg">
				<div class="row">
					@isset($cards)
						@foreach ($cards as $card)
						<div class="col-lg-6 col-md-6">
							<div class="item mb-4">
								<div class="service-five__item text-center">
									<div class="service-five__item__image">
										<img src="/{{$card['img']}}" alt="tolak">
									</div>
									<div class="service-five__item__content">
										<div class="service-five__item__icon">
											<img src="/{{$card['icon']}}" alt="tolak">
										</div><!-- /.service-icon -->
										<h3 class="service-five__item__title">
											<a href="business-marketing.html">{{$card['title']}}</a>
										</h3><!-- /.service-title -->
										<p class="service-five__item__text">
											{{$card['description']}}
										</p><!-- /.service-text -->
									</div>
								</div>
							</div>
						</div>
						@endforeach
					@endisset
				</div>
			</div>
		</section>


		<section style="">
			<div style="display: flex;flex-direction: column;align-items: center;padding-block: 1rem;padding-bottom: 3rem;background: #f7f8fc;">
				<span style="color: #022154;font-size: 30px;font-weight: 600;">{{$urgency[0]['sec-6-h-1']}}</span>
				<span style="color: #ff6600;font-size: 30px;font-weight: 600;">{{$urgency[0]['sec-6-h-2']}}</span>
			</div>
			<div class="" style="background: #041e1f;">
				<div class="row justify-content-center align-items-center" style="position: relative;padding-block: 4rem;">
					<div class="col-md-5 card-discont" style="">
						<div class="pricing-one__card text-center">
							<div class="pricing-one__card__icon">
								<i class="icon-low-cost"></i>
							</div>
							<h4 class="pricing-one__card__title">{{$urgency[0]['sec-6-h-3']}}</h4>
							<h3 class="pricing-one__card__price">{{$urgency[0]['sec-6-h-4']}}</h3>
							<div style="display: flex;justify-content: center;flex-direction: column;align-items: center;">
								@foreach(explode("\r\n", $urgency[0]['sec-6-span-1']) as $feature)
									<div style="display: flex;align-content: center;align-items: center;gap: 2px;">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet"><path fill="#46c77e" d="M34.459 1.375a2.999 2.999 0 0 0-4.149.884L13.5 28.17l-8.198-7.58a2.999 2.999 0 1 0-4.073 4.405l10.764 9.952s.309.266.452.359a2.999 2.999 0 0 0 4.15-.884L35.343 5.524a2.999 2.999 0 0 0-.884-4.149z"></path></svg>
										<span>{{$feature}}</span>
									</div>
								@endforeach

							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div style="display: flex;flex-direction: column;gap: 16px;margin-block: -2rem 4rem;">
							<h2 style="font-size: 35px;font-weight: 600;color: #fff;">{{$urgency[0]['sec-6-h-5']}}</h2>
							<p style="color: #fff;font-size: 16px;">
								{{$urgency[0]['sec-6-span-2']}}
							</p>
						</div>
						<div style="display: flex;gap: 5px;">
							<div style="width: 50%;background: red;display: flex;flex-direction: column;align-items: center;padding: 16px;border-radius: 5px;" class="btn-call-now">
								<span style="color: #f2eb0c;">{{$urgency[0]['sec-6-span-3']}}</span>
								<span style="font-size: 30px;font-weight: 600;color: #fff;text-align: center;" id="timer2">{{$urgency[0]['sec-2-span-4']}}</span>
							</div>
							<div style="width: 50%;display: flex;flex-direction: column;gap: 5px;justify-content: center;">
								<div class="btn-call-now" style="background: #4db051;padding: 11px;display: flex;justify-content: center;color: #fff;border-radius: 4px;align-items: center;">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 909 900" fill="none">
									<g filter="url(#filter0_d_1609_353)">
										<path d="M54 850L122.8 643.614C87.8897 584.897 67.7931 516.372 67.7931 443.103C67.7931 226 243.793 50 460.897 50C678 50 854 226 854 443.103C854 660.207 678 836.207 460.897 836.207C394.841 836.207 332.634 819.834 278 791.062L54 850Z" fill="#2CB742"></path>
									</g>
									<path d="M711.693 573.932C693.541 539.628 626.603 500.401 626.603 500.401C611.458 491.766 593.183 490.801 584.548 506.194C584.548 506.194 562.796 532.276 557.265 536.028C531.996 553.145 508.589 552.483 484.962 528.856L430.052 473.945L375.141 419.035C351.514 395.407 350.852 372.001 367.969 346.732C371.721 341.201 397.803 319.449 397.803 319.449C413.196 310.801 412.231 292.539 403.596 277.394C403.596 277.394 364.369 210.456 330.065 192.304C315.472 184.58 297.555 187.283 285.886 198.952L261.638 223.201C184.714 300.125 222.589 386.966 299.514 463.89L369.817 534.194L440.12 604.497C517.045 681.421 603.886 719.297 680.81 642.373L705.058 618.125C716.727 606.428 719.417 588.511 711.693 573.932Z" fill="white"></path>

									<defs>
										<filter id="filter0_d_1609_353" x="-50%" y="-50%" width="200%" height="200%" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
										<feOffset dy="8"></feOffset>
										<feGaussianBlur stdDeviation="6"></feGaussianBlur>
										<feComposite in2="hardAlpha" operator="out"></feComposite>
										<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1609_353"></feBlend>
										<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1609_353" result="shape"></feBlend>
										</filter>
									</defs>
								</svg>
									<span>{{$urgency[0]['sec-6-span-4']}}</span>
								</div>
								<div class="btn-call-now" style="background: #ff6600;padding: 11px;display: flex;justify-content: center;color: #fff;border-radius: 4px;">
									<span>{{$urgency[0]['sec-6-span-5']}}</span>
								</div>
							</div>
						</div>
						<p style="font-size: 20px;text-align: center;color: #eb6207;margin-top: 15px;"  class="btn-call-now">{{$urgency[0]['sec-6-span-6']}}</p>
					</div>
					<div class="img-animale-2">
						<img src="/{{$urgency[0]['sec-6-img-2']}}" alt="tolak">
					</div>
				</div>
			</div>
		</section>

		@php
			$domain = request()->getHost();
			$baseUrl = $domain === 'sospragas.pt' ? 'https://sospragas.pt' : 'https://desinfestacoes.sospragas.pt';
		@endphp
		<script>
			let captchaRendered = false;

			function loadCaptchaContactForm() {
				if (captchaRendered) return;

				const script = document.createElement('script');
				script.src = 'https://js.hcaptcha.com/1/api.js?onload=onCaptchaLoadContactForm&render=explicit';
				script.async = true;
				script.defer = true;
				document.body.appendChild(script);

				captchaRendered = true;
			}

			function onCaptchaLoadContactForm() {
				hcaptcha.render('captcha-container-contact-form', {
					sitekey: 'f27e3306-f27a-4bc0-a162-3678fc648a4e',
					callback: onCaptchaSuccessContactForm
				});
			}

			function onCaptchaSuccessContactForm(token) {
				// Libera o botão de envio se o captcha foi resolvido

				const form = document.getElementById("contact-form");
				form.action = "{{ $baseUrl . route('HomePage.thankYouFormContactForm', [], false) }}";
				form.method = "POST";

				// Dar submit
				form.submit();
			}
		</script>
		<section class="contact-two mb-8">
            <div class="container" style="border: 1px solid #d8d8d8;padding-block: 4rem;border-radius: 20px;">
                <div class="row justify-content-center align-items-center">
					<div class="col-lg-5">
						<div class="contact-two__info wow slideInLeft animated animated">
							<div class="contact-two__info__shape" style="background-image:url(/{{$urgency[0]['sec-7-img-1']}});background-size: cover;background-repeat: no-repeat;background-position: center;"></div>
							<h4 class="contact-two__info__title"><b>{{$urgency[0]['sec-7-h-1']}}</b></h4>
							<p class="contact-two__info__text">
								{{$urgency[0]['sec-7-span-1']}}
							</p>
							<style>
								.contact-two__info__box__icon:hover {
									.svg-phone {
										fill: white;
										-webkit-font-smoothing:antialiased;
										transition: all 500ms ease;
									}
								}
								.contact-two__info__box:hover {
									.svg-phone {
										fill: white;
										-webkit-font-smoothing:antialiased;
										transition: all 500ms ease;
									}
								}
							</style>
							<ul class="contact-two__info__box-wrapper">
								<li class="contact-two__info__box" id="hoverphone">
									<div class="contact-two__info__box__icon">
										<svg xmlns="http://www.w3.org/2000/svg" class="svg-phone" id="icon-phone" fill="#002255" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 473.806 473.806; width: 40px;" xml:space="preserve">
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
									<h4 class="contact-two__info__box__title">{{$urgency[0]['sec-7-span-2']}}</h4>
									<p class="contact-two__info__box__text"><a href="tel:025461556695">{{$urgency[0]['sec-7-span-3']}}</a></p>
								</li>
								<li class="contact-two__info__box">
									<div class="contact-two__info__box__icon"><i class="icon-open-mail"></i></div>
									<h4 class="contact-two__info__box__title">{{$urgency[0]['sec-7-span-4']}}</h4>
									<p class="contact-two__info__box__text"><a href="mailto:{{$urgency[0]['sec-7-span-5']}}">{{$urgency[0]['sec-7-span-5']}}</a></p>
								</li>
								<li class="contact-two__info__box">
									<div class="contact-two__info__box__icon"><i class="icon-pin"></i></div>
									<h4 class="contact-two__info__box__title">{{$urgency[0]['sec-7-span-6']}}</h4>
									<p class="contact-two__info__box__text">{{$urgency[0]['sec-7-span-6']}}</p>
								</li>
							</ul>
							<div class="contact-two__info__social">
								<h5 class="contact-two__info__social__title">Siga-nos:</h5>
								<div class="contact-two__info__social__wrap">
									<a href="{{$urgency[0]['sec-7-span-8']}}" target="_blank">
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
									<a href="{{$urgency[0]['sec-7-span-9']}}" target="_blank">
										<i class="fab fa-instagram" aria-hidden="true"></i>
										<span class="sr-only">Instagram</span>
									</a>
								</div>
							</div><!-- contact-social -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-two__content">

							<form class="contact-two__form form-one form-contacts" id="contact-form" method="POST">
								@csrf
								@method('post')
								<div class="form-one__group">
									<input class="input-field rounded" type="hidden" value="ContactFormContactos" placeholder="type_form" name="type_form">
									<div class="form-one__control">
										<input type="text" name="name" placeholder="Nome">
									</div><!-- /.form-one__control -->
									<div style="display: flex;justify-content: space-around;gap: 20px;">
										<div class="form-one__control" style="width: 50%;">
											<input type="email" name="email" placeholder="Email">
										</div><!-- /.form-one__control -->
										<div class="form-one__control" style="width: 50%;">
											<input type="text" name="phone" placeholder="Telefone">
										</div><!-- /.form-one__control -->
										{{-- <div class="form-one__control" style="width: 50%;">
											<input type="text" name="phone2" placeholder="(XX) XXXXX-XXXX">
										</div> --}}
									</div>
									<select class="form-select" name="service">
										<option>Selecione a praga que esta a incomodar</option>
										 @isset($services)
                    						@foreach ($services as $service)
												<option value="{{ $service['a'] }}">{{ $service['a'] }}</option>
											@endforeach
                						@endisset
									</select>

									<div class="form-one__control">
											<input type="text" name="locality" placeholder="Localização">
										</div><!-- /.form-one__control -->
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="flexCheckDefault" required="">
										<label class="form-check-label text-left" for="flexCheckDefault" style="color:grey;font-size:12px;">
											Tenho conhecimento e aceito a <a href="/politica-privacidade" target="_blank">Política de Privacidade</a>
										</label>
									</div>
									<div id="captcha-container-contact-form" style="display: flex; justify-content: center;"></div>
									<div class="form-one__control">
										<button type="button" onclick="loadCaptchaContactForm()" class="tolak-btn2"><b>QUERO FICAR LIVRE DAS PRAGAS HOJE!</b></button>
									</div><!-- /.form-one__control -->
								</div><!-- /.form-one__group -->
							</form>
						</div>
					</div>
				</div>
            </div><!-- /.container -->
        </section><!-- /.contact -->


		<footer class="main-footer background-black" style="padding-block: 3rem;">
			<div style="display: flex;flex-direction: column;align-items: center;gap: 15px;">
				<div style="width: 25rem;padding-bottom: 2rem;">
					<img src="/{{$urgency[0]['sec-8-img-1']}}" alt="tolak">
				</div>
				<p style="font-size: 23px;color: #ff6600;">{{$urgency[0]['sec-8-span-1']}}
				</p><div style="display: flex;gap: 23px;color: #fff;">
					<a href="mailto:{{$urgency[0]['sec-8-span-2']}}" style="color: #fff;font-size: 18px;">{{$urgency[0]['sec-8-span-2']}}</a>
					<a href="mailto:{{$urgency[0]['sec-8-span-3']}}" style="color: #fff;font-size: 18px;">{{$urgency[0]['sec-8-span-3']}}</a>
				</div>
				<span style="color: #fff;text-align: center;"> © 2025 {{$urgency[0]['sec-8-span-4']}}</span>
			</div>
		</footer>
	</div>




	<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
		<span class="scroll-to-top__text">back top</span>
		<span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
	</a>

	<script>
		// Pega o elemento
		let timerElement = document.getElementById("timer");
		let timerElement2 = document.getElementById("timer2");


		// Pega o valor da tela (em minutos) e converte para segundos
		let time = parseInt(timerElement.textContent) * 60;
		let time2 = parseInt(timerElement2.textContent) * 60;


		// Função para formatar segundos em hh:mm:ss
		function formatTime(seconds) {
			let hrs = Math.floor(seconds / 3600);
			let mins = Math.floor((seconds % 3600) / 60);
			let secs = seconds % 60;

			return (
			String(hrs).padStart(2, "0") + ":" +
			String(mins).padStart(2, "0") + ":" +
			String(secs).padStart(2, "0")
			);
		}

		// Exibe o valor inicial formatado
		timerElement.textContent = formatTime(time);
		timerElement2.textContent = formatTime(time2);

		// Contador regressivo
		let countdown = setInterval(function () {
			time--; // diminui 1 segundo
			time2--; // diminui 1 segundo
			timerElement.textContent = formatTime(time);
			timerElement2.textContent = formatTime(time2);

			if (time <= 0) {
				clearInterval(countdown);
				timerElement.innerHTML = "<span style='font-size: 20px;'>Ligue agora, com sorte ainda lhe fazemos o desconto 😉</span>";
			}
			if (time2 <= 0) {
				clearInterval(countdown);
				timerElement2.innerHTML = "<span style='font-size: 20px;'>Ligue agora, com sorte ainda lhe fazemos o desconto 😉</span>";
			}
		}, 1000);
	</script>
	@include('includes.cookies')
	<!-- template js -->
	@once
		<script src="{{ asset('assets/js/tolak.min.js') }}"></script>
	@endonce

</body>

</html>