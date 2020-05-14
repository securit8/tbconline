@extends('layouts/back')

@section('title')
ვიდეო-გალერეა
@endsection

@section('style')

@endsection


@section('main')

<br>
<div class="row">
        <br>
        @include('admin.include.info')
        <br>

        <a href="{{ route('admin.videos.create') }}" class="btn green" style="margin-left:15px"><i class="fa fa-plus"></i> დამატება</a>
        <div class="clearfix margin-top-20">

        @foreach($videos as $video)
        <div class="col-xs-6">
            <div class="mt-element-ribbon bg-grey-steel">
                <div class="ribbon ribbon-shadow ribbon-color-success uppercase">{{ $video->name }}</div>
                <p class="ribbon-content">{{ $video->link }}</p>
                <div class="ribbon-content ">
                        {!! Form::open(['action'=>['Admin\VideoController@delete',$video->id],'method'=>'POST', 'class'=>'form']) !!}
                        {!! Form::hidden('_method','DELETE') !!}
                        {!! Form::close() !!}
                        <a href="{{ asset('admin/videos').'/'.$video->id."/edit" }}" class="btn dark btn-outline col-md-offset-8">შეცვლა</a>
                        <a class="btn red btn-outline" onclick="deleteVideo(this)">წაშლა</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <center>{{ $videos->links() }}</center>


<script>


    function deleteVideo(video){
        video.getElementsByTagName('form')[0]

        var form = video.parentNode.getElementsByTagName('form')[0]

        if(confirm('ნამდვილად გსურთ ამ ჩანაწერის წაშლა?'))
            form.submit();
    }


</script>
@endsection


@section('script')

@endsection