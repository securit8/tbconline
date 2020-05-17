<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/favicon.png') }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="{{ asset('front/assets/css/style.css') }}">
  <link rel="stylesheet"  href="{{ asset('front/assets/css/fonts.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subse0 t=all" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">

  @yield('style')
</head>
<body>
<header>
  <div class="container header">
    <div class="row">
      <a class="col-2 main_logo" href="{{ route('index') }}"><!--<img src="{{ asset('front/assets/svg/logo_' . app()->getLocale().'.svg') }}">--></a>
      <div class="col-8 col-sm-9">
          <nav>
            <div class="toggle">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <ul class="menu_list">
              <li class=" @if($menu == 1) active @endif"><a href="{{ route('index') }}">@lang('front.main')</a></li>
              <li class=" @if($menu == 2) active @endif"><a href="{{ route('news.index') }}">@lang('front.news')</a></li>
              <li class=" @if($menu == 3) active @endif"><a href="{{ route('gallery.index') }}">@lang('front.cars')</a></li>
              <li class=" @if($menu == 4) active @endif"><a href="{{ route('contributors.index') }}">@lang('front.conditions')</a></li>
              <li class=" @if($menu == 5) active @endif"><a href="{{ route('about.index') }}">@lang('front.about_us')</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-2 col-sm-1">
          <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="ძებნა...">
            <a class="search-btn" href="#">
            <img src="{{ asset('front/assets/images/nn.png') }}"></a>
          </div>
          @if(app()->getLocale() === 'en')
            <a href="{{langUrl('ka')}}" class="lang_href">KA</a>
          @else
            <a href="{{langUrl('en')}}" class="lang_href">EN</a>
          @endif
        </div>
    </div>
  </div>
</header>

@yield('main')


<footer>
  <div class="container footer">
    <div class="row">
    <div class="col-12 col-sm-5 col-lg-4 soc_icon">
      <span class="fb"><a href="https://www.fb.com" target="_blank">Facebook</a></span>
      <span class="in"><a href="https://www.instagram.com" target="_blank">Instagram</a></span>
      <span class="tw"><a href="https://www.twitter.com" target="_blank">Twitter</a></span>
    </div>
    <div class="col-12 col-sm-7 col-lg-8  mail_block">
      <span>@lang('front.phone'): (+995) 577 388 408</span>
      <span>@lang('front.mail'): L.Gelashvili@Gmail.com</span>
    </div>
  </div>
</div>
</footer>

<div class="sound">
  <div class="sound--icon fa fa-volume-off"></div>
  <div>
    <div class="sound--wave sound--wave_one"></div>
    <div class="sound--wave sound--wave_two"></div>
  </div>
</div>

<audio id="backSound" loop>
  <source src="{{ asset('front/assets/css/One_More_Light_Linkin_Park.mp3') }}">
</audio>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/main.js') }}"></script>
<link rel="stylesheet"  href="{{ asset('front/assets/css/video_popup.css') }}">

@yield('script')

</body>
</html>
