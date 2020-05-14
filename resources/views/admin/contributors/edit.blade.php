@extends('layouts/back')


@section('title')
კონტრიბუტორები | კონტრიბუტორის ცვლილება
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
    
    
        {!! Form::open(['action'=>['Admin\ContributorsController@update',$contributor->id],'method'=>'post','files'=>true]) !!}
    
    
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
            {!! Form::label('name','კონტრიბუტორის დასახელება ('.trans('admin.'.$locale).')')!!}
            {!! Form::text($locale.'[name]',$contributor->{'name:'.$locale},['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('description','აღწერა  ('.trans('admin.'.$locale).')' ) !!}
            {!! Form::textarea($locale.'[description]',$contributor->{'description:'.$locale},['class'=>'form-control','id'=>'descr'.$key]) !!}
        </div>
    
        <br>
    
        @if($key==0)
        
        <div class="form-group ">
            <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> <?php if(count($contributor->images)){ ?> <img src="{{ $contributor->images->first()->location }}"><?php } ?> </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> Select image </span>
                        <span class="fileinput-exists"> Change </span>
                        {!! Form::file('image') !!}
                </div>
            </div>
            <div class="clearfix margin-top-10"></div>
        </div>
        
        <br>
    
        <div class="form-group">

            <select name="type" class='form-control' style='width:30%'>
                <option value="0" <?php if(!$contributor->type) echo "selected"; ?> >ფიზიკური პირი</option>
                <option value="1" <?php if($contributor->type) echo "selected"; ?> >კომპანია</option>
            </select>
        </div>
        
        <br>
    
        <div class="form-group">
            {!! Form::label('link','ვიდეო ბმული') !!}
            {!! Form::text('link',$contributor->link,['class'=>'form-control']) !!}
        </div>
        
        @endif
    
        </div>
        @endforeach
    
    
        {!! Form::submit('ცვლილების შეტანა!',['class'=>'btn btn-info','id'=>'submit_btn']) !!}
    
    
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
    
    <?php
        for($i=0;$i<count(Config::get('app.locales'));$i++)
            echo "<script>CKEDITOR.replace( 'descr".$i."')</script> \n";
    ?>
        

@endsection


@section('script')
<script src="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
@endsection