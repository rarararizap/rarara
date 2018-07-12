@extends('layouts.app')



    @include('bokes.bokes',['bokes'=>$bokes])
=======
@section('content')
    @include('bokes.bokes',['bokes'=>$bokes])
@endsection

