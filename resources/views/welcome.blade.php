@extends('layouts.app')

@section('content')
<div class="box">
    <div class="contents">
        <div class="contents_inner">
            <h1>Welcome to the ServiceName</h1>
            
            <a href="login">
              <button type="button" class="btn-circle btn-xl">ログイン</button>
            </a>
            
            
            <a href="signup">
              <button type="button" class="btn-circle btn-xl">登録</button>
            </a>
            
        </div>
    </div>
</div>

@endsection


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
  padding: 225px 10px ;
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
    font-size: 21px;
    line-height: 120px;
    border-radius: 50%;
    text-align: center;
    vertical-align: middle;
    overflow: hidden;
    font-weight: bold;
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
    border: solid 3px #ff5959;
    /*transition: 0.4s;*/
}

.btn-circle:hover{
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
}



</style>