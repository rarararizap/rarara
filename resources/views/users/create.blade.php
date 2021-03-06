@extends('layouts.app')

@section('content')
     
        <div class="container col-xs-12 col-md-8 col-md-offset-2">
            @include('commons.error_messages')
                    <h1 class="wf-nicomoji">おだい.{{$odai->id}}</h1>
                    <img class="odai_boke" src="{{ url($odai->filename) }}" alt="odais">
                {!! Form::model($boke,['route' => 'bokes.store']) !!}
    
                    <div class="form-group col-xs-12 col-md-8 col-md-offset-2">
                        {!! Form::hidden('odai_id', $odai->id) !!}
                        {!! Form::label('content', 'ボケる') !!}
                        {!! Form::text('content',null, ['class' => 'form-control','autocomplete' => 'off']) !!}
                        {!! Form::submit('おくる', ['class' => 'btn-radius']) !!}
                    </div>
        
                    
                    
                {!! Form::close() !!}
                
                
                
        </div>
   
@endsection

<style type="text/css">

h3{
    width:60%;
}
.inner{
    width:60%;
    margin: 0 auto;
    
}

.form-group{
    margin-top:15px;
    font-size: 30px;
    padding: 0px 150px;
    color: white;
}

.btn-radius{
    margin-top:15px;
}

.odai_boke{
    width:100%;
    height:auto;
}

</style>

