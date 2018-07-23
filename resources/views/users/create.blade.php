@extends('layouts.app')

@section('content')
    <div>
                <img class="odai_boke" src="{{ url($odai->filename) }}" alt="odais">
            {!! Form::model($boke,['route' => 'bokes.store']) !!}

                <div class="form-group">
                    {!! Form::hidden('odai_id', $odai->id) !!}
                    {!! Form::label('content', 'ボケる') !!}
                    {!! Form::text('content',null, ['class' => 'form-control','autocomplete' => 'off']) !!}
                </div>
    
                {!! Form::submit('送信', ['class' => 'btn-radius']) !!}
                
            {!! Form::close() !!}
     </div>
@endsection

<style type="text/css">

.btn-radius{
    margin: 0px 150px;

}

.odai_boke{
    width:80%;
    height:600px;
    max-width: 1000px;
    padding-left:200px;
}

.form-group{
    font-size: 30px;
    padding: 0px 150px;
}



</style>

