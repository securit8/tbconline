@extends('layouts/front')

@section('title')
@lang('front.gallery') | სრულიად
@endsection

@section('style')
<link rel="stylesheet"  href="{{ asset('front/assets/css/lightbox.min.css') }}">
@endsection

@section('main')

<div class="container galley_inner">
        
        <div class="row">

            @foreach($gallery->images as $key => $image)
            
            
            @if($key%4==0 && $key/4)
                </div>
                <div class="row">
            @endif

            <div class="col-6 col-lg-3 gallery_row"><a href="{{ $image->location }}" data-lightbox="MyGallery"><img src="{{ $image->location }}" height="200px"></a></div>

            @endforeach
        </div>
       
</div>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('front/assets/js/lightbox-plus-jquery.min.js') }}"></script>
@endsection