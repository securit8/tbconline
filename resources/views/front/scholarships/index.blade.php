@extends('layouts/front')

@section('title')
    @lang('front.scholarships')
@endsection

@section('style')

@endsection


@section('main')
<div class="container-fluid inner_page_header page_header_background">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-4">
              <h1>@lang('front.scholarships')</h1>
            </div>
            <div class="col-12 col-sm-8">
              <p class="contr_text d-none d-lg-block">@lang('front.scholarships_headline')</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container scholarship">
        <div class="row">
        @if($image)
            <div class="col-12 col-lg-6 scholarship_image padding_right">
                <img src="{{ asset($image->location) }}">
            </div>
        @endif

          <div class="col-12 col-lg-6  padding_left">
            
            <div class="col-12 col-lg-12 scholarship_back_color">
            <h4> {{ $scholarship->name }} </h4>
            <p class="scholarship_text">{!! $scholarship->description !!}</p>
                @if($scholarship->application_form)
                    <a class="btn btn-red btn-animated" href="{{$scholarship->application_form}}" target="_blank">@lang('front.download_form')</a>
                @endif
          </div>
        
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row ">
            <div class="col-6">
              <div class="cub"></div>
              <h6 class="min_header">@lang('front.our_students')</h6>
            </div>
      </div>
      <div class="row scholarship_slider">
        <div class="col-12">
          <div class="owl-carousel" id="bottom_slider_student">
            
            @foreach($students as $student)
            <div class="student_box">
              <h6>{{ $student->name }}</h6>
              <div class="red_line"></div>
              <p class="student_block_text">{{ strip_tags($student->description) }}</p>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row full_video scholarsheep_video"> 
        
        @foreach($videos as $key => $video)

        <div class="col-12 col-md-6 col-lg-6 col-xl-3 min_padding">
            <div class="video">
                <iframe src="{{ $video->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        @endforeach

      </div>
    </div>
@endsection

@section('script')

@endsection