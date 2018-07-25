@extends('layouts.app')


@section('content')


<div class="wf-nicomoji text col-xs-12">みんなのボケがみれるよ</div>
    @include('bokes.bokes',['bokes'=>$bokes])
    
    
    <style>
.text{
    color: #858585;
    font-size: 50px;
}

@media screen and (max-width: 768px){
    .text{
        font-size: 30px;
    }
    
}


</style>
@endsection


