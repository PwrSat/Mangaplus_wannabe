@extends('page.layout')

@section('content')


{{-- isi konten disini ya --}}

<div class="styles-maincontainer">
    <div class="featured-module">
        <div class="featured-banner">
            <div class="featured-banner-container">
                <img src="{{ asset('img/bannerunggulan1.jpg') }}" class="featured-large-banner featured-theme" cursorshover="true">
                <img src="{{ asset('img/bannerunggulan2.jpg') }}" class="featured-small-banner1 featured-theme">
                <img src="{{ asset('img/bannerunggulan3.jpg') }}" class="featured-small-banner2 featured-theme" cursorshover="true">
            </div>
        </div>
        <div class="featured-content">
            <img dataid="497" class="featured-module-content featured-theme" src="{{ asset('img/bannerunggulan1.jpg') }}" lazy="loaded" cursorshover="true">
        </div>
        <div class="featured-content">
            <img dataid="276" class="featured-module-content featured-theme" src="{{ asset('img/bannerunggulan2.jpg') }}" lazy="loaded">
        </div>
        <div class="featured-content">
            <div>
                <h1 class="module-title horizontal-titlelist">WEEKLY SHONEN JUMP</h1>
                    <div class="horizontal-module-titlelist">
                        <div class="horizontal-itemlist">
                            <div class="horizontal-itemlist-title">
                                <div class="owl-carousel owl-theme" id="four">
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                  </div>
                    </div>
            </div>
        </div>
        <div class="featured-content">
            <div>
                <h1 class="module-title horizontal-titlelist">WEEKLY SHONEN JUMP</h1>
                    <div class="horizontal-module-titlelist">
                        <div class="horizontal-itemlist">
                            <div class="horizontal-itemlist-title">
                                <div class="owl-carousel owl-theme" id="five">
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                    <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
                                  </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
        <div class="featured-content">
            <img dataid="387" class="featured-module-content featured-theme" src="{{ asset('img/bannerfooter.jpg') }}" lazy="loaded" cursorshover="true">
        </div>
        <div class="featured-content">
            <img dataid="66" class="featured-module-content featured-theme" src="{{ asset('img/bannerfooter1.jpg') }}" lazy="loaded" cursorshover="true">
        </div>
        <div class="featured-content">
            <img dataid="34" class="featured-module-content featured-theme" src="{{ asset('img/bannerfooter2.jpg') }}" lazy="loaded" cursorshover="true">
        </div>
    </div>
</div>
@endsection

@section('script')

    <script>
      $(document).ready(function(){

  $('#four').owlCarousel({
    loop:false,
    margin:14,
    autoplay:true,
    autoplayTimeout:10000,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });

  $('#five').owlCarousel({
    loop:false,
    margin:14,
    autoplay:true,
    autoplayTimeout:10000,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });


      })
    </script>

@endsection
    
