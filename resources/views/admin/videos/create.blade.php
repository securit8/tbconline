@extends('layouts/back')


@section('title')
ვიდეო-გალერეა | გალერეის დამატება
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




    {!! Form::open(['action'=>'Admin\VideoController@store','method'=>'post','id'=>'videoForm']) !!}


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
        {!! Form::text($locale.'[name]','',['class'=>'form-control']) !!}
    </div>

    <br>

    @if($key==0)

    <div class="form-group">
        {!! Form::label('link','ვიდეო ბმული') !!}
        {!! Form::text('link','',['class'=>'form-control','id'=>'theVideo']) !!}
    </div>

    <div id="msg" style="color:red;margin-bottom:10px"></div>
    
    @endif

    </div>
    @endforeach


    {!! Form::submit('დამატება!',['class'=>'btn btn-info','id'=>'submit_btn', 'id' => 'subBt']) !!}


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
<script>
    var valid = /^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/

    document.getElementById('subBt').addEventListener('click', function(e){
        e.preventDefault();

        if(document.getElementById('theVideo').value == "")
            document.getElementById('msg').innerHTML = "შეიყვანეთ YOUTUBE ბმული"
        else
            if(valid.test(document.getElementById('theVideo').value))
                document.getElementById('videoForm').submit();
        else
            document.getElementById('msg').innerHTML = "შეიყვანეთ მართებული YOUTUBE ბმული"
    });
    
</script>
@endsection