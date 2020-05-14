@extends('layouts/front')

@section('title')
@lang('front.news')
@endsection

@section('main')

<section id="news" class="container-fluid">
<div class="container-fluid inner_page_header">
    <div class="container">
    <h1>@lang('front.news')</h1>
    </div>
</div>
<div class="container">
    <div class="row">

    @foreach($news as $n)

    <div class="col-12 col-lg-6">
        <div class="news_block">
        <div class="row">
        <div class="col-12 col-md-4 col-lg-6">
            <img  class="rounded img-fluid" src="{{ asset($n->image) }}">
        </div>
        <div class="col-12 col-md-8 col-lg-6">
            <h3><a href="{{ route('news.fullstory',['id'=>$n->id]) }}">{{ $n->title }}</a></h3>
            <p class="news_text" style="float:left">{!! str_replace('&nbsp;',' ',$n->description) !!}</p>
            <div class="clearfix"></div>
            <div class="row align-items-end">
            <div class="col-5"> <span class="news_data"> {{ $n->date->format('d/m/y') }}</span></div>
            <div class="col-6 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
            </div>
        </div>
        </div>
        </div>
    </div>

    @endforeach


    </div>

    {{ $news->links('vendor/pagination/mypaginate') }}
</div>
</section>

@endsection
