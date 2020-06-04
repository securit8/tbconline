@extends('layouts/back')

@section('title') სიახლეები @endsection



@section('style')
<link href="{{ asset('admin/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection





@section('main')

    <br>

    @include('admin.include.info')

    <br>
    <div class="row">
            {!! Form::open(['action'=>'Admin\NewsController@setNewsStatus','method'=>'POST']) !!}

            <div class="form-group">

                    <label class="control-label col-md-4">სიახლე N1</label>
                    <label class="control-label col-md-4">სიახლე N2</label>
                    <label class="control-label col-md-4">სიახლე N3</label>
                    
                    <div class="col-md-4">
                        <select name="first"  class="form-control select2 " tabindex="-1" aria-hidden="true">
                            
                                <option value="NO">No News</option>

                                @foreach($news as $newsOut)
                                    <option value="{{ $newsOut->id }}" @if(!is_null($first) && $first->news_id) @if($first->news_id == $newsOut->id) selected @endif @endif >{{ $newsOut->title }}</option>
                                @endforeach
                                                                
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select  name="second" class="form-control select2 " tabindex="-1" aria-hidden="true">
                            
                                <option value="NO">No News</option>

                                @foreach($news as $newsOut)
                                    <option value="{{ $newsOut->id }}"   @if(!is_null($second) &&  $second->news_id) @if($second->news_id == $newsOut->id) selected @endif @endif >{{ $newsOut->title }}</option>
                                @endforeach
                                                                
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select  name="third" class="form-control select2 " tabindex="-1" aria-hidden="true">
                            
                                <option value="NO">No News</option>

                                @foreach($news as $newsOut)
                                    <option value="{{ $newsOut->id }}"  @if( !is_null($third) && $third->news_id) @if($third->news_id == $newsOut->id) selected @endif @endif >{{ $newsOut->title }}</option>
                                @endforeach
                                                                
                        </select>
                    </div>


                </div>



            {!! Form::submit('ცვლილების დამახსოვრება',['class'=>'btn green', 'style'=>'margin-left:15px;margin-top:15px;']) !!}

            {!! Form::close() !!}




    </div>



    <br>
    <br>
    <hr>
    <br>
    <h1 class="page-title">სიახლეები</h1>


    <a href="{{route('admin.news.create')}}" data-repeater-create="" class="btn btn-success mt-repeater-add">
        <i class="fa fa-plus"></i> სიახლის დამატება
    </a>

    <div class="clearfix margin-top-20"></div>

    <div class="row">
        @foreach($news as $key => $value)
            <div class="col-md-6">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-green-sharp">
                            <i class="icon-speech font-green-sharp"></i>
                            <span class="caption-helper">{{$value->title}}</span>
                        </div>
                        <div class="actions">
                            <a href="{{route('admin.news.edit', [$value->id])}}" class="btn btn-circle btn-default btn-sm">
                            <i class="fa fa-pencil"></i> Edit </a>
                            <a href="javascript:void(0)" data-id="{{ $value->id }}" class="btn btn-circle btn-default btn-sm remove-item">
                            <i class="fa fa-trash"></i> Delete </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="slimScrollDiv" ><div class="scroller"  data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd" data-initialized="1">
                        <p>{!! $value->description !!}</p>
                        </div><div class="slimScrollBar" style="background: rgb(161, 178, 189); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 90.9091px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; border-radius: 7px; background: yellow; opacity: 0.2; z-index: 90; right: 1px; display: none;"></div></div>
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
            </div>
        @endforeach

        <form action="{{route('admin.news.delete', [''])}}" method="delete" id="delete-news-form">
        </form>

    </div>

@endsection

@section('script')
  <script>
  
    $(function () {
      $('.remove-item').click(function () {
        var form = $('#delete-news-form');
        var newsId = $(this).data().id;

        Modal.show({
          yesClass: 'btn-danger',
          body: 'ნამდვილად გსურთ სიახლის წაშლა?',
          yes: 'წაშლა',
          callback: function (btn) {
            Modal.hide();

            if (btn === 'yes') {
              var action = form.attr('action');
              form.attr({action: action + '/' + newsId}).submit();
            }
          }
        });
      });
    });
  </script>

<script src="{{ asset('admin/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/pages/scripts/components-select2.min.js') }}" type="text/javascript"></script>
@endsection