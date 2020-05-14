@extends('layouts/back')

@section('title')
სურათების გალერეა | გალერიის ცვლილება
@endsection


@section('style')

<link href="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection



@section('main')

<br>
@include('admin.include.info')



<style>

.disappeared{
    display: none;
}

.lang-btn:hover{
    background-color:lightgrey;
}

</style>



<br>

    {!! Form::open(['action'=>['Admin\GalleryController@delete',$gallery->id],'method'=>'POST', 'id'=>'deleteGallery']) !!}
    {!! Form::hidden('_method','DELETE') !!}
    {!! Form::close() !!}


    {!! Form::open(['action'=>['Admin\GalleryController@update',$gallery->id],'method'=>'post','files'=>true]) !!}


    <div class="form-group">
        @foreach(Config::get('app.locales') as $key=>$locale)
        <a class="btn lang-btn  @if($key==0) green @endif" onclick="changeLang({{$key}})">@lang('admin.'.$locale)</a>
        @endforeach

        <a class="btn red pull-right" onclick="deleteGallery()">გალერიის წაშლა</a>
    </div>

    <br>
    @foreach(Config::get('app.locales') as $key=>$locale)
    <div class="formation @if($key!=0) disappeared @endif ">
    
    <br>

    <div class="form-group">
        {!! Form::label('name','გალერიის დასახელება ('.trans('admin.'.$locale).')')!!}
        {!! Form::text($locale.'[name]',$gallery->{'name:'.$locale},['class'=>'form-control']) !!}
    </div>

    <br>

    @if($key==0)
    
    <div class="form-group ">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><img src="{{ $gallery->image }}"></div>
            <div>
                <span class="btn red btn-outline btn-file">
                    <span class="fileinput-new">პოსტერის ცვლილება</span>
                    <span class="fileinput-exists"> შეცვლა </span>
                    {!! Form::file('poster') !!}
            </div>
        </div>
        <div class="clearfix margin-top-10"></div>
    </div>



    <hr><br>
    <div class="form-group">
        {!! Form::label('image','გალერიის სურათები') !!}
    </div>
    <a class="btn blue" onclick="addInput()">+</a>
    <div class="clearfix margin-top-10"></div>
    <div id="images_input">
        <div class="form-group">
            <div>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="input-group input-large">
                        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                            <i class="fa fa-file fileinput-exists"></i>&nbsp;
                            <span class="fileinput-filename"> </span>
                        </div>
                        <span class="input-group-addon btn default btn-file">
                            <span class="fileinput-new"> Select file </span>
                            <span class="fileinput-exists"> Change </span>
                            {!! Form::file('images[]') !!}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
            
    </div>
    
    @endif

    </div>
    @endforeach


    {!! Form::submit('გალერიის ცვლილება!',['class'=>'btn btn-info','id'=>'submit_btn']) !!}


    {!! Form::close() !!}




    <br><hr style="border-bottom:1px solid black">


@if(!count($gallery->images)) <h4 class="alert alert-info">ამ გალერიაში სურათები არ არის. დაამატეთ..</h4>@endif

<div class="mt-element-card mt-element-overlay">
    <div class="row">
        @foreach($gallery->images as $key => $image)

        @if($key%4 == 0 && $key/4)

    </div>
    <div class="row">

        @endif

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="mt-card-item">
                <div class="mt-card-avatar mt-overlay-1" style="max-height:150px;">
                    <img src="{{ $image->location }}">
                </div>
                <div class="mt-card-content">
                    
                    <div class="mt-card-desc font-grey-mint">
                            {!! Form::open(['action'=>['Admin\GalleryController@deleteImage',$image->id], 'method'=>'POST', 'class'=>'form']) !!}
                            {!! Form::hidden('_method','DELETE') !!}
                            {!! Form::close() !!}
                            <button class="btn btn-default" onclick="deleteImage(this)">სურათის წაშლა</button>    
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>



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




function deleteImage(img){
    var form = img.parentNode.getElementsByTagName('form')[0]
    if(confirm('ნამდვილად გსურთ ამ ფოტოს წაშლა?'))
        form.submit()
}
    

    var img_input = ' <div class="form-group"><div><div class="fileinput fileinput-new" data-provides="fileinput"><div class="input-group input-large"><div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput"><i class="fa fa-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"> </span></div><span class="input-group-addon btn default btn-file"><span class="fileinput-new"> Select file </span><span class="fileinput-exists"> Change </span>{!! Form::file("images[]") !!}</span><a class="input-group-addon btn red" onclick="deleteInput(this)"> - </a></div></div></div></div><div class="clearfix"></div>'
            

        function addInput(){
            var newDiv = document.createElement('div')
            newDiv.innerHTML = img_input;
            document.getElementById('images_input').appendChild(newDiv)
        }

        function deleteInput(inpt){
            var neededElem = inpt.parentNode.parentNode.parentNode.parentNode.parentNode
            neededElem.parentNode.removeChild(neededElem)
        }
    


        function deleteGallery(){
            if(confirm('ნამდვილად გსურთ ამ გალერეის წაშლა?'))
                document.getElementById('deleteGallery').submit();
        }

    </script>
@endsection


@section('script')
<script src="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
@endsection