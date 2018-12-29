@extends('layouts.main')
@section('title')
<title>Contact Us | DTU Times</title>
@endsection 
@section('content') 
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact Us</h1>
				<span>Get in Touch</span>
				
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
	
		<!-- Contact Form & Map Overlay Section
		============================================= -->
		<section id="map-overlay">

			<div class="container-fluid clearfix">

				<!-- Contact Form Overlay
				============================================= -->
				<div id="contact-form-overlay" class="clearfix">
                
                
                
                    <div class="fancy-title title-dotted-border">
						<h3>Get in touch</h3>
						<h6>We’d love to hear from you. Talk to us about whatever you like, ask us a question or tell us about something you may be interested in. We are all ears.</h6>
						<br><br>

						<div class="row clear-bottommargin">
							<div class="col-md-4 col-sm-4 clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="mailto:dtutimes@dtu.ac.in"><i class="icon-email2"></i></a>
									</div>
									<h3>Email Us <br><span class="subtitle">dtutimes@dtu.ac.in</span></h3>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 bottommargin clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="https://www.facebook.com/dtutimes"><i class="icon-facebook2"></i></a>
									</div>
									<h3>Follow us on Facebook<span class="subtitle">25K Likes</span></h3>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 bottommargin clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="http://www.instagram.com/dtu_times"><i class="icon-instagram2"></i></a>
									</div>
									<h3>Follow us on Instagram<span class="subtitle">3K Followers</span></h3>
								</div>
							</div>

						</div><!-- Contact Info End -->
					</div>
                        
                	<div class="row">
                
                    	<div class="col-xs-12 col-md-9">
                     		<div class="contact-widget">
								<!-- Contact Form
								============================================= -->
								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post" width="100%" height="500px">

									<iframe style="height:500px"
									src="https://docs.google.com/forms/d/e/1FAIpQLSeOjhdOdiBg2JL4GjBBtRmTQ15zpxcg4Z7VlIJvr43naLAepg/viewform?embedded=true" width="100%"  frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

								</form>
							</div>   
                   		</div>

                    	<div class="col-xs-12 col-md-3" style="word-wrap:break-word">

	                        <div class="row">
								<div class="fancy-title title-double-border">
									<h3><span>Press Enquiries</span> </h3>
								</div>
								<div class="col-xs-6 col-md-12">

									<strong>Siddhant Patra</strong>
									<br>
									<h6>Editor-in-Chief<br> siddhant.patra1@gmail.com</h6>

								</div>
								<div class="col-xs-6 col-md-12">
									<strong>Zara Khan</strong><br>
									<h6>PR In-charge<br>
									zarakhan9278@gmail.com</h6>
								</div>						
							</div>	
						 </div>
                
					</div>
				


				</div><!-- Contact Form Overlay End -->

			</div>

			<!-- Google Map
			============================================= -->
			
		</section><!-- Contact Form & Map Overlay Section End -->
@endsection