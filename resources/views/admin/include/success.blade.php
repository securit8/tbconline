@if(\Session::has('message'))

    @php($message = \Session::get('message'))
    @if(!empty($message['success']))
        <div class="alert alert-block alert-success fade in">
            <button type="button" class="close" data-dismiss="alert"></button>
            <h4 class="alert-heading">Success!</h4>
            @foreach($message['success'] as $success)
                <p>{{$success}}</p>
            @endforeach
        </div>
    @endif

@endif