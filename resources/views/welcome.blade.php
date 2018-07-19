
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

          <div class="box">
    <div class="contents">
        <div class="contents_inner">
            
            <h1 class="wf-nicomoji">ようこそ KillingJokeへ</h1>
            
            <h4>このサービスは、匿名の大喜利サービスです。</p>
            <h4>見るだけでもよし、ボケてもよし</h4>
            <h4>みなさんを笑顔にします</h4>
            <h4>どうぞごゆっくり</h4>
            
            <a href="login">
              <button type="button" class="btn-circle btn-xl wf-nicomoji">ログイン</button>
            </a>
            
            
            <a href="signup">
              <button type="button" class="btn-circle btn-xl wf-nicomoji">とうろく</button>
            </a>
            
        </div>
    </div>
</div>
        </div>
    </body>
</html>




<style type="text/css">
body {
  background:#00CC9F;
  position: relative;
  overflow: hidden;
  padding: 0;
  z-index: 2;
}
body:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 120%;
  height: 70%;
  margin: 3% -10% 0;
  background: #F55555;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -webkit-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  z-index: -1;
}

.contents_inner {
  width: 100%;
  max-width: 640px;
  height: 100%;
  margin: auto;
  padding: 100px 10px ;
  color: #fff;
  text-align: center;
}

.btn-circle{
    display: inline-block;
    text-decoration: none;
    background: #ff5959;
    color: white;
    width: 120px;
    height: 120px;
    font-size: 30px;
    line-height: 120px;
    border-radius: 50%;
    text-align: center;
    vertical-align: middle;
    overflow: hidden;
    font-weight: bold;
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
    border: solid 3px #ff5959;
    margin: 20px;
}

.btn-circle:hover{
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
}



</style>