@extends('layouts.app')

@section('content')
<div class="box">
    <div class="contents">
        <div class="contents_inner">
            <h1>Welcome to the ServiceName</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
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


</style>