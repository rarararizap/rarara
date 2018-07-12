@extends('layouts.app')

@section('content')
    <div>
                <img src="{{ url($odai->filename) }}" alt="odais">
            {!! Form::model($boke,['route' => 'bokes.store']) !!}

                <div class="form-group">
                    {!! Form::hidden('odai_id', $odai->id) !!}
                    {!! Form::label('content', 'ボケる') !!}
                    {!! Form::text('content',null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ボケる', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
     </div>
@endsection