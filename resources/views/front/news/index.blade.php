@extends('layouts/front')

@section('title')
@lang('front.news')
@endsection

@section('main')

<section id="news" class="container-fluid">
<div class="container-fluid inner_page_header">
    <div class="container">
    <h1>@lang('front.news1')</h1>
    </div>

    <div style = "padding:0;margin-bottom:100px;" class = "container-fluid">
      <img style="width:100%;height:500px;" src="{{ asset('front/assets/images/benetransport.jpg') }}"  alt="bene group image">
    </div>


</div>
<div class="container p-0">
  <div class="container-fluid p-0 py-3">
    <span style="color:black;margin:10px 0;font-size:2.3rem;">ბენე შატლი</span>
    <div class="row py-3" >

<!--
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
-->
<!--
<form style="width:40%;margin:50px auto;">
  <div class="form-row">
    <div class="form-group  col-md-12 col-lg-6">
      <label for="inputEmail4">აირჩიეთ ავტომობილი</label>
      <select type="email" class="form-control" id="inputEmail4" placeholder="Mercedes">
        <option>Mercedes</option>
      <option>Bmw</option>
      <option>Porsche</option>
      <option>Ferrari</option>
      <option>Audi</option>
    </select>
    </div>
    <div class="form-group  col-md-12 col-lg-6">
      <label for="inputPassword4">დღეების რაოდენობა</label>
      <select type="password" class="form-control" id="inputPassword4" placeholder="3">
        <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">აყვანის მდებარეობა</label>
    <select type="text" class="form-control" id="inputAddress" placeholder="11 აღმაშენებელი">
      <option>11 აღმაშენებელი</option>
      <option>57 ა.ყაზბეგი</option>
    </select>
  </div>
  <div class="form-group">
    <label for="inputAddress2">დაბრუნების მდებარეობა</label>
    <select type="text" class="form-control" id="inputAddress2" placeholder="11 აღმაშენებელი">
      <option>11 აღმაშენებელი</option>
      <option>57 ა.ყაზბეგი</option>
    </select>
  </div>
  <div class="form-row">
    <div class="form-group  col-md-12 col-lg-6">
      <label for="inputCity">გადასახდელი თანხა</label>
      <input type="text" class="form-control col-sm-4 col-md-4 col-3 px-2" id="inputCity" placeholder="ლარი" value="">
    </div>
<div class="form-group  col-md-12 col-lg-6">
  <label for="inputCity"class="invisible">ok</label>
<button type="submit" class="btn btn-primary form-control"><a class="text-white w-100 py-2 px-5"href="{{route('donation.index')}}">გადახდა</a></button>
</div>

  </div>


</form>
-->

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$n->id]) }}">შატლი ქალაქის ტერიტორიაზე</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">3ლ-დან </span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>
  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="">შატლი რეგიონებში</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">15ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);" >
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="">შატლი VIP კლიენტებისთვის</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">25ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>
    </div>


</div>
</div>


<div class="container p-0 py-3">
  <div class="container-fluid p-0">
    <span style="color:black;margin:10px 0;font-size:2.3rem;">ერთ და მრავალდღიანი ტურები</span>
    <div class="row py-3" >

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5  style="min-height:50px;"class="card-title"><a href="{{ route('news.fullstory',['id'=>$n->id]) }}">შატლი ქალაქის ტერიტორიაზე</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">3ლ-დან </span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="">შატლი რეგიონებში</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">15ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="">შატლი VIP კლიენტებისთვის</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">25ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>
    </div>


</div>
</div>

<div class="container p-0 py-3">
  <div class="container-fluid p-0">
    <span style="color:black;margin:10px 0;font-size:2.3rem;">საზღვარგარეთ მოგზაურობა</span>
    <div class="row py-3" >

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);" >
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.fullstory',['id'=>$n->id]) }}">შატლი ქალაქის ტერიტორიაზე</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">3ლ-დან </span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="">შატლი რეგიონებში</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">15ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);" >
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="">შატლი VIP კლიენტებისთვის</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">25ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.fullstory',['id'=>$n->id]) }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>
    </div>


</div>
</div>
</section>

@endsection
