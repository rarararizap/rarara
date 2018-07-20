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
    background-color: #F55555;
    border-color: #F55555;
    border-radius: 25px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    border: solid 3px #f55555;
    margin: 0px 150px;

}

.btn-radius:hover {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
    
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

