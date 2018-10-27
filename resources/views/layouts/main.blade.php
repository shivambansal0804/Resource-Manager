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
          <!--   @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ route('welcome') }}">Home</a>
                <a href="{{ route('blog.index') }}">Blog</a>            
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('team') }}">Team</a>
                <a href="{{ route('contact') }}">Contact</a> @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a> @else
                <a href="{{ route('login') }}">Login</a> @endauth
            </div>
            @endif -->

            {{-- Main Container --}}
            @yield('content')

            <!-- Footer
        ============================================= -->
    <footer id="footer"  class="footer">

   
        <div id="copyrights" style="background:black;">
      <div class="footer-content" >
            <div class="container">
                <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3 style=" color:white">About</h3>
                        <ul>
                            <li><a target="_blank" rel="noopener noreferrer" href="team.html"><i class="fa fa-caret-right"></i>Team</a></li>
                            <li><a target="_blank" rel="noopener noreferrer" href="dtu%20contact.html"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <li><a target="_blank" rel="noopener noreferrer" href="blog.html" target="_blank"><i class="fa fa-caret-right"></i>Blog</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3 style=" color:white">Connect with us</h3>
                         <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/dtutimes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" width="500" height="70" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=525&amp;height=70&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdtutimes&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;small_header=false&amp;width=500"><span style="vertical-align: bottom; width: 500px; height: 130px;"><iframe name="fe688d5ca8efe8" width="500px" height="70px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.3/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FhsBwMj6iLmk.js%3Fversion%3D42%23cb%3Df12117d65227ca8%26domain%3Ddtutimes.dtu.ac.in%26origin%3Dhttp%253A%252F%252Fdtutimes.dtu.ac.in%252Ff28a46f0a178c94%26relation%3Dparent.parent&amp;container_width=525&amp;height=70&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdtutimes&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;small_header=false&amp;width=500" style="border: none; visibility: visible; width: 500px; height: 130px;" class=""></iframe></span></div>
                    
                        
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col--> 
                <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3 style=" color:white">Contact us</h3>
                        <div class="row">
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="mailto:dtutimes@dtu.ac.in">dtutimes@dtu.ac.in</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12" style="color:white">Copyright &copy; 2018 DTU Times</small>
                    <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                        <li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/dtutimes"><i class="fa fa-facebook"></i></a></li>
                    </ul><!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
   

            </div><!-- #copyrights end -->

        </footer>
    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

        {{-- Theme Scripts --}}
    <!-- External JavaScripts
    ============================================= -->
    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="js/main/jquery.js"></script>
    <script type="text/javascript" src="js/main/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/main/functions.js"></script>
    

        {{-- Custom Scripts --}}
        @yield('scripts')
    </body>
</html>
