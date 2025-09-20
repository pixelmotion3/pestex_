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

	<script src="{{ asset('assets/vendors/icofont/icofont.min.css') }}" ></script>

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

		.why-choose-three__content {
			position: relative;
			padding: 45px 0;
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
			flex-wrap: wrap;
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
			background: #ff6600;
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

		.pricing-one__card__icon img {
			width: 8rem !important;
			height: 8rem !important;
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
			background-color: #f9f9f9;
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
			z-index: -9999 !important;
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


		.card-time {
			width: 100%;
		}
		/* A partir de telas grandes (desktop) */
		@media (min-width: 992px) {

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
			color: #ff6600;
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
			z-index: 99;
			width: 37rem;
			height: 20rem;
			top: -14rem;
			left: 0;
		}

		.logo-footer {
			width: 25%;
			padding-bottom: 2rem;
		}

		.section-six-promotion {
			display: flex;
			flex-direction: column;
			gap: 16px;
			margin-block: -2rem 40px;
		}

		.main-slider-three .active .main-slider-three__thumb {
			opacity: 1;
			transform: translateY(0);
			transition-delay: 1s;
		}

		@media (max-width: 767px) {
			.urgency-card {
				margin: 1rem;
				width: 100%;
			}
			.img-animale {
				position: absolute;
				top: -7rem;
				left: 7rem;
				z-index: 9999999999999;
				width: 10rem;
			}

			.card-discont {
				visibility: visible;
				padding-inline: 1rem;
			}

			.img-animale-2 {
				position: absolute;
				z-index: 99;
				width: 15rem;
				height: 20rem;
				top: -3rem;
				left: 0;
			}

			.logo-footer {
				width: 80%;
				padding-bottom: 2rem;
			}

			.section-six-promotion {
				display: flex;
				flex-direction: column;
				gap: 16px;
				margin-block: 4rem 4rem;
			}

			.service-five {
				position: relative;
				background-color: #f7f8fc;
				padding-top: 3rem;
				padding-bottom: 0rem;
			}

		}

		.service-five__item__title {
			font-size: 22px;
			font-weight: 700;
			margin: 0 0 14px;
			color: #ff6600;
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

		@media (max-width: 767px) {
			.main-slider-four__btn {
				gap: 15px;
				display: flex;
        		flex-direction: column;
			}
		}

		@media (max-width: 767px) {
			.main-slider-four__btn .tolak-btn--one {
				padding: 10px 28px;
			}
		}

		@media (max-width: 767px) {
			.main-slider-four__title {
				font-size: 34px !important;
				line-height: 45px;
			}
		}

	</style>

</head>

<body style="overflow-x: hidden;">
	@include('includes.clickcease')



	<div class="">

		<section class="section-alert"></section>

		<section class="main-slider-four">
            <div class="main-slider-four__carousel tolak-owl__carousel owl-carousel owl-loaded owl-drag" data-owl-options="{
			&quot;loop&quot;: true,
			&quot;animateOut&quot;: &quot;fadeOut&quot;,
			&quot;animateIn&quot;: &quot;fadeIn&quot;,
			&quot;items&quot;: 1,
			&quot;autoplay&quot;: true,
			&quot;autoplayTimeout&quot;: 7000,
			&quot;smartSpeed&quot;: 1000,
			&quot;nav&quot;: false,
			&quot;navText&quot;: [&quot;&lt;span class=\&quot;icon-left-arrow\&quot;&gt;&lt;/span&gt;&quot;,&quot;&lt;span class=\&quot;icon-right-arrow\&quot;&gt;&lt;/span&gt;&quot;],
			&quot;dots&quot;: true,
			&quot;margin&quot;: 0
			}">
			<div class="owl-stage-outer">
					<div class="owl-stage"
						style="transform: translate3d(-4562px, 0px, 0px); transition: all; width: 9125px;">
						<div class="owl-item" style="width: 1520.8px;">
							<div class="item">
								<div class="main-slider-four__item">
									<div class="main-slider-four__bg"
										style="background-image: url({{$maintenance[0]['sec_1_img_2']}});">
									</div>
									<div class="main-slider-four__bg"
										style="background-image: url({{$maintenance[0]['sec_1_img_2']}});">
									</div>
									<div class="main-slider-four__bg"
										style="background-image: url({{$maintenance[0]['sec_1_img_2']}});">
									</div>
									<div class="container">
										<div class="row">
											<div class="col-md-12 text-center">
												<div class="main-slider-four__content">
													<h5 class="main-slider-four__sub-title" style="background-color: transparent !important;">
														<img src="/{{$maintenance[0]['sec_1_img_1']}}" alt="tolak" style="width: 31rem;">
													</h5>
													<!-- slider-sub-title -->
													<h3 class="main-slider-four__title-two" style="color: #ff6600">{{$maintenance[0]['sec_1_h_1']}}</h3>
													<!-- slider-title -->
													<h2 class="main-slider-four__title" style="-webkit-text-fill-color: white !important; -webkit-text-stroke-width: 0px !important; -webkit-text-stroke-color: var(--tolak-white, #fff) !important; text-transform: none !important; font-size: 56px;">
														{!! $maintenance[0]['sec_1_h_2'] !!}
													</h2>
													<!-- slider-title -->
													<div class="main-slider-four__text">
														<p class="main-slider-four__text__one" style="color: #fff">
															{!! $maintenance[0]['sec_1_p_3'] !!}
														</p>
													</div><!-- slider-text -->
													<div class="main-slider-four__btn">
														<a href="contact.html" class="tolak-btn"><b>{{$maintenance[0]['sec_1_span_4']}}</b><span></span></a>
														<a href="services.html" class="tolak-btn tolak-btn--one"><b>{{$maintenance[0]['sec_1_span_5']}}</b><span></span></a>
													</div><!-- slider-btn -->
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



		<section class="cta-one">
			<div class="cta-one__bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center">

					<div class="col-lg-12 mt-8 mt-lg-0 d-flex flex-wrap">
						<div class="urgency-card wow slideInUp animated2 animated animated">
							<div style="width: 49px;display: flex;">
								<img src="/{{$maintenance[0]['sec_2_img_1']}}" alt="tolak">
							</div>
							<span class="urgency-number"></span>
							<p class="urgency-title">{{$maintenance[0]['sec_2_span_1']}}</p>
							<span class="urgency-text">{!! $maintenance[0]['sec_2_span_2'] !!}</span>
						</div>
						<div class="urgency-card wow slideInUp animated2 animated animated">
							<div style="width: 49px;display: flex;">
								<img src="/{{$maintenance[0]['sec_2_img_2']}}" alt="tolak">
							</div>
							<span class="urgency-number"></span>
							<p class="urgency-title">{{$maintenance[0]['sec_2_span_3']}}</p>
							<span class="urgency-text">{!! $maintenance[0]['sec_2_span_4'] !!}</span>
						</div>
						<div class="urgency-card wow slideInUp animated2 animated animated">
							<div style="width: 49px;display: flex;">
								<img src="/{{$maintenance[0]['sec_2_img_3']}}" alt="tolak">
							</div>
							<span class="urgency-number"></span>
							<p class="urgency-title">{{$maintenance[0]['sec_2_span_5']}}</p>
							<span class="urgency-text">{!! $maintenance[0]['sec_2_span_6'] !!}</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="service-five">
            <div class="container">
                <div class="sec-title-three text-center">
                    <h3 class="sec-title-three__title" style="color: #002254;">{{$maintenance[0]['sec_3_h_1']}}</h3><!-- /.sec-title-three__title -->
					<p class="text-gray mt-3">{{$maintenance[0]['sec_3_p_1']}}</p>
                </div><!-- /.sec-title-three -->
			</div>
			<div class="container-lg">
				<div class="row">
					@isset($cards)
						@foreach ($cards as $card)
						<div class="col-lg-4 col-md-4">
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
											{{$card['title']}}
										</h3><!-- /.service-title -->
										<p class="service-five__item__text">
											{!! $card['description'] !!}
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

		<section class="about-one" id="sobrenos">

			<div class="about-one__bg lazy-background" data-bg="/{{$maintenance[0]['sec_4_img_1']}}">
			</div>
			<div class="about-one__shape lazy-background" data-bg="/{{$maintenance[0]['sec_4_img_1']}}">
			</div>

			<div class="auto-container">
				<div class="row">
					<div class="col-xl-6 wow fadeInLeft animated animated" data-wow-delay="1000ms" style="visibility: visible; animation-delay: 1000ms; animation-name: fadeInLeft;">
						<div class="about-one__content">
							<div class="text-titles mb-5">
								<h5 class="sec-title__tagline text-titles">{{$maintenance[0]['sec_4_p_1']}}</h5>
								<!-- /.sec-title__tagline -->
								<h3 class="sec-title__title">{!! $maintenance[0]['sec_4_h_1'] !!}</h3>
								<!-- /.sec-title__title -->
							</div><!-- /.sec-title -->
							<div class="about-one__content__list text-white" style="display: flex;flex-direction: column;">
								@isset($whyUsArray)
									@foreach ($whyUsArray as $whyUs)
										<div style="font-size: 16px;">
											<span style="color: #ff6600;">{{$whyUs['text1']}}</span>
											<span class="text-white">{{$whyUs['response']}}</span>
										</div>
									@endforeach
								@endisset

							</div>

						</div><!-- /.about__content -->
					</div><!-- /.col-xl-6 -->
					<div class="col-xl-1 bg-primary rounded" style="margin-right: -100px;z-index:2;">

					</div>
					<div class="col-xl-6">
						<div class="tolak-stretch-element-inside-column" style="margin-left: 0px; margin-right: -175.6px;">
							<div class="about-one__image wow slideInRight animated animated" style="visibility: visible; animation-name: slideInRight;">
								<img src="/{{$maintenance[0]['sec_4_img_1']}}" alt="tolak" loading="lazy">
							</div><!-- /.about__image -->
						</div><!-- /.tolak-stretch-element-inside-column  -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>


		<section class="featurer-six">
            <div class="container">
                <div class="sec-title-four text-center">
					<h3 class="sec-title-three__title" style="color: #002254;">{{$maintenance[0]['sec_5_h_1']}}</h3>
                </div><!-- /.sec-title-four -->
                <div class="row gutter-y-30">
					@isset($cardsBenefits)
						@foreach ($cardsBenefits as $item)
							<div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
								<div class="featurer-six__item">
									<div class="featurer-six__item__hover" style="background-image: url(/{{$item['img']}});"></div>
									<div class="featurer-six__item__icon">
										<img src="/{{$item['icon']}}"/>
									</div>
									<h4 class="featurer-six__item__title">{{$item['title']}}</h4>
									<p>{!! $item['description'] !!}</p>
								</div><!-- feature-item -->
							</div>
						@endforeach
					@endisset
                    {{-- <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="featurer-six__item">
                            <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                            <div class="featurer-six__item__icon">
                                <span class="tolak-icons-two-solutions-three"></span>
                            </div>
                            <h4 class="featurer-six__item__title">Operational<br> Efficiency</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="featurer-six__item">
                            <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                            <div class="featurer-six__item__icon">
                                <span class="tolak-icons-two-diagram"></span>
                            </div>
                            <h4 class="featurer-six__item__title">Financial<br> Management</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="featurer-six__item">
                            <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                            <div class="featurer-six__item__icon">
                                <span class="tolak-icons-two-algorithm"></span>
                            </div>
                            <h4 class="featurer-six__item__title">Business<br> Resources</h4>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>


		<section class="testimonials-three">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-color: #122438;"></div>
            <div class="container">
				<div class="sec-title-three text-center">
                    <h3 class="sec-title-three__title" style="color: #fff;">{{$maintenance[0]['sec_6_h_1']}}</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
                {{-- <div class="sec-title-two text-center">
                    <h3 class="sec-title-two__title">{{$urgency[0]['sec-4-h-1']}}</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two --> --}}
                <div class="row">

                    <div class="col-lg-6">
                        <div class="testimonials-three__content" style="border-radius:30px;">
                            <h4 class="testimonials-three__content__title">
                                O que dizem os nossos clientes
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
											<span style="color: #ff6600;font-size: 12px;">Cliente SOS Pragas</span>
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
							<img src="/{{$maintenance[0]['sec_6_img_1']}}" alt="tolak" style="border-radius: 30px; visibility: visible; animation-name: slideInLeft;" class="wow slideInLeft animated animated">
                            {{-- <img src="/{{$urgency[0]['sec-4-img-1']}}" alt="tolak" style="border-radius:30px; visibility: visible; animation-name: slideInLeft;"> --}}
                            <img class="testimonials-three__image__left" src="/{{$maintenance[0]['sec_6_img_2']}}" alt="tolak" style="border-radius:30px;">
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section>

		<section class="why-choose-three">
            <div class="why-choose-three__bg" style="background-image: url();"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tolak-stretch-element-inside-column" style="margin-left: -175.4px; margin-right: 0px;">
                            <div class="why-choose-three__image wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
                                <img src="/{{$maintenance[0]['sec_7_img_1']}}" alt="tolak">
                            </div><!-- /.why-choose-three__image -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex align-items-center wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="why-choose-three__content">
                            <div class="sec-title-three text-left">

                                <h3 class="sec-title-three__title">{{$maintenance[0]['sec_7_h_1']}}</h3><!-- /.sec-title-three__title -->
                            </div><!-- /.sec-title-three -->
                            <p class="why-choose-three__content__text">
                                {{$maintenance[0]['sec_7_p_1']}}
                            </p>
                            <ul class="why-choose-three__content__list">
								@isset($cardsSteps)
									@foreach ($cardsSteps as $cardStep)
										<li>
											<span class="why-choose-three__content__list__icon" style="margin-left: 1rem;">
												<img src="/{{$cardStep['icon']}}" alt="tolak" width="32">
											</span>
											<div style="display: flex;flex-direction: column;">
												<span>{{$cardStep['title']}}</span>
												<span style="font-size: 14px;font-weight: 100;">{{$cardStep['description']}}</span>
											</div>
											<a class="why-choose-three__content__list__rm" href="team.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
										</li>
									@endforeach
								@endisset
                                {{-- <li>
                                    <span class="why-choose-three__content__list__number"></span>
                                    <span class="why-choose-three__content__list__icon"><i class="tolak-icons-two-global-solution"></i></span>
                                    Accelerate Innovation Tech Teams
                                    <a class="why-choose-three__content__list__rm" href="team.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </li>
                                <li>
                                    <span class="why-choose-three__content__list__number"></span>
                                    <span class="why-choose-three__content__list__icon"><i class="tolak-icons-two-solutions-three"></i></span>
                                    Network Infrastructure software
                                    <a class="why-choose-three__content__list__rm" href="about.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </li>
                                <li>
                                    <span class="why-choose-three__content__list__number"></span>
                                    <span class="why-choose-three__content__list__icon"><i class="tolak-icons-two-gear"></i></span>
                                    We Provide This Solution Business
                                    <a class="why-choose-three__content__list__rm" href="services.html"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </li> --}}
                            </ul>
                        </div><!-- /.why-choose-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

		<section class="faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="faq-page__contact background-base">
                            <h3 class="faq-page__contact__title">{!! $maintenance[0]['sec_8_h_1'] !!}</h3><!-- /.faq-page__contact__title -->
                            <div class="faq-page__contact__text">
                                <i class="icofont-phone">
									<img src="assets/images/call_now.png" alt="Produtos ecologicos seguros" loading="lazy" style="width: 2rem !important;height: 2rem !important;">
								</i>
                                <p class="faq-page__contact__number">
                                    {!! $maintenance[0]['sec_8_p_1'] !!}<br>
                                    <a href="tel:{{$maintenance[0]['sec_8_p_2']}}">{!! $maintenance[0]['sec_8_p_2'] !!}</a>
                                </p><!-- /.faq-page__contact__number -->
                            </div><!-- /.faq-page__contact__text -->
                        </div><!-- /.faq-page__contact -->
                    </div><!-- /.col-lg-4 col-xl-3 -->
                    <div class="col-lg-8">
                        <div class="faq-page__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                            @isset($faqs)
								@foreach ($faqs as $faq)
									<div class="accrodion">
										<div class="accrodion-title">
											<h4>
												<i class="fa fa-check-circle"></i>
												{{$faq['question']}}
												<span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
											</h4>
										</div><!-- /.accordian-title -->
										<div class="accrodion-content" style="display: none;">
											<div class="inner">
												<p>
													{{$faq['response']}}
												</p>
											</div><!-- /.accordian-content -->
										</div>
									</div><!-- /.accordian-item -->
								@endforeach
							@endisset

                            {{-- <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Phasellus et vehicula nulla
                                        <span class="accrodion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Maecenas malesuada
                                        <span class="accrodion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Why you join our team
                                        <span class="accrodion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Maecenas malesuada
                                        <span class="accrodion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


		<section class="cta-four">
            <div class="container mt-5">
                <div class="cta-four__bg" style="background-image: url(/{{$maintenance[0]['sec_9_img_1']}});">
                    <div class="cta-four__shape" style="background-image: url(/{{$maintenance[0]['sec_9_img_2']}});"></div>
                    <div class="cta-four__overlay" style="background-image: url(/{{$maintenance[0]['sec_9_img_4']}});"></div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="cta-four__content">

                                <div class="sec-title-two text-left">

                                    <h3 class="sec-title-two__title">{{$maintenance[0]['sec_9_h_1']}}</h3><!-- /.sec-title-two__title -->
                                </div><!-- /.sec-title-two -->
                                <p class="cta-four__content__text">
                                    {!! $maintenance[0]['sec_9_p_1'] !!}
                                </p>
								<a href="contact.html" class="tolak-btn"><b>{{$maintenance[0]['sec_9_span_1']}}</b><span style="top: 336.137px; left: 274.237px;"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                            <div class="cta-four__image mt-5">
                                <img src="/{{$maintenance[0]['sec_9_img_3']}}" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


		<footer class="main-footer background-black" style="padding-block: 3rem;">
			<div style="display: flex;flex-direction: column;align-items: center;gap: 15px;">
				<div class="logo-footer">
					<img src="/{{$maintenance[0]['sec_10_img_1']}}" alt="tolak">
				</div>
				<p style="font-size: 23px;color: #ff6600;">{{$maintenance[0]['sec_10_span_1']}}
				</p><div style="display: flex;gap: 23px;color: #fff;">
					<a href="mailto:{{$maintenance[0]['sec_10_span_2']}}" style="color: #fff;font-size: 18px;">{{$maintenance[0]['sec_10_span_2']}}</a>
					<a href="tel:{{$maintenance[0]['sec_10_span_3']}}" style="color: #fff;font-size: 18px;">{{$maintenance[0]['sec_10_span_3']}}</a>
				</div>
				<span style="color: #fff;text-align: center;"> © 2025 {{$maintenance[0]['sec_10_span_4']}}</span>
			</div>
		</footer>
	</div>




	<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
		<span class="scroll-to-top__text">back top</span>
		<span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
	</a>


	@include('includes.cookies')
	<!-- template js -->
	@once
		<script src="{{ asset('assets/js/tolak.min.js') }}"></script>
	@endonce

</body>

</html>