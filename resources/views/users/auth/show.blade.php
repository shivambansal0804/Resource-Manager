@extends('layouts.app') 
@section('content')
@php
    $user = auth()->user();
@endphp
<section class="switchable feature-large">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4 col-sm-6 text-center">
                <img alt="Image" class="border--round" src="{{ $user->getFirstMediaUrl('avatars', 'thumb') }}" />
            </div>
            <div class="col-md-7 offset-md-1 col-lg-5">
                <div class="switchable__text">
                    <div class="text-block">
                        <h2>{{ $user->name }}</h2>
                        <span>@foreach ($user->roles as $item) {{$item->name}} @endforeach</span> 
                    </div>
                    <p class="lead">
                        {{ $user->bio }}
                        <hr>
                        <span>Joined <strong>{{ $user->created_at->diffForHumans() }}</strong></span>
                    </p>
                    <ul class="social-list list-inline list--hover">
                        <li>
                            <a target="_blank" href="{{ $user->display_mail }}">
                                <i class="socicon socicon-mail icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $user->medium }}">
                                <i class="socicon socicon-medium icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $user->linkedin }}">
                                <i class="socicon socicon-linkedin icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $user->instagram }}">
                                <i class="socicon socicon-instagram icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $user->facebook }}">
                                <i class="socicon socicon-facebook icon icon--xs"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<section class="section space--sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="boxed boxed--border">
                    <ul class="row row--list clearfix text-center">
                        <li class="col-md-3 col-6">
                            <span class="h6 type--uppercase type--fade">Likes</span>
                            <span class="h3">220</span>
                        </li>
                        <li class="col-md-3 col-6">
                            <span class="h6 type--uppercase type--fade">Articles</span>
                            <span class="h3">14</span>
                        </li>
                        <li class="col-md-3 col-6">
                            <span class="h6 type--uppercase type--fade">Comments</span>
                            <span class="h3">2,129</span>
                        </li>
                        <li class="col-md-3 col-6">
                            <span class="h6 type--uppercase type--fade">Following</span>
                            <span class="h3">119</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section class="text-center height-50">
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <h1>History</h1>
                <p class="lead">
                    An innovative collective of like-minded folks making useful and enduring technology products
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>




@if ($stories->count())
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="process-1">
                        @foreach ($stories as $item)
                        <div class="process__item">
                            <h4>{{ $item->title }}
                                <br> <span><small>{{ $item->created_at->diffForHumans() }}</small></span>
                            </h4>
                            
                            <img alt="Image" src="{{ $item->getFirstMediaUrl('blog_images', 'thumb') }}" class="border--round" />
                            <p>
                                {{ $item->biliner }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                    <!--end process-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endif
@endsection