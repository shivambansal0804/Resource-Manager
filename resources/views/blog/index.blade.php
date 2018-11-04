@extends('layouts.main') 
@section('title')
<title> Blog | DTU Times</title>
@endsection
 
@section('content')
<!-- Page Title
        ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Blog</h1>
        <span>Latest Blog Posts</span>
        <ol class="breadcrumb">
            <li><a href="#"></a></li>
            <li class="active"></li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
        ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Posts
                    ============================================= -->
            <div id="posts" class="post-grid grid-container post-masonry post-timeline grid-2 clearfix">
                <br><br>
                <div class="timeline-border"></div>
                @foreach ($stories as $item)

                <div class="wow slideInUp entry clearfix ">
                    <div class="entry-timeline">
                        <div class="timeline-divider"></div>
                    </div>
                    <div class="entry-image">
                        <a href="{{ $item->getFirstMediaUrl('blog_images', 'fullscreen') }}" data-lightbox="image"><img src="{{ $item->getFirstMediaUrl('blog_images', 'fullscreen') }}" class="image_fade"></a>
                    </div>
                    <div class="entry-title">
                        <h2><a rel="noopener noreferrer" target="_blank" href="{{route('blog.show', $item->slug)}}">{{ $item->title }}</a></h2>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i>{{ $item->created_at->diffForHumans()}}</li>

                        <li><i class="icon-camera-retro"></i></li>
                    </ul>
                    <div class="entry-content" style="overflow-wrap: break-word;">
                        <p>{{ $item->biliner }}</p>
                        <a rel="noopener noreferrer" target="_blank" href="{{route('blog.show', $item->slug)}}" class="more-link">Read More</a>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- #posts end -->

            {{--
            <div id="load-next-posts" class="center">
                <a href="blog-timeline-2.html" class="button button-3d button-dark button-large button-rounded">Load more..</a>
            </div> --}}
        </div>

    </div>

</section>
<!-- #content end -->
@endsection
 
@section('scripts')
<script src="/js/main/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    jQuery(window).load(function(){

            var $container = $('#posts');

            $container.isotope({
                itemSelector: '.entry',
                masonry: {
                    columnWidth: '.entry:not(.entry-date-section)'
                }
            });

            $container.infinitescroll({
                loading: {
                    finishedMsg: '<i class="icon-line-check"></i>',
                    msgText: '<i class="icon-line-loader icon-spin"></i>',
                    img: "images/preloader-dark.gif",
                    speed: 'normal'
                },
                state: {
                    isDone: false
                },
                nextSelector: "#load-next-posts a",
                navSelector: "#load-next-posts",
                itemSelector: "div.entry",
                behavior: 'portfolioinfiniteitemsloader'
            },
            function( newElements ) {
                $container.isotope( 'appended', $( newElements ) );
                var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );
                SEMICOLON.initialize.resizeVideos();
                SEMICOLON.widget.loadFlexSlider();
                SEMICOLON.widget.masonryThumbs();
                var t = setTimeout( function(){
                    SEMICOLON.initialize.blogTimelineEntries();
                }, 2500 );
            });

            var t = setTimeout( function(){
                SEMICOLON.initialize.blogTimelineEntries();
            }, 2500 );

            $(window).resize(function() {
                $container.isotope('layout');
                var t = setTimeout( function(){
                    SEMICOLON.initialize.blogTimelineEntries();
                }, 2500 );
            });

        });
</script>
@endsection