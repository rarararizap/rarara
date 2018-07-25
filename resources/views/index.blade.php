@extends('layouts.app')


@section('content')

<div class="wf-nicomoji text">みんなのボケがみれるよ</div>
    @include('bokes.bokes',['bokes'=>$bokes])
    
    
    <style>
.text{
    color: #858585;
    font-size: 50px;
}




</style>
@endsection


