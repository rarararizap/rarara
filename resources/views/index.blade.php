@extends('layouts.app')


@section('content')
    @include('bokes.bokes',['bokes'=>$bokes])
@endsection
