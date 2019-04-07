@extends('layouts.app')

@section('content')

<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                <h1>{{ $title }}</h1>
                <p>
                    List of all the member of the DTU Times team.
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($news as $item)
                    <h4>{{$item->title}}
                        <small class="@if($item->society->category == 'tech') text-danger
                                        @elseif ($item->society->category == 'team') text-success
                                        @elseif ($item->society->category == 'cultural') text-warning
                                        @else text-secondary @endif
                        ">   
                        {{ $item->society->name }}                         
                        </small>
                        <small>({{ $item->status }})</small>
                    </h4>
                    <div class="row">
                        <div class="col-md-8">
                            {{ substr($item->description, 0, 190) }}
                            <br>
                            <small>
                                Created <strong>{{ $item->created_at->diffForHumans() }}</strong>
                            </small>
                            @if (Route::currentRouteName() != 'council.societies.news.index')
                            <p class="mt-2">

                                @if (Route::currentRouteName() == 'council.societies.news.pending')
                                <a class="text-success type--uppercase" href="{{route('council.societies.news.publish', $item->uuid)}}">
                                    <small>Publish</small>
                                </a>
                                @endif

                                @if (Route::currentRouteName() == 'council.societies.news.published')
                                <a class="text-danger type--uppercase" href="{{route('council.societies.news.draft', $item->uuid)}}">
                                    <small>Save to drafts</small>
                                </a>
                                @endif

                                <a class="text-danger type--uppercase" href="" onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                                    <small>Delete</small>
                                </a>
                                <form id="delete-form" action="{{route('council.societies.news.draft', $item->uuid)}}" method="post">@csrf @method('DELETE')</form>
                            </p>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <img alt="Image" class="border--round" src="{{ $item->getFirstMediaUrl('soc_news_images') }}" />
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
