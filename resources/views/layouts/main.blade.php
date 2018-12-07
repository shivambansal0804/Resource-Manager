<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @yield('title')

        {{-- Theme css --}}
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
            rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/dark.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/font-icons.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/animate.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/magnific-popup.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/main/responsive.css') }}" type="text/css" />
        {{-- Page css --}}
        @yield('links')
    </head>
    <body class="stretched">
        <!-- Document Wrapper
    ============================================= -->
        <div id="wrapper" class="clearfix">
           

            {{-- Navbar --}}
            @include('inc.nav')
        

            {{-- Main Container --}}
            @yield('content')

            <!-- Footer
        ============================================= -->
   
            
            @if (Route::currentRouteName() === 'blog.show')
                @include('inc.footer2')
            @else 
                @include('inc.footer')
            @endif

        </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

        {{-- Theme Scripts --}}
    <!-- External JavaScripts
    ============================================= -->
    <!-- External JavaScripts
    ============================================= -->
    
    <script type="text/javascript" src="{{ asset('js/main/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main/plugins.js') }}"></script>
    {{-- <script src="{{asset('js/main/photography-addons.js')}}"></script> --}}
    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/main/functions.js') }}"></script>
    

        {{-- Custom Scripts --}}
        @yield('scripts')
    </body>
</html>
