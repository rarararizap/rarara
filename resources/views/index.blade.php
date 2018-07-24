@extends('layouts.app')


@section('content')

<span class="wf-nicomoji text col-xs-12">みんなのボケがみれるよ</span>
    @include('bokes.bokes',['bokes'=>$bokes])
@endsection


<style>
.text{
    color: #858585;
    font-size: 50px;
}

</style>