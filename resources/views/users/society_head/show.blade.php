@extends('layouts.app')

@section('content')
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 text-left">
                    <div class="cta">
                        <h2 class="mb-1">{{$society->name}}</h2>
                        <span class="
                                @if($society->status == 'draft') text-warning
                                @elseif($society->status == 'published') text-success
                                @else badge-dark @endif">
                            {{ ucwords($society->status) }}
                        </span>
                        <hr>
                        <div class="row mt-3 mb-3">
                            <div class="col">
                                <h5 class="mb-0">Head Incharge </h5>
                                <p class="mt-0">
                                    {{ $society->head_incharge }}, {{ $society->head_contact_number }}
                                </p>
                            </div>
                            <div class="col">
                                <h5 class="mb-0">PR Incharge </h5>
                                <p class="mt-0">
                                    {{ $society->pr_incharge }}, {{ $society->pr_contact_number }}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <p class="">
                        {{ $society->description }}
                        </p>

                        @php 
                            $authSoc = auth()->user()->society()->first();
                            if($authSoc)
                                $id = $authSoc->id;
                            else 
                                $id = NULL;
                        @endphp

                        @if ($id == $society->id)
                            <a class="btn btn--sm type--uppercase" href="{{ route('society.head.edit', $society->slug) }}" data-scroll>
                                <span class="btn__text">
                                    Edit
                                </span>
                            </a>
                            @if($society->status == 'draft')
                                <a class="btn btn--sm type--uppercase" href="{{ route('society.head.status.pending', $society->slug) }}" data-scroll>
                                    <span class="btn__text">
                                        Submit for Approval
                                    </span>
                                </a>
                            @endif
                        @else 
                            @if($society->status != 'draft')
                                <a class="btn btn--sm type--uppercase" href="{{ route('society.head.status.draft', $society->slug) }}" data-scroll>
                                    <span class="btn__text">
                                        Change to Draft
                                    </span>
                                </a>
                            @endif                        
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 text-center">
                    <img class="animated fadeIn duration-2s delay-1s" src="{{$society->getFirstMediaUrl('soc_logo')}}" alt="">
                    <ul class="social-list list-inline list--hover">
                        <li>
                            <a target="_blank" href="{{ $society->display_mail }}">
                                <i class="socicon socicon-mail icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $society->linkedin }}">
                                <i class="socicon socicon-linkedin icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $society->instagram }}">
                                <i class="socicon socicon-instagram icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $society->facebook }}">
                                <i class="socicon socicon-facebook icon icon--xs"></i>
                            </a>
                        </li>
                    </ul>
                    <p>
                        <a href="{{$society->website}}">{{$society->website}}</a>
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection