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

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>
	<header class="main-header sticky-header sticky-header--one-page">
		<div class="container-fluid">
			<div class="main-header__inner">
				<div class="main-header__logo">
					<a href="/home">
						<img src="/assets/images/logo-dark.png" alt="logo SOSPRAGAS" width="284">
					</a>

				</div><!-- /.main-header__logo -->
				<nav class="main-header__nav main-menu">
					<ul class="main-menu__list one-page-scroll-menu">
						<li class="megamenu scrollToLink"><a href="/home" class="font-semibold">Home</a></li>
						<li class="scrollToLink"><a href="/sobre" class="font-semibold">Sobre</a></li>
						<li class="scrollToLink current"><a href="/servicos" class="font-semibold">Serviços</a></li>
						<li class="scrollToLink"><a href="/sustentabilidade" class="font-semibold">Sustentabilidade</a></li>
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

    <section>
        <!-- /.page-header__bg -->
        <div class="container-fluid" style="background-image: url(../{{$service_detail['img'] }});border-bottom-left-radius:150px;background-size: cover;background-repeat: no-repeat;background-position: center;">
            <div class="row">
                <div class="col-md-12"
                    >
                    <div class="page-header__content text-center">
                        <h1 class="text-white h1"><b>{{$service_detail['a']}}</b></h1>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-xl-4">
                    <div class="service-details__sidebar">
                        <h3 class="service-details__sidebar__title">{{$service_detail_show['h3']}}</h3><!-- /.service-sidebar__title -->
                        <ul class="list-unstyled service-details__sidebar__nav">
                            @foreach ($services as $service)
                                <li><a href="/servicos/{{ $service['id']}}">{{ $service['a']}}</a></li>
                            @endforeach
                        </ul><!-- /.list-unstyled service-sidebar__nav -->
                    </div><!-- /.sidebar -->
					<div class="service-sidebar" style="margin-top: 20px">
                        <div class="sidebar-widget banner-widget">
                            <div class="widget-content"
                                style="background-image: url(../{{ $service_detail_show['img-1'] }});">
                                <div class="shape" style="background-image: url(../{{ $service_detail_show['img-2'] }});">
                                </div>
                                <div class="content-box">

                                    <h3>{{ $service_detail_show['h3-1'] }}</h3>
                                    {{-- <a href="contact.html" class="theme-btn-two">{{ $service_detail_show['a'] }}</a> --}}
									<a href="tel:00351219747353" class="btn mt-2 theme-btn-three thm-btn contactenos-btn thm-btn2" type="submit" name="quote_form">LIGAR AGORA</a>
                                </div>
                            </div>
                            <div class="form-inner">
                                <h3>{{ $service_detail_show['h3-2'] }}</h3>
                                <form  method="POST" action="{{ route('ServicePage.ContactFormService') }}">
									@csrf
									@method('post')
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email"
                                            required="">
                                    </div>
                                    {{-- <div class="form-group">
                                        <select class="wide">
                                            <option data-display="Residential Cleaning">Residential Cleaning</option>
                                            <option value="1">Hospitality & Hotel</option>
                                            <option value="2">Municipalities Claning</option>
                                            <option value="3">Education Centre</option>
                                            <option value="4">Office Buildings</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mensagem..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="btn mt-2 theme-btn-three thm-btn contactenos-btn">ENVIAR MENSAGEM</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
					<div class="service-details-content container-fluid">
						<div class="content-one">
							<figure class="image-box"><img src="../{{ $service_detail['img-2'] }}"
									alt=""></figure>
							<h3>{{ $service_detail['title'] }}</h3>
							<div class="text">
								<p>{{ $service_detail['p-1'] }}</p>
								<p>{{ $service_detail['p-2'] }}</p>
								<p>{{ $service_detail['p-3'] }}</p>
							</div>
						</div>
						@if ($service_detail['id'] != 13 && $service_detail['id'] != 17 && $service_detail['id'] != 20 && $service_detail['id'] != 18 && $service_detail['id'] != 21)
							<h3 class="h3" style="color:black;"><b>Métodos</b></h3>
							<div class="feature-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-theme row"
								data-owl-options='{
									"items": 3,
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
								@foreach ($methods as $method)
									<div class="item col-md-4">
										<div class="feature-three__item wow fadeInUp" data-wow-delay="100ms">
											<div class="feature-three__item__image rounded-box">
												<img src="../{{ $method['img'] }}" alt="tolak">
												{{-- <a href="about.html" class="feature-three__item__link"><i
														class="icon-right-arrow"></i></a> --}}
											</div>
											<div class="feature-three__item__normal">
												<h4 class="feature-three__item__normal__title">{{ $method['title1'] }}</h4>
												<p class="feature-three__item__normal__text">{{ $method['p'] }}</p>
											</div>
											<div class="feature-three__item__hover">
												<div class="feature-three__item__icon">
													<span class="icon-cooperation"></span>
												</div>
												<h4 class="feature-three__item__title">{{ $method['title2'] }}</h4>
												<p class="feature-three__item__text">{{ $method['p1'] }}</p>
											</div>
										</div><!-- feature-item -->
									</div>
								@endforeach
							</div>
						@endif

					</div>
				</div>
            </div><!-- /.row -->
        </div>
    </section>

    <!-- service-details -->
    {{-- <section class="service-details">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">

                </div>
            </div>
        </div>
    </section> --}}
    <!-- service-details end -->

    <!-- Work Process Start -->
    <section class="work-process-two">
        <div class="work-process-two__shape"
            style="background-image: url(../{{ $service_detail_show['img-4'] }});"></div>
        <div class="container">
            <div class="sec-title-four text-center">

                <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span><b><i>{{ $service_detail_show['h6'] }}</i></b><span class="sec-title-four__tagline__right-border"></span></h6>
                <!-- /.sec-title-four__tagline -->

                <h3 class="sec-title-four__title">{{ $service_detail_show['h3-3'] }}</h3>
                <!-- /.sec-title-four__title -->
            </div><!-- /.sec-title-four -->
            <div class="row" style="display: flex;justify-content: center;">
                <div class="col-xl-3 col-md-6" style="display: flex;justify-content: center; ">
                    <div class="work-process-two__item text-center wow fadeInUp" data-wow-delay="00ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4-1'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb">
                            <img src="../{{ $service_detail_show['img-5'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div>
                <div class="col-xl-3 col-md-6" style="display: flex;justify-content: center; ">
                    <div class="work-process-two__item work-process-two__item--reverse text-center wow fadeInUp"
                        data-wow-delay="100ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4-2'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p-1'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb">
                            <img src="../{{ $service_detail_show['img-6'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div>
                <div class="col-xl-3 col-md-6" style="display: flex;justify-content: center; ">
                    <div class="work-process-two__item text-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4-3'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p-2'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb" style="margin-top: 35px;">
                            <img src="../{{ $service_detail_show['img-7'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div>
                {{-- <div class="col-xl-3 col-md-6">
                    <div class="work-process-two__item work-process-two__item--reverse text-center wow fadeInUp"
                        data-wow-delay="300ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4-3'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p-3'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb">
                            <img src="../{{ $service_detail_show['img-8'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Work Process End -->
    <section class="faq-one">
        <div class="container">
            <div  class="faq-one-faaq">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="faq-one__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline"><span class="sec-title-four__tagline__left-border"></span><b><i>{{ $service_detail_show['h6-1'] }}</i><b><span class="sec-title-four__tagline__right-border"></span>
                            </h6><!-- /.sec-title-two__tagline -->
                            <h3 class="sec-title-two__title">{{ $service_detail_show['h3-4'] }}</h3>
                            <!-- /.sec-title-two__title -->
                        </div><!-- /.sec-title-two -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="faq-one__image tolak-tilt"
                                    data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                    <img src="../{{ $service_detail_show['img-9'] }}" alt="tolak">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="faq-one__right">
                                    <div class="faq-one__experiance count-box">
                                        <h3 class="faq-one__experiance__count"><span class="count-text"
                                                data-stop="36" data-speed="1500">{{ $service_detail_show['span'] }}</span>+</h3>
                                        <!-- /.experiance-count -->
                                        <h5 class="faq-one__experiance__title">{{ $service_detail_show['h5'] }}</h5>
                                        <!-- /.experiance-title -->
                                    </div><!-- /.experiance -->
                                    <h4 class="faq-one__right__title">{{ $service_detail_show['h4-4'] }}</h4>
                                    <p class="faq-one__right__text">{{ $service_detail_show['p-4'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="faq-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                        <div class="accrodion active collapse-1">
                            <div class="accrodion-title">
                                <h4>
                                    {{ $service_detail_show['h4-5'] }}
                                    <span class="accrodion-title__icon" id="collapse-1-icon"></span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner" id="collapse-1">
                                    <p>
                                        {{ $service_detail_show['p-5'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion collapse-2">
                            <div class="accrodion-title" >
                                <h4>
                                    {{ $service_detail_show['h4-6'] }}
                                    <span class="accrodion-title__icon" id="collapse-2-icon"></span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner" id="collapse-2">
                                    <p>
                                        {{ $service_detail_show['p-6'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion collapse-3">
                            <div class="accrodion-title">
                                <h4>
                                    {{ $service_detail_show['h4-7'] }}
                                    <span class="accrodion-title__icon" id="collapse-3-icon"></span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner" id="collapse-3">
                                    <p>
                                        {{ $service_detail_show['p-7'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion collapse-4">
                            <div class="accrodion-title">
                                <h4>
                                    {{ $service_detail_show['h4-8'] }}
                                    <span class="accrodion-title__icon" id="collapse-4-icon"></span>
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner" id="collapse-4">
                                    <p>
                                        {{ $service_detail_show['p-8'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div>
        </div><!-- /.container -->
    </section><!-- /.faq-one -->

    {{-- <section class="blog-four">
        <div class="container" style="margin-top: 200px;">
            <div class="blog-four__wrapper">
                <div class="sec-title-three text-center">

                    <h6 class="sec-title-three__tagline"><span
                            class="sec-title-three__tagline__left-border"></span>{{ $service_detail_show['h6-span-2'] }}<span
                            class="sec-title-three__tagline__right-border"></span></h6>
                    <!-- /.sec-title-three__tagline -->

                    <h3 class="sec-title-three__title">{{ $service_detail_show['h3-5'] }}</h3>
                    <!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
                <div class="blog-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav tolak-owl__carousel--with-shadow row  owl-theme"
                    data-owl-options='{
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
                    <div class="item col-md-4">
                        <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-four__image">
                                <img src="../{{ $service_detail_show['img-10'] }}"
                                    alt="We Solution For This Consulting Blog">
                                <img src="../{{ $service_detail_show['img-11'] }}"
                                    alt="We Solution For This Consulting Blog">
                                <div class="blog-card-four__date">
                                    <i class="icofont-calendar"></i>{{ $service_detail_show['div-1'] }}
                                </div><!-- /.blog-card-four__date -->
                                <a href="blog-details-right.html" class="blog-card-four__image__link"><span
                                        class="sr-only">{{ $service_detail_show['a-1'] }}</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card-four__image -->
                            <div class="blog-card-four__content">
                                <ul class="list-unstyled blog-card-four__meta">
                                    <li><i class="tolak-icons-two-user"></i>{{ $service_detail_show['li'] }} <a
                                            href="blog-list-right.html">{{ $service_detail_show['a-2'] }}</a></li>
                                    <li><i class="tolak-icons-two-comments"></i>{{ $service_detail_show['li-1'] }}</li>
                                </ul>
                                <h3 class="blog-card-four__title"><a href="blog-details-right.html">{{ $service_detail_show['a-3'] }}</a></h3><!-- /.blog-card-four__title -->
                                <p class="blog-card-four__text">{{ $service_detail_show['p-9'] }}</p><!-- /.blog-card-four__text -->
                                <a class="blog-card-four__rm" href="blog-details-right.html"><span
                                        class="tolak-icons-two-arrow-right-short"></span></a>
                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card-four -->
                    </div><!-- /.item -->
                    <div class="item col-md-4">
                        <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card-four__image">
                                <img src="../{{ $service_detail_show['img-12'] }}"
                                    alt="Are you Looking For a Solution Related">
                                <img src="../{{ $service_detail_show['img-13'] }}"
                                    alt="Are you Looking For a Solution Related">
                                <div class="blog-card-four__date">
                                    <i class="icofont-calendar"></i>{{ $service_detail_show['div-2'] }}
                                </div><!-- /.blog-card-four__date -->
                                <a href="blog-details-right.html" class="blog-card-four__image__link"><span
                                        class="sr-only">{{ $service_detail_show['span-1'] }}</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card-four__image -->
                            <div class="blog-card-four__content">
                                <ul class="list-unstyled blog-card-four__meta">
                                    <li><i class="tolak-icons-two-user"></i>{{ $service_detail_show['li-2'] }} <a
                                            href="blog-list-right.html">{{ $service_detail_show['a-4'] }}</a></li>
                                    <li><i class="tolak-icons-two-comments"></i>{{ $service_detail_show['li-3'] }}</li>
                                </ul>
                                <h3 class="blog-card-four__title"><a href="blog-details-right.html">{{ $service_detail_show['h3-6'] }}</a></h3><!-- /.blog-card-four__title -->
                                <p class="blog-card-four__text">{{ $service_detail_show['p-9-1'] }}</p><!-- /.blog-card-four__text -->
                                <a class="blog-card-four__rm" href="blog-details-right.html"><span
                                        class="tolak-icons-two-arrow-right-short"></span></a>
                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card-four -->
                    </div><!-- /.item -->
                    <div class="item col-md-4">
                        <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card-four__image">
                                <img src="../{{ $service_detail_show['img-14'] }}"
                                    alt="This Specific IT Issue as Network Security">
                                <img src="../{{ $service_detail_show['img-15'] }}"
                                    alt="This Specific IT Issue as Network Security">
                                <div class="blog-card-four__date">
                                    <i class="icofont-calendar"></i>{{ $service_detail_show['div-3'] }}
                                </div><!-- /.blog-card-four__date -->
                                <a href="blog-details-right.html" class="blog-card-four__image__link"><span
                                        class="sr-only">{{ $service_detail_show['span-2'] }}</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card-four__image -->
                            <div class="blog-card-four__content">
                                <ul class="list-unstyled blog-card-four__meta">
                                    <li><i class="tolak-icons-two-user"></i>{{ $service_detail_show['li-3-1'] }} <a
                                            href="blog-list-right.html">{{ $service_detail_show['a-5'] }}</a></li>
                                    <li><i class="tolak-icons-two-comments"></i>{{ $service_detail_show['li-4'] }}</li>
                                </ul>
                                <h3 class="blog-card-four__title"><a href="blog-details-right.html">{{ $service_detail_show['h3-7'] }}</a></h3><!-- /.blog-card-four__title -->
                                <p class="blog-card-four__text">{{ $service_detail_show['p-10'] }}</p><!-- /.blog-card-four__text -->
                                <a class="blog-card-four__rm" href="blog-details-right.html"><span
                                        class="tolak-icons-two-arrow-right-short"></span></a>
                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card-four -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </section><!-- /.blog-two --> --}}
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
							<img src="/assets/images/logo-white.png" width="184" alt="Tolak HTML Template">
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
							<img src="/assets/images/footer-img.webp" alt="tolak">
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
    <script>
        $(document).ready(function() {
            $('#collapse-1').show();
            $('#collapse-2').hide();
            $('#collapse-3').hide();
            $('#collapse-4').hide();

            $('#collapse-1-icon').click(function(){
                $('#collapse-1').show();
                $('#collapse-2').hide();
                $('#collapse-3').hide();
                $('#collapse-4').hide();
                $('.collapse-1').addClass('active');
                $('.collapse-2').removeClass('active');
                $('.collapse-3').removeClass('active');
                $('.collapse-4').removeClass('active');
            });

            $('#collapse-2-icon').click(function(){
                $('#collapse-1').hide();
                $('#collapse-2').show();
                $('#collapse-3').hide();
                $('#collapse-4').hide();

                $('.collapse-1').removeClass('active');
                $('.collapse-2').addClass('active');
                $('.collapse-3').removeClass('active');
                $('.collapse-4').removeClass('active');
            });

            $('#collapse-3-icon').click(function(){
                $('#collapse-1').hide();
                $('#collapse-2').hide();
                $('#collapse-3').show();
                $('#collapse-4').hide();

                $('.collapse-1').removeClass('active');
                $('.collapse-2').removeClass('active');
                $('.collapse-3').addClass('active');
                $('.collapse-4').removeClass('active');
            });

            $('#collapse-4-icon').click(function(){
                $('#collapse-1').hide();
                $('#collapse-2').hide();
                $('#collapse-3').hide();
                $('#collapse-4').show();

                $('.collapse-1').removeClass('active');
                $('.collapse-2').removeClass('active');
                $('.collapse-3').removeClass('active');
                $('.collapse-4').addClass('active');
            });
        });
    </script>
    {{-- @include('includes.footer_aux') --}}
    <!--
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>
        -->
</body>

</html>
