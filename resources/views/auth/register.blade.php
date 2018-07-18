@extends('layouts.app')

@section('content')
    <div class=circle>
        <div class="text-center">
            <h1>Sign up</h1>
        </div>
    
        <div class="row">
            <div class="col-2 col-offset-4">
    
                {!! Form::open(['route' => 'signup.post']) !!}
    
                    <div class="form-group">
                        {!! Form::label('nickname', 'Nickname') !!}
                        {!! Form::text('nickname',null, ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirmation') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
    
                    {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

<style type="text/css">

.circle {
  content: '';
  top: 0;
  left: 0;
  width: 600px;
  height: 600px;
  background: rgba(255,255,255,0.8);
  border-radius: 50%;
  /*margin: 30px 20px 30px 40px;*/
  text-align: center;
  padding-top: 100px;
  
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  margin: auto;
}

/*.row{*/
/*    position: relative;*/
/*    left: 190px;*/
/*    width: 200px;*/
/*    height: 10px;*/
/*    -webkit-box-shadow: 0px 1px rgba(255, 255, 255, 0.5);*/
/*    -moz-box-shadow: 0px 1px rgba(255, 255, 255, 0.5);*/
/*    box-shadow: 0px 1px rgba(255, 255, 255, 0.5);*/
/*    -webkit-border-radius: 10px;*/
/*    -moz-border-radius: 10px;*/
/*    border-radius: 10px;*/
   
/*}*/



</style>