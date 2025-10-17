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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TH5LZNRJ');</script>
	<!-- End Google Tag Manager -->
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
			z-index: 99 !important;
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

	</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TH5LZNRJ');</script>
<!-- End Google Tag Manager -->
</head>
{{-- <div style="display: flex;justify-content: flex-end;flex-direction: row;background: #ff6600;height: 31px;align-items: center;" class="container-top-menu">
	<div style="display: flex;color: #fff !important;gap: 17px;margin-right: 14px;font-size: 14px;" class="content-top-menu">
		<div class="headerlinks">
			<span class="ti ti-device-mobile me-2"></span>
			<a href="tel:+351937824676" style="color: #fff;">Serviço de Urgência: <i class="far fa-mobile"></i> +351 937 824 676</a>
		</div>

		<span>|</span>
		<div class="headerlinks">
			<a href="/contactos" style="color: #fff;">Pedir Orçamento grátis</a>
		</div>
	</div>
</div> --}}
<body style="overflow-x: hidden;">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TH5LZNRJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	@include('includes.clickcease')


	<header class="main-header sticky-header sticky-header--one-page">
			<div class="container-fluid">
				<div class="main-header__inner">
					<div class="main-header__logo">
						<a href="/">
							<img src="/assets/images/logo-dark.webp" alt="logo SOSPRAGAS" width="284" height="46.5">
						</a>

					</div><!-- /.main-header__logo -->
					<nav class="main-header__nav main-menu">
						<ul class="main-menu__list">
							<li class="megamenu current"><a href="/" class="font-semibold">Home</a></li>
							<li class="scrollToLink"><a href="/sobre" class="font-semibold">Sobre</a></li>
							<li class="scrollToLink"><a href="/servicos" class="font-semibold">Serviços</a></li>
							<li class="scrollToLink"><a href="/sustentabilidade"
									class="font-semibold">Sustentabilidade</a></li>
							{{-- <li class="scrollToLink"><a href="equipamentos" class="font-semibold">Equipamentos</a>
							</li> --}}
							<li class="scrollToLink"><a href="/blogs" class="font-semibold">Blog</a></li>
							<li class="scrollToLink contactenos-link2"><a href="/contactos"
									class="font-semibold">Contactos</a></li>
							<li class="scrollToLink contactenos-link" style="display: none;"><a
									href="/urgencia" class="font-semibold">Emergência</a></li>
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
						<div class="d-none d-md-flex " style="display: flex;align-items: center;width: 21rem;">
							<a href="/urgencia" class="btn mt-2 theme-btn-three thm-btn contactenos-btn mr-2" type="submit" name="quote_form" style="background: red;">Emergência</a>
							<a href="tel:00351219747353" class="btn mt-2 theme-btn-three thm-btn contactenos-btn" type="submit" name="quote_form">CONTACTE-NOS</a>
						</div>
					</div>
				</div>
			</div>
	</header><!-- /.main-header -->
	<div class="">

		{{-- <section class="section-alert">
			<div>
				<p class="p-2 text-white rounded-1 fw-semibold transition duration-300 transform hover:scale-105 pulse-cta">{{$urgency[0]['sec-1-span-1']}}</p>
			</div>
		</section> --}}

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
                <div class="item" >
                    <div class="main-slider-three__item" style="z-index: 1;">
                        <div class="main-slider-three__bg" style="background-color:#031b2e;"></div><!-- slider-bg -->
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
											<div style="display: flex;gap: 10px;flex-wrap: wrap;margin-top: 1rem;">
												@foreach(explode("\r\n", $urgency[0]['sec-2-span-1']) as $feature)
													<div class="d-flex align-items-center gap-2">
														<span style="color: #ff6600;font-weight: 800;">•</span>
														<span>{{$feature}}</span>
													</div>
												@endforeach
											</div>
											<ul class="custom-list">

												{{-- <li>{{$urgency[0]['sec-2-span-1']}}</li>
												<li>Baratas</li>
												<li>Percevejos</li> --}}
											</ul>
										</div>
										<div class="card-time">
											<span id="text-timer">{{$urgency[0]['sec-2-span-2']}}</span>
											<h2  id="timer">{{$urgency[0]['sec-2-span-4']}}</h2>
										</div>

										<div class="main-slider-three__btn" style="cursor: pointer;">
											<a href="tel:+351937824676" class="tolak-btn" style="padding: 13px 0px 0px 0px !important;display: flex;flex-direction: column;">
												<b style="text-transform: uppercase;font-weight: 700;">{{$urgency[0]['sec-2-span-3']}}</b>
												<b style="color: #fff !important;"> 937 824 676</b>
												<span></span>
											</a><!-- slider-btn -->
										</div>
										<span style="font-size: 14px;">Ligue agora e mencione este desconto</span>
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
					<div class="col-lg-8 mt-8 mt-lg-0 d-flex flex-wrap" data-wow-delay="500ms">
						<div class="urgency-card wow slideInUp animated2 animated animated">
							<div style="width: 49px;display: flex;">
								<img src="/{{$urgency[0]['sec-3-span-1']}}" alt="tolak">
							</div>
							<span class="urgency-number"></span>
							<p class="urgency-title">{{$urgency[0]['sec-3-h-1']}}</p>
							<span class="urgency-text">{!! $urgency[0]['sec-3-span-2'] !!}</span>
						</div>
						<div class="urgency-card wow slideInUp animated2 animated animated">
							<div style="width: 49px;display: flex;">
								<img src="/{{$urgency[0]['sec-3-span-3']}}" alt="tolak">
							</div>
							<p class="urgency-title">{{$urgency[0]['sec-3-h-2']}}</p>
							<span class="urgency-text">{!! $urgency[0]['sec-3-span-4'] !!}</span>
						</div>
					</div>
					{{-- <div class="col-lg-4" data-wow-delay="500ms">

					</div> --}}
				</div>
			</div>
		</section>

		<section class="testimonials-three">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-color: #122438;"></div>
            <div class="container">
				<div class="sec-title-three text-center">
                    <h3 class="sec-title-three__title" style="color: #fff;">{{$urgency[0]['sec-4-h-1']}}</h3><!-- /.sec-title-three__title -->
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
											<h3 class="testimonials-card-three__name" style="margin: 0 0 0px !important;">
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
                    <h3 class="sec-title-three__title" style="color: #ff6600;">{{$urgency[0]['sec-5-h-1']}}</h3><!-- /.sec-title-three__title -->
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


		<section>
			<div style="display: flex;flex-direction: column;align-items: center;padding-block: 1rem;padding-bottom: 3rem;background: #f7f8fc;">
				<span style="color: #022154;font-size: 30px;font-weight: 600;">{{$urgency[0]['sec-6-h-1']}}</span>
				<span style="color: #ff6600;font-size: 30px;font-weight: 600;">{{$urgency[0]['sec-6-h-2']}}</span>
			</div>
			<div class="" style="background: #041e1f;">
				<div class="row justify-content-center align-items-end" style="position: relative;padding-block: 4rem;">
					<div class="col-md-5 card-discont" style="">
						<div class="pricing-one__card text-center">
							<div class="pricing-one__card__icon">
								<img src="/{{$urgency[0]['sec-6-img-3']}}" alt="tolak">
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
						<div class="section-six-promotion">
							<h2 style="font-size: 67px;font-weight: 600;color: #fff;">{{$urgency[0]['sec-6-h-5']}}</h2>
							<p style="color: #fff;font-size: 24px;">
								{!! $urgency[0]['sec-6-span-2'] !!}
							</p>
						</div>
						<div style="display: flex;gap: 5px;">
							<div style="width: 50%;background: red;display: flex;flex-direction: column;align-items: center;padding: 16px;border-radius: 5px;" class="btn-call-now">
								<span style="color: #f2eb0c;" id="text-timer2">{{$urgency[0]['sec-6-span-3']}}</span>
								<span style="font-size: 30px;font-weight: 600;color: #fff;text-align: center;" id="timer2">{{$urgency[0]['sec-2-span-4']}}</span>
							</div>
							<div style="width: 50%;display: flex;flex-direction: column;gap: 5px;justify-content: center;">
								<div class="btn-call-now" style="background: #4db051;padding: 11px;display: flex;justify-content: center;color: #fff;border-radius: 4px;align-items: center;font-weight: 600;" onclick="window.open('https://wa.me/+351937824676')">
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
								<div class="btn-call-now" style="background: #ff6600;padding: 11px;display: flex;justify-content: center;color: #fff;border-radius: 4px;font-weight: 600;" onclick="window.open('tel:+351937824676')">
									<span>{{$urgency[0]['sec-6-span-5']}}</span>
								</div>
							</div>
						</div>
						<p style="font-size: 20px;text-align: center;color: #ff6e20;margin-top: 15px;"  class="btn-call-now">{{$urgency[0]['sec-6-span-6']}}</p>
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
		<section class="contact-two " style="margin-bottom: 9rem;">
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
									<p class="contact-two__info__box__text">{{$urgency[0]['sec-7-span-7']}}</p>
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
									<input type="hidden" name="from" placeholder="" value="LandingPage Urgência">
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
										<option>Selecione a praga que está a causar problemas</option>
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
										<button type="button" onclick="loadCaptchaContactForm()" class="tolak-btn2 btn-call-now"><b>QUERO LIVRAR-ME DAS PRAGAS HOJE</b></button>
									</div><!-- /.form-one__control -->
								</div><!-- /.form-one__group -->
							</form>
						</div>
					</div>
				</div>
            </div><!-- /.container -->
        </section><!-- /.contact -->


		{{-- <footer class="main-footer background-black" style="padding-block: 3rem;">
			<div style="display: flex;flex-direction: column;align-items: center;gap: 15px;">
				<div class="logo-footer">
					<img src="/{{$urgency[0]['sec-8-img-1']}}" alt="tolak">
				</div>
				<p style="font-size: 23px;color: #ff6600;">{{$urgency[0]['sec-8-span-1']}}
				</p><div style="display: flex;gap: 23px;color: #fff;">
					<a href="mailto:{{$urgency[0]['sec-8-span-2']}}" style="color: #fff;font-size: 18px;">{{$urgency[0]['sec-8-span-2']}}</a>
					<a href="tel:{{$urgency[0]['sec-8-span-3']}}" style="color: #fff;font-size: 18px;">{{$urgency[0]['sec-8-span-3']}}</a>
				</div>
				<span style="color: #fff;text-align: center;"> © 2025 {{$urgency[0]['sec-8-span-4']}}</span>
			</div>
		</footer> --}}
		<footer class="main-footer background-black">
			{{-- <div class="main-footer__bg background-black"
				style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div> --}}
			<div class="main-footer__bg background-black" style=""></div>
			<!-- /.main-footer__bg -->
			<div class="main-footer__shape"
				style="background-image: url(assets/images/shapes/footer-shape-1-orange.png);"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="footer-widget footer-widget--about">
							<a href="/" class="footer-widget__logo">
								<img src="assets/images/logo-white.png" width="184" alt="Logo"  loading="lazy">
							</a>
							<ul class="footer-widget__info">
								<li><span class="icofont-location-pin"></span>Rua de Entremuros 54, Fração BB, São
									Julião do Tojal, 2660-533</li>
								<li><span class="icofont-email"></span><a
										href="mailto:geral@sospragas.pt">geral@sospragas.pt</a></li>
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
								<img src="assets/images/footer-img.webp" alt="tolak" loading="lazy">
							</div>
						</div><!-- /.footer-widget -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6 col-lg-2">
						<div class="footer-widget footer-widget--links">
							<h2 class="footer-widget__title">SOS Pragas</h2><!-- /.footer-widget__title -->
							<ul class="list-unstyled footer-widget__links">
								<li><a href="/">Início</a></li>
								<li><a href="/sobre">Sobre Nós</a></li>
								<li><a href="/servicos">Serviços</a></li>
								{{-- <li><a href="equipamentos">Equipamento</a></li> --}}
								<li><a href="/sustentabilidade">Sustentabilidade</a></li>
							</ul><!-- /.list-unstyled footer-widget__links -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6 col-lg-2" style="display: flex;align-items: center;justify-content: center;">
						<a href="https://www.zaask.pt/user/geral3663" aria-label="Link Zaask" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" width="656" height="256"
								style="max-width: 217px;" data-name="Layer 2" viewBox="0 0 43.28 45.13">
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
											d="M21.66,1.97c1.67,0,3.88,3.27,5.42,3.93,1.54.66,5.28-.9,6.69,0,1.41.9,1.22,4.92,2.07,6.37.85,1.44,4.9,2.34,5.42,3.93.52,1.59-2.07,4.69-2.07,6.37,0,1.67,2.59,4.77,2.07,6.37-.52,1.59-4.43,2.58-5.42,3.93-.98,1.35-.71,5.38-2.07,6.37-1.35.98-5.06-.37-6.69,0-1.63.37-3.74,3.93-5.42,3.93-1.67,0-3.82-3.42-5.42-3.93-1.59-.52-5.34.98-6.69,0-1.35-.98-1.08-5.01-2.07-6.37-.98-1.35-4.9-2.34-5.42-3.93-.52-1.59,2.23-4.7,2.07-6.37-.16-1.67-2.69-4.81-2.07-6.37.62-1.55,4.57-2.49,5.42-3.93.85-1.44.65-5.47,2.07-6.37,1.41-.9,5.16.66,6.69,0,1.54-.66,3.74-3.93,5.42-3.93Z">
										</path>
										<rect class="cls-4" x="3.67" y="18.58" width="35.93" height=".79">
										</rect>
										<rect class="cls-4" x="3.67" y="25.77" width="35.93" height=".79">
										</rect>
										<path class="cls-4"
											d="M21.64,6.69c7.11,0,13.14,4.69,15.16,11.14h1.64c-2.07-7.33-8.81-12.71-16.79-12.71S6.92,10.5,4.85,17.83h1.64c2.02-6.45,8.05-11.14,15.16-11.14ZM21.64,38.45c-7.09,0-13.11-4.67-15.14-11.1h-1.64c2.08,7.31,8.82,12.67,16.78,12.67s14.7-5.37,16.78-12.67h-1.64c-2.03,6.43-8.05,11.1-15.14,11.1Z">
										</path>
										<path class="cls-4"
											d="M14.36,27.35c1.56,2.37,4.24,3.93,7.28,3.93s5.72-1.57,7.28-3.93h-14.56ZM28.95,17.83c-1.56-2.39-4.25-3.97-7.31-3.97s-5.75,1.58-7.31,3.97h14.61Z">
										</path>
										<g>
											<polygon class="cls-1"
												points="21.64 28.03 21.96 29.01 22.99 29.01 22.16 29.62 22.47 30.6 21.64 29.99 20.81 30.6 21.12 29.62 20.29 29.01 21.32 29.01 21.64 28.03">
											</polygon>
											<polygon class="cls-1"
												points="18.59 28.03 18.77 28.6 19.37 28.6 18.88 28.95 19.07 29.51 18.59 29.16 18.1 29.51 18.29 28.95 17.81 28.6 18.4 28.6 18.59 28.03">
											</polygon>
											<polygon class="cls-1"
												points="24.7 28.03 24.51 28.6 23.92 28.6 24.4 28.95 24.21 29.51 24.7 29.16 25.18 29.51 24.99 28.95 25.48 28.6 24.88 28.6 24.7 28.03">
											</polygon>
										</g>
										<g>
											<polygon class="cls-1"
												points="21.64 14.6 21.96 15.58 22.99 15.58 22.16 16.18 22.47 17.16 21.64 16.56 20.81 17.16 21.12 16.18 20.29 15.58 21.32 15.58 21.64 14.6">
											</polygon>
											<polygon class="cls-1"
												points="18.59 15.68 18.77 16.25 19.37 16.25 18.88 16.6 19.07 17.16 18.59 16.81 18.1 17.16 18.29 16.6 17.81 16.25 18.4 16.25 18.59 15.68">
											</polygon>
											<polygon class="cls-1"
												points="24.7 15.68 24.51 16.25 23.92 16.25 24.4 16.6 24.21 17.16 24.7 16.81 25.18 17.16 24.99 16.6 25.48 16.25 24.88 16.25 24.7 15.68">
											</polygon>
										</g>
										<g>
											<path class="cls-3"
												d="M10.48,16.02l.35-.53c.24-.37.57-.51.92-.28h0c.35.24.34.59.11.95l-.15.23.63.41-.2.31-1.66-1.09ZM11.64,16.01c.13-.2.11-.38-.08-.5h0c-.2-.14-.35-.07-.48.13l-.15.23.57.37.15-.23Z">
											</path>
											<path class="cls-3"
												d="M11.58,14.44l.44-.49c.29-.32.63-.43.93-.16h0c.23.22.22.46.1.69l1.01.16-.27.3-.94-.15-.16.18.6.54-.25.27-1.47-1.33ZM12.71,14.56c.16-.18.17-.35.02-.49h0c-.17-.16-.32-.11-.48.07l-.2.22.47.42.2-.22Z">
											</path>
											<path class="cls-3"
												d="M13.52,13.79v-.02c-.37-.46-.31-1.05.15-1.41.46-.36,1.04-.29,1.4.17v.02c.37.46.33,1.04-.15,1.41-.48.37-1.06.28-1.41-.17ZM14.79,12.79v-.02c-.26-.32-.63-.42-.94-.18s-.31.61-.05.94v.02c.28.34.66.4.94.18.29-.23.3-.6.04-.94Z">
											</path>
											<path class="cls-3"
												d="M15,11.47l1.08-.59.14.26-.76.41.28.52.59-.32.14.25-.59.32.39.71-.32.18-.95-1.74Z">
											</path>
											<path class="cls-3" d="M16.53,10.7l.34-.14.76,1.83-.34.14-.76-1.83Z">
											</path>
											<path class="cls-3"
												d="M17.73,11.67l.34-.1c.08.19.2.32.52.23.21-.06.33-.22.28-.4-.05-.18-.16-.22-.48-.18-.47.07-.73,0-.83-.37-.09-.31.11-.62.51-.73.41-.12.71,0,.85.35l-.33.09c-.09-.19-.23-.24-.45-.18-.22.06-.3.2-.26.34.04.15.13.21.47.17.47-.07.73,0,.84.38.09.33-.11.67-.53.79-.52.15-.81-.05-.94-.4Z">
											</path>
											<path class="cls-3"
												d="M19.42,11.2l.35-.04c.05.19.15.35.48.31.22-.03.36-.17.33-.35-.02-.18-.12-.24-.45-.25-.48,0-.72-.12-.77-.49-.04-.32.2-.6.61-.65.42-.05.7.11.79.48l-.34.04c-.06-.2-.19-.27-.42-.25-.22.03-.32.15-.31.3.02.16.1.23.44.24.47,0,.73.11.78.5.04.34-.21.64-.65.7-.54.07-.8-.17-.87-.54Z">
											</path>
											<path class="cls-3"
												d="M21.3,9.65h.37s.03,1.98.03,1.98h-.37s-.03-1.98-.03-1.98Z"></path>
											<path class="cls-3"
												d="M22.12,10.62v-.02c.07-.57.54-.95,1.12-.88.59.07.94.54.87,1.11v.02c-.07.57-.52.96-1.12.88-.6-.07-.94-.55-.87-1.12ZM23.72,10.81v-.02c.05-.4-.14-.73-.52-.78-.39-.05-.65.21-.7.63v.02c-.06.43.17.74.53.78.37.05.64-.21.69-.64Z">
											</path>
											<path class="cls-3"
												d="M24.85,10.02l.42.14.36,1.62.44-1.37.32.1-.61,1.89-.36-.12-.38-1.72-.47,1.45-.32-.1.61-1.89Z">
											</path>
											<path class="cls-3"
												d="M27.49,11.05l.43.23-.35,2.06-.34-.18.09-.51-.67-.36-.37.36-.31-.16,1.52-1.44ZM26.85,12.09l.52.27.18-.95-.69.67Z">
											</path>
											<path class="cls-3"
												d="M28.93,11.89l.3.22-1.01,1.35.68.51-.18.24-.97-.73,1.19-1.59Z"></path>
											<path class="cls-3"
												d="M30.85,13.48l.4.45c.46.52.38,1.03-.05,1.41l-.02.02c-.43.38-.96.4-1.42-.13l-.39-.45,1.49-1.31ZM29.97,15.04c.29.33.63.33.95.04h.02c.32-.3.39-.61.08-.96l-.14-.16-1.05.92.14.16Z">
											</path>
											<path class="cls-3"
												d="M32.26,15.19l.66,1.05-.25.16-.46-.74-.46.29.37.59-.23.15-.37-.59-.49.31.49.78-.25.16-.69-1.09,1.68-1.06Z">
											</path>
										</g>
										<g>
											<path class="cls-3"
												d="M12.24,27.91l.97,1.44-.34.23-.68-1.01-.63.43.55.81-.32.22-.55-.81-.67.45.72,1.07-.34.23-1.01-1.49,2.3-1.55Z">
											</path>
											<path class="cls-3"
												d="M13.09,31.18l.32-1.55.42.4-.25,1.12,1.1-.32.39.36-1.51.41-.34,1.66-.43-.4.27-1.24-1.22.34-.38-.36,1.63-.43Z">
											</path>
											<path class="cls-3"
												d="M14.46,32.5l.02-.03c.42-.72,1.21-.94,1.87-.55.55.32.82.84.55,1.44l-.45-.26c.13-.35.05-.62-.29-.82-.42-.24-.89-.07-1.2.46l-.02.03c-.31.54-.24,1.01.2,1.27.33.19.67.16.91-.15l.44.25c-.4.54-.98.59-1.55.26-.75-.44-.89-1.16-.47-1.9Z">
											</path>
											<path class="cls-3"
												d="M17.74,32.66l1.66.5-.12.39-1.17-.35-.22.73.94.28-.11.37-.94-.28-.23.78,1.23.37-.12.39-1.72-.52.8-2.66Z">
											</path>
											<path class="cls-3"
												d="M19.87,33.23l.51.05-.22,2.36,1.18.11-.04.41-1.69-.16.26-2.77Z">
											</path>
											<path class="cls-3"
												d="M21.95,33.37l1.73-.18.04.41-1.21.12.08.76.97-.1.04.39-.97.1.08.81,1.28-.13.04.41-1.79.18-.28-2.76ZM22.57,32.58l.4-.04.47.48-.34.04-.31-.18-.27.24-.33.03.38-.57Z">
											</path>
											<path class="cls-3"
												d="M24.12,33.12l.58-.2,1.76,1.51-.66-1.9.44-.15.91,2.62-.51.18-1.88-1.6.7,2.01-.44.15-.91-2.62Z">
											</path>
											<path class="cls-3"
												d="M27.39,33.39l-.02-.03c-.47-.69-.31-1.5.33-1.93.53-.36,1.11-.37,1.53.14l-.43.29c-.25-.27-.53-.32-.86-.09-.41.27-.46.77-.11,1.28l.02.03c.35.52.8.66,1.23.37.32-.21.44-.53.26-.88l.42-.28c.3.6.1,1.14-.45,1.51-.72.49-1.43.3-1.91-.41Z">
											</path>
											<path class="cls-3" d="M29,30.45l.37-.36,1.94,1.98-.37.36-1.94-1.98Z">
											</path>
											<path class="cls-3"
												d="M30.25,29.07l.39-.55,2.79.86-.31.44-.69-.22-.61.86.43.57-.28.4-1.73-2.36ZM31.58,30.15l.47-.67-1.29-.41.81,1.08Z">
											</path>
										</g>
										<g>
											<path class="cls-4"
												d="M7.55,23.97l2.27-2.27c.13-.15.21-.33.21-.53,0-.43-.35-.78-.78-.78h-2.14v.78c0,.15.06.3.16.41l.46.46.26-.26-.45-.45s-.06-.1-.06-.16v-.07h1.93s-2.25,2.26-2.25,2.26h0c-.13.15-.21.34-.21.54,0,.43.35.78.78.78h2.14v-.78c0-.15-.06-.3-.16-.41l-.46-.46-.26.26.45.45s.06.1.06.16v.06h-1.93ZM13.13,23.87v-1.19c0-.22-.01-.44-.09-.65-.18-.48-.65-.65-1.2-.65-.71,0-1.29.32-1.33,1.04h.74c.02-.3.23-.46.58-.46.44,0,.54.2.54.5v.2l-.94.07c-.61.04-1.08.39-1.08,1,0,.52.39,1,1.16,1,.46,0,.82-.22.97-.48.02.24.21.45.54.45.18,0,.25-.03.38-.09v-.57s-.05.01-.1.01c-.13,0-.18-.06-.18-.2ZM12.38,23.39c0,.47-.34.73-.82.73-.24,0-.46-.15-.46-.4,0-.26.23-.4.46-.42l.81-.06v.15ZM16.59,23.87v-1.19c0-.22-.01-.44-.09-.65-.18-.48-.65-.65-1.2-.65-.71,0-1.29.32-1.33,1.04h.74c.02-.3.23-.46.58-.46.44,0,.54.2.54.5v.2l-.94.07c-.61.04-1.08.39-1.08,1,0,.52.39,1,1.16,1,.46,0,.82-.22.97-.48.02.24.21.45.54.45.18,0,.25-.03.38-.09v-.57s-.05.01-.1.01c-.13,0-.18-.06-.18-.2ZM15.84,23.39c0,.47-.34.73-.82.73-.24,0-.46-.15-.46-.4,0-.26.23-.4.46-.42l.81-.06v.15ZM19.02,22.77c-.31-.05-.39-.06-.68-.09-.17-.02-.37-.09-.37-.32,0-.17.11-.28.25-.34.12-.05.22-.05.33-.05.16,0,.33.06.42.15.07.08.13.18.13.3h.73c0-.23-.11-.47-.28-.66-.23-.25-.62-.38-1-.38s-.74.12-.97.32c-.19.17-.33.39-.33.72,0,.41.3.76.73.85.28.06.6.08.89.12.2.03.32.15.32.34,0,.35-.39.41-.65.41-.22,0-.36-.04-.49-.14-.1-.08-.17-.23-.17-.38h-.72c0,.3.15.57.34.74.26.25.63.37,1.03.37.44,0,.84-.11,1.09-.37.17-.17.28-.39.28-.7,0-.5-.37-.82-.87-.9ZM22.17,22.73l1.14-1.24h-.97l-1.21,1.3v-2.4h-.77v4.3h.77v-.84l.51-.55.9,1.4h.89l-1.27-1.96Z">
											</path>
											<g>
												<path class="cls-5"
													d="M24.56,24.32c0-.22.18-.41.42-.41s.42.18.42.41-.18.41-.42.41-.42-.18-.42-.41Z">
												</path>
												<path class="cls-5"
													d="M25.72,24.56l1.23-1.29c.32-.34.53-.64.53-.94,0-.28-.15-.45-.44-.45s-.48.17-.53.61h-.69c.04-.77.51-1.19,1.25-1.19s1.16.41,1.16,1.01c0,.44-.26.81-.65,1.18l-.63.62h1.3v.58h-2.52v-.12Z">
												</path>
												<path class="cls-5"
													d="M28.55,23.1v-.16c0-1.03.6-1.64,1.46-1.64s1.45.59,1.45,1.63v.15c0,1.02-.56,1.66-1.46,1.66s-1.45-.62-1.45-1.64ZM30.71,23.08v-.15c0-.67-.23-1.05-.7-1.05s-.71.36-.71,1.05v.16c0,.7.25,1.05.72,1.05s.69-.36.69-1.06Z">
												</path>
												<path class="cls-5"
													d="M31.45,24.56l1.23-1.29c.32-.34.53-.64.53-.94,0-.28-.15-.45-.44-.45s-.48.17-.53.61h-.69c.04-.77.51-1.19,1.25-1.19s1.16.41,1.16,1.01c0,.44-.26.81-.65,1.18l-.63.62h1.3v.58h-2.52v-.12Z">
												</path>
												<path class="cls-5"
													d="M35.84,24.02h-1.64v-.28l1.44-2.4h.93v2.14h.44v.54h-.44v.66h-.73v-.66ZM35.85,23.48v-1.57l-.9,1.57h.9Z">
												</path>
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
								<li><a href="/contactos" target="_blank">Contactos</a></li>
								<li><a href="/termos-servico" target="_blank">Termos de Serviço</a></li>
								<li><a href="/politica-privacidade" target="_blank">Política de Privacidade</a></li>
								<li><a href="https://www.livroreclamacoes.pt/Inicio/ " target="_blank">Livro de
										Reclamações</a></li>
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
								Copyright SOS Pragas <span class="dynamic-year"></span> &copy; Todos os direitos
								reservados.
							</p>
						</div>
						<div class="">
							<p class="main-footer__copyright">
								<a href="https://pixelinmotion.pt" style="color:#ff6600;" target="_blank">Desenvolvido
									por Pixel in Motion</a>
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
				<a href="/" aria-label="logo image"><img src="/assets/images/logo-dark.png" width="155"
						alt="logo"  loading="lazy"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container">
				<ul class="main-menu__list one-page-scroll-menu">
					<li class="megamenu "><a href="/">Home</a></li>
					<li class=""><a href="/sobre">Sobre</a></li>
					<li class=""><a href="/servicos">Serviços</a></li>
					<li class=""><a href="/sustentabilidade">Sustentabilidade</a></li>
					{{-- <li class=""><a href="equipamentos">Equipamentos</a></li> --}}
					<li class=""><a href="/contactos">Contactos</a></li>
					{{-- <li class=""><a href="/contactos">Contacta-nos</a></li> --}}
				</ul>
			</div>
			<!-- /.mobile-nav__container -->
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

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			let savedTime = localStorage.getItem('timeSOSUrgency');

			let textTimerElement = document.getElementById("text-timer");
			let textTimerElement2 = document.getElementById("text-timer2");

			// tempo inicial em segundos
			let time = savedTime && !isNaN(savedTime) ? parseInt(savedTime) : parseInt(document.getElementById("timer").textContent) * 60;
			let time2 = savedTime && !isNaN(savedTime) ? parseInt(savedTime) : parseInt(document.getElementById("timer2").textContent) * 60;

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

			// Exibe valor inicial
			document.getElementById("timer").textContent = formatTime(time);
			document.getElementById("timer2").textContent = formatTime(time2);

			let countdown = setInterval(function () {
				if (time > 0) {
					time--;
					if(document.getElementById("timer")) document.getElementById("timer").textContent = formatTime(time);
					localStorage.setItem('timeSOSUrgency', time);
				} else if (textTimerElement) {
					textTimerElement.textContent = "Expirado: Tente agora na mesma";
					if(document.getElementById("timer")) document.getElementById("timer").textContent = "00:00:00";
				}

				if (time2 > 0) {
					time2--;
					if(document.getElementById("timer2")) document.getElementById("timer2").textContent = formatTime(time2);
				} else if (textTimerElement2) {
					textTimerElement2.textContent = "Expirado: Tente agora na mesma";
					if(document.getElementById("timer2")) document.getElementById("timer2").textContent = "00:00:00";
				}

				if (time <= 0 && time2 <= 0) {
					clearInterval(countdown);
				}
			}, 1000);
		});
	</script>
	@include('includes.cookies')
	<!-- template js -->
	@once
		<script src="{{ asset('assets/js/tolak.min.js') }}"></script>
	@endonce

</body>

</html>