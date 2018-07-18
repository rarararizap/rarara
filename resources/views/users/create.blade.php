@extends('layouts.app')

@section('content')
    <div>
                <img src="{{ url($odai->filename) }}" alt="odais">
            {!! Form::model($boke,['route' => 'bokes.store']) !!}

                <div class=forms>
                <div class="form-group">
                    {!! Form::hidden('odai_id', $odai->id) !!}
                    {!! Form::label('content', 'ボケる') !!}
                    {!! Form::text('content',null, ['class' => 'form-control','autocomplete' => 'off']) !!}
                </div>
                </div>

                {!! Form::submit('ボケる', ['class' => 'btn btn-warning btn-block']) !!}
                
            {!! Form::close() !!}
     </div>
@endsection

<style type="text/css">

form{
    border-radius: 100px 25px
}

input#submit_button {
    width: 50px;
    height: 10px;
    border-radius: 100px 25px;


</style>


