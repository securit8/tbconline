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
       <button class="btn btn-warning mt-1" data-toggle="modal" data-target="#exampleModal">Select Car</button>
      </div>
    </div>
  </div>
    @endforeach

<!-- modal section-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Booking & Paying</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form style="width:100%;margin:30px auto;">
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
          </div>
          <div class="modal-footer d-block text-center">
            <h4 class="p-0 text-dark ">Thanks for enjoying our servise!</h4>
          </div>
        </div>
      </div>
    </div>
    </div>

    <!-- სურათების გალერეის გვერდების გადამრთველი  -->
    {{ $galleries->links('vendor/pagination/mypaginate') }}

</div>
</section>

@endsection
