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
    <style>


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
    <header class="main-header sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo">
                    <a href="index.html">
                        <img src="../assets/images/logo-dark.png" alt="Tolak HTML" width="184">
                    </a>
                </div><!-- /.main-header__logo -->
                @include('includes.nav')
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->

    <section>
        <!-- /.page-header__bg -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"
                    style="background-image: url(../{{$service_detail_show['bg-img'] }});border-bottom-left-radius:150px;">
                    <div class="page-header__content text-center">
                        <h1 class="text-white h1"><b>{{$service_detail_show['h1']}}</b></h1>
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
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-xl-8">
                    <div class="service-details__thumbnail">
                        <img src="../{{ $service_detail_show['img'] }}" alt="tolak">
                    </div><!-- /.service-details__thumbnail -->
                </div><!-- /.col-md-12 col-lg-8 -->
            </div><!-- /.row -->
        </div>
    </section>

    <!-- service-details -->
    <section class="service-details">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="sidebar-widget banner-widget">
                            <div class="widget-content"
                                style="background-image: url(../{{ $service_detail_show['img-1'] }});">
                                <div class="shape" style="background-image: url(../{{ $service_detail_show['img-2'] }});">
                                </div>
                                <div class="content-box">
                                    <div class="icon-box">
                                        <i class="flaticon-cleaning"></i>
                                        <div class="icon-shape"
                                            style="background-image: url(../{{ $service_detail_show['img-3'] }});"></div>
                                    </div>
                                    <h3>{{ $service_detail_show['h3-1'] }}</h3>
                                    <a href="contact.html" class="theme-btn-two">{{ $service_detail_show['a'] }}</a>
                                </div>
                            </div>
                            <div class="form-inner">
                                <h3>{{ $service_detail_show['h3-2'] }}</h3>
                                <form action="contact.html" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email"
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <select class="wide">
                                            <option data-display="Residential Cleaning">Residential Cleaning</option>
                                            <option value="1">Hospitality & Hotel</option>
                                            <option value="2">Municipalities Claning</option>
                                            <option value="3">Education Centre</option>
                                            <option value="4">Office Buildings</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Write Your Text..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn-four thm-btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content container-fluid">
                        <div class="content-one">
                            <figure class="image-box"><img src="../assets/images/service/service-11.jpg"
                                    alt=""></figure>
                            <h3>{{ $service_detail['title'] }}</h3>
                            <div class="text">
                                <p>{{ $service_detail['p-1'] }}</p>
                                <p>{{ $service_detail['p-2'] }}</p>
                                <p>{{ $service_detail['p-3'] }}</p>
                            </div>
                        </div>
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
                                            <a href="about.html" class="feature-three__item__link"><i
                                                    class="icon-right-arrow"></i></a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->

    <!-- Work Process Start -->
    <section class="work-process-two">
        <div class="work-process-two__shape"
            style="background-image: url(../{{ $service_detail_show['img-4'] }});"></div>
        <div class="container">
            <div class="sec-title-four text-center">

                <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>{{ $service_detail_show['h6'] }}<span class="sec-title-four__tagline__right-border"></span></h6>
                <!-- /.sec-title-four__tagline -->

                <h3 class="sec-title-four__title">{{ $service_detail_show['h3-3'] }}</h3>
                <!-- /.sec-title-four__title -->
            </div><!-- /.sec-title-four -->
            <div class="row gutter-y-30">
                <div class="col-xl-3 col-md-6">
                    <div class="work-process-two__item text-center wow fadeInUp" data-wow-delay="00ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb">
                            <img src="../{{ $service_detail_show['img-5'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-process-two__item work-process-two__item--reverse text-center wow fadeInUp"
                        data-wow-delay="100ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p-1'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb">
                            <img src="../{{ $service_detail_show['img-6'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-process-two__item text-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                        <h4 class="work-process-two__item__title">{{ $service_detail_show['h4-2'] }}</h4><!-- /.work-process-title -->
                        <p class="work-process-two__item__text">
                            {{ $service_detail_show['p-2'] }}
                        </p><!-- /.work-process-text -->
                        <div class="work-process-two__item__thumb">
                            <img src="../{{ $service_detail_show['img-7'] }}" alt="tolak">
                        </div><!-- /.work-process-image -->
                    </div><!-- /.work-process-item -->
                </div>
                <div class="col-xl-3 col-md-6">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process End -->
    <section class="faq-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="faq-one__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline"><span
                                    class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ $service_detail_show['h6-1'] }}<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
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
                <div class="col-lg-6">
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
                                    {{ $service_detail_show['h4-5'] }}
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

    <section class="blog-four">
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
    </section><!-- /.blog-two -->
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
    @include('includes.footer_aux')
    <!--
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>
        -->
</body>

</html>
