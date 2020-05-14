@extends('layouts/front')

@section('title')
@lang('front.about_us')
@endsection

@section('main')

<section id="about_page" class="container-fluid">
    <div class="container-fluid inner_page_header">
      <div class="container">
        <h1>@lang('front.about_us')</h1>
      </div>
    </div>

    @foreach($about as $key => $value)

        @if($key%2 == 0)
            <div class="container-fluid about_center_content">
            <div class="container">
                <div class="row">
                <div class="col-12">

                    <h1 style="color:gray;padding:20px;">{{ $value->name }}</h1>
                </div>
                </div>
                <div class="row">
                <div class="col-12 col-lg-6">
                    <p>{!! $value->description !!}</p>

                </div>

                @foreach($value->images as $image)
                    <div class="col-6 d-none d-lg-block about_image">
                        <img src="{{ $image->location }}">
                    </div>
                @endforeach

                </div>
            </div>
            </div>
        @endif

        @if($key%2 != 0)
            <div class="container-fluid about_bottom_content">
            <div class="container">
                <div class="row">
                <div class="col-12">
              
                    <h1 style="color:gray;padding:20px;">{{ $value->name }}</h1>
                    <p class="mission">{!! $value->description !!}</p>
                </div>
                @foreach($value->images as $image)
                    <div class="col-6 d-none d-lg-block about_image">
                        <img src="{{ $image->location }}" width="100%;">
                    </div>
                @endforeach

                </div>
            </div>
            </div>

        @endif

    @endforeach

  </section>
  <br>
@endsection
