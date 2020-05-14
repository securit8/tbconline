@extends("layouts/front")

@section('title')
@lang('front.gallery')
@endsection

@section('main')

<section id="gallery" class="gallery">
<div class="container-fluid inner_page_header">
    <div class="container">
        <div class="row">
        <div class="col-12 col-sm-4">
            <h1>@lang('front.gallery')</h1>
        </div>
        <div class="col-12 col-sm-8">
            <p class="contr_text d-none d-lg-block">@lang('front.gallery_headline')</p>
        </div>
        </div>
    </div>
</div>
<div class="container">


    <div class="row gallery_images">

    @foreach($galleries as $gallery)
    <div class="col-12  gallery_block mt-5">

     <div class="col-12 gallery_block">
       <div class="gallery_title">
       <a href="{{ route('gallery.fullstory',['id'=>$gallery->id]) }}">{{ $gallery->name }}</a>
       </div>
     </div>
       <div class ="col-12  gallery_block d-flex flex-row gallery_border">
      <div class ="col-3 p-2 gallery">
        <img src="{{ $gallery->image }}" width="100px" height="150px">
      </div>

      <div class="col-3 ">
        <h1>Porsche 911GTS</h1>
        <ul>
        <li>2 seats 2 doors sport coupe</li>
        <li>Luggage Space Little</li>
        <li>Air Conditioner: Yes</li>
        <li>Trans:manual/Rwd</li>
      </ul>
      </div>

      <div class="col-4">
        <ul class="description">
          <li>&#10003; Last Generation model</li>
          <li>&#10003; Good choose for highway drive</li>
          <li>&#10003; Fuel Efficient</li>
        </ul>
        <span class="img_num" style="display:none;">{{ count($gallery->images) }}</span>
      </div>

      <div class="col-2 py-5 text-center">
        <span class= "price">150Gel/day</span>
       <button class="btn btn-warning mt-1">Select Car</button>
      </div>
    </div>
  </div>
    @endforeach


    </div>

    <!-- სურათების გალერეის გვერდების გადამრთველი  -->
    {{ $galleries->links('vendor/pagination/mypaginate') }}

</div>
</section>

@endsection
