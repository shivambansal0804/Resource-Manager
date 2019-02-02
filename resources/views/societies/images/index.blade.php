@extends('layouts.app') 
@section('content')

@if ($images->count())
    <section class="cover cover-fullscreen height-100 imagebg slider text-center" data-paging="true" data-arrows="true" data-timing="9000">
        <ul class="slides">
            @foreach ($images as $item)
            <li class="imagebg col-lg-4 col-md-6 col-12" data-overlay="1">
                <div class="background-image-holder">
                    <img alt="background" src="{{ $item->getUrl()}}" />
                </div>
                <div class="pos-vertical-center">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <h4>{{ $item->name }}</h4> -->
                            <a href="#">
                                View Image
                            </a> 
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li>
            @endforeach
        </ul>
    </section>
@else
    <section class="space--lg">
        <div class="container">
            <div class="text-center">
                <img width="150" src="{{ asset('svg/albums.svg') }}" alt="" srcset="">
                <h3>Nothing here</h3>
            </div>
        </div>
    </section>
@endif

@endsection