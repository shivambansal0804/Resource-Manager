@extends('layouts.main')
@section('title')
<title>Gallery | DTU Times</title>
@endsection
@section('content')
	<section class="cover cover-fullscreen height-100 cover-features imagebg space--lg" data-overlay="2">
    <div class="background-image-holder">
        <img alt="background" src="{{ $album->getFirstMediaUrl('covers', 'fullscreen') }}" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6" >
                <h1>
                    {{ $album->name }}
                </h1>
                <p class="">
                    {{ $album->biliner }}
                </p>
             
            </div>
            
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
		<section id="content" class="clearfix">

			<div class="content-wrap">
				<div class="container dark clearfix">
					<div class="heading-block dark center noborder">
						<h3>Recent Images</h3>
						<span></span>
					</div>

					<!-- Grid Items
					============================================= -->

					<div class="grid">
						@foreach ($images as $item)
						<div class="grid-item" data-size="1280x853">
							<a href="images/gallery/fodtu/1.jpg" class="img-wrap img-grayscale" data-animate="fadeInUp">
								<img src="images/gallery/fodtu/1.jpg" alt="img01" />
								<div class="description description-grid">
									<h3>{{ $item->name }}</h3>
									
									<p>{{ $item->biliner }}
									</p>
									<div class="details">

									</div>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
@endsection