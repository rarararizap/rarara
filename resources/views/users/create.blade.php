@extends('layouts.app')

@section('content')
    <div class="outer">
        <div class="inner">
                    <h1 class="wf-nicomoji">おだい.{{$odai->id}}</h1>
                    <img class="odai_boke" src="{{ url($odai->filename) }}" alt="odais">
                {!! Form::model($boke,['route' => 'bokes.store']) !!}
    
                    <div class="form-group">
                        {!! Form::hidden('odai_id', $odai->id) !!}
                        {!! Form::label('content', 'ボケる') !!}
                        {!! Form::text('content',null, ['class' => 'form-control','autocomplete' => 'off']) !!}
                    </div>
        
                    {!! Form::submit('送信', ['class' => 'btn-radius']) !!}
                    
                {!! Form::close() !!}
                
                @include('commons.error_messages')
                
                
         </div>
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

.btn-radius{
    margin: 0px 150px;

}

.odai_boke{
    height:600px;
}

.form-group{
    font-size: 30px;
    padding: 0px 150px;
    color: white;
}



</style>

