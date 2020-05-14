@extends('layouts/back')


@section('title')
სტუდენტები | სტუდენტის ცვლილება
@endsection



@section('style')

@endsection



@section('main')

<br>
@include('admin.include.info')
<br>

<style>

.disappeared{
    display: none;
}

.lang-btn:hover{
    background-color:lightgrey;
}

</style>




    {!! Form::open(['action'=>['Admin\StudentsController@update',$student->id],'method'=>'post']) !!}


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
        {!! Form::label('name','სახელი ('.trans('admin.'.$locale).')')!!}
        {!! Form::text($locale.'[name]',$student->{'name:'.$locale},['class'=>'form-control']) !!}
    </div>

    <br>

    <div class="form-group">
        {!! Form::label('description','აღწერა ('.trans('admin.'.$locale).')')!!}
        {!! Form::textarea($locale.'[description]',$student->{'description:'.$locale},['class'=>'form-control', 'id'=>'descr'.$key]) !!}
    </div>


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

@endsection