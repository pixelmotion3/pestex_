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
            .input-container { display: flex; width: 60%; margin-bottom: 15px; margin-left: 20px;margin-right: 20px;}
            .icon { padding: 10px; color: black; min-width: 50px; text-align: center; }
            .input-field { width: 100%; padding: 10px; outline: none; }
            .input-field:focus { border: 2px solid dodgerblue; }
            .btn { background-color: dodgerblue; color: white; padding: 15px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9; }
            .btn:hover { opacity: 1; }
            .custom-select{
                background-color:#A9A9A9;
                width:100%;
                color:white;
            } 
            .custom-select:focus{
                border: 2px solid dodgerblue;
            }

            @media screen and (max-width: 770px) {
                .apointement-box {
                    margin-left:0px;
                    margin-top:0px
                }
            }

            .quote_border_inbox{
                border-top-right-radius:30px;
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
        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.html">
                            <img src="assets/images/logo-dark.png" alt="Tolak HTML" width="184">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="megamenu scrollToLink current"><a href="https://pestex.pixeldev05.com/">Home</a></li>
                            <li class="scrollToLink"><a href="https://pestex.pixeldev05.com/about">About</a></li>
                            <li class="scrollToLink"><a href="https://pestex.pixeldev05.com/services">Services</a></li>
                            <li class="scrollToLink"><a href="https://pestex.pixeldev05.com/sustainability">Sustainability</a></li>
                        </ul>
                    </nav><!-- /.main-header__nav -->                       
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->

        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__shape"></div>
            <div class="page-header__shape-two"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Service page</h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                            <img src="assets/images/backgrounds/page-banner-layer.png" alt="tolak">
                            <div class="page-header__layer__shape"></div>
                            <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        
        <section class="blog-details">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget-area">
                                <div class="sidebar__single sidebar__single--search">
                                    <form action="#" class="sidebar__search">
                                        <input type="text" placeholder="Search Here..." />
                                        <button type="submit" aria-label="search submit">
                                            <span><i class="icofont-search-2"></i></span>
                                        </button>
                                    </form><!-- /.sidebar__search -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                                    <ul class="sidebar__categories list-unstyled">
                                        <li><a href="blog-grid.html">Business</a>(08)</li>
                                        <li><a href="blog-grid.html">Ui/Ux Design</a>(14)</li>
                                        <li><a href="blog-grid.html">Professional</a>(12)</li>
                                        <li><a href="blog-grid.html">Technology</a>(23)</li>
                                        <li><a href="blog-grid.html">Development</a>(17)</li>
                                        <li><a href="blog-grid.html">Web Design</a>(22)</li>
                                    </ul><!-- /.sidebar__categories list-unstyled -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single sidebar__single--tags">
                                    <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                                    <div class="sidebar__tags">
                                        <a href="blog-grid.html">Design</a>
                                        <a href="blog-grid.html">Service</a>
                                        <a href="blog-grid.html">Top</a>
                                        <a href="blog-grid.html">Help</a>
                                        <a href="blog-grid.html">New</a>
                                        <a href="blog-grid.html">Best</a>
                                        <a href="blog-grid.html">Beauty</a>
                                        <a href="blog-grid.html">Sounds</a>
                                    </div><!-- /.sidebar__tags -->
                                </div><!-- /.sidebar__single -->
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">Recent Post</h4><!-- /.sidebar__title -->
                                    <ul class="sidebar__posts list-unstyled">
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="assets/images/blog/lp-1-3.jpg" alt="tolak">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p><!-- /.sidebar__posts__date -->
                                                <h4 class="sidebar__posts__title"><a href="blog-details-right.html">We play chimney pot Chip bonne.</a></h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="assets/images/blog/lp-1-4.jpg" alt="tolak">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p><!-- /.sidebar__posts__date -->
                                                <h4 class="sidebar__posts__title"><a href="blog-details-right.html">Get deep knowledge your beauty</a></h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="assets/images/blog/lp-1-5.jpg" alt="tolak">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p><!-- /.sidebar__posts__date -->
                                                <h4 class="sidebar__posts__title"><a href="blog-details-right.html">We round solution of york blog</a></h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                    </ul><!-- /.sidebar__posts list-unstyled -->
                                </div><!-- /.sidebar__single -->
                            </aside><!-- /.widget-area -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <div class="blog-details__content">
                            <div class="blog-details__image">
                                <img src="assets/images/blog/blog-details-1.jpg" alt="tolak">
                            </div><!-- /.blog-details__image -->
                            <div class="blog-details__meta">
                                <div class="blog-details__meta__cats">
                                    <a href="blog-grid.html">Business</a>
                                </div>
                                <div class="blog-details__meta__date">
                                    <a href="blog-grid.html">Loran Berasa</a> / Jun 4, 2023
                                </div>
                            </div><!-- /.list-unstyled blog-details__meta -->
                            <h3 class="blog-details__title">
                                Business solution is a leading provider of software development, software outsourcing services programming service.
                            </h3><!-- /.blog-details__title -->
                            <p class="blog-details__text">
                                There are many variations of passages agency we have covered many special events such as
                                fireworks, fairs, parades, races, walks, a Lorem Ipsum Fasts injecte dedicated product design
                                team can help you achieve your business goals. Whether you need to craft an idea for a
                                completely new product or elevate the quality of an existing solution, we’ll help you to
                                create a product that is laser targeted to your users’ needs and business results
                            </p><!-- /.blog-details__text -->
                            <p class="blog-details__text">
                                There are many variations of passages agency we have covered many special events such as
                                fireworks, fairs, parades, races, walks, a Lorem Ipsum .
                            </p><!-- /.blog-details__text -->
                            <div class="row gutter-y-30 blog-details__content__mr">
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="00ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-family"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Our Success Team Man</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="100ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-agency"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Professional Service</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="200ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-refund"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Latest Business Technology</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="300ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-management"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Long Experience Support</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                            </div>
                            <p class="blog-details__text">
                                There are many variations of passages agency we have covered many special events such as
                                fireworks, fairs, parades, races, walks, a Lorem Ipsumpassages agency we have covered many
                                fireworks, fairs, parades, races, walks, a Lorem Ipsum Fasts injecte.
                            </p><!-- /.blog-details__text -->
                            <blockquote class="blog-details__blockquote">
                                <p class="blog-details__blockquote__text">
                                    Wesay are many variations of passages of Lorem Ipsum available, but the have suffered alteration
                                    in some form, by injected humour, oris ut. In interdum sem quis congue accumsan ellentesque
                                    convallis eros tiam ultricies finibus. . Nunc ac sem sit amet purus luctus.
                                </p>
                                <div class="blog-details__blockquote__meta">
                                    <img src="assets/images/blog/blog-details-author.jpg" alt="tolak">
                                    <h5 class="blog-details__blockquote__meta__name">Morata bara - <span>Founder</span></h5>
                                    <div class="blog-details__blockquote__meta__social">
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
                                    </div>
                                </div>
                            </blockquote>
                        </div><!-- /.blog-details -->

                        <div class="comments-one">
                            <h3 class="comments-one__title">Comments (2)</h3><!-- /.comments-one__title -->
                            <ul class="list-unstyled comments-one__list">
                                <li class="comments-one__card">
                                    <div class="comments-one__card__image">
                                        <img src="assets/images/blog/blog-comment-1-1.jpg" alt="tolak">
                                    </div><!-- /.comments-one__card__image -->
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Porata Baran</h3><!-- /.comments-one__card__title -->
                                        <p class="comments-one__card__text">
                                            Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.
                                        </p><!-- /.comments-one__card__text -->
                                        <div class="comments-one__card__meta">November 16, 2018 at 4:31 am<a href="blog-details-right.html" class="comments-one__card__reply">Reply</a></div><!-- /.comments-one__meta -->
                                    </div><!-- /.comments-one__card__content -->
                                </li><!-- /.comments-one__card -->
                                <li class="comments-one__card">
                                    <div class="comments-one__card__image">
                                        <img src="assets/images/blog/blog-comment-1-2.jpg" alt="tolak">
                                    </div><!-- /.comments-one__card__image -->
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Korata Mana</h3><!-- /.comments-one__card__title -->
                                        <p class="comments-one__card__text">
                                            Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.
                                        </p><!-- /.comments-one__card__text -->
                                        <div class="comments-one__card__meta">November 16, 2018 at 4:31 am<a href="blog-details-right.html" class="comments-one__card__reply">Reply</a></div><!-- /.comments-one__meta -->
                                    </div><!-- /.comments-one__card__content -->
                                </li><!-- /.comments-one__card -->
                            </ul><!-- /.list-unstyled comments-one__list -->
                        </div><!-- /.comments-one -->

                        <div class="comments-form">
                            <h3 class="comments-form__title">Leave a comment</h3><!-- /.comments-form__title -->
                            <form class="comments-form__form contact-form-validated form-one">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="tolak-btn"><b>Submit Comment</b><span></span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                            <div class="result"></div>
                        </div><!-- /.comments-form -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->
        
        <footer class="footer" style="max-height:200px; mt-5">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-dark" style="background-color: black;height:200px;">
                    <img class="pull-right mt-5 mr-5" src="assets/images/footer-logo.png" style="max-width: 200px;max-height: 200px;"/>
                </div>
                <div class="col-md-9" style="height:200px;">
                    <h3 class="h3 mt-5">Titulo</h3>
                    <p>Paragrafo We are dolor sit amet caadwdjqdq</p>
                </div>
            </div>
            <div class="row" style="height:50px;z-index:10;background-color:darkblue;color:white;">
                <div class="col-md-3" style="background-color: darkblue;margin-top:-50px;height:50px;">
                    <p class="text-center text-white mt-3">Copyright</p>
                </div>
                <div class="col-md-3 text-white" style="background-color: darkblue;color:white;margin-top:-50px;height:50px;">
                    <p class="text-white"> ©2024 <i class="fa fa-copyright mt-3" aria-hidden="true"></i> Todos direitos reservados</p>
                </div>
                <div class="col-md-3 text-white" style="background-color: darkblue;color:white;margin-top:-50px;height:50px;">
                    <p class="mt-3 text-white">Politica de publicidade</p>
                </div>
                <div class="col-md-3 text-white" style="background-color: darkblue;color:white;margin-top:-50px;height:50px;">
                    <p class="mt-3 text-white">Desenvolvido por Pixel in Motion</p>
                </div>
            </div>
            </div>
        </footer>
            <!--
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__text">back top</span>
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>     
        -->
    </body>
</html>