@extends('layouts.app')

@section('content')
<div class="box">
    <div class="contents">
        <div class="contents_inner">
            <h1>Welcome to the ServiceName</h1>
            
            <a href="login" class="btn">LOGIN</a>
            
            {!! link_to_route('login', 'Log in now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
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

.btn{
    display: inline-block;
    text-decoration: none;
    background: #f55555;
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
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
    border-bottom: solid 3px #d29963;
    text-shadow: -1px -1px rgba(255, 255, 255, 0.43), 1px 1px rgba(0, 0, 0, 0.49);
    transition: .4s;
}
.btn:active{
    -ms-transform: translateY(2px);
    -webkit-transform: translateY(2px);
    transform: translateY(2px);
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.35);
    border-bottom: none;
}


</style>