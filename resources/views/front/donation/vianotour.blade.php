@extends('layouts/front')

@section('title')
@lang('front.donation')
@endsection


@section('main')


<section id="news" class="container-fluid">

<div class = "container p-0" style = "margin-top: 150px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour2.png') }}" height="600" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour1.png') }}" height="600" alt="Second slide">
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

   <h4 class = "mt-5 d-block">სპეციალური შეთავაზება</h4>
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
         <div class="dropdown pt-3">
     <a href="" type="button"  class="text-center" onclick="event.preventDefault();detalebi()">იხილეთ მეტი &#9660;
     </a>
     <div id="detalebi_div" class="detalebi_div pt-5">
       <p><p></p>
 <strong>დღე 1</strong><br><br>
 <p>09:00- თბილისდან გასვლა, ბახმაროს მიმართულებით, საშუალო მგზავრობის დრო 6 საათი.
 </p>
 <p>13:00-სადილი რესტორანში</p>
 <p>14:00-გამგზავრება ნაბეღლავის მიმართულებით. ნაბეღლავის წყლების დაგემოვნება.</p>
 <p>
   14:45-ნაბეღლავიდან გასვლა ბახმაროს მიმართულებით. საშუალო მგზავრობის დრო 1 საათი და 15 წუთი.
 </p>
 <p>
   16:00-განთავსება სასტუმროში.
 </p>
 <p>თავისუფალი დრო</p>

 <br><br><strong>დღე 2</strong><br></br>
 <p>საუზმე </p>
 <p>
 12:00-გასვლა ბახმაროდან გომის მთაზე. გზა მოითხოვს საშუალოდ 2 საათს. პიკნიკი, ცხენებით გასეირნება.
  ჯგუფური აქტივობები </p>
 <p>
 18:00-ბახმაროში დაბრუნება.</p>

 <br><br><strong>დღე 3</strong><br></br>
 <p>საუზმე </p>
 <p>12:00-გამგზავრება თბილისის მიმართულებით.</p>


 </div>
   </div>
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
         <div class="dropdown pt-3">
     <a href="" type="button"  class="text-center" onclick="event.preventDefault();detaleb()">იხილეთ მეტი &#9660;
     </a>
     <div id="detalebi_di" class="detalebi_div pt-5">
       <p><p></p>
 <strong>დღე 1</strong><br><br>
 <p>09:00- თბილისდან გასვლა, ბახმაროს მიმართულებით, საშუალო მგზავრობის დრო 6 საათი.
 </p>
 <p>13:00-სადილი რესტორანში</p>
 <p>14:00-გამგზავრება ნაბეღლავის მიმართულებით. ნაბეღლავის წყლების დაგემოვნება.</p>
 <p>
   14:45-ნაბეღლავიდან გასვლა ბახმაროს მიმართულებით. საშუალო მგზავრობის დრო 1 საათი და 15 წუთი.
 </p>
 <p>
   16:00-განთავსება სასტუმროში.
 </p>
 <p>თავისუფალი დრო</p>

 <br><br><strong>დღე 2</strong><br></br>
 <p>საუზმე </p>
 <p>
 12:00-გასვლა ბახმაროდან გომის მთაზე. გზა მოითხოვს საშუალოდ 2 საათს. პიკნიკი, ცხენებით გასეირნება.
  ჯგუფური აქტივობები </p>
 <p>
 18:00-ბახმაროში დაბრუნება.</p>

 <br><br><strong>დღე 3</strong><br></br>
 <p>საუზმე </p>
 <p>12:00-გამგზავრება თბილისის მიმართულებით.</p>


 </div>
   </div>
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
         <div class="dropdown pt-3">
     <a href="" type="button"  class="text-center" onclick="event.preventDefault();detale()">იხილეთ მეტი &#9660;
     </a>
     <div id="detalebi_d" class="detalebi_div pt-5">
       <p><p></p>
 <strong>დღე 1</strong><br><br>
 <p>09:00- თბილისდან გასვლა, ბახმაროს მიმართულებით, საშუალო მგზავრობის დრო 6 საათი.
 </p>
 <p>13:00-სადილი რესტორანში</p>
 <p>14:00-გამგზავრება ნაბეღლავის მიმართულებით. ნაბეღლავის წყლების დაგემოვნება.</p>
 <p>
   14:45-ნაბეღლავიდან გასვლა ბახმაროს მიმართულებით. საშუალო მგზავრობის დრო 1 საათი და 15 წუთი.
 </p>
 <p>
   16:00-განთავსება სასტუმროში.
 </p>
 <p>თავისუფალი დრო</p>

 <br><br><strong>დღე 2</strong><br></br>
 <p>საუზმე </p>
 <p>
 12:00-გასვლა ბახმაროდან გომის მთაზე. გზა მოითხოვს საშუალოდ 2 საათს. პიკნიკი, ცხენებით გასეირნება.
  ჯგუფური აქტივობები </p>
 <p>
 18:00-ბახმაროში დაბრუნება.</p>

 <br><br><strong>დღე 3</strong><br></br>
 <p>საუზმე </p>
 <p>12:00-გამგზავრება თბილისის მიმართულებით.</p>


 </div>
   </div>
       </div>
      </div>

      </div>

    </div>
    <div class ="row my-5 buy_ticket">
<h2 class="my-5">ბილეთები</h2>
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">კახეთი</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">200</span>&nbsp;ლარი</p>
  </div>
  <div class = "col-2 ticket_padding_top">
    <button type ="button" class = "btn btn-success">ყიდვა</button>
  </div>
</div>

<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">ყაზბეგი</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">300</span>&nbsp;ლარი</p>
  </div>
  <div class = "col-2 ticket_padding_top">
    <button type ="button" class = "btn btn-success">ყიდვა</button>
  </div>
</div>
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">აჭარა</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">400</span>&nbsp;ლარი</p>
  </div>
  <div class = "col-2 ticket_padding_top">
    <button type ="button" class = "btn btn-success">ყიდვა</button>
  </div>
</div>

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
</script>
@endsection
