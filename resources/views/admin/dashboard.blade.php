@extends('layouts/back')


@section('title')
ადმინ პანელი
@endsection



@section('main')


<h1 class="page-title"> სამართავი პანელი
</h1>

<div class="portlet-body">
        <div class="tiles">



            <a href="{{ route('admin.news.index') }}">
                <div class="tile double-down bg-blue-steel">
                    <div class="tile-body">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name"> სიახლე </div>
                        <div class="number"> {{ $news_num }} </div>
                    </div>
                </div>
            </a>


            <a href="{{ route('admin.scholarship.index') }}">
                <div class="tile bg-red-sunglo">
                    <div class="tile-body">
                        <i class="glyphicon glyphicon-usd"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name"> სტიპენდიები </div>
                        <div class="number"> {{ $scholarship_num }} </div>
                    </div>
                </div>
            </a>
           
            <a href="{{ route('admin.gallery.index') }}">
                <div class="tile double selected bg-green-turquoise">
                    <div class="corner"> </div>
                    <div class="check"> </div>
                    <div class="tile-body">
                        <i class="glyphicon glyphicon-picture"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name"> სურათების გალერეა </div>
                        <div class="number"> {{ $gallery_num }} </div>
                    </div>
                </div>
            </a>


            <a href="{{ route('admin.contributors.index') }}">
                <div class="tile double bg-purple-studio">
                    <div class="tile-body">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name"> კონტრიბუტორი </div>
                        <div class="number"> {{ $contributor_num }} </div>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('admin.about.index') }}">
                <div class="tile bg-green-meadow">
                    <div class="tile-body">
                        <i class="glyphicon glyphicon-home"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name"> ჩვენს შესახებ </div>
                        <div class="number"> {{ $about_num }} </div>
                    </div>
                </div>
            </a>
            

            <a href="{{ route('admin.videos.index') }}">
                <div class="tile  bg-green">
                    <div class="tile-body">
                        <i class="glyphicon glyphicon-facetime-video"></i>
                    </div>
                    <div class="tile-object">
                        <div class="name"> ვიდეო </div>
                        <div class="number"> {{ $video_num }}</div>
                    </div>
                </div>
            </a>
            
            
        </div>
    </div>

@endsection