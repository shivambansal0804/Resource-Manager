<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>DTU Times</title>

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
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<style>
		::-webkit-scrollbar {
			display: none;
		}

		.modal {
			display: none;
			position: fixed;
			z-index: 200;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.5);
		}

		.modal-content {
			position: sticky;
			background-color: #f4f4f4;
			margin: 7% auto;
			width: 90%;
			box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
			animation-name: modalopen;
			animation-duration: 1s;
		}

		.modal-header h2,
		.modal-footer h3 {
			margin: 0;
		}

		.modal-header {
			background: black;
			padding: 15px;
			color: white;
		}

		.modal-body {
			padding: 10px 20px;
		}

		.modal-footer {
			background: white;
			padding: 10px;
			color: black;
			text-align: center;
		}

		.closeBtn {
			color: #ccc;
			float: right;
			font-size: 30px;
			color: #fff;
		}

		.closeBtn:hover,
		.closeBtn:focus {
			color: red;
			text-decoration: none;
			cursor: pointer;
		}

		@keyframes modalopen {
			from {
				opacity: 0
			}
			to {
				opacity: 1
			}
		}

		@media (min-width: 530px) {
			.resp_width {
				width: 65%;
			}
		}

		@media (min-width: 800px) {
			.modal-content {
				width: 75%;
				height: 85%
			}
			.resp_width {
				width: 65%;
			}
			.modal {
				overflow: hidden;
			}
		}

		@media (min-width: 992px) {
			.modal-content {
				width: 60%;
				height: 85%;
			}
			.resp_width {
				width: 65%;
			}
			.modal {
				overflow: hidden;
			}
		}

		@media (min-width: 1200px) {
			.modal-content {
				width: 50%;
				height: 80%;
			}
			.resp_width {
				width: 65%;
			}
			.modal {
				overflow: hidden;
			}
		}
	</style>
</head>

<body class="stretched">
	<!-- Document Wrapper
    ============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- modal -->

		<div id="simpleModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="closeBtn" style="margin-top:-15px;">&times;</span>
					<h1 style="text-align:center; color:#EEE; font-variant:small-caps; margin:0;">Sign up to keep in touch</h1>
				</div>
				<div class="modal-body">

					<div class="widget subscribe-widget clearfix resp_width" style="margin:15px auto 30px auto;">
						<h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
						<div class="widget-subscribe-form-result" style="margin-top:-10px;"></div>
						<form id="widget-subscribe-form" action="{{ route('subscribers.join') }}" role="form" method="post" class="nobottommargin">
							<div class="input-group divcenter" style="">
								@csrf
								<span class="input-group-addon"><i class="icon-email2"></i></span>
								<input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
								<span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer" style="margin:0 20px 20px 20px;">
					<h4 style="margin:0;">More ways to stay connected: </h4>
					<br><br>
					<div class="row clear-bottommargin">
						<div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
							<div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
								<div class="fbox-icon">
									<a href="mailto:dtutimes@dtu.ac.in"><i class="icon-email2"></i></a>
								</div>
								<h3>Email Us <br><span class="subtitle">dtutimes@dtu.ac.in</span></h3>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
							<div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
								<div class="fbox-icon">
									<a href="https://www.facebook.com/dtutimes"><i class="icon-facebook2"></i></a>
								</div>
								<h3>Follow us on Facebook<span class="subtitle">21K Likes</span></h3>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
							<div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
								<div class="fbox-icon">
									<a href="http://www.instagram.com/dtu_times"><i class="icon-instagram2"></i></a>
								</div>
								<h3>Follow us on Instagram<span class="subtitle">3.3K Followers</span></h3>
							</div>
						</div>

					</div>
					<!-- Contact Info End -->
				</div>

			</div>
		</div>
		<!-- modal end -->

		<!-- Header
        ============================================= -->
		<header id="header" class="transparent-header dark full-header sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
                    ============================================= -->
					<div id="logo">
						<a href="{{ route('welcome') }}" class="standard-logo" data-dark-logo="img/logo-dark.png"><img src="img/dtulog.png" ></a>

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

                        <ul>
                            <li><a href="{{ route('welcome') }}"><div>Home</div></a>
                            </li>
                                
                            <li class="mega-menu"><a href="{{ route('about') }}"><div>About Us</div></a>
                            </li>
                                
                            <li class="mega-menu"><a href="{{ route('editions') }}"><div>Editions</div></a>
                            </li>
                                                        <li><a href="{{ route('blog.index') }}"><div>Blog</div></a>
                            </li>
                            
                            <li><a href="{{ route('gallery.index') }}"><div>Gallery</div></a>
							</li>

							<li><a href="{{ route('societies.index') }}"><div>Societies</div></a>
							</li>
							                                            
                            <li><a href="{{ route('team') }}"><div>Team</div></a>
                            </li>
                             <li><a href="{{ route('contact') }}"><div>Contact Us</div></a>
                            </li>                       


					</nav>
					<!-- #primary-menu end -->


				</div>

			</div>

		</header>
		<!-- #header end -->

		<section id="slider" class="force-full-screen full-screen">

			<div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">

				<div class="container clearfix">
					<div class="slider-caption slider-caption-center">
						<h2 data-animate="fadeInUp">DTU Times</h2>
						<p data-animate="fadeInUp" data-delay="200">The Official University Newsletter of DTU</p>
						<a data-animate="fadeInUp" data-delay="400" href="{{ route('editions') }}" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin"
						 style="margin-top: 30px;">check out our latest edition</a>


					</div>
				</div>
				<div class="video-wrap">
					<video controls poster="img/back.jpg" preload="auto" loop autoplay muted>
						<source src="img/videos/mobile2opt.mp4" type="video/mp4" media="all and (min-width: 480px)">

						</video>
					<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
				</div>

			</div>

		</section>
		<div class="line notopmargin"></div>

		<h3 class="center"><span>Latest</span> Editions</h3>

		<div class="container">
			<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-loop="true" data-nav="true"
			 data-pagi="true" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3" data-items-lg="4">


				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/44.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 44</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/43.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route('editions') }}">Edition 43</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/42.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 42</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>
				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/41.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 41</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">

					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/40.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 40</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>


				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/37.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 37</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/36.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 36</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route ('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>

				<div class="oc-item">
					<a href="{{ route ('editions') }}">
						<div class="entry clearfix">
							<div class="entry-image">
								<img class="image_fade" src="/img/35.jpg" alt="Standard Post with Image">
							</div>
							<div class="entry-title">
								<h2><a href="{{ route ('editions') }}">Edition 35</a></h2>
							</div>
							<div class="entry-content">
								<a href="{{ route('editions') }}" class="more-link">Read More</a>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>


		<br>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<!-- Posts
								============================================= -->
				<div id="posts" class="post-grid grid-container post-masonry post-masonry-full grid-3 clearfix">

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/batch1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/batch1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/batch2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/batch2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/batch5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/batch5.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/batch6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/batch6.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?ref=page_internal">Batch Photos</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>April 10,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times conducts the Batch Photos of the graduating class every year. The full Batch Photography Session of the
								graduating batch of 2018 was conducted at the OAT and the individual class wise photos were conducted in the B.R.
								Ambedkar Auditorium last academic year.</p>

						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/dtusa.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/dtusa.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/19/interview-dtu-student-association/">Interview | DTU Student Association</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> September 19, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>
								DTU Times interviewed the Student Association of Delhi Technological University –<br> Gaurav Gupta, President, DTU-SA,
								PIE, Class of 2019<br> Puneet Lamba, Vice President, DTU-SA, ME, Class of 2020<br> Rishav Sethi, General Secretary,
								DTU-SA, SE, Class of 2020<br> Ritick Ganrai, Joint Secretary, DTU-SA, ECE, Class of 2020
							</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/19/interview-dtu-student-association/
				" class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/fn1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fn1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fn3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fn3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fn4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fn4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fn5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fn5.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fn6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fn6.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Freshers' Night</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>September 14,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The most awaited, most special and magical day for every fresher around the globe is the Freshers' Night. DTU holds
								its Freshers' Night towards the end of the Freshers' Week where the various accolades like the Mr. and Ms. Fresher
								is awarded to the new students.</p>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/kuchyadein.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/kuchyadein.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/16/कुछ-यादें-ऐसी-भी/#more-7643">कुछ यादें ऐसी भी!</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> August 16, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>कॉलेज में कदम रखते शिवेंद्र की विडम्बना का वर्णन करते, लोकेश नारायण शंकर, द्वितीय वर्ष, आई टी.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/16/कुछ-यादें-ऐसी-भी/#more-7643"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/y3.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/y3.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/16/interview-tyesha-kohli-singer/#more-7729">Interview | Tyesha Kohli, Singer</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> September 16, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Tyesha Kohli, a proclaimed singer, who was at DTU for a performance in Pehli Mulaqat, an event
								organised by Yuvaan – The Annual Literary Fest of DTU.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/16/interview-tyesha-kohli-singer/#more-7729"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/o1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/o1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/o2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/o2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/o4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/o4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/o5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/o5.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/o6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/o6.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Orientation 2018</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>August 2,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The Orientation for newly admitted students of DTU was held at the OAT. The occasion was graced by the presence of
								Shri. Arvind Kejriwal, Hon'ble Chief Minister of Delhi and Shri. Manish Sisodia, Hon'ble Deputy Chief Minister of
								Delhi.
							</p>

						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/en2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/en2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/en3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/en3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/en4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/en4.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Ethnic Night '18</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>September 11,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> Every year, during the Freshers' Week, the Cultural Council of DTU has its Ethnic Night on the grounds of DTU. In
								2018, the Ethnic Night was conducted on the ground in front of the Aryabhatta Boys' Hostels and saw students from
								various years' of study dance to some desi tunes.</p>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/amanthakur.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/amanthakur.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/10/02/interview-aman-thakur-gyankunj/">Interview | Aman Thakur, Gyankunj</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>October 2, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Aman Thakur, an alumnus of DTU and the founder of the NGO Gyankunj.<br> “Our belief is that
								a liberation of weaker sections of our community can tangibly spread change in the long run.”<br> – Gyankunj Team</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/10/02/interview-aman-thakur-gyankunj/"
							 class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/daring.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/daring.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/17/daring-to-challenge/#more-7653">Daring to Challenge</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> August 17, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>Zara Khan, 3rd Year, PSCT and Anushka Sharma, 2nd Year, MAM pen a tribute to former prime minister Atal Bihari Vajpayee.
							</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/17/daring-to-challenge/#more-7653"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/talesoflost.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/talesoflost.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/15/tale-of-the-lost/#more-7714">Tale of the Lost</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> September 15, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p> A tale of two best friends from Anushka Sharma, 2nd Year, MAM who had to part ways as a result of an impasse.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/15/tale-of-the-lost/#more-7714"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/y.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/y5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/y5.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Yuvaan-Pehli Mulaqat 2018</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>September 10,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> Yuvaan, DTU's official literary fest organised - Pehli Mulaqat, a Comedy Show cum Interactive Session, featuring the
								Rising Stars of Comedy and Vines to give a taste of an ultimate feel-good event to the fucchas of 2018</p>

						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/gautam.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/gautam.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/30/cadence18-gautam-thakur-instrumental-category-winner/">Cadence’18: Gautam Thakur, Instrumental Category Winner</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> October 30, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Gautam Thakur, Instrumental Category Winner of Cadence’18. He is a second year ME student who
								mesmerised everyone in the B. R. Ambedkar Auditorium with his performance.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/30/cadence18-gautam-thakur-instrumental-category-winner/"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/nontech.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/nontech.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/06/career-focus-non-tech-placement-outlook-2018-3/#more-7638">Career Focus: Non-Tech Placement Outlook 2018 #1</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> August 6, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p> Arnav Saxena, Mathematics and Computing<br> Analyst, Bain Capability Network<br> Tip: 'Try solving guesstimates and
								case studies with more than one approach. The interviewers will stop you in the middle and ask you to come up with
								another approach.'
							</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/06/career-focus-non-tech-placement-outlook-2018-3/#more-7638"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/jayesh.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/jayesh.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/10/01/cadence18-jayesh-kerketta-western-solo-category-winner/">Cadence’18: Jayesh Kerketta, Western Solo Category Winner
				</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>October 1, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Jayesh Kerketta, Western Solo Category Winner of Cadence’18. He is a first year Bachelor of
								Design student who enthralled the audience with his soulful voice.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/10/01/cadence18-jayesh-kerketta-western-solo-category-winner/"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/techplacement.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/techplacement.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/23/career-focus-tech-placement-outlook-2018-6/#more-7681">Career Focus: Tech Placement Outlook 2018 #3</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> August 23, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p> Rohan Rathi, Computer Engineering<br> Software Engineer, Uber<br> Tip: 'Try to maintain an average CGPA and concentrate
								on the real-world applications of your field, as the interviewers are more interested in the work you’ve done in
								the past four years.'</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/08/23/career-focus-tech-placement-outlook-2018-6/#more-7681"
							 class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/fw1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fw1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fw2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fw2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fw4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fw4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/fw5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/fw5.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">Fresher's Week</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>September 7,2018 - September 14,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The Cultural Council of DTU arranges the Freshers' Week, where many mini game events are held at the hotspots of the
								campus, in order to give the warmest welcome to the newly admitted students of DTU.</p>

						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="/img/portfolio/igt1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/igt1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/igt2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/igt2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="/img/portfolio/igt4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="/img/portfolio/igt4.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">India's got talent</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>August 25,2018</li>

							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The DTU Campus was the venue for the auditions of the popular TV reality show - India's Got Talent. With the gates
								of DTU opened in the morning, many people from around the Northern States arrived to audition for the show in hopes
								of winning it.
							</p>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="/img/portfolio/major_sehgal.jpg" data-lightbox="image"><img class="image_fade" src="/img/portfolio/major_sehgal.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/17/interviewretd-major-general-p-k-sehgal/#more-7738">Interview | Retd. Major General P.K. Sehgal</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>September 17, 2018</li>

							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>DTU Times interviewed Retd. Major General PK Sehgal, who was at DTU for an interactive session, organized by the newly
								elected Student Association.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2018/09/17/interviewretd-major-general-p-k-sehgal/#more-7738"
							 class="more-link">Read More</a>
						</div>
					</div>

				</div>
				<!-- #posts end -->

			</div>

		</section>
		<!-- #content end -->

		@include('inc.footer')
	</div>
	<!-- #wrapper end -->

	<!-- Go To Top
    ============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	{{-- Theme Scripts --}}
	<!-- External JavaScripts
    ============================================ -->
	<!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/main/jquery.js"></script>
	<script type="text/javascript" src="js/main/plugins.js"></script>

	<!-- Footer Scripts
    ============================================= -->
	<script type="text/javascript" src="js/main/functions.js"></script>




@if(!isset($_COOKIE['DTUnewsletter'])):
	<script>
		$(document).ready(function(){
					setTimeout(function(){
						PopUp();
					},5000); // 5000 to load it after 5 seconds from page load
			});

			// Get modal element
			var modal = document.getElementById('simpleModal');
			// Get close button
			var closeBtn = document.getElementsByClassName('closeBtn')[0];

			// Listen for close click
			closeBtn.addEventListener('click', closeModal);
			// Listen for outside click
			window.addEventListener('click', outsideClick);

			// Function to open modal
			function PopUp(){
			modal.style.display = 'block';
			}

			// Function to close modal
			function closeModal(){
			modal.style.display = 'none';
			}

			// Function to close modal if outside click
			function outsideClick(e){
			if(e.target == modal){
				modal.style.display = 'none';
			}
			}
	</script>
@endif

	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

	<script>
		AOS.init();

	var mainVideo = $('#the-video');
    

if ($(window).width() < 1200 && medQualVersion) {
  mainVideo.append("<source type='video/mp4' src='img/videos/explore.mp4" + medQualVersionSrc + "' />");
} else {
  mainVideo.append("<source type='video/mp4' src='img/videos/explore.mp4" + highQualVersionSrc + "' />");
}
mainVideo.append("<source type='video/webm' src='img/videos/explore.mp4" + webMSrc + "' />");

// Wait until sources are appended to call MediaElements.js
mainVideo.mediaelementplayer();
	</script>
</body>

</html>