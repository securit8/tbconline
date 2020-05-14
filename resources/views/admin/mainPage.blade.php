@extends('layouts/back')


@section('style')

<link href="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />

@endsection


@section('title')
Admin Panel | Main Page 
@endsection


@section('main')

<style>
/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 10000000000; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.closing {
    margin-top:50px;
    margin-right:50px;
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.closing:hover,
.closing:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>




<div class="row">
        <div class="col-md-12">
            
            <br>
            @include('admin.include.info')

            <!-- BEGIN PORTLET-->
            <div class="portlet light form-fit">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['action'=>'Admin\MainpageController@image','method'=>'post','files'=>true,'class'=>'form-horizontal form-bordered']) !!} 
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                            <span class="fileinput-filename"> </span>
                                        </div>
                                        <span class="input-group-addon btn default btn-file">
                                            <span class="fileinput-new"> Select file </span>
                                            <span class="fileinput-exists"> Change </span>
                                            {!! Form::file('img') !!}</span>
                                        <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-2">
                                @if(!$image)
                                    {!! Form::submit('ბანერის ატვირთვა',['class'=>'btn green']) !!}
                                @endif

                                @if($image)
                                    {!! Form::submit('ბანერის შეცვლა',['class'=>'btn green']) !!}
                                @endif
                            </div>
                        </div>
                        {!! Form::close() !!}

                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->


            @if($image)
                <!-- Trigger the Modal -->
                <img id="myImg" class="thumbnail" src="{{ $image->location }}" alt="Banner" style="width:100%;max-width:400px; margin:0 auto;">

                <!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="closing" style="font-size:500%;">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
                </div>

            @endif



        </div>
    </div>

<script>
    // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closing")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
   
@endsection


@section('script')

<script src="{{ asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>

@endsection