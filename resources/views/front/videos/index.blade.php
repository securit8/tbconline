@extends('layouts/front')

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
            <p class="contr_text d-none d-lg-block">ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე.</p>
        </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row gallery_links">
    <div class="col-12 col-lg-4 offset-lg-4 center">
        <a href="{{ route('gallery.index') }}" >@lang('front.images')</a>
        <a href="#" class="active">@lang('front.videos')</a>
    </div>
    </div>

    <div class="row">
    
    
        @foreach($videos as $key => $video)
            
            @if($key%4==0 && $key/4)
                </div>
                <div class="row">
            @endif
            <div class="col-12 col-md-6 col-lg-3">
                <div class="video">
                    <iframe src="{{ $video->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>

        @endforeach

    </div>


    
    

    {{ $videos->links('vendor/pagination/mypaginate') }}    
    

</div>
</section>

@endsection