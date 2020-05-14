@extends('layouts/back')

@section('title')
სტუდენტები
@endsection

@section('style')

@endsection


@section('main')

<br>
<div class="row">
        <br>
        @include('admin.include.info')
        <br>

        <a href="{{ route('admin.students.create') }}" class="btn green" style="margin-left:15px"><i class="fa fa-plus"></i> დამატება</a>
        <div class="clearfix margin-top-20">

        @foreach($students as $student)
        <div class="col-xs-6">
            <div class="mt-element-ribbon bg-grey-steel">
                <div class="ribbon ribbon-shadow ribbon-color-success uppercase">{{ $student->name }}</div>
                <br><br>
                <div class="clearfix" style="padding:15px;">{!! $student->description !!}</div>
                <div class="ribbon-content ">
                        {!! Form::open(['action'=>['Admin\StudentsController@delete',$student->id],'method'=>'POST', 'class'=>'form']) !!}
                        {!! Form::hidden('_method','DELETE') !!}
                        {!! Form::close() !!}
                        <a href="{{ asset('admin/Students').'/'.$student->id."/edit" }}" class="btn dark btn-outline col-md-offset-8">შეცვლა</a>
                        <a class="btn red btn-outline" onclick="deleteVideo(this)">წაშლა</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <center>{{ $students->links() }}</center>


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