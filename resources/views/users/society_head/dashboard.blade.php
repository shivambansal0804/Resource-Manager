@if (auth()->user()->society()->get()->count() == 0)
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                        <h3>Hi, You haven't created your society page.</h3>
                        <p>
                            <a class="btn btn--sm type--uppercase" href="{{ route('society.head.create')}}" data-scroll>
                                <span class="btn__text">
                                    Create Your Society Page
                                </span>
                            </a>
                        </p>                    
                </div>
            </div>
        </div>
    </section>

@else
    @php
        $society = auth()->user()->society()->first();
        $images = $society->getMedia('soc_images');
    @endphp
    <section class="pt-5 pb-5 border--bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <img class="image--sm" src="{{$society->getFirstMediaUrl('soc_logo')}}" alt="">
                    <p>
                        Welcome to backdoor of {{ $society->name }}'s Page ;)
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-left">
                    <h3 class="animated fadeInUp duration-2s delay-1s">Hi, {{ auth()->user()->name }}</h3>
                    
                </div>
                <div class="col-md-4 col-lg-4">
                    <h1 class="mb-0 animated fadeInUp duration-2s delay-2s">{{ $society->referrals }}</h1>
                    <span class="animated fadeInUpBig duration-2s delay-1s">Referrals</span> <br>
                    <span class="animated fadeInUpBig duration-2s delay-1s" style="font-size: .8rem;">
                        We like recommending good people.
                    </span>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endif

