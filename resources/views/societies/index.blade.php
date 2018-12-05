@extends('layouts.main')
@section('title')
<title>Societies | DTU Times</title>
@endsection
@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>socities/teams</h1>
				<span>List of all socities in DTU</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".pf-tech">Technical</a></li>
						<li><a href="#" data-filter=".pf-team">Teams</a></li>
						<li><a href="#" data-filter=".pf-cult">Cultural</a></li>
						<li><a href="#" data-filter=".pf-misc">Miscellaneous</a></li>


					</ul><!-- #portfolio-filter end -->

					<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-3 clearfix">


						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/altair.html">
									<img src="img/society/techteam/altair.jpg" alt="altair">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/altair.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/altair.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/altair.html">Altair</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/auv.html">
									<img src="img/society/techteam/auv.jpg" alt="auv">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/auv.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/auv.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/auv.html">Autonomous Underground Vehicle</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/defianz.html">
									<img src="img/society/techteam/defianz.jpg" alt="defianz">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/defianz.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/defianz.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/defianz.html">Defianz</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/hertz.html">
									<img src="img/society/techteam/hertz.jpg" alt="hertz">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/hertz.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/hertz.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/hertz.html">Hertz</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/inferno.html">
									<img src="img/society/techteam/inferno.png" alt="inferno">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/inferno.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/inferno.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/inferno.html">Inferno</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/okami.html">
									<img src="img/society/techteam/okami.png" alt="okami">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/okami.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/okami.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/okami.html">Team Okami Racing</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/raftaar.html">
									<img src="img/society/techteam/raftaar.jpg" alt="raftaar">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/raftaar.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/raftaar.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/raftaar.html">Raftaar</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/supermileage.html">
									<img src="img/society/techteam/supermileage.jpg" alt="supermileage">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/supermileage.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/supermileage.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/supermileage.html">Supermileage</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="society/uas.html">
									<img src="img/society/techteam/uas.jpg" alt="uas">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techteam/uas.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/uas.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/uas.html">Unmanned Aircraft System - DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/optima.html">
									<img src="img/society/techsoc/optima.jpg" alt="optima">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/optima.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/optima.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/optima.html">Optima DTU</a></h3>
							</div>
						</article>


						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/asme.html">
									<img src="img/society/techsoc/asme.jpg" alt="asme">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/asme.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/asme.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/asme.html">American Society of Mechanical Engineers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/casrae.html">
									<img src="img/society/techsoc/casrae.jpg" alt="casrae">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/casrae.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/casrae.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/casrae.html">Centre for Advanced Studies and Research in Automotive Engineering</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/ieee.html">
									<img src="img/society/techsoc/ieee.png" alt="ieee">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/ieee.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/ieee.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/ieee.html">Institute of Electrical and Electronics Engineers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/iiche.html">
									<img src="img/society/techsoc/iiche.jpg" alt="iiche">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/iiche.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/iiche.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/iiche.html">Indian Institute of Chemical Engineers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/csi.html">
									<img src="img/society/techsoc/csi.png" alt="csi">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/csi.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/csi.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/csi.html">CSI DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/sme.html">
									<img src="img/society/techsoc/sme.png" alt="sme">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/sme.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/sme.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/sme.html">SME DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/iosd.html">
									<img src="img/society/techsoc/iosd.png" alt="iosd">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/iosd.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/iosd.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/iosd.html">International Organisation of Software Developers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/macs.html">
									<img src="img/society/techsoc/macs.jpg" alt="macs">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/macs.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/macs.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/macs.html">Maths and Computing Society</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/sae.html">
									<img src="img/society/techsoc/sae.jpg" alt="sae">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/sae.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/sae.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/sae.html">Society of Automotive Engineers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/scee.html">
									<img src="img/society/techsoc/scee.png" alt="scee">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/scee.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/scee.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/scee.html">Society of Civil and Environmental Engineers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/srdtu.html">
									<img src="img/society/techsoc/sr.jpg" alt="sr">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/sr.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/srdtu.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/srdtu.html">Society of Robotics - DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="society/spare.html">
									<img src="img/society/techsoc/spare.jpg" alt="spare">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/techsoc/spare.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/spare.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/spare.html">Society of Physics and Advanced Research in Electronics</a></h3>
							</div>
						</article>


						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/dtubhangra.html">
									<img src="img/society/cultsoc/bhangra.jpg" alt="bhangra">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/bhangra.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/dtubhangra.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/dtubhangra.html">DTU Bhangra</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/kalakriti.html">
									<img src="img/society/cultsoc/kalakriti.jpg" alt="kalakriti">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/kalakriti.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/kalakriti.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/kalakriti.html">Kalakriti</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/madhurima.html">
									<img src="img/society/cultsoc/madhurima.jpg" alt="madhurima">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/madhurima.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/madhurima.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/madhurima.html">Madhurima</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/nrityangana.html">
									<img src="img/society/cultsoc/nrityangana.jpg" alt="nrityangana">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/nrityangana.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/nrityangana.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/nrityangana.html">Nrityangana</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/panache.html">
									<img src="img/society/cultsoc/panache.jpg" alt="panache">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/panache.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/panache.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/panache.html">Panache</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/parchayyi.html">
									<img src="img/society/cultsoc/parchayi.jpg" alt="parchayi">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/parchayi.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/parchayyi.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/parchayyi.html">Parchayi</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/pratibimb.html">
									<img src="img/society/cultsoc/pratibimb.jpg" alt="pratibimb">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/pratibimb.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/pratibimb.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/pratibimb.html">Pratibimb</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/sahitya.html">
									<img src="img/society/cultsoc/sahitya.jpg" alt="sahitya">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/sahitya.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/sahitya.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/sahitya.html">Sahitya</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="society/vibe.html">
									<img src="img/society/cultsoc/vibe.jpg" alt="vibe">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/cultsoc/vibe.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/vibe.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/vibe.html">Vibe</a></h3>
							</div>
						</article>


						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/assets.html">
									<img src="img/society/miscsoc/assets.jpg" alt="assets">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/assets.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/assets.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/assets.html">Assets</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/cognitiveminds.html">
									<img src="img/society/miscsoc/Cognitive minds.jpg" alt="Cognitive minds">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/Cognitive minds.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/cognitiveminds.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/cognitiveminds.html">Cognitive Minds</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/delhi42.html">
									<img src="img/society/miscsoc/d42.png" alt="d42">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/d42.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/delhi42.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/delhi42.html">Delhi 42 : The DTU Quiz Club</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/deltechmun.html">
									<img src="img/society/miscsoc/deltech mun.jpg" alt="deltech mun">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/deltech mun.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/deltechmun.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/deltechmun.html">Deltech MUN & Debating Society</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/ecell.html">
									<img src="img/society/miscsoc/ecell.jpg" alt="ecell">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/ecell.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/ecell.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/ecell.html">E-Cell DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/elixir.html">
									<img src="img/society/miscsoc/elixir.jpg" alt="elixir">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/elixir.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/elixir.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/elixir.html">Elixir</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/globalyouth.html">
									<img src="img/society/miscsoc/global youth.jpg" alt="global youth">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/global youth.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/globalyouth.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/globalyouth.html">Global Youth</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/igts.html">
									<img src="img/society/miscsoc/igts.jpg" alt="igts">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/igts.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/igts.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/igts.html">Indian Game Theory Society</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/nss.html">
									<img src="img/society/miscsoc/nss.jpg" alt="nss">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/nss.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/nss.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/nss.html">National Service Scheme</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/rotaract.html">
									<img src="img/society/miscsoc/rotaract.jpg" alt="rotaract">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/rotaract.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/rotaract.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/rotaract.html">Rotaract</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/rt.html">
									<img src="img/society/miscsoc/roundtable.jpg" alt="roundtable">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/roundtable.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/rt.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/rt.html">Round Table DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/toast.html">
									<img src="img/society/miscsoc/toastmasters.jpg" alt="toastmasters">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/toastmasters.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/toast.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/toast.html">Toastmasters DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/cubix.html">
									<img src="img/society/miscsoc/cubix.jpg" alt="cubix">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/cubix.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/toast.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/cubix.html">Cubix DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/tedx.html">
									<img src="img/society/miscsoc/tedx.png" alt="tedx">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/tedx.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/tedx.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/tedx.html">TedX DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="society/ses.html">
									<img src="img/society/miscsoc/ses.jpg" alt="ses">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/miscsoc/ses.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="society/ses.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="society/ses.html">SES DTU</a></h3>
							</div>
						</article>

					</div><!-- #portfolio end -->

				</div>

			</div>

        </section><!-- #content end -->
    @endsection