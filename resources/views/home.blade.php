@extends('layouts.app') 
@section('content')
<section >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-md-5 text-center">
                <div class="mt-3">
                    @if (!auth()->user()->hasRole('photographer'))
                    <img src="{{ asset('svg/right-quote.svg') }}" alt="" srcset="" width="250"> @else
                    <img src="{{ asset('svg/picture.svg') }}" alt="" srcset="" width="250"> @endif
                </div>
                <br>
                <h2>Welcome {{ auth()->user()->name }}</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit eligendi, rem autem porro provident veniam aperiam dicta
                    deserunt nemo reprehenderit illo eum soluta eos atque beatae exercitationem ad omnis deleniti.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection