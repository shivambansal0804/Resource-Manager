@extends('layouts.main')
@section('title')
<title>Societies | DTU Times</title>
@endsection
@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>societies/teams</h1>
			<span>List of all societies and team in DTU</span>
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
						<li><a href="#" data-filter=".pf-team">Tech Teams</a></li>
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
								<a href="/societies/single/altair">
									<img src="/img/society/altair/1.jpg" alt="altair">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/altair/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/altair" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/altair">Altair</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/asme">
															<img src="/img/society/asme/1.jpg" alt="asme">
														</a>
								<div class="portfolio-overlay">
									<a href="/img/society/asme/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/asme" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/asme">ASME</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/auv">
									<img src="/img/society/auv/1.jpg" alt="auv">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/auv/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/auv" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/auv">AUV - DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/casrae">
									<img src="/img/society/casrae/1.jpg" alt="casrae">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/casrae/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/casrae" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/casrae">CASRAE</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/cognitiveminds">
									<img src="/img/society/cognitivemind/1.jpg" alt="Cognitive minds">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/cognitivemind/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/cognitiveminds" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/cognitiveminds">Cognitive Minds</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/csi">
									<img src="/img/society/csi/1.png" alt="csi">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/csi/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/csi" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/csi">CSI DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/cubix">
									<img src="/img/society/cubix/1.jpg" alt="cubix">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/cubix/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/toast" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/cubix">Cubix DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/defianz">
									<img src="/img/society/defianz/1.jpg" alt="defianz">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/defianz/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/defianz" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/defianz">Defianz</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/delhi42">
									<img src="/img/society/delhi42/1.png" alt="d42">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/delhi42/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/delhi42" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/delhi42">Delhi 42 : The DTU Quiz Club</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/deltechmun">
									<img src="/img/society/deltechmun/1.jpg" alt="deltech mun">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/deltechmun/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/deltechmun" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/deltechmun">Deltech MUN & Debating Society</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/dtubhangra">
									<img src="/img/society/dtubhangra/1.jpg" alt="bhangra">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/dtubhangra/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/dtubhangra" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/dtubhangra">DTU Bhangra</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="societies/single/ecell">
									<img src="img/society/ecell/1.jpg" alt="ecell">
								</a>
								<div class="portfolio-overlay">
									<a href="img/society/ecell/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="societies/single/ecell" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="societies/single/ecell">E-Cell DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="societies/single/elixir">
									<img src="img/society/elixir/1.png" alt="elixir">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/elixir/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/elixir" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/elixir">Elixir</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/enactus">
									<img src="/img/society/enactus/0.jpg" alt="enactus">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/enactus/0.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/enactus" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/enactus">Enactus DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/globalyouth">
									<img src="/img/society/globalyouth/1.jpg" alt="global youth">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/globalyouth/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/globalyouth" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/globalyouth">Global Youth</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/hertz">
									<img src="/img/society/hertz/1.jpg" alt="hertz">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/hertz/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/hertz" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/hertz">Hertz</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/ieee">
									<img src="/img/society/ieee/1.png" alt="ieee">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/ieee/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/ieee" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/ieee">IEEE</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/igts">
									<img src="/img/society/igts/1.png" alt="igts">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/igts/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/igts" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/igts">IGTS</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/iiche">
									<img src="/img/society/iiche/1.jpg" alt="iiche">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/iiche/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/iiche" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/iiche">IIChE</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/imche">
									<img src="/img/society/imche/1.png" alt="imche">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/imche/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/imche" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/imche">IMchE</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/inferno">
									<img src="/img/society/inferno/1.png" alt="inferno">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/inferno/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/inferno" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/inferno">Inferno</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/iosd">
									<img src="/img/society/iosd/1.png" alt="iosd">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/iosd/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/iosd" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/iosd">IOSD</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/kalakriti">
									<img src="/img/society/kalakriti/1.jpg" alt="kalakriti">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/kalakriti/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/kalakriti" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/kalakriti">Kalakriti</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/macs">
									<img src="/img/society/macs/1.jpg" alt="macs">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/macs/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/macs" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/macs">Maths and Computing Society</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/madhurima">
									<img src="/img/society/madhurima/1.jpg" alt="madhurima">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/madhurima/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/madhurima" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/madhurima">Madhurima</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/nrityangana">
									<img src="/img/society/nrityangana/1.jpg" alt="nrityangana">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/nrityangana/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/nrityangana" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/nrityangana">Nrityangana</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/nss">
									<img src="/img/society/nss/1.png" alt="nss">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/nss/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/nss" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/nss">National Service Scheme</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/okami">
									<img src="/img/society/okami/1.png" alt="okami">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/okami/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/okami" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/okami">Team Okami Racing</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/optima">
									<img src="/img/society/optima/1.jpg" alt="optima">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/optima/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/optima" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/optima">Optima DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/panache">
									<img src="/img/society/panache/1.jpg" alt="panache">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/panache/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/panache" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/panache">Panache</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/parchhayi">
									<img src="/img/society/parchhayi/1.jpg" alt="parchayi">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/parchhayi/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/parchhayi" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/parchhayi">Parchhayi</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/pratibimb">
									<img src="/img/society/pratibimb/1.jpg" alt="pratibimb">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/pratibimb/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/pratibimb" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/pratibimb">Pratibimb</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/raftaar">
									<img src="/img/society/raftaar/1.jpg" alt="raftaar">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/raftaar/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/raftaar" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/raftaar">Raftaar</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/rotaract">
									<img src="/img/society/rotaract/1.jpg" alt="rotaract">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/rotaract/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/rotaract" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/rotaract">Rotaract</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/rt">
									<img src="/img/society/rt/1.jpg" alt="roundtable">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/rt/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/rt" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/rt">Round Table DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/sae">
									<img src="/img/society/sae/1.jpg" alt="sae">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/sae/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/sae" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/sae">Society of Automotive Engineers</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/sahitya">
									<img src="/img/society/sahitya/1.jpg" alt="sahitya">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/sahitya/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/sahitya" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/sahitya">Sahitya</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/scee">
									<img src="/img/society/scee/1.png" alt="scee">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/scee/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/scee" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/scee">SCEE</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/ses">
									<img src="/img/society/ses/1.jpg" alt="ses">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/ses/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/ses" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/ses">SES DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/sme">
									<img src="/img/society/techsoc/sme.png" alt="sme">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/techsoc/sme.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/sme" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/sme">SME DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/spare">
									<img src="/img/society/spare/1.jpg" alt="spare">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/spare/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/spare" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/spare">SPARE</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-tech">
							<div class="portfolio-image">
								<a href="/societies/single/srdtu">
									<img src="/img/society/srdtu/1.jpg" alt="sr">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/srdtu/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/srdtu" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/srdtu">Society of Robotics - DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/supermileage">
									<img src="/img/society/supermileage/1.jpg" alt="supermileage">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/supermileage/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/supermileage" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/supermileage">Supermileage</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/tedx">
									<img src="/img/society/tedx/1.jpg" alt="tedx">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/tedx/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/tedx" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/tedx">TEDx DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-misc">
							<div class="portfolio-image">
								<a href="/societies/single/toast">
									<img src="/img/society/toast/1.jpg" alt="toastmasters">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/toast/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/toast" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/toast">Toastmasters DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/uas">
									<img src="/img/society/uas/1.jpg" alt="uas">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/uas/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/uas" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/uas">UAS - DTU</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-team">
							<div class="portfolio-image">
								<a href="/societies/single/ugv">
									<img src="/img/society/ugv/1.png" alt="ugv">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/ugv/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/ugv" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/ugv">DTU - Unmanned Ground Vehicle</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/vibe">
									<img src="/img/society/vibe/1.jpg" alt="vibe">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/vibe/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/vibe" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/vibe">Vibe</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/zenith">
									<img src="/img/society/zenith/1.png" alt="zenith">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/zenith/1.png" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/zenith" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/zenith">Zenith</a></h3>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-cult">
							<div class="portfolio-image">
								<a href="/societies/single/zephyr">
									<img src="/img/society/zephyr/1.jpg" alt="zephyr">
								</a>
								<div class="portfolio-overlay">
									<a href="/img/society/zephyr/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="/societies/single/zephyr" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc" style="text-align: center;">
								<h3 style="display: inline-block;"><a href="/societies/single/zephyr">Zephyr</a></h3>
							</div>
						</article>

					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->

    @endsection