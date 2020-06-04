@extends('layouts/back')

@section('title')
კონტრიბუტორები
@endsection


@section('style')
<link href="{{ asset('admin/assets/pages/css/blog.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('main')

<div class="blog-page blog-content-1">
        <div class="row">
            <br>
            @include('admin.include.info')
            <br>
            <br>
            <a href="{{ route('admin.contributors.create') }}" class="btn green" style="margin-left:15px"><i class="fa fa-plus"></i> დამატება</a>
            <div class="clearfix margin-top-20">

        @foreach($contributors as $contributor)
            <div class="col-lg-6">
                <div class="blog-post-lg bordered blog-container">
                    
                    @if($contributor->images->first())
                        <div class="blog-img-thumb" style="margin-top:5px">
                            <img src="{{ $contributor->images->first()->location }}">
                        </div>
                    @endif

                    <div class="blog-post-content">
                        <h2 class="blog-title blog-post-title">
                            {{ $contributor->name }}
                        </h2>

                        <p class="blog-post-desc">{!! str_limit($contributor->description, $limit = 500, $end = '...') !!}</p>
                        <div>
                            <p>ტიპი: <?php echo $contributor->type == 1 ? "კომპანია" : "ფიზიკური პირი" ?> </p>
                        </div>
            
                        <div>
                            <p>ბმული: <?php echo $contributor->link ?> </p>
                        </div>
                        <div class="blog-post-foot">
                            <div class="blog-post-tags">

                                {!! Form::open(['action'=>['Admin\ContributorsController@delete',$contributor->id],'method'=>'POST', 'class'=>'form']) !!}
                                {!! Form::hidden('_method','DELETE') !!}
                                {!! Form::close() !!}
                                <a href="{{asset('/admin/Contributors/'.$contributor->id.'/Edit')}}" class="btn dark btn-outline">კონტრიბუტორში ცვლილების შეტანა</a>
                                <button class="btn red btn-outline" onclick="Delete(this)">წაშლა</button>
                                
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach

        </div>
        <center>{{ $contributors->links() }}</center>

    </div>


<script>

function Delete(contributor){
    var form = contributor.parentNode.getElementsByClassName('form')[0];

    if(confirm('ნამდვილად გსურთ ამ კონტრიბუტორის წაშლა?'))
        form.submit();
}

</script>

@endsection