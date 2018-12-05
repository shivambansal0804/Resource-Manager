<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery | DTU Times </title>

    {{-- Theme css --}}
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/responsive.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/main/swiper.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/main/photography.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/photography-addons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/et-line.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/phot%20fonts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/main/colors.php?color=c85e51') }}" type="text/css" /> {{-- Page css --}}

</head>

<body class="stretched">
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
        <header id="header" class="dark full-header sticky">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                        ============================================= -->
                    <div id="logo">
                        <a href="{{ route('welcome') }}" class="standard-logo" data-dark-logo="{{ asset('img/logo-dark.png') }}"><img src="{{ asset('img/dtulog.png') }}" ></a>

                    </div>
                    <!-- #logo end -->

                    <!-- Primary Navigation
                        ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <div>Home</div>
                                </a>
                            </li>

                            <li class="mega-menu">
                                <a href="{{ route('about') }}">
                                    <div>About Us</div>
                                </a>
                            </li>

                            <li class="mega-menu">
                                <a href="{{ route('editions') }}">
                                    <div>Editions</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blog.index') }}">
                                    <div>Blog</div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('gallery.index') }}">
                                    <div>Gallery</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('societies.index') }}">
                                    <div>Societies</div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team') }}">
                                    <div>Team</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <div>Contact Us</div>
                                </a>
                            </li>

                        </ul>


                    </nav>
                    <!-- #primary-menu end -->


                </div>

            </div>

        </header>
        <!-- #header end -->


        <!-- Slider
        ============================================= -->
        <section id="slider" class="swiper_wrapper full-screen clearfix" data-loop="true" data-speed="1200" data-autoplay="5000">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('{{ asset('img/gallery/1.jpg') }}');">
                        <div class="container clearfix">
                            <div class="slider-text">

                                <h3>Serenity Symbolised</h3>




                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('{{ asset('img/gallery/festdtu/cultural/nucl/1.jpg') }}');">
                        <div class="container clearfix">
                            <div class="slider-text">

                                <h3>Delhi's Largest Events</h3>



                                <span></span>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('{{ asset('img/gallery/fodtu/10.jpg') }}');">
                        <div class="container clearfix">
                            <div class="slider-text">

                                <h3>International Stars</h3>


                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('{{ asset('img/gallery/4.jpg') }}');">
                        <div class="container clearfix">
                            <div class="slider-text">

                                <h3>Beautiful by Nature</h3>



                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('{{ asset('img/gallery/5.jpg') }}');">
                        <div class="container clearfix">
                            <div class="slider-text">

                                <h3>Budding Athletes Galore</h3>



                                <span></span>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('{{ asset('img/gallery/6.jpg') }}');">
                        <div class="container clearfix">
                            <div class="slider-text">

                                <h3>The Crown of DTU</h3>



                                <span></span>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div id="slide-number">
                    <div id="slide-number-current"></div><span></span>
                    <div id="slide-number-total"></div>
                </div>
            </div>

            <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><i class="icon-line-grid"></i></a>

        </section>
        <!-- #Slider End -->

        <!-- Content
        ============================================= -->
        <section id="content" class="clearfix">

            <div class="content-wrap">


                <div class="clear"></div>


                <div class="clear"></div>

                <!-- Album Area
                ============================================= -->
                <div class="section nobg footer-stick clearfix">
                    <div class="container clearfix">
                        <div class="heading-block dark center noborder">
                            <h3 class="ls1">Albums</h3>
                        </div>
                        <div class="row dark clearfix">
                            @foreach ($albums as $item)
                            <div class="col-sm-4 center">
                                <a href="{{ route('gallery.show', $item->slug ) }}">
                                    <div style="margin: 0 auto;max-width: 235px; height: 232px; padding: 25px; background-size: 100%; background: url('{{ $item->getFirstMediaUrl('covers', 'cover')}}') no-repeat center; background-size:cover;">
                                    </div>
                                    <h5 class="ls1 t400">{{ $item->name }}</h5>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

        </section>
        <!-- #content end -->

        <div class="clear"></div>

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark noborder clearfix" style="background-color: #282828">

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights" class="nobg">

                <div class="container clearfix">

                    <div class="col_full center nobottommargin topmargin-sm">
                        &copy; DTU Times 2018. All Rights Reserved.<br><br>
                        <a href="http://facebook.com/DTUTimes" target="_blank" class="social-icon inline-block si-small si-borderless si-rounded si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="http://instagram.com/dtu_times" target="_blank" class="social-icon inline-block si-small si-borderless si-rounded si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="mailto:dtutimes@dtu.ac.in" class="social-icon inline-block si-small si-borderless si-rounded si-gplus">
                            <i class="icon-envelope2"></i>
                            <i class="icon-envelope2"></i>
                        </a>
                    </div>

                </div>

            </div>
            <!-- #copyrights end -->

        </footer>
        <!-- #footer end -->

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>


    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/main/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main/plugins.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/main/functions.js') }}"></script>

    <script src="{{ asset('js/main/photography-addons.js') }}"></script>


    <script>
        (function() {
            var support = { transitions: Modernizr.csstransitions },
                // transition end event name
                transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
                transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                onEndTransition = function( el, callback ) {
                    var onEndCallbackFn = function( ev ) {
                        if( support.transitions ) {
                            if( ev.target != this ) return;
                            this.removeEventListener( transEndEventName, onEndCallbackFn );
                        }
                        if( callback && typeof callback === 'function' ) { callback.call(this); }
                    };
                    if( support.transitions ) {
                        el.addEventListener( transEndEventName, onEndCallbackFn );
                    }
                    else {
                        onEndCallbackFn();
                    }
                };

            new GridFx(document.querySelector('.grid'), {
                imgPosition : {
                    x : -0.5,
                    y : 1
                },
                onOpenItem : function(instance, item) {
                    instance.items.forEach(function(el) {
                        if(item != el) {
                            var delay = Math.floor(Math.random() * 50);
                            el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                            el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                            el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
                            el.style.transform = 'scale3d(0.1,0.1,1)';
                            el.style.opacity = 0;
                        }
                    });
                },
                onCloseItem : function(instance, item) {
                    instance.items.forEach(function(el) {
                        if(item != el) {
                            el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
                            el.style.transition = 'opacity .4s, transform .4s';
                            el.style.WebkitTransform = 'scale3d(1,1,1)';
                            el.style.transform = 'scale3d(1,1,1)';
                            el.style.opacity = 1;

                            onEndTransition(el, function() {
                                el.style.transition = 'none';
                                el.style.WebkitTransform = 'none';
                            });
                        }
                    });
                }
            });
        })();

        jQuery(document).ready(function($) {
            var swiperSlider = $('.swiper-parent')[0].swiper;
            swiperSlider.enableKeyboardControl();
        });
    </script>

</body>

</html>