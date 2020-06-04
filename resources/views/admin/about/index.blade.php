@extends('layouts/back')

@section('title')
ჩვენს შესახებ
@endsection


@section('main')

<style>

.about-border{
    border:1px solid grey;
}

</style>

<br>
@include('admin.include.info')
<br>

<div class="row">
    <a href="{{ route('admin.about.create') }}" class="btn green" style="margin-left:15px"><i class="fa fa-plus"></i> დამატება</a>
    <div class="clearfix margin-top-20">
    @if($texts)

        @foreach($texts as $text)
        <div class="col-md-12" >
            <div class="portlet light portlet-fit about-border">
               
                    <div class="portlet-title" >
                        <div class="caption">
                            <span class="fa fa-sticky-note" style="font-size:200%">　{{ $text->name }}</span>
                        </div>
                    </div>

                <div class="portlet-body">

                    {!! $text->description !!}

                    
                    <hr style="border-bottom:1px solid grey">

                    <div class="blog-post-desc">
                        
                        
                        <br>

                        @if(count($text->images))
                    <div class="mt-element-card mt-element-overlay">
                        <div class="row">

                            @foreach($text->images as $image)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="mt-card-item">
                                    <div class="mt-card-avatar mt-overlay-1" style="max-height:150px;">
                                        <img src="{{ $image->location }}">
                                    </div>
                                    <div class="mt-card-content">
                                        
                                        <div class="mt-card-desc font-grey-mint">
                                                {!! Form::open(['action'=>['Admin\AboutController@deleteImage',$image->id], 'method'=>'POST', 'class'=>'form']) !!}
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
                    @endif

                    </div>

                    <hr>

                    <div class="blog-post-foot">
                        <div class="blog-post-tags">

                            {!! Form::open(['action'=>['Admin\AboutController@deleteText',$text->id],'method'=>'POST','class'=>'form']) !!}
                            {!! Form::hidden('_method','DELETE') !!}
                            {!! Form::close() !!}
    
                            <a href="{{asset('/admin/About/'.$text->id.'/edit')}}" class="btn btn-default" >ტექსტის შეცვლა</a>
                            <a href="{{ asset('/admin/About/'.$text->id.'/addimage') }}" class="btn btn-default">ჩანაწერზე სურათის დამატება</a>
                            <button class="btn btn-danger" onclick="deleteText(this)">წაშლა</button>
                        
                        </div>
                        <br>
                    </div>


                </div>
            </div>
        </div>
        @endforeach
        @endif

        <center>{{ $texts->links() }}</center>
    </div>



<script>
function deleteText(text){
    var form = text.parentNode.getElementsByClassName('form')[0]
    
    if(confirm('ნამდვილად გსურთ ამ ტექსტის წაშლა?'))
        form.submit()
}


function deleteImage(img){
    var form = img.parentNode.getElementsByTagName('form')[0]
    if(confirm('ნამდვილად გსურთ ამ ფოტოს წაშლა?'))
        form.submit()
}
</script>
@endsection

