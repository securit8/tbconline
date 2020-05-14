@extends('layouts/back')

@section('title')
სტიპენდიები
@endsection


@section('style')
<link href="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('main')

<style>

.disappeared{
    display: none;
}

.lang-btn:hover{
    background-color:lightgrey;
}

</style>



<br>
@include('admin.include.info')
<br>


    {!! Form::open([ 'action'=>'Admin\ScholarshipController@update','method'=>'post','files'=>true]) !!}


    <div class="form-group">
        @foreach(Config::get('app.locales') as $key=>$locale)
        <a class="btn lang-btn  @if($key==0) green @endif" onclick="changeLang({{$key}})">@lang('admin.'.$locale)</a>
        @endforeach
    </div>

    <br>
    @foreach(Config::get('app.locales') as $key=>$locale)
    <div class="formation @if($key!=0) disappeared @endif ">
    
    <br>

    <div class="form-group">
        {!! Form::label('name','დასახელება ('.trans('admin.'.$locale).')')!!}
        {!! Form::text($locale.'[name]',$scholarship->{'name:'.$locale},['class'=>'form-control']) !!}
    </div>

    <br>

    <div class="form-group">
        {!! Form::label('name','აღწერა ('.trans('admin.'.$locale).')')!!}
        <textarea name="{{$locale}}[description]" id="descr{{$key}}">{{ $scholarship->{'description:'.$locale} }}</textarea>
    </div>

    <br>

    @if($key==0)


    <div class="form-group">
        {!! Form::label('application_form','აპლიკაციის ფორმის ლინკი')!!}
        {!! Form::text('application_form',$scholarship->application_form,['class'=>'form-control']) !!}
    </div>

    <div class="form-group ">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
            <?php if($image){ ?><img src="{{ $image->location }}"> <?php } ?>
            </div>
            <div>
                <span class="btn red btn-outline btn-file">
                    <span class="fileinput-new"> პოსტერი </span>
                    <span class="fileinput-exists"> შეცვლა </span>
                    {!! Form::file('image') !!}
            </div>
        </div>
        <div class="clearfix margin-top-10"></div>
    </div>

    @foreach($videos as $key => $video)
        
        <div class="form-group">
            {!! Form::label('video'.($key +1),'Video #'.($key+1))!!}
            {!! Form::text('videos[]',$video->link,['class'=>'form-control']) !!}
        </div>

    @endforeach
    

    
    @endif

    </div>
    @endforeach


    {!! Form::submit('ცვლილება!',['class'=>'btn btn-info','id'=>'submit_btn']) !!}


    {!! Form::close() !!}


<script>
    var formation = document.getElementsByClassName('formation')
    var lang_btn = document.getElementsByClassName('lang-btn')
    
    function changeLang(lang){
        for(var i=0; i<formation.length; i++ ){
            formation[i].classList.add('disappeared')
            lang_btn[i].classList.remove('green')
        }
        
        formation[lang].classList.remove('disappeared')
        lang_btn[lang].classList.add('green')
    }

</script>

@endsection


@section('script')
<?php
    for($i=0;$i<count(Config::get('app.locales'));$i++)
    echo "<script>CKEDITOR.replace( 'descr".$i."')</script> \n";
?>

<script src="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
@endsection