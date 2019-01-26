@extends('layouts.main') 
@section('title')
<title>Team | DTU Times</title>
@endsection
 
@section('links')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
<style type="text/css">
	.btn-primary {

		background: #fff;
		color: #252525;
		border-color: #252525;
		font-weight: bold;
	}

	.btn-primary:hover {
		color: #fff;
		background: #252525;
		border-color: #fff;
	}

	.jumbotron {
		background-color: #fff;
	}

	.hrstyle {
		border: 0;
		height: 1px;
		background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
	}
</style>
@endsection
 
@section('content')
<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>The Team</h1>


	</div>

</section>
<!-- #page-title end -->





<section id="content">

	<div class="content-wrap">

		<div class="container">

			<ul id="myTab" class="nav nav-tabs boot-tabs">
				<li class="active"><a href="#home" data-toggle="tab">Advisors</a></li>
				<li><a href="#profile" data-toggle="tab">Alumni Advisors</a></li>
				<li><a href="#council" data-toggle="tab">Council</a></li>
				<li><a href="#columnists" data-toggle="tab">Columnists</a></li>
				<li><a href="#designers" data-toggle="tab">Designers</a></li>
				<li><a href="#illustrators" data-toggle="tab">Illustrators</a></li>
				<li><a href="#photographers" data-toggle="tab">Photographers</a></li>
				<li><a href="#webdevelopers" data-toggle="tab">Developers</a></li>

			</ul>


			<div id="myTabContent" class="tab-content">

				<div class="tab-pane fade in active" id="home" style="margin-left:10%; margin-right:10%">

					<div class="fancy-title title-border">
						<h3>Advisors</h3>
					</div>

					<div class="row">
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/VC.jpg" alt="Yogesh Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Prof. Yogesh Singh</h5>
										<h6>Hon'ble Vice Chancellor</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/Anoop.png" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sh. Anoop Lather</h5>
										<h6>Public Relations Officer</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/sindu.jpg" alt="Prof. S. Indu">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Prof. S. Indu</h5>
										<h6>HOD, ECE Department</h6>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/rpandey.jpg" alt="Prof. Rajeshwari Pande">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Prof. Rajeshwari Pandey</h5>
										<h6>Associate Dean-Academics (UG)</h6>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="hrstyle">

					<!--Team Login Section -->
					<div class="jumbotron text-center">
						<h4 class="login">Are you a member of DTU Times?</h4>
						<a class="btn btn-primary type-uppercase " href="{{ route('login') }}">
                                    <span class="btnlog">
                                        Login Here !
                                    </span>
                                    
                                </a>
					</div>

					<!-- Team Login Section ends -->
				</div>
				<div class="tab-pane fade" id="profile" style="margin-left:10%; margin-right:10%">

					<div class="fancy-title title-border">
						<h3>Alumni Advisors</h3>
					</div>



					<div class="row">
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Devank%20Tyagi.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Devank Tyagi</h5>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Alfred%20Thomas.jpg" alt="Josh Clark">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Alfred Thomas</h5>
									</div>

								</div>
							</div>

						</div>

						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Himanshi%20Jain.jpeg" alt="Mary Jane">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Himanshi Jain</h5>
									</div>

								</div>
							</div>

						</div>

						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Radhika Dang.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Radhika<br> Dang</h5>
										<h6><br></h6>
									</div>




								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="tab-pane fade" id="council" style="margin-left:10%; margin-right:10%">
					<div class="fancy-title title-border">
						<h3>Council</h3>
					</div>



					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/siddhant%20patra.jpg" alt="Siddhant">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Siddhant<br>Patra</h5>
										<h6>Editor-in-Chief</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Raunak%20kapoor.jpeg" alt="Raunak Kapur">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Raunak<br> Kapur</h5>
										<h6>Student Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/raunak.kapur.3
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://linkedin.com/in/raunak-kapur-520b47141
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Utkarsh%20Verma.jpeg" alt="Utkarsh Verma">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Utkarsh Arun <br>Verma</h5>
										<h6>Student Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://facebook.com/utkarshvermaa
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://linkedin.com/in/utkarshverma-
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Amit%20Kumar.jpg" alt="Amit Dogra">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Amit<br> Dogra</h5>
										<h6>Managing Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100001482658406
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/amit-kd-73465a108/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">

							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/GURSIFATH%20BHASIN.jpg" alt="Gursifath Bhasin">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gursifath<br> Bhasin</h5>
										<h6>Managing Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/gursifath.hamsterous.bhasin
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/gursifath-bhasin-b23033112/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Divyanshu%20Singh.jpg" alt="Divyanshu Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Divyanshu<br> Singh</h5>
										<h6>Head Of Illustrations</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/divyanshus97
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/divyanshu-singh-477b23106/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

					</div>





					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Arundhati%20Tewari.jpeg" alt="Arundhati Tewari">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Arundhati<br> Tewari</h5>
										<h6>Head Of Photography</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/arundhati.tewari?ref=bookmarks" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/mwlite/me" class="social-icon inline-block si-small si-light si-rounded si-linkein">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Shlok%20Kapoor.jpg" alt="Shlok Kapoor">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shlok <br>Kapoor</h5>
										<h6>Head of Photography</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Shlok97
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shlok-kapoor-05bb7587/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/deepanshu%20himanshugalyan.jpg" alt="Deepanshu Galyan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Deepanshu<br> Galyan</h5>
										<h6>Creative Head</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/galyan.galyan118
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/deepanshu-galyan-3696b9149/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>



					</div>


				</div>
				<div class="tab-pane fade" id="columnists" style="margin-left:10%; margin-right:10%">


					<div class="fancy-title title-border">
						<h3>Columnists</h3>
					</div>


					<div class="row">


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Shivam%20Jha.jpg" alt="Shivam Jha">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shivam<br> Jha</h5>
										<h6>Associate Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/GodOfGeeks
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="www.linkedin.com/in/shivamjha
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">

							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Vishesh%20Kashyap.jpg" alt="Vishesh Kashyap">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Vishesh<br> Kashyap</h5>
										<h6>Associate Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/vishesh.kashyap97
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/vishesh-kashyap/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Parangat%20Mittal.jpg" alt="Parangat Mittal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Parangat<br> Mittal</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="facebook.com/parangatmittal
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/parangat-mittal-7435a9130
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Pratyush%20Thakur.jpg" alt="Pratyush Thakur">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratyush<br> Thakur</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/p.vasu5
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
					

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team">
									<img src="/img/team/Columnists/Shashank%20Jha.jpg" alt="Shashank Shekhar Jha">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shashank S. <br> Jha</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/jhashashank02?refid=7
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shashank-shekhar-jha-b071a5140
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Shrey%20Padhi.jpg" alt="Shrey Padhi">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shrey <br>Padhi</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shrey.padhi
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shrey-padhi-317009110/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row"> -->


					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Srishti%20Mittal.jpg" alt="Srishti Mittal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Srishti <br>Mittal</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/srishti.mittal.35
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/srishti-m/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>

						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/zara%20khan.jpeg" alt="Zara Khan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Zara <br>Khan</h5>
										<h6>PR In-Charge</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/profile.php?id=100014759464160&tsid=0.07246769556112798&source=result
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/mwlite/me
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Anjali%20Singh.jpeg" alt="Anjali Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anjali <br>Singh</h5><span></span></div>
									<a href="https://www.facebook.com/AnjaliSinghF1
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/anjali-singh-b5a039159/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Ankita%20Chowdhury.jpeg" alt="Ankita Chowdhury">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Ankita <br>Chowdhury</h5><span></span></div>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>					


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Anoushka%20Raj.jpeg" alt="Anoushka Raj">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anoushka <br>Raj</h5><span></span></div>
									<a href="https://www.fb.com/anoushkaaraj
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Anushka%20Sharma.jpeg" alt="Anushka Sharma">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anushka <br>Sharma</h5><span></span></div>
									<a href="https://www.facebook.com/profile.php?id=100000620361777
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>
					</div>


						<!-- <div class="row"> -->

					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Gul_Asnani.jpeg" alt="Gul Asnani">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gul <br>Asnani</h5><span></span></div>
									<a href="https://m.facebook.com/gul.asnani.90
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/gul-asnani-b9731114a
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>
						<!-- </div> -->

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Ishaan%20Gupta.jpeg" alt="Nix Maxwell">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Ishaan <br>Gupta</h5><span></span></div>
									<a href="https://www.facebook.com/ishaan.gupta.9022662
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Karan%20Bora.jpg" alt="Nix Maxwell">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Karan <br>Bora</h5><span></span></div>
									<a href="https://www.facebook.com/karansingh.bora.55
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/karan-bora-97264a49/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Kripi%20Badonia.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Kripi <br>Badonia</h5><span></span></div>
									<a href="https://facebook.com/kripibadonia
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Lokesh%20Narayan.jpg" alt="Lokesh Narayan Shankar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Lokesh N. <br>Shankar</h5><span></span></div>
									<a href="https://www.facebook.com/LNShankar27
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/lokesh-shankar-007153154
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

					
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Mandeep%20Singh.jpg" alt="Mandeep Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mandeep <br>Singh</h5><span></span></div>
									<a href="https://www.facebook.com/mandeepsrr
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/mandeep-singh-788a8063/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Mihir%20Ranjan.jpeg" alt="Mihir Ranjan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mihir <br>Ranjan</h5><span></span></div>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Pratik%20Anand.jpg" alt="Pratik Anand">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratik <br>Anand</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pratik.grufelous
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/pratik-anand-5b6b22142/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>		


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Pratyush%20Jain.jpeg" alt="Pratyush Jain">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratyush <br>Jain</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pratyush.jain.98
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/pratyush-jain-479156154
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Priyansh%20Soni.jpg" alt="Priyansh Soni">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Priyansh <br>Soni</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/priyansh.soni.1293
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/priyanshsoni/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Rishabh%20Chaurasia.jpeg" alt="Rishabh Chaurasia">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Rishabh <br>Chaurasia</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/rishabh.chaurasia.984
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Saurabh%20Tiwari.jpg" alt="Saurabh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Saurabh<br>Tiwari</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/stthegreat
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Shruti%20Kumar.jpg" alt="Shruti">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shruti<br> <br></h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shruti.kumar105
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						
					</div>
				</div>



				<div class="tab-pane fade" id="designers" style="margin-left:10%; margin-right:10%">


					<div class="fancy-title title-border">
						<h3>Designers</h3>
					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Dhruv%20jain.jpg" alt="Dhruv">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Dhruv <br>Jain</h5>
										<h6>Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/dhruv.jain.92754
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/dhruv-jain-163585129/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Mohsin%20Hussain.png" alt="Mohsin">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mohsin <br>Hussain</h5>
										<h6>Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Darth.Nis.Hom
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/mohammed-mohsin-hussain-b71b47118/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Anubha%20Kabra.jpg" alt="Anubha Kabra">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anubha <br>Kabra</h5>
										<h6>Associate</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/anubha.kabra
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/anubha-kabra/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>

						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Shubham%20Raturi.jpg" alt="Shubham Raturi">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shubham<br> Raturi</h5>
										<h6>Associate</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shubham.raturi" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Aavriti%20Arora.jpg" alt="Aavriti">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Aavriti<br> Arora</h5>
										<h6 style="opacity:0"></h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/aavriti.arora
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/aavriti-arora-b42671152/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Angad%20Bhalla.jpeg" alt="Angad Bhalla">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Angad <br>Bhalla</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/angad.bhalla14
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Ashhad%20Ahmad.jpeg" alt="Ashhad Ahmad">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Ashhad <br>Ahmad</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://facebook.com/iamashhad
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/ashhadahmad
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Jatin%20Singh.jpeg" alt="Jatin Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Jatin<br> Singh</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100017912922804
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/jatin-singh-9484b5155/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Pratyush%20Pranjal.jpg" alt="Pratyush Pranjal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratyush<br> Pranjal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pratyush.pranjal
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/pratyush-p-12293698/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Raghav%20Byala.jpeg" alt="Raghav Byala">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Raghav<br> Byala</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/noob10170
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Rupanjali%20Kukal.jpeg" alt="Rupanjali Kukal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Rupanjali<br> Kukal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/rupanjali.kukal.7
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/mwlite/me
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Samarth%20Yadav.jpeg" alt="Samarth Yadav">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Samarth<br> Yadav</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/samarth.yadav
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/samarth-yadav-9b660a147/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Samridh%20Gupta.jpeg" alt="Samridh Gupta">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Samridh<br> Gupta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/samridh.gupta.1
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Sourajit%20Bhattacharjee.jpeg" alt="Sourajit Bhattacharjee">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sourajit<br> Bhattacharjee</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Zehel.Scott
									" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sourajitbhattacharjee/
										" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Tripti%20Khulbe.jpg" alt="Tripti">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Tripti<br> Khulbe</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/tripti.khulbe.1?ref=bookmarks#_=_
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>


					</div>


				</div>
				<div class="tab-pane fade" id="illustrators" style="margin-left:10%; margin-right:10%">

					<div class="fancy-title title-border">
						<h3>Illustrators</h3>
					</div>

					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Dakshita%20Joshi.png" alt="Dakshita Josh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Dakshita<br> Joshi</h5>
										<h6>Associate Illustrator</h6>

									</div>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Sourajit%20Bhattacharjee.jpeg" alt="Sourajit Bhattacharjee">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sourajit<br> Bhattacharjee</h5>
										<h6>Associate Illustrator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Zehel.Scott
									" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sourajitbhattacharjee/
										" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

						
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Akash%20Chauhan.jpg" alt="Akash Chauhan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Akash<br> Chauhan</h5>
										<h6 style="opacity:0"></h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/profile.php?id=100003618965840&ref=content_filter
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/comm/in/akash-chauhan-14b0a1125?midToken=AQFxo0vEYeadTA&trk=eml-email_m2m_invite_single_01-header-24-profile&trkEmail=eml-email_m2m_invite_single_01-header-24-profile-null-8johhn%7Ejalcyyrc%7Erc-null-neptune%2Fprofile%7Evanity%2Eview&lipi=urn%3Ali%3Apage%3Aemail_email_m2m_invite_single_01%3Bq0G9n1qsSi2QqnJCwLYcHA%3D%3D
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Akshansh%20Aggarwal.jpeg" alt="Akshansh Aggarwal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Akshansh<br> Aggarwal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100017379041908" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://linkedin.com/in/akshansh-aggarwal-2016b1114" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Anirudh%20Kundu.jpeg" alt="Anirudh Kundu">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anirudh<br> Kundu</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/anirudh.kundu.5?ref=bookmarks" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFG8x3bhYWcIAAAAWZkwNT4Gsq5B7Cd4Z4y-OQBvq4pFT2suxlIHyO5whKrSq8pmAyue31suQ97VgCjZyNK4jq9BZWjiwQEMyYUKmUaXOtH6c56qYws1i8OAAD_ezSOp5nXw4U=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fanirudh-kundu-508587171"
									 class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/faisal%20ahmed.jpg" alt="Faisal Ahmed">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Faisal <br>Ahmed</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/faisaldrockstar?refid=7
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/faisal-ahmed-703096145
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Gopika%20Gopakumar.jpeg" alt="Gopika Gopakumar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gopika<br> Gopakumar</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/gopika.gopakumar.96" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/gopika-gopakumar-aa18b2142" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Faisal%20Akhtar.jpg" alt="Md. Faisal Akhtar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Md. Faisal<br> Akhtar</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/faisal.fishead1997
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/mohammad-faisal-akhtar-0ab443141/?trk=uno-choose-ge-no-intent&dl=no
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
													
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Medhavi%20Thakur.jpeg" alt="Medhavi Thakur">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Medhavi<br> Thakur</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/medhavi.thakur.904" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://www.linkedin.com/in/medhavi-thakur-0006a5101" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Samujjwal%20Pandey.jpeg" alt="Samujjwal Pandey">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Samujjwal<br> Pandey</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/pootieman6969" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/mwlite/me" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Tanmay%20Singh.jpg" alt="Tanmay Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Tanmay<br> Singh</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/tanmay.singh.965
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="www.linkedin.com/in/tanmay-singh
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="tab-pane fade" id="photographers" style="margin-right:10%; margin-left:10%">
					<div class="fancy-title title-border">
						<h3>Photographers</h3>
					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Aakarsh%20Singh.jpg" alt="Aakarsh Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Aakarsh<br> Singh</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/aakarsh.singh.12
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/aakarsh-singh-4b666a141/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Ankit%20Dutta.jpeg" alt="Ankit Dutta">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Ankit<br>Dutta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/ankitdutta2222
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Jessjit%20Singh.jpeg" alt="Jessjit Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Jessjit<br> Singh</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/jessjit.singh
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Kushagra%20Agrawal.jpeg" alt="Kushagra Agrawal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Kushagra<br>Krishna Agrawal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/kushagra.agrawal.50
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/mukul%20tanwar.jpeg" alt="Mukul Tanwar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mukul<br> Tanwar</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/mukul.tanwar.5?ref=bookmarks
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://linkedin.com/in/mukul-tanwar-a17a98131
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/NIKHIL%20KERKETTA.jpg" alt="Nikhil Kerketta">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Nikhil <br>Kerketta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nikhil.kerketta.5
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/nikhil-kerketta-2a0122129
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Priyansh%20Gupta.jpeg" alt="Priyansh Gupta">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Priyansh <br>Gupta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/guptaji.ka.chhora
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
					

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Priyansh%20Verma.jpeg" alt="Priyansh Verma">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Priyansh <br>Verma</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Priyansh31Verma
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/priyansh-verma-502496157
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Sai%20Seth.jpeg" alt="Sai Seth">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sai <br>Seth</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/saisco26
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sai-seth-57b716165
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Shubham%20Raturi.jpg" alt="Shubham Raturi">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shubham<br> Raturi</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shubham.raturi" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Vedant%20Tiwari.jpg" alt="Vedant Tiwari">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Vedant <br> Tiwari</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/vedant12
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="webdevelopers" style="margin-left:10%; margin-right:10%">
					<div class="fancy-title title-border">
						<h3>Developers</h3><br>

					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Rajayavardhan.jpg" alt="RajyaVardhan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Rajyavardhan <br> Singh</h5>
										<h6>Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/rajyavardhan.singh.75" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/rajyavardhan-singh-27602a12a" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Manish.jpeg" alt="Manish">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Manish <br> Sahani</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/manish.s1999" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/manish-sahani-95640614b/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Nandana.jpeg" alt="Nandana">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Nandana <br> Tiwari</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nandana219" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/nandana-tiwari-b03160171/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Sambhav.jpeg" alt="Sambhav">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sambhav <br> Jain</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/sambhav.jain.1610092" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sambhav-jain-545b70151" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>








					</div>
				</div>


			</div>

		</div>



	</div>


</section>
<!-- #content end -->
@endsection