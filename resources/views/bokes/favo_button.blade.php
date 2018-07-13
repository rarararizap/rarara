@if (Auth::user()-> is_favoriting($boke->id))
    {!! Form::open(['route' =>[ 'user.unfavorite',$boke->id],'method'=>'delete']) !!}
        {!! Form::submit('UnFavorite', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' =>[ 'user.favorite',$boke->id]]) !!}
        {!! Form::submit('favorite', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif