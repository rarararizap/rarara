@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-6 col-offset-3">

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
@endsection

<style type="text/css">

body{
    text-align: center;
}


body:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 600px;
  height: 600px;
  background: white;
  border-radius: 50%;
  margin: 10px 20px 30px 40px;;
  
}

</style>