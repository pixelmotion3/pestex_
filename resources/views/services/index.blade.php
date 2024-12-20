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
						<img src="assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
					</a>

				</div><!-- /.main-header__logo -->
				<nav class="main-header__nav main-menu">
					<ul class="main-menu__list one-page-scroll-menu">
						<li class="megamenu scrollToLink"><a href="home" class="font-semibold">Home</a></li>
						<li class="scrollToLink"><a href="sobre" class="font-semibold">Sobre</a></li>
						<li class="scrollToLink current"><a href="servicos" class="font-semibold">Serviços</a></li>
						<li class="scrollToLink"><a href="sustentabilidade" class="font-semibold">Sustentabilidade</a></li>
						<li class="scrollToLink"><a href="/equipamentos" class="font-semibold">Equipamentos</a></li>
						<li class="scrollToLink contactenos-link2"><a href="contact" class="font-semibold">Contactos</a></li>
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
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.png)"></div>
        <div class="page-header__shape"></div>
        <div class="page-header__shape-two"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-header__content">
                        <h2 class="page-header__title">{{ $main_screen[0]['h2'] }}</h2>
                        {{-- <ul class="tolak-breadcrumb list-unstyled">
                            <li><a href="/">Home</a></li>
                            <li><span>Services</span></li>
                        </ul><!-- /.thm-breadcrumb list-unstyled --> --}}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                        <img src="../{{ $main_screen[0]['bg-img-path'] }}" alt="tolak">
                        <div class="page-header__layer__shape"></div>
                        <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    {{-- <div class="sec-title text-center" style="margin-top:200px;">
        <h1 class="text-center h1 text-body">{{ $main_screen[0]['h1'] }}</h1>
        <p class="text-center mt-5" style="padding-left: 250px;padding-right: 250px;">{{ $main_screen[0]['p'] }}</p>
    </div> --}}
	<div class="sec-title text-center" style="margin-top:200px;">
		<h2 class="text-center h2 text-body" style="font-weight: 600;">{{ $video[0]['h2'] }}</h2>
		<p class="text-center p mt-0 p-5"style="font-size: 1.5pts !important;margin: 0px 200px 0px;">{{ $video[0]['p'] }}</p>
	</div>
    <section class="service-one">
        <div class="container" style="margin-top:-150px;">
            <div class="row">
                @isset($services)
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp mt-5" data-wow-delay="100ms">
                            <a href="/servicos/{{ $service->id }}">
                                <div class="service-one__item text-center">
                                    <div class="service-one__item__image">
                                        <img src="../{{ $service['img'] }}" alt="tolak">
                                    </div>
                                    <div class="service-one__item__content">
                                        <div class="service-one__item__icon">
                                            <span class="icon-cooperation"></span>
                                        </div><!-- /.service-icon -->
                                        <h3 class="service-one__item__title">
                                            <a href="business-growth.html">{{ $service['a'] }}</a>
                                        </h3><!-- /.service-title -->
                                        <p class="service-one__item__text">
                                            {{ $service['p'] }}
                                        </p><!-- /.service-text -->
                                    </div>
                                    <div class="service-one__item__bottom">
                                        <div class="service-one__item__bottom__number"></div>
										<a class="service-one__item__bottom__rm" href="servicos/{{ $service['id'] }}">SAIBA MAIS<span class="fas fa-angle-double-right"></span></a>
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
                            <div class="cta-one__box__icon"><span class="icon-best-price"></span></div>
                            <h3 class="cta-one__box__title">{{ $main_screen[0]['h3-a'] }}</h3>
                            <p class="cta-one__box__text">{{ $main_screen[0]['p-a-1'] }}</p>
                        </div>
						<a href="tel:00351219747353" class="btn mt-2 theme-btn-three thm-btn contactenos-btn thm-btn2" type="submit" name="quote_form">CONTACTE-NOS</a>
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
                        <div class="contact-one__info__icon"><span class="icon-customer-service"></span></div>
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
                            <form class="contact-one__form contact-form-validated form-one"
                                action="inc/sendemail.php">
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
                                        <button type="submit" class="tolak-btn"><b>ENVIAR MENSAGEM</b><span></span></button>
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
							<p class="mail-section__content__text">Esteja a par das nossas novidades</p>
						</div>
					</div>
					<div class="col-md-7 col-lg-5">
						<form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-section__newsletter mc-form" novalidate="true">
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
							<li><span class="icofont-location-pin"></span>13/A, Miranda Halim City .</li>
							<li><span class="icofont-email"></span>email@email.com</li>
							<li><span class="icofont-phone"></span><a href="tel:09969569535">099 695 695 35</a></li>
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
							<img src="assets/images/resources/footer-about.jpg" alt="tolak">
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
							<li><a href="home">Início</a></li>
							<li><a href="sobre">Sobre Nós</a></li>
							<li><a href="servicos">Serviços</a></li>
							<li><a href="equipament">Equipamento</a></li>
							<li><a href="sustentabilidade">Sustentabilidade</a></li>
						</ul><!-- /.list-unstyled footer-widget__links -->
					</div><!-- /.footer-widget -->
				</div><!-- /.col-md-6 -->
				<div class="col-md-6 col-lg-2">
					<div class="footer-widget footer-widget--links footer-widget--last">
						<h2 class="footer-widget__title">Links Úteis</h2><!-- /.footer-widget__title -->
						<ul class="list-unstyled footer-widget__links">
							<li><a href="contactos" target="_blank">Contactos</a></li>
							<li><a href="termos-servico" target="_blank">Termos de Serviço</a></li>
							<li><a href="politica-privacidade" target="_blank">Política de Privacidade</a></li>
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
							Copyright sospragas <span class="dynamic-year"></span> &copy; Todos os direitos reservados.
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
    <!--
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>
        -->
</body>

</html>
