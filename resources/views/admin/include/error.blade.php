@if(\Session::has('message') || $errors->any())
    @if(\Session::has('message'))
        @php($message = \Session::get('message'))
    @endif

    @if(!empty($message['error']) || $errors->any())
        <br/>
        <div class="col-12 alert alert-block alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert"></button>
            <h4 class="alert-heading">Error!</h4>
            @if(!empty($message['error']))
                @foreach($message['error'] as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
        </div>
    @endif
@endif