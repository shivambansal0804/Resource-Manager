<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
	<link rel="icon" href="images/logofav1.png" type="image/gif">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Sandeep/Rajyavardhan" content="DTU Times" />
	<meta property="fb:pages" content="145561028808040" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111767284-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111767284-1');
	</script>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
	 rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/magnific-popup.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/responsive.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/main/swiper.css')}}" type="text/css" />
	<!-- Photography Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/main/photography.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/photography-addons.css')}}" type="text/css" />
	<!-- / -->
	<link rel="stylesheet" href="{{ asset('css/main/et-line.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/phot%20fonts.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/main/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{ asset('css/main/colors.php?color=c85e51')}}" type="text/css" />
	<!-- Document Title
	============================================= -->
	<title>DTU Times Gallery</title>
</head>

<body class="stretched ">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header
		============================================= -->
	@include('inc.nav')
		<!-- #header end -->
		<!-- Slider
		============================================= -->
		<section class="full-screen clearfix" style="background: url('{{ $album->getFirstMediaUrl('covers', 'fullscreen') }}') no-repeat; background-size: cover; background-position: center;">
		</section>
		<!-- #Slider End -->
		<!-- Content
		============================================= -->
		<section id="content" class="clearfix">
			<div class="content-wrap">
				<div class="container dark clearfix">
					<div class="heading-block dark noborder" style="text-align:center;">
						<br><br>
						<h3>{{ $album->name }}</h3>
						<span>
							{{ $album->biliner }}
						</span>
					</div>
					<!-- Grid Items
					============================================= -->
					<div class="grid">
						@foreach ($images as $item)
						<div class="grid-item" data-size="1280x853">
							<a href="{{ $item->getFirstMediaUrl('images', 'fullscreen') }}" class="img-wrap img-grayscale" data-animate="fadeInUp">
									<img src="{{ $item->getFirstMediaUrl('images', 'fullscreen') }}" alt="img01" />
									<div class="description description-grid">
										<h3>{{ $item->name }}</h3>
										<p>{{ $item->biliner }}
										<span></span></p>
										<div class="details">

										</div>
									</div>
								</a>
						</div>
						@endforeach
					</div>
					<!-- /grid -->
					<div class="preview">
						<button class="action action-close"><i class="icon-line2-close"></i><span class="text-hidden">Close</span></button>
						<div class="description description-preview"></div>
					</div>
				</div>
				<div class="clear"></div>

				<br> 
				<!-- Album Area
				============================================= -->
				<!-- Album Area
				============================================= -->
				@if ($subs->count())
					<div class="section nobg footer-stick clearfix">
						<div class="container clearfix">
							<div class="heading-block dark center noborder">
								<h3 class="ls1">Albums</h3>
								<span></span>
							</div>
							<div class="row dark clearfix">
								@foreach ($subs as $item)
								<div class="col-sm-4 center">
									<a href="{{ route('gallery.show', $item->slug) }}">
										<div style="margin: 0 auto;max-width: 235px; padding: 25px; background: url('images/gallery/thumbnails/album-bg.svg') no-repeat center center; background-size: 100%;">
											<img src="{{ $item->getFirstMediaUrl('covers', 'thumb') }}" alt="img01" style="" />
										</div>
										<h5 class="ls1 t400">{{ $item->name }}</h5>
									</a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				@endif
			</div>
			<br>
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
						&copy; DTU Times 2018. All Rights Reserved.<br/>
						<br/>
						<a href="http://facebook.com/dtutimes" target="_blank" class="social-icon inline-block si-small si-borderless si-rounded si-facebook">
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
	<script src="{{asset('js/main/photography-addons.js')}}"></script>
	<!-- Footer Scripts
	    ============================================= -->
	<script type="text/javascript" src="{{ asset('js/main/functions.js') }}"></script>

	<script>
		(function() {
        var support = { transitions: Modernizr.csstransitions },
            // transition end event name
            transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
            transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
            onEndTransition = function(el, callback) {
                var onEndCallbackFn = function(ev) {
                    if (support.transitions) {
                        if (ev.target != this) return;
                        this.removeEventListener(transEndEventName, onEndCallbackFn);
                    }
                    if (callback && typeof callback === 'function') { callback.call(this); }
                };
                if (support.transitions) {
                    el.addEventListener(transEndEventName, onEndCallbackFn);
                } else {
                    onEndCallbackFn();
                }
            };

        new GridFx(document.querySelector('.grid'), {
            imgPosition: {
                x: -0.5,
                y: 1
            },
            onOpenItem: function(instance, item) {
                instance.items.forEach(function(el) {
                    if (item != el) {
                        var delay = Math.floor(Math.random() * 50);
                        el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                        el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                        el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
                        el.style.transform = 'scale3d(0.1,0.1,1)';
                        el.style.opacity = 0;
                    }
                });
            },
            onCloseItem: function(instance, item) {
                instance.items.forEach(function(el) {
                    if (item != el) {
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