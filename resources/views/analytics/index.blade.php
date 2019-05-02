@extends('layouts.app') 
@section('content')

<section class="text-center border--bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <h1>Google Analytics</h1>
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
                @foreach ($weekViews as $item)
                    @php
                        $story = \App\Models\Story::where('slug', $item['url'])->first();
                    @endphp
                    @if ($story != NULL)
                        <div class="row">
                            <div class="col-md-8">
                                <h4>{{$story->title}}</h4>
                            </div>
                            <div class="col-md-4 text-center">
                                <h1>{{$item['views']}}</h1>
                            </div>
                        </div>
                    @endif
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection