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
				.modal{
			  display:none;
			  position: fixed;
			  z-index:200;
			  left: 0;
			  top:0;
				height:100%;
			  width:100%;
			  overflow: auto;
			  background-color: rgba(0,0,0,0.5);
			}

			.modal-content{
				position:sticky;
			  background-color:#f4f4f4;
			  margin: 7% auto;
				width: 90%;
			  box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
			  animation-name:modalopen;
			  animation-duration:1s;
			}

			.modal-header h2, .modal-footer h3{
			  margin:0;
			}

			.modal-header{
			  background:black;
			  padding:15px;
			  color:white;
			}

			.modal-body{
			  padding:10px 20px;
			}

			.modal-footer{
			  background:white;
			  padding:10px;
			  color:black;
			  text-align: center;
			}

			.closeBtn{
			  color:#ccc;
			  float: right;
			  font-size:30px;
			  color:#fff;
			}

			.closeBtn:hover,.closeBtn:focus{
			  color:red;
			  text-decoration: none;
			  cursor:pointer;
			}

			@keyframes modalopen{
			  from{ opacity: 0}
			  to {opacity: 1}
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
				.modal{
					overflow:hidden;
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
				.modal{
					overflow:hidden;
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
				.modal{
					overflow:hidden;
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
                            <form id="widget-subscribe-form" action="" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter" style="">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
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

                        </div><!-- Contact Info End -->
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

                </div><!-- #logo end -->

                                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

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

                        </ul>
                        

                     </nav><!-- #primary-menu end -->


            </div>

        </div>

</header><!-- #header end -->

<section id="slider" class="force-full-screen full-screen">

			<div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">

				<div class="container clearfix">
					<div class="slider-caption slider-caption-center">
						<h2 data-animate="fadeInUp">DTU Times</h2>
						<p data-animate="fadeInUp" data-delay="200">The Official University Newsletter of DTU</p>
						<a data-animate="fadeInUp" data-delay="400" href="route{{ ('editions') }}" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px;">check out our latest edition</a>
						
						
					</div>
				</div>
				<div class="video-wrap">
					<video controls poster="img/back.jpg" preload="auto" loop autoplay muted >
						<source src="img/videos/mobile2opt.mp4" type="video/mp4" media="all and (min-width: 480px)">

						</video>
					<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
				</div>

			</div>

		</section>
				<div class="line notopmargin"></div>
		
								<h3 class="center"><span>Latest</span> Editions</h3>

					 <div class="container">
					<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-loop="true" data-nav="true" data-pagi="true" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3" data-items-lg="4">
  
					                    <div class="oc-item" >
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/43.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 43</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
						</div>
					</div>
                            </a>
						</div>
  
                    <div class="oc-item" >
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/42.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 42</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
						</div>
					</div>
                            </a>
						</div>
						<div class="oc-item" >
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/41.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 41</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
						</div>
					</div>
                            </a>
						</div>
                       
                    	<div class="oc-item" >
                    	
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/40.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 40</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
						</div>
					</div>
                            </a>
						</div>

					
			            <div class="oc-item" >
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/37.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 37</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
						</div>
					</div>
                            </a>
						</div>
                
                		<div class="oc-item" >
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/36.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 36</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
						</div>
					</div>
                            </a>
						</div>

						<div class="oc-item" >
						<a href="route{{ ('editions') }}">
					<div class="entry clearfix">
						<div class="entry-image">
							<img class="image_fade" src="img/35.jpg" alt="Standard Post with Image">
						</div>
						<div class="entry-title">
							<h2><a href="route{{ ('editions') }}">Edition 35</a></h2>
						</div>
						<div class="entry-content">
							<a href="route{{ ('editions') }}"class="more-link">Read More</a>
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
				
				
					<div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="img/portfolio/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/5.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/7.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/10.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/13.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=album&album_id=1864367220260737">Convocation 2017</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i>December 17,2017</li>
						
							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> This is where it all ends, four years of infinite fun and memories. The journey from a JEE aspirant to an engineer has been one unforgettable ride.</p>
							
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/asdf.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/asdf.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/11/04/28-%E0%A4%9C%E0%A5%81%E0%A4%B2%E0%A4%BE%E0%A4%88-2015/">28 जुलाई 2015</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> November 21, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>
“नीला आसमान सो गया…….!!ऐसा शून्य जिसकी भरपाई कभी नही हो पाएगा। कलाम नहीं रहे।” लोकेश नारायण शंकर, प्रथम वर्ष, आई. टी. का एक दुखद दिन का संस्मरण।</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/11/04/28-%E0%A4%9C%E0%A5%81%E0%A4%B2%E0%A4%BE%E0%A4%88-2015/"class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/asd.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/asd.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/30/two-legged-creatures-diwali-and-me/">Two-legged Creatures, Diwali, and Me</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> November 11, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>
Gul Asnani, 2nd Year, COE elaborates on her ‘people’ problem, and faces a Diwali dilemma.

Illustration by Md. Faisal Akhtar, 3rd Year, EEE.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/30/two-legged-creatures-diwali-and-me/"class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/mq.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/mq.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/31/41-travails-of-a-day-scholar-at-dtu/">41 Travails of a Day Scholar at DTU</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> October 31, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>Srishti Mittal, 1st Year, PCT prepares a near-exhaustive list of the traits of an abundant species: DTU’s Day Scholar. Sleep-deprived? Unfinished syllabus? Empty stomach? Find out what all have you accomplished in your daily journey to and fro from college. </p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/31/41-travails-of-a-day-scholar-at-dtu/"class="more-link">Read More</a>
						</div>
					</div>
				    <div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/ageless.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/ageless.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/26/the-ageless-players/">The Ageless Players</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> October 25, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>Men’s tennis hasn’t been in such a fine health for a while. The evergreen Roger Federer is claiming trophies left, right and center, all at the ripe age of 36. He just bagged the Shanghai Masters title beating arch-rival and present world number one Rafael Nadal.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/26/the-ageless-players/"class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/1.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/1.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/25/why-you-should-binge-watch-this-is-us/">Why You Should Binge-Watch ‘This Is Us’</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> October 28, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>In a life full of quandaries, at one point, you begin searching for meaning. This becomes the foundation of your judgement, decisions and actions. Mere coincidences seem like the ultimate intervention of the universe, guiding you through the high and lows of life.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/25/why-you-should-binge-watch-this-is-us/"class="more-link">Read More</a>
						</div>
					</div>
                    <div class="entry clearfix"   >
						<div class="entry-image">
							<div class="fslider" data-arrows="false" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="img/portfolio/i1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/i1.jpg" alt="Standard Post with Gallery"></a></div>
										
										
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/21/illuminati-dtu-chapter/">Illuminati-DTU Chapter?</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 21 October,2017</li>
							
							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p>Shrey Padhi, 1st Year, PIE has a DTU conspiracy theory of his own. Have you ever thought about the mysterious triangles imprinted on the OAT or wondered why do the secretive symbols related to the Illuminati are found all over DTU?</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/21/illuminati-dtu-chapter/"class="more-link">Read More</a>
						</div>
					</div>
                    <div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="img/portfolio/f1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/f1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/f2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/f2.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/f7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/f7.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/f6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/f6.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/f5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/f5.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums"> Freshers' 2K17</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 3 October, 2017</li>
							
							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p>After a long and dreaded exam season, the much-awaited Freshers' Week was organised by the DTU Cultural Council.
Day 1: The week began with plethora of informal fun events. Amul and CRP were full of freshers ecstatically participating.
Day 2: The second day saw a fully loaded vibrant cultural train dripping joy at every stop and ended with everybody holding their stomach as the Wannabe Idiot Techies filled the B.R. Audi with boisterous laughter.
Day 3: An extravaganza of music, dance and ethnic wear, the Ethnic Night spiced up the monotonous schedules of the freshers.
Day 4: The sign of nation's prosperity and self-dependence, Khaadi was celebrated. Students participated in "Sankalp for Khaadi" which included multitudinous​ events ranging from a fashion show to slogan writing competitions.
Day 5: The last day began with renowned actor and comedian Manoj Joshi taking the B.R. Audi stage to present a play and enchant the students with his brilliant acting skills. It was followed by the much awaited Freshers' Night. The aura was inconceivable as the newbies took the stage by storm.</p>
							
						</div>
					</div>
                    <div class="entry clearfix"   >
						<div class="entry-image clearfix">
							<div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="img/portfolio/c1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/c1.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/c3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/c3.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/c4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/c4.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="img/portfolio/c2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="img/portfolio/c2.jpg" alt="Standard Post with Gallery"></a></div>

									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/dtutimes/photos/?tab=albums">‘Chanakya’ at DTU</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 2 October,2017</li>
						
							<li><i class="icon-picture"></i></li>
						</ul>
						<div class="entry-content">
							<p> The last day of the Freshers’ Week began with renowned National Award-winning actor Mr. Manoj
Joshi taking to the B.R. Audi stage to present the play ‘Chanakya’ and enchant the students with his
brilliant acting skills.</p>
							
						</div>
					</div>
				    <div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/1.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/chester.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/17/powerless/">'Powerless' Tribute to Chester</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> October 1, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>His death underlines the fact that no matter how successful, rich or popular you may be, depression doesn’t discriminate.
Read on as Pratyush Thakur, 2nd Year, COE pens a tribute to Chester Bennington.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/17/powerless/"class="more-link">Read More</a>
						</div>
					</div>
					<div class="entry clearfix"   >
						<div class="entry-image">
							<a href="img/portfolio/15.jpg" data-lightbox="image"><img class="image_fade" src="img/portfolio/15.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/20/the-virtuous-villains/">The Virtuous Villains</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> October 1, 2017</li>
							
							<li><i class="icon-camera-retro"></i></li>
						</ul>
						<div class="entry-content">
							<p>Anyone who has seen Netflix original series Narcos will agree that it is raw. There is no glamorisation. The truth is plain and the message is clear. A law breaker doesn’t deserve to escape the noose just because his situations forced him to do so.
Read on as Hitee Singh, 1st Year MBA writes about how unbiased storytelling can stop the glorification of criminals.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://dtutimes.wordpress.com/2017/10/20/the-virtuous-villains/"class="more-link">Read More</a>
						</div>
					</div>

				</div><!-- #posts end -->

			</div>

		</section><!-- #content end -->

	 <footer id="footer"  class="footer">


            <div id="copyrights" style="background-color:#111111;">
                <div class="footer-content" >
                            <div class="container">
                                    <div class="row" style="margin:auto; text-align:center;">

                                        <div class="footer-col col-md-5 col-sm-6 col-xs-12" style="display:inline-block; box-sizing:border-box;">
                                                <div class="footer-col-inner">
                                                    <div class="footer-col-inner" style="text-align:justify;">
                                                            <h3 style="color:white; text-align:center;">About</h3>
                                                            <p style="margin-top:45px;">DTU Times is the Official Newsletter of Delhi Technological University, formerly known as Delhi College of Engineering.<br>
                                                            We warmly welcome you to the revamped DTU Times Website. Explore the various sections, browse the blog or scan out the archive. You are sure to find content to suit your appetite, and more. There’s something in store for everyone!</p>

                                                    </div>
                                                </div><!--//footer-col-inner-->
                                        </div>

                                    <div class="footer-col col-md-7 col-sm-6 col-sm-pull-0 col-xs-12" style="display:inline-block; box-sizing:border-box;">
                                            <div class="footer-col-inner" style="text-align:center;">
                                                <h3 style="color:white;">Connect with us</h3>

                                                    <div class="footer-col col-md-7 col-mf-offset-1 col-sm-7 col-xs-12 col-xs-offset-0" style=" box-sizing:border-box;">
                                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdtutimes&tabs&width=270&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="270" height="130" style="border:none;overflow:auto;margin:20px 0px;display:inline-block;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                                    </div>
                                            </div><!--//footer-col-inner-->

                                            <!-- InstaWidget -->
                                            <div class="footer-col col-md-5 col-sm-5 col-xs-12" style="text-align:center; margin-top:0px; padding:0px; box-sizing:border-box;">
                                                <a style="display:inline-block;" href="https://instawidget.net/v/user/dtu_times" id="link-61708c0555b801885f4641cb4a7da195bb8fa5c93906abdfe397b99cf9ae6706">@dtu_times</a>
                                                <script src="https://instawidget.net/js/instawidget.js?u=61708c0555b801885f4641cb4a7da195bb8fa5c93906abdfe397b99cf9ae6706&width=170px"></script>
                                            </div>

                                    </div><!--//foooter-col-->
                                    </div>
                                    </div>
                    </div><!--//footer-content-->

                    <div class="bottom-bar" style="text-align:center;">
                        <div class="widget subscribe-widget clearfix dark" style="margin:30px 0; width:300px; display:inline-block;">
                            <h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
                            <div class="widget-subscribe-form-result" style="display:inline-block;"></div>
                            <form id="widget-subscribe-form" action="" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter" style="margin-top:-20px;">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>

                            <div class="container" style="margin-top:30px">
                                            <small class="copyright col-md-12 col-sm-12 col-xs-12" style="color:white; text-align:center;">Copyright &copy; 2018 DTU Times</small>
                            </div><!--//container-->
                    </div><!--//bottom-bar-->


                </div><!-- #copyrights end -->


            </footer>
    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

        {{-- Theme Scripts --}}
    <!-- External JavaScripts
    ============================================= -->
    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="js/main/jquery.js"></script>
    <script type="text/javascript" src="js/main/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/main/functions.js"></script>




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