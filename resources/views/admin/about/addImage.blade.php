@extends('layouts/back')


@section('title')
ჩვენს შესახებ | სურათის ჩანაწერზე დამატება
@endsection


@section('style')
<link href="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('main')


<div class="row">
    <br>
        <div class="col-md-12">
            <!-- BEGIN PORTLET-->
            
                    <!-- BEGIN FORM-->
                    {!! Form::open(['action'=>['Admin\AboutController@addImage',$id],'method'=>'POST', 'files'=>true, 'class'=>'form-horizontal form-bordered' ]) !!}
                        <div class="form-body">
                                                       
                            <div class="form-group ">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                        <div>
                                            <span class="btn red btn-outline btn-file">
                                                <span class="fileinput-new"> Select image </span>
                                                <span class="fileinput-exists"> Change </span>
                                                {!! Form::file('image') !!}
                                        </div>
                                    </div>
                                    <div class="clearfix margin-top-10"></div>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    {!! Form::submit('სურათის ჩანაწერზე დამატება',['class'=>'btn green']) !!}
                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    <!-- END FORM-->
              
            <!-- END PORTLET-->
        </div>
    </div>
    
@endsection

@section('script')
<script src="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
@endsection