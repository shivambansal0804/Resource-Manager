@extends('layouts.app')

@section('links')     
<link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="height-100 p-0">
      <div class="slide active">
            <div class="card row">
                  <div class="card-img col-md-8"  style="background-image: url('https://images.unsplash.com/photo-1505324453012-a12195b84346?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80');" id="img01"></div>
                  <div class="card-content col-md-4">
                        <p class="card-theme">Travel</p>
                        <h2 class="">Amongst the giants</h2>
                        <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
                    <a class="card-link">Read</a>
                  </div>
            </div>
      </div>

      @for ($i = 0; $i < 10; $i++)

      <div class="slide">
            <div class="card row">
                  <div class="card-img col-md-8"  style="background-image: url('https://images.unsplash.com/photo-1505324453012-a12195b84346?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80');" id="img01"></div>
                  <div class="card-content col-md-4">
                        <p class="card-theme">Travel</p>
                        <h2>Amongst the giants</h2>
                        <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellendus vel neque iure aut, eligendi aliquid vero facilis, quia repellat.</p>
                    <a class="card-link">Read</a>
                  </div>
            </div>
      </div>
      @endfor
      <div class="prevnext">
            <button class="pn-btn" id="prev"></button>
            <button class="pn-btn" id="next"></button>
      </div>
</section>
@endsection



@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

      <script type="text/javascript">

      var $activeSlide = $('.active'),
      $homeSlide = $(".slide"),
      $slideNavPrev = $("#prev"),
      $slideNavNext = $("#next");

      function init() {
            TweenMax.set($homeSlide.not($activeSlide), {autoAlpha: 0});
            TweenMax.set($slideNavPrev, {autoAlpha: 0.2});
      }

      init();

      function goToNextSlide(slideOut, slideIn, slideInAll) {
            var t1 = new TimelineLite(),
            slideOutContent = slideOut.find('.card-content'),
            slideInContent = slideIn.find('.card-content'),
            slideOutImg = slideOut.find('.card-img'),
            slideInImg = slideIn.find('.card-img'),
            index = slideIn.index(),
            size = $homeSlide.length;
            console.log(index);

            if(slideIn.length !== 0) {
            t1
            .set(slideIn, {autoAlpha: 1, className: '+=active'})
            .set(slideOut, {className: '-=active'})
            .to(slideOutContent, 0.65, {y: "+=40px", ease: Power3.easeInOut}, 0)
            .to(slideOutImg, 0.65, {backgroundPosition :'bottom', ease: Power3.easeInOut}, 0)
            .to(slideInAll, 1, {y: "-=100%", ease: Power3.easeInOut}, 0)
            .fromTo(slideInContent, 0.65, {y: '-=40px'}, {y : 0, ease: Power3.easeInOut}, "-=0.7")
            .fromTo(slideInImg, 0.65, {backgroundPosition: 'top'}, {backgroundPosition: 'bottom', ease: Power3.easeInOut}, '-=0.7')
            }

            TweenMax.set($slideNavPrev, {autoAlpha: 1});

            if(index === size - 1){
                  TweenMax.to($slideNavNext, 0.3, {autoAlpha: 0.2, ease:Linear.easeNone});
            }
      };

      $slideNavNext.click(function(e) {
            e.preventDefault();

            var slideOut = $('.slide.active'),
            slideIn = $('.slide.active').next('.slide'),
            slideInAll = $('.slide');

            goToNextSlide(slideOut, slideIn, slideInAll);

      });

      function goToPrevSlide(slideOut, slideIn, slideInAll) {
            var t1 = new TimelineLite(),
            slideOutContent = slideOut.find('.card-content'),
            slideInContent = slideIn.find('.card-content'),
            slideOutImg = slideOut.find('.card-img'),
            slideInImg = slideIn.find('.card-img'),
            index = slideIn.index(),
            size = $homeSlide.length;

            if(slideIn.length !== 0) {
            t1
            .set(slideIn, {autoAlpha: 1, className: '+=active'})
            .set(slideOut, {className: '-=active'})
            .to(slideOutContent, 0.65, {y: "-=40px", ease: Power3.easeInOut}, 0)
            .to(slideOutImg, 0.65, {backgroundPosition :'top', ease: Power3.easeInOut}, 0)
            .to(slideInAll, 1, {y: "+=100%", ease: Power3.easeInOut}, 0)
            .fromTo(slideInContent, 0.65, {y: '+=40px'}, {y : 0, ease: Power3.easeInOut}, "-=0.7")
            .fromTo(slideInImg, 0.65, {backgroundPosition: 'bottom'}, {backgroundPosition: 'top', ease: Power3.easeInOut}, '-=0.7')
            }

            TweenMax.set($slideNavPrev, {autoAlpha: 1});

            if(index === 0){
                  TweenMax.to($slideNavPrev, 0.3, {autoAlpha: 0.2, ease:Linear.easeNone});
            }
      };

      $slideNavPrev.click(function(e) {
            e.preventDefault();

            var slideOut = $('.slide.active'),
            slideIn = $('.slide.active').prev('.slide'),
            slideInAll = $('.slide');

            goToPrevSlide(slideOut, slideIn, slideInAll);
      
      });


      </script>

@endsection