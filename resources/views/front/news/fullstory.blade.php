@extends('layouts/front')

@section('title')
სიახლე | სრულიად
@endsection


@section('style')
<link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">
@endsection


@section('main')

<section id="news" class="container-fluid">
  
<div class="container-fluid inner_page_header">
    <div class="container">
    <h1>@lang('front.news')</h1>
    </div>
</div>
<div class="container news_inner">
    <div class="row justify-content-between">
    <div class="col-12 col-lg-9">
        <div class="news_content">
        <img class="inner_news_image" src="{{ asset($news->image) }}">
        <span class="news_date">{{ $news->date->format('d/m/y')}}</span>
        </div>
        <h3>{{ $news->title }}</h3>
        <p class="inner_news_text">{!! $news->description !!}</p>
        <br>
    </div>
    <div class="col-12 col-lg-3">
        <a href="{{route('donation.index')}}"><button type="button" class="btn btn-danger">დონაცია</button></a>
        <div class="iframe">
        <iframe src="http://geolab.edu.ge/" /></iframe>
        </div>
    </div>
    </div>



    @if(count($news->imageGallery))
    <div class="col-12 col-lg-9">
            <div class="row justify-content-between">
              <div class="col-4">
                <div class="row">
                <div class="cub"></div>
                <h6 class="min_header">სურათები</h6>
              </div>
              </div>
             <div class="owl-carousel" id="bottom_slider">
                @foreach($news->imageGallery->first()->images as $key=>$image)
                    <div><a href="#"><img src="{{ asset($image->location) }}"></a></div>
                @endforeach
            </div>
            </div>
          </div>
    @endif

</div>
</section>

@endsection


@section('script')

<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,

    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: true,
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>

@endsection
