<!-- Header
        ============================================= -->
<header id="header" class="dark full-header sticky">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                <div id="logo">
                        <a href="{{ route('welcome') }}" class="standard-logo" data-dark-logo="{{ asset('img/logo-dark.png') }}"><img src="{{ asset('img/dtulog.png') }}" ></a>

                </div><!-- #logo end -->

                                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li><a href="{{ route('welcome') }}"><div>Home</div></a>
                            </li>
                                
                            <li class="mega-menu"><a href="{{ route('about') }}"><div>About Us</div></a>
                            </li>
                                
                            <li class="mega-menu"><a href="{{ route('editions') }}"><div>Editions</div></a>
                            </li>
                                                        <li><a href="{{ route('blog.index') }}"><div>Blog</div></a>
                            </li>
                            
                            <li><a href="{{ route('gallery.index') }}"><div>Gallery</div></a>
                            </li>

                            <li><a href="{{ route('societies.index') }}"><div>Societies</div></a>
                            </li>
                                            
                            <li><a href="{{ route('team') }}"><div>Team</div></a>
                            </li>
                             <li><a href="{{ route('contact') }}"><div>Contact Us</div></a>
                            </li>                       

                        </ul>
                        

                     </nav><!-- #primary-menu end -->


            </div>

        </div>

</header><!-- #header end -->