@extends('layouts/front')

@section('title')
@lang('front.donation')
@endsection


@section('main')


<section id="news" class="container-fluid">

<div class = "container p-0" style = "margin-top: 150px;">
  <div id="carouselExampleIndicators" class="carousel slide w-75" style = "margin:0 auto;" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour1.jpg') }}" height="520" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour2.jpg') }}" height="520" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour3.jpg') }}" height="520" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour4.jpg') }}" height="520" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container p-0">

   <h4 class = "mt-5 ml-3 d-block">სპეციალური შეთავაზება</h4>
        <!--<img class="inner_news_image" src="{{ asset('front/assets/images/shuttle.jpg') }}" width="300"  height="500" >-->
    <div class="row ">
      <div class="col-md-12  mt-3 ml-3" >
      <div class="col-12 d-flex justify-content-around py-1 px-0 vianotour" style="border-top:1px solid #c7c7c7;">
       <div class = "col-4">
         <h5 class = "mt-5 d-block">კახეთი</h5>

         <p></p>
         <p>მგზავრების რაოდენობა: 5 ადამიანი</p>
         <p></p>
         <p>მგზავრობის დრო: 2:30 სთ</p>
         <p></p>
         <p>მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>
         <p></p>
         <p>ავტომობილი: Mercedes-Benz V-class</p>

       </div>

       <div class = "col-4">
         <h5 class = "mt-5 d-block">ყაზბეგი</h5>

         <p></p>
         <p>მგზავრების რაოდენობა: 5 ადამიანი</p>
         <p></p>
         <p>მგზავრობის დრო: 2 სთ</p>
         <p></p>
         <p>მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>
         <p></p>
         <p>ავტომობილი: Mercedes-Benz V-class</p>

       </div>


       <div class = "col-4">
         <h5 class = "mt-5 d-block">აჭარა</h5>

         <p></p>
         <p>მგზავრების რაოდენობა: 5 ადამიანი</p>
         <p></p>
         <p>მგზავრობის დრო: 4 სთ</p>
         <p></p>
         <p>მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>
         <p></p>
         <p>ავტომობილი: Mercedes-Benz V-class</p>

       </div>
      </div>

      </div>

    </div>
    <div class ="row my-5 buy_ticket">
<h2 class="my-5">ბილეთები</h2>

<form class="form-horizontal col-12" method="POST" action="https://www.flytaxi.ge/taxicall.php?md_time=<?=md5(time());?>">
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">კახეთი</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button type="button" class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button type="button" class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "kaxeti_price" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;" name="cash_f" type="text" value="{{$kaxeti_price}}"></span>&nbsp;ლარი</p>
  </div>
  <input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
  <div class = "col-2 ticket_padding_top">
    <button name = "send" type ="submit" class = "btn btn-success">ყიდვა</button>
    <input id="coupon_input"  onkeyup="coupon()" type="text" class="align-self-end coupon_input"  placeholder="promo"/>
  </div>
</div>
</form>

<form class="form-horizontal col-12" method="POST" action="https://www.flytaxi.ge/taxicall.php?md_time=<?=md5(time());?>">
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">ყაზბეგი</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button type="button" class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button type="button" class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "yazbegi_price" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;" name="cash_f" type="text" value="{{$yazbegi_price}}" readonly="readonly"></span>&nbsp;ლარი</p>
  </div>
  <input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
  <div class = "col-2 ticket_padding_top">
    <button name ="send" type ="submit" class = "btn btn-success">ყიდვა</button>
    <input id="coupon_input"  onkeyup="coupon()" type="text" class="align-self-end coupon_input"  placeholder="promo" />
  </div>
</div>
</form>

<form class="form-horizontal col-12" method="POST" action="https://www.flytaxi.ge/taxicall.php?md_time=<?=md5(time());?>">
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">აჭარა</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button type="button" class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button type="button" class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "ajara_price" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;" name="cash_f" type="text" value="{{$ajara_price}}"></span>&nbsp;ლარი</p>
  </div>
  <input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
  <div class = "col-2 ticket_padding_top">
    <button name ="send" type ="submit" class = "btn btn-success">ყიდვა</button>
     <input id="coupon_input"  name="coupon" onkeyup="coupon()" type="text" class="align-self-end coupon_input "  placeholder="promo"/>
  </div>
</div>
</form>

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

document.querySelectorAll(".circle").forEach((btn)=>{
 btn.addEventListener("click",(e)=>{
   let clicked = e.target;
   let parent = clicked.parentElement.getElementsByTagName('span')[0];
   let quantity = parent.childNodes[0].nodeValue;
   if(clicked.classList.contains('minus')){
     quantity--;
   }
   if(clicked.classList.contains('plus')){
   quantity++;

   }
   if(quantity>5 || quantity<1){
     quantity = 1;
   }
   parent.innerHTML = quantity;
 });
});

function detalebi() {
  var element = document.getElementById("detalebi_div");
  element.classList.toggle("show");
}
function detaleb() {
  var element = document.getElementById("detalebi_di");
  element.classList.toggle("show");
}
function detale() {
  var element = document.getElementById("detalebi_d");
  element.classList.toggle("show");
}

function coupon(){
  var coupon_code = document.getElementById('coupon_input').value;
  var kaxeti_price = document.getElementById('kaxeti_price');
  var yazbegi_price = document.getElementById('yazbegi_price');
  var ajara_price = document.getElementById('ajara_price');
  if(coupon_code == 'tbc123' || coupon_code == 'vtb123' || coupon_code == 'bog123'){
    if(kaxeti_price.value>'195'){
    kaxeti_price.value *=0.95;
    yazbegi_price.value *=0.95;
    ajara_price.value *=0.95
  }
  }
}
</script>
@endsection
