 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KillingJoke</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
        
    </head>
    <body>
       

        <div class="container">
            @include('commons.error_messages')

           
            <div class=circle>
                <div class="text-center">
                    <h1 class="wf-nicomoji">ログイン</h1>
                </div>
            
                <div class="row">
            
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group">
                            {!! Form::label('nickname', 'ニックネーム') !!}
                            {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                        </div>
            
                        <div class="form-group">
                            {!! Form::label('password', 'パスワード') !!}
                            {!! Form::password('password', ['class' => 'form-control','password']) !!}
                        </div>
                        
                        <br>
            
                        {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
            
                        
                    <p>　{!! link_to_route('signup.get', '登録はこちら','',['class'=>'text']) !!}</p>
                
                </div>
            </div>


        </div>
    </body>
</html>


<style type="text/css">

.circle {
  content: '';
  top: 0;
  left: 0;
  width: 90vh;
  height: 90vh;
  background: rgba(255,255,255,0.8);
  border-radius: 50%;
  /*margin: 30px 20px 30px 40px;*/
  text-align: center;
  padding-top: 150px;
  
  position: absolute;
  top: 2.5%;
  right: 0px;
  bottom: 0px;
  left: 0px;
  margin: auto;
}

.row{
    font-family:'メイリオ';
    font-weight: bold;
    border-radius:40px;
    width:60%;
    height:30px;
    margin: 0 auto;
    max-width: 500px;
}


body{
    color:#858585;
}

.form-control{
    border-radius:40px;
   

}

.btn-block{
    font-family:'meiryo';
    font-weight: bold;
    background-color:#f55555;
    border:none;
    border-radius:40px;
    width: 30%;
    margin: auto;
    height: 40px;
}

.btn-block:hover{
    background-color:#f55555;
}

.text{
    color:#858585;
}

@media screen and (max-width : 991px){
   .circle {
      width: 55vh;
      height: 55vh;
      padding-top:20px;
    } 
    
@media screen and (max-width : 320px){
   .circle {
      width: 50vh;
      height: 50vh;
      padding-top:10px;
      font-size:10px;
    } 
    
    h1{
        font-size:20px;
    }

}

</style>