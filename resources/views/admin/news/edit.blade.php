@extends('layouts/back')

@section('title')სიახლეები | სიახლის ცვლილება @endsection


@section('style')
<link href="{{ asset('admin/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('main')

<h1 class="page-title">სიახლის ცვლილება</h1>

    @include('admin.include.success')
    @include('admin.include.error')

    <a href="{{route('admin.news.index')}}" data-repeater-create="" class="btn btn-success mt-repeater-add">
        <i class="fa fa-arrow-left"></i> უკან დაბრუნება
    </a>

    <div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <ul class="nav nav-pills">
                    @foreach (Config::get('app.locales') as $key => $locale)
                        <li {!! $key == 0 ? 'class = "active"' : "" !!}><a href="#{!! $locale !!}" aria-expanded="true" data-toggle="tab">{!! trans('admin.'.$locale) !!}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('admin.news.update', [$news->id])}}" method="post" role="form" class="form-horizontal" enctype="multipart/form-data"> {{csrf_field()}}
                    <div class="form-body">

                        <div class="tab-content" style="overflow:visible!important">
                            @foreach (Config::get('app.locales') as $key => $locale)
                                <div class="tab-pane fade {!! $key == 0 ? 'active in' : '' !!}" id="{!! $locale !!}">

                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">სათაური (@lang('admin.'.$locale))</label>
                                        <div class="col-md-10">
                                            <input 
                                                id="form_control_1 title" 
                                                value="{{ !empty(old($locale.'.title')) ? old($locale.'.title') : $news->translate($locale)->title }}" 
                                                name="{{$locale}}[title]" 
                                                type="text" 
                                                class="form-control" 
                                            >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>

                                    @if($key == 0)

                                    <div class="form-group form-md-line-input">
                                    <label class="col-md-2 control-label" for="form_control_1">თარიღი</label>
                                        <div class="col-md-3">
                                            <input 
                                            name="date" 
                                            value="{{ !empty(old('date')) ? old('date') : date('Y-m-d',strtotime($news->date)) }}" 
                                            class="form-control form-control-inline input-medium date-picker" 
                                            size="16" 
                                            type="text">
                                            <span class="help-block"> Select date </span>
                                        </div>
                                    </div>

                                    @endif

                                    <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">აღწერა (@lang('admin.'.$locale))</label>
                                        <div class="col-md-10">
                                            <textarea name="{{$locale}}[description]" id="descr{{$key}}">{{ !empty(old($locale.'.description')) ? old($locale.'.description') : $news->translate($locale)->description }}</textarea>
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                    
                                    @if($key == 0)

                                        <div class="form-group form-md-line-input">
                                        <label class="col-md-2 control-label" for="form_control_1">მთვარი ფოტო</label>
                                            <div class="col-md-3">
                                                <input name="mainImage" class="form-control" type="file" value="">
                                            </div>
                                        </div>
                                        
                                        <br>

                                        <div class="form-group" style="width:90%; margin:0 auto">
                                                <div class="input-group select2-bootstrap-prepend">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button" data-select2-open="multi-prepend"> სიახლის ვიდეოები </button>
                                                    </span>
                                                    <select name="videoGalleries[]" id="multi-prepend" class="form-control select2 select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                                        <option></option>
                                                            @foreach($videos as $video)
                                                            <option value="{{ $video->id }}" <?php if(array_key_exists($video->id,$selectedVideoData)) echo "selected"; ?> >{{ $video->name }}</option>
                                                            @endforeach 
                                                    </select>
                                                </div>
                                            </div>
    
                                            <br><br>
    
                                            <div class="form-group"  style="width:90%; margin:0 auto">
                                                <label for="single" class="control-label" style="margin-bottom:10px;">დაამატეთ სიახლეს სურათების გალერეა</label>
                                                <select name="imageGallery" id="single" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option value="NO">No Gallery</option>
    
                                                    @foreach($images as $img)
                                                        <option value="{{ $img->id }}" <?php if(count($news->imageGallery)) if($news->imageGallery()->first()->id == $img->id) echo 'selected'; ?> >{{ $img->name }}</option>
                                                    @endforeach
    
                                                </select>
                                            </div>

                                    @endif

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn blue">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
for($i=0;$i<count(Config::get('app.locales'));$i++)
echo "<script>CKEDITOR.replace( 'descr".$i."')</script> \n";
?>

@endsection

@section('script')
<script src="{{ asset('admin/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/pages/scripts/components-select2.min.js') }}" type="text/javascript"></script>
@endsection