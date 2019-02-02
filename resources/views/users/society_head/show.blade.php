@extends('layouts.app')

@section('content')
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 text-left">
                    <div class="cta">
                        <h2>{{$society->name}}</h2>
                        <p>
                        {{ $society->description }}
                        </p>
                        <a class="btn btn--sm type--uppercase" href="{{ route('society.head.image.create', $society->slug) }}" data-scroll>
                            <span class="btn__text">
                                Add Images
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 text-center">
                    <img class="animated fadeIn duration-2s delay-2s" src="{{$society->getFirstMediaUrl('soc_logo')}}" alt="">
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection