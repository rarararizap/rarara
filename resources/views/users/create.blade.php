@extends('layouts.app')

@section('content')
    <div>
                <img  class="odai_show" src="{{ url($odai->filename) }}" alt="odais">
            {!! Form::model($boke,['route' => 'bokes.store']) !!}

                <div class="form-group">
                    {!! Form::hidden('odai_id', $odai->id) !!}
                    {!! Form::label('content', 'ボケる') !!}
                    {!! Form::text('content',null, ['class' => 'form-control','autocomplete' => 'off']) !!}
                </div>

                {!! Form::submit('ボケる', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
     </div>
@endsection