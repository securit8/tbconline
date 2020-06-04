@extends('layouts/back')

@section('title')
სურათების გალერეა
@endsection


@section('style')

@endsection



@section('main')
<br>

@include('admin.include.info')

<br>

<div class="row">

        <a href="{{ route('admin.gallery.create') }}" class="btn green" style="margin-left:15px"><i class="fa fa-plus"></i> დამატება</a>
        <div class="clearfix margin-top-20">


    @foreach($galleries as $gallery)
        <div class="col-md-4">
        <div class="portlet-body">
                <div class="mt-element-overlay">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-overlay-2 mt-overlay-2-grey" style="height:250px; margin-top:15px;">
                                <img src="{{ $gallery->image }}">
                                <div class="mt-overlay">
                                    <h2>{{ $gallery->name }}</h2>
                                    <a class="mt-info btn white btn-outline" href="{{asset('admin/gallery').'/'.$gallery->id."/edit"}}">დათვალიერება</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


        </div>
        <br>
        <center>{{ $galleries->links() }}</center>



        
@endsection


@section('script')

@endsection