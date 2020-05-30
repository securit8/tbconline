@extends('layouts/front')



@section('title')
@lang('front.main')
@endsection



@section('main')


<section id="main" class="container">
<div class="row justify-content-between news">
    <div class="col-4">
    <h4>@lang('front.main_news')</h4>
    </div>
    <div class="cocl-4  all_news">
    <h6><a href="{{ route('index') }}">@lang('front.all_news')<i class="fas fa-long-arrow-alt-right"></i></a></h6>
    </div>
</div>
<div class="row">

    @if($first)
  <!--  <div class="col-12 col-lg-6">
        <div class="news_block">
        <div class="row">
        <div class="col-12 col-md-4 col-lg-6">
            <img  class="rounded img-fluid" src="{{ asset($first->image) }}">
        </div>
        <div class="col-12 col-md-8 col-lg-6">
            <h3><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">{{ $first->title }}</a></h3>
            <p class="news_text" style="float:left">{!! str_replace('&nbsp;',' ', $first->description) !!}</p>
            <div class="clearfix"></div>
            <div class="row align-items-end">
            <div class="col-4"> <span class="news_data"> {{ $first->date->format('d/m/y') }}</span></div>
            <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
            </div>
        </div>
        </div>
        </div>
    </div>
  -->
  <div class="col-12 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ asset($first->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">{{ $first->title }}</a></h5>
    <p class="card-text">{!! str_replace('&nbsp;',' ', $first->description) !!}</p>
    <div class="row align-items-end">
    <div class="col-4"> <span class="news_data"> {{ $first->date->format('d/m/y') }}</span></div>
    <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
    </div>
  </div>
</div>
</div>
    @endif

    @if($second)
    <!--<div class="col-12 col-lg-6">
        <div class="news_block">
        <div class="row">
        <div class="col-12 col-md-4 col-lg-6">
            <img  class="rounded img-fluid" src="{{ asset($second->image) }}">
        </div>
        <div class="col-12 col-md-8 col-lg-6">
            <h3><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">{{ $second->title }}</a></h3>
            <p class="news_text" style="float:left">{!! str_replace('&nbsp;',' ', $second->description) !!}</p>
            <div class="clearfix"></div>
            <div class="row align-items-end">
            <div class="col-4"> <span class="news_data"> {{ $second->date->format('d/m/y') }}</span></div>
            <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
            </div>
        </div>
        </div>
        </div>
    </div>
  -->
  <div class="col-12 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top rounded img-fluid" src="{{ asset($second->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">{{ $second->title }}</a></h5>
    <p class="card-text">{!! str_replace('&nbsp;',' ', $second->description) !!}</p>
    <div class="row align-items-end">
    <div class="col-4"> <span class="news_data"> {{ $second->date->format('d/m/y') }}</span></div>
    <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
    </div>
  </div>
</div>
</div>
    @endif


    @if($third)
    <!--
    <div class="col-12  news_block last_news">
    <div class="row">
        <div class="col-12 col-lg-6">
        <img  class="rounded img-fluid" src="{{ asset($third->image) }}">
        </div>
        <div class="col-12 col-lg-6">
        <h3><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">{{ $third->title }}</a></h3>
        <p class="">{!! str_replace('&nbsp;',' ', $third->description) !!}</p>
        <div class="row last_news justify-content-between">
            <div class="col-4"> <span class="news_data"> {{ $third->date->format('d/m/y') }}</span></div>
            <div class="col-7 bottom_news"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
        </div>
        </div>
    </div>
    </div>
  -->
  <div class="col-12 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top rounded img-fluid" src="{{ asset($third->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">{{ $third->title }}</a></h5>
    <p class="card-text">{!! str_replace('&nbsp;',' ', $third->description) !!}</p>
    <div class="row align-items-end">
    <div class="col-4"> <span class="news_data"> {{ $third->date->format('d/m/y') }}</span></div>
    <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
    </div>
  </div>
</div>
</div>

    @endif
    </div>
</section>


@endsection
