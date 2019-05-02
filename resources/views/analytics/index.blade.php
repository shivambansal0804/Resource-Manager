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
                        $story = \App\Models\Story::where('slug', $item->url)->first();
                    @endphp
                    @if ($story != NULL)
                        <h3>$story->title</h3>
                    @endif
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection