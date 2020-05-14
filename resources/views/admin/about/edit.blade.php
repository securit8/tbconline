@extends('layouts/back')

@section('title')
ჩვენს შესახებ | ტექსტის შეცვლა
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
        
        
        
        
        {!! Form::open(['action'=>['Admin\AboutController@updateText',$text->id],'method'=>'POST']) !!}
        
        
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
                {!! Form::text($locale.'[name]',$text->{'name:'.$locale.''},['class'=>'form-control']) !!}
            </div>
        
            <div class="form-group">
                {!! Form::label('description','აღწერა  ('.trans('admin.'.$locale).')' ) !!}
                {!! Form::textarea($locale.'[description]',$text->{'description:'.$locale.''},['class'=>'form-control','id'=>'descr'.$key]) !!}
            </div>
        
            <br>
        
        
            </div>
            @endforeach
        
        
            {!! Form::submit('შეცვლა!',['class'=>'btn btn-info','id'=>'submit_btn']) !!}
        
        
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
