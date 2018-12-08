@extends('layouts.app') 
@section('content')
<section class="pt-5 pb-5 border--bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h1>Dashboard</h1>
                <p>
                    Welcome to the backdoor for the DTU Times website.
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@if (!auth()->user()->hasRole('photographer'))
    <section class="pt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-1 hidden-sm"></div>
                <div class="col-md-4">
                    <div class="feature feature-2 boxed boxed--border">
                        <h2 class="d-inline">{{ auth()->user()->story()->get()->count() }}</h2>
                        <div class="feature__body">
                            <h4 class="m-0">Total Stories</h4>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
    
                <div class="col-md-2 text-center">
                    <div class="feature feature-2 boxed boxed--border">
                        <h4 class="mb-0">{{ auth()->user()->story()->whereStatus('pending')->get()->count() }}</h4>
                        <small>Pending</small>
                    </div>
                    <!--end feature-->
                </div>
    
                <div class="col-md-2 text-center">
                    <div class="feature feature-2 boxed boxed--border">
                        <h4 class="mb-0">{{ auth()->user()->story()->whereStatus('published')->get()->count() }}</h4>
                        <small>Published</small>
                    </div>
                    <!--end feature-->
                </div>
    
                <div class="col-md-2 text-center">
                    <div class="feature feature-2 boxed boxed--border">
                        <h4 class="mb-0">{{ auth()->user()->story()->whereStatus('draft')->get()->count() }}</h4>
                        <small>Draft</small>
                    </div>
                    <!--end feature-->
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    @php
                        $published = auth()->user()->story()->whereStatus('published')->latest()->first();
                        $pending = auth()->user()->story()->whereStatus('pending')->latest()->first();

                    @endphp
                    <small>Latest published: {{ $published ? $published->title : 'No story published yet'  }}</small> <br>
                    <small>Last story submitted for approval: {{ $pending ? $pending->title : 'No story submitted for approval yet' }}</small>
                </div>
            </div>
        </div>
    </section>

@endif

<section class="{{ auth()->user()->hasRole('photographer') ? 'pt-5' : 'pt-0' }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10">
                <h3>To-do list</h3>
                <ol class="process-3">
                    @foreach ($todos as $item)
                    <li class="process_item">
                        <div class="process__number">
                            <span>{{ $item->id }}</span>
                        </div>
                        <div class="process__body">
                            <h4 class="m-0">
                                {{ $item->name }}
                            </h4> 
                            <p class="m-0">
                                {{ $item->description }}
                            </p>
                            <p>
                                <small>Created by {{ \App\User::find($item->user_id) ? \App\User::find($item->user_id)->name : 'Not found' }},</small>                                
                                @if ($item->completed_by)
                                    <small>
                                        Completed by {{ \App\User::find($item->completed_by) ? \App\User::find($item->completed_by)->name : 'The User has been deleted or Not found' }}, {{ \Carbon\Carbon::parse($item->completed_at)->diffForHumans() }}
                                    </small>
                                @else
                                    <small>
                                        <a href="{{ route('todos.done', $item->id) }}">Mark as Done</a>
                                    </small>
                                @endif
                                <small>
                                    <a class="text-danger" href="{{ route('dashboard') }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Remove</a>
                                </small>
                            </p>
                        </div>
                    </li>
                    <form id="delete-form" action="{{ route('todos.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf @method('DELETE')
                    </form>
                    @endforeach
                </ol>

                <div class="mt-5">
                    <form action="{{ route('todos.store') }}" method="post" class="row">
                        @csrf
                        <div class="col-md-6">
                            <input type="text" name="name" class="class-validate" placeholder="New task" required>
                        </div>

                        <div class="col-md-6">
                            @if (auth()->user()->hasRole('council') || auth()->user()->hasRole('superuser') || auth()->user()->hasRole('coordinator'))
                                <small class="mr-3">Visibile to: </small>
                                <br class="hidden-lg">
                                <div class="input-radio input-radio--innerlabel">
                                    <input id="all" type="radio" name="for" value="all" />
                                    <label for="all">ALL</label>
                                </div>
                                <div class="input-radio input-radio--innerlabel">
                                    <input id="columnist" type="radio" name="for" value="columnist" />
                                    <label for="columnist">Columnists</label>
                                </div>
                                <div class="input-radio input-radio--innerlabel">
                                    <input id="photographer" type="radio" name="for" value="photographer" />
                                    <label for="photographer">Photographers</label>
                                </div>
                            @elseif (auth()->user()->hasRole('columnist'))
                                <input type="hidden" name="for" value="columnist">
                            @elseif (auth()->user()->hasRole('photographer'))
                                <input type="hidden" name="for" value="photographer">
                            @endif
                            
                        </div>
                    
                        <div class="col-md-6">
                            <textarea name="description" id="" cols="30" rows="3" placeholder="Description"></textarea>
                        </div>

                        <div class="col-md-4">
                            <input type="submit" value="Add To List" class="btn btn--sm type--uppercase">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection