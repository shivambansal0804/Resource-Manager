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
                <ul class="accordion accordion-2 accordion--oneopen">
                @foreach ($news as $item)
                <li>
                    <div class="accordion__title">
                        <span class="h5">{{$item->title}}
                            <small class="@if($item->society->category == 'tech') text-danger
                                          @elseif ($item->society->category == 'team') text-success
                                          @elseif ($item->society->category == 'cultural') text-warning
                                          @else text-secondary @endif
                            ">   
                            {{ $item->society->name }}                         
                            </small>
                            <small>({{ $item->status }})</small>
                        </span>
                    </div>
                    <div class="accordion__content">
                        <img alt="Image" class="border--round" src="{{ $item->getFirstMediaUrl('soc_news_images') }}" />
                        <br>
                        {{ substr($item->description, 0, 190) }}
                        <br>
                        <small>
                            Created <strong>{{ $item->created_at->diffForHumans() }}</strong>
                        </small>
                        <div class="text-right d-block">
                            <a class="btn btn--sm type--uppercase" href="{{route('users.show', $item->uuid)}}">
                                <span class="btn__text">
                                    Show User
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection