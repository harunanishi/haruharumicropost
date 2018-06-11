
    @if (Auth::user()->is_favoring($micropost->id))
        {!! Form::open(['route' => ['content.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger  btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['content.favorite', $micropost->id]]) !!}
            {!! Form::submit('favorite', ['class' => "btn btn-primary  btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
