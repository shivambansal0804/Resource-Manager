@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-md-5 text-center">
                    <div class="mt-3">
                        <img src="{{ asset('svg/admin.svg')}}" alt="" srcset="" width="250">
                    </div>
                    <br>
                    <h2>Welcome {{ auth()->user()->name }}</h2>
                </div>
            </div>
        </div>
    </section>
@endsection