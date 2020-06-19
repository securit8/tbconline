@extends('layouts/front')

@section('title')
@lang('front.news')
@endsection

@section('main')

<section id="news" class="container-fluid">

<div class="container p-0">
  <div class="container-fluid p-0 py-3">
    <span style="color:black;margin:10px 0;font-size:2.3rem;">ბენე შატლი</span>
    <div class="row py-3" >

      <div class="row">
        <div class = "reklama col-12 ">
          <img src="{{ asset('front/assets/images/reklama.png') }} "  />
        </div>
      </div>

      <div class = "row transport_banner">
        <div class = "col-12 d-flex justify-content-around">
   <div class="col-3 first_col">
     <div class = "col-12 ">
        <a href = ""  class = "car_img"><img src = "{{ asset('front/assets/images/vcls.jpg') }}" style="width:100%; " alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
     </div>

     <div class = "col-12 my-1">
         <a href = ""  class = "car_img"><img src = "{{ asset('front/assets/images/sprnt.jpg') }}" style="width:100%;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
     </div>

     <div class = "col-12 ">
         <a href = ""  class = "car_img"><img src = "{{ asset('front/assets/images/camry.jpg') }}" style="width:100%;position:relative;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>

     </div>
   </div>

   <div class="col-6">
     <div class = "col-12 px-1">
       <a href = "" class = "car_img"><img src = "{{ asset('front/assets/images/mybch.png') }}" style="width:100%;" alt = "bene-cars.jpg" /></a>
     </div>
     <div class = "col-12 pt-1 d-flex justify-content-around">
       <div class = "col-6 " style="padding-left:4px;padding-right:2px;" >
        <a href = "" class = "car_img"><img src = "{{ asset('front/assets/images/scls1.jpg') }}" style="width:100%;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
       </div>
       <div class = "col-6 " style="padding-right:4px;padding-left:2px;" >
        <a href = "" class = "car_img"><img src = "{{ asset('front/assets/images/ecls1.jpg') }}" style="width:100%;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
       </div>
     </div>
   </div>

   <div class="col-3">
     <div class = "col-12">
        <a href = "" class = "car_img"><img src = "{{ asset('front/assets/images/toyotaland.jpg') }}" style="width:100%;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
     </div>

     <div class = "col-12 py-1">
         <a href = "" class = "car_img" ><img src = "{{ asset('front/assets/images/vcls.jpg') }}" style="width:100%;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
     </div>

     <div class = "col-12">
         <a href = "" class = "car_img"><img src = "{{ asset('front/assets/images/lx.jpg') }}" style="width:100%;" alt = "bene-cars.jpg" /><img class = "car_title" src = "{{ asset('front/assets/images/TOYOTACAMRY.png') }}" style = "width:100%;visibility: hidden;position:absolute;top:0;left:0;"/></a>
     </div>
   </div>
      </div>
    </div>






      <div class = "row  p-5 shuttle_row bg-white">
        <div class = "card_heading d-flex justify-content-between">
          <span class="bebas_neue">ტურები</span>
          <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

        </div>
      <div class = "row justify-content-around">
      <div class="col-12 col-lg-4">
      <div class="card">
      <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/turi5.jpg') }}" alt="Card image cap">
      <div class="card-body main_card_body p-0">
        <h5 class="card-title text-center m-1"><a href="">კახეთი</a></h5>
        <div class="row align-items-end m-0 py-2">

        <div class="col-7"> <span class="card_main_price">99</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
        <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

        </div>
      </div>
      </div>
      </div>


      <div class="col-12 col-lg-4">
      <div class="card">
      <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/turi1.jpg') }}" alt="Card image cap">
      <div class="card-body main_card_body p-0">
        <h5 class="card-title text-center m-1"><a href="">რაჭა</a></h5>
        <div class="row align-items-end m-0 py-2">

        <div class="col-7"> <span class="card_main_price">255</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
        <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div>

        </div>
      </div>
      </div>
      </div>


      <div class="col-12 col-lg-4">
      <div class="card" >
      <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/mogzauroba.jpg') }}" alt="Card image cap">
      <div class="card-body main_card_body p-0">
        <h5 class="card-title text-center m-1"><a href="">რაჭა</a></h5>
        <div class="row align-items-end m-0 py-2">

        <div class="col-7"> <span class="card_main_price">25</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
          <a href="news/shuttlle"> <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div></a>

        </div>
      </div>
      </div>
      </div>

      </div>
      </div>

      <div class="row">
        <div class = "reklama col-12">
          <img class = "mt-0" src="{{ asset('front/assets/images/reklama2.png') }} "  />
        </div>
      </div>


      <div class = "row  p-5 shuttle_row bg-white">
        <div class = "card_heading d-flex justify-content-between">
          <span class="bebas_neue">მოგზაურობა</span>
          <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

        </div>
      <div class = "row justify-content-around">
      <div class="col-12 col-lg-4">
      <div class="card">
      <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/mogzauroba.jpg') }}" alt="Card image cap">
      <div class="card-body main_card_body p-0">
        <h5 class="card-title text-center m-1"><a href="">რაჭა</a></h5>
        <div class="row align-items-end m-0 py-2">

      <div class="col-7"> <span class="card_main_price">285</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
          <a href="news/shuttlle"> <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div></a>

        </div>
      </div>
      </div>
      </div>


      <div class="col-12 col-lg-4">
      <div class="card">
      <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/mogzauroba4.jpg') }}" alt="Card image cap">
      <div class="card-body main_card_body p-0">
        <h5 class="card-title text-center m-1"><a href="">რეგიონები</a></h5>
        <div class="row align-items-end m-0 py-2">

      <div class="col-7"> <span class="card_main_price">15</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
          <a href="news/shuttlle"> <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div></a>

        </div>
      </div>
      </div>
      </div>


      <div class="col-12 col-lg-4">
      <div class="card" >
      <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/mogzauroba3.jpg') }}" alt="Card image cap">
      <div class="card-body main_card_body p-0">
        <h5 class="card-title text-center m-1"><a href="">სვანეთი</a></h5>
        <div class="row align-items-end m-0 py-2">

      <div class="col-7"> <span class="card_main_price">200</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
          <a href="news/shuttlle"> <div class="col-5 no_padding text-center"> <span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></div></a>

        </div>
      </div>
      </div>
      </div>

      </div>
      </div>
    </div>
  </div>
</div>

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


<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title"><a href="{{ route('news.shuttle') }}">შატლი ქალაქის ტერიტორიაზე</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">3ლ-დან </span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>
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
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);" >
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.shuttle') }}">შატლი VIP კლიენტებისთვის</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">25ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

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
  <h5  style="min-height:50px;"class="card-title"><a href="{{ route('news.shuttle') }}">შატლი ქალაქის ტერიტორიაზე</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">3ლ-დან </span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.shuttle') }}">შატლი რეგიონებში</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">15ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.shuttle') }}">შატლი VIP კლიენტებისთვის</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">25ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

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
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.shuttle') }}">შატლი ქალაქის ტერიტორიაზე</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">3ლ-დან </span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);">
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.shuttle') }}">შატლი რეგიონებში</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">15ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>

<div class="col-12 col-lg-4" >
<div class="card" style="box-shadow: 0px 0px 51px -28px rgba(0,0,0,0.75);" >
<img class="card-img-top" src="{{ asset('front/assets/images/shuttle.jpg') }}" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title" style="min-height:50px;"><a href="{{ route('news.shuttle') }}">შატლი VIP კლიენტებისთვის</a></h5>
  <p class="card-text"></p>
  <div class="row align-items-end">
  <div class="col-6"> <span class="news_data">25ლ-დან</span></div>
  <div class="col-6 no_padding text-center"> <span class="news_more"><a style="padding:10px 5px;border:1px solid #c7c7c7;border-radius:10px;" href="{{ route('news.shuttle') }}">@lang('front.learn_more')</i></a></span></div>

  </div>
</div>
</div>
</div>
    </div>


</div>
</div>
-->
</section>

@endsection
