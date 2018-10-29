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
            <!-- modal -->

            <div id="simpleModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                            <span class="closeBtn" style="margin-top:-15px;">&times;</span>
                            <h1 style="text-align:center; color:#EEE; font-variant:small-caps; margin:0;">Sign up to keep in touch</h1>
                    </div>
                    <div class="modal-body">

                        <div class="widget subscribe-widget clearfix resp_width" style="margin:15px auto 30px auto;">
                            <h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
                            <div class="widget-subscribe-form-result" style="margin-top:-10px;"></div>
                            <form id="widget-subscribe-form" action="" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter" style="">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin:0 20px 20px 20px;">
                        <h4 style="margin:0;">More ways to stay connected: </h4>
                        <br><br>
                        <div class="row clear-bottommargin">
                            <div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
                                <div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
                                    <div class="fbox-icon">
                                        <a href="mailto:dtutimes@dtu.ac.in"><i class="icon-email2"></i></a>
                                    </div>
                                    <h3>Email Us <br><span class="subtitle">dtutimesdtu.ac.in</span></h3>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
                                <div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
                                    <div class="fbox-icon">
                                        <a href="https://www.facebook.com/dtutimes"><i class="icon-facebook2"></i></a>
                                    </div>
                                    <h3>Follow us on Facebook<span class="subtitle">21K Likes</span></h3>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 clearfix height-xs">
                                <div class="feature-box fbox-center fbox-bg fbox-plain" style="padding-top:30px;">
                                    <div class="fbox-icon">
                                        <a href="http://www.instagram.com/dtu_times"><i class="icon-instagram2"></i></a>
                                    </div>
                                    <h3>Follow us on Instagram<span class="subtitle">3.3K Followers</span></h3>
                                </div>
                            </div>

                        </div><!-- Contact Info End -->
                </div>

            </div>
        </div>
        <!-- modal end -->

            {{-- Navbar --}}
            @include('inc.nav')
        

            {{-- Main Container --}}
            @yield('content')

            <!-- Footer
        ============================================= -->
    <footer id="footer"  class="footer">


            <div id="copyrights" style="background-color:#111111;">
                <div class="footer-content" >
                            <div class="container">
                                    <div class="row" style="margin:auto; text-align:center;">

                                        <div class="footer-col col-md-5 col-sm-6 col-xs-12" style="display:inline-block; box-sizing:border-box;">
                                                <div class="footer-col-inner">
                                                    <div class="footer-col-inner" style="text-align:justify;">
                                                            <h3 style="color:white; text-align:center;">About</h3>
                                                            <p style="margin-top:45px;">DTU Times is the Official Newsletter of Delhi Technological University, formerly known as Delhi College of Engineering.<br>
                                                            We warmly welcome you to the revamped DTU Times Website. Explore the various sections, browse the blog or scan out the archive. You are sure to find content to suit your appetite, and more. There’s something in store for everyone!</p>

                                                    </div>
                                                </div><!--//footer-col-inner-->
                                        </div>

                                    <div class="footer-col col-md-7 col-sm-6 col-sm-pull-0 col-xs-12" style="display:inline-block; box-sizing:border-box;">
                                            <div class="footer-col-inner" style="text-align:center;">
                                                <h3 style="color:white;">Connect with us</h3>

                                                    <div class="footer-col col-md-7 col-mf-offset-1 col-sm-7 col-xs-12 col-xs-offset-0" style=" box-sizing:border-box;">
                                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdtutimes&tabs&width=270&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="270" height="130" style="border:none;overflow:auto;margin:20px 0px;display:inline-block;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                                    </div>
                                            </div><!--//footer-col-inner-->

                                            <!-- InstaWidget -->
                                            <div class="footer-col col-md-5 col-sm-5 col-xs-12" style="text-align:center; margin-top:0px; padding:0px; box-sizing:border-box;">
                                                <a style="display:inline-block;" href="https://instawidget.net/v/user/dtu_times" id="link-61708c0555b801885f4641cb4a7da195bb8fa5c93906abdfe397b99cf9ae6706">@dtu_times</a>
                                                <script src="https://instawidget.net/js/instawidget.js?u=61708c0555b801885f4641cb4a7da195bb8fa5c93906abdfe397b99cf9ae6706&width=170px"></script>
                                            </div>

                                    </div><!--//foooter-col-->
                                    </div>
                                    </div>
                    </div><!--//footer-content-->

                    <div class="bottom-bar" style="text-align:center;">
                        <div class="widget subscribe-widget clearfix dark" style="margin:30px 0; width:300px; display:inline-block;">
                            <h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
                            <div class="widget-subscribe-form-result" style="display:inline-block;"></div>
                            <form id="widget-subscribe-form" action="" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter" style="margin-top:-20px;">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>

                            <div class="container" style="margin-top:30px">
                                            <small class="copyright col-md-12 col-sm-12 col-xs-12" style="color:white; text-align:center;">Copyright &copy; 2018 DTU Times</small>
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
