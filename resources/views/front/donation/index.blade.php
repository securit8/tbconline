@extends('layouts/front')

@section('title')
@lang('front.donation')
@endsection

@section('main')

<div class="container-fluid inner_page_header">
<div class="container">
    <div class="row">
    <div class="col-12 col-sm-4">
        <h1>@lang('front.donation')</h1>
    </div>
    <div class="col-12 col-sm-8">
        <p class="contr_text d-none d-lg-block">@lang('front.donation_head_title')</p>
    </div>
    </div>
</div>
</div>
<div class="container-fluid donation">
<div class="container">
    <div class="row">

        @if($errors->any())
            <br/>
            <div class="col-12 alert alert-danger" role="alert">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @endif
            </div>
        @endif

        @if(\Session::get('success'))
            <div class="col-12 alert alert-success" role="alert">
                {{ \Session::get('success') }}
            </div>
        @endif
        @if(\Session::get('error'))
            <div class="col-12 alert alert-danger" role="alert">
                {{ \Session::get('error') }}
            </div>
        @endif

    </div>
    <form method="POST" action="{{route('donation.process')}}"> {{csrf_field()}}
    <div class="row">  
    <div class="col-12 col-md-6 col-xl-2 ">
        <div class="form-check billing-form">
        
            <input type="radio" id="radio01" value="0" name="type" checked="checked"/>
            <label for="radio01"><span class='gray-cyrcle'><span class='red-cyrcle'></span></span><span class='label-text'>@lang('front.one_time')</span></label>
        
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-2">
        <div class="form-check billing-form">
    
        <input type="radio" id="radio02" value="1" name="type" />
        <label for="radio02"><span><span></span></span><span class="label-text">@lang('front.per_month_transaction')</span></label>
    
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-2 donation_input">
        <input name="name" type="text" class="form-control" placeholder="@lang('front.firstname')" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>
    <div class="col-12 col-md-6 col-xl-2 donation_input">
        <input name="lastname" type="text" class="form-control" placeholder="@lang('front.lastname')" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>
    <div class="col-12 col-md-6 col-xl-2 donation_input">
        <input name="amount" type="text" class="form-control" placeholder="@lang('front.amount') 0.00 @lang('front.gel')" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>
    <div class="col-12 col-md-12 col-xl-2 center">
        <button type="submit" class="btn btn-danger">@lang('front.transaction')</button>
    </div>
    </div>
</form>
</div>
</div>
<div class="container donation_packet">
<div class="row">
    <div class="col-10 offset-lg-1 text-center">
        <h2>@lang('front.donation_packages')</h2>
        <p class="contributors_text">@lang('front.donation_packages_description')</p>
    </div>
    </div>
</div>
<div class="container packet">
<div class="row">
    <div class="col-12 col-lg-4">
    <div class="packet_content">
        <span class="number_packet">1</span>
        <img src="assets/images/donators_back.png">
        <h5><a href=#">@lang('front.starter_one')</a></h5>
        <span class="price"> @lang('front.starter_one_amount') @lang('front.gel') </span>
        <p class="packet_text">@lang('front.first_donation_packages_description')</p>
    </div>
    </div>
    <div class="col-12 col-lg-4">
    <div class="packet_content">
        <span class="number_packet">2</span>
        <img src="assets/images/donators_back.png">
        <h5><a href=#">@lang('front.starter_two')</a></h5>
        <span class="price"> @lang('front.starter_two_amount') @lang('front.gel') </span>
        <p class="packet_text">@lang('front.second_donation_packages_description')</p>
    </div>
    </div>
    <div class="col-12 col-lg-4">
    <div class="packet_content">
        <span class="number_packet">3</span>
        <img src="assets/images/donators_back.png">
        <h5><a href=#">@lang('front.starter_three')</a></h5>
        <span class="price"> @lang('front.starter_three_amount') @lang('front.gel') </span>
        <p class="packet_text">@lang('front.third_donation_packages_description')</p>
    </div>
    </div>
</div>
</div>

@endsection

@section('script')

@endsection