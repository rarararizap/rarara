@extends('layouts.app')

@section('content')
    <h1>総合ランキング</h1>
    @include('bokes.bokes', ['bokes' => $bokes])
@endsection