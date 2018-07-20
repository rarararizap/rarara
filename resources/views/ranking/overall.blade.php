@extends('layouts.app')

@section('content')
    　<span class="wf-nicomoji rankingtop3">とっぷすりー</span>
        @include('bokes.ranking', ['bokes' => $bokes])
@endsection






<style>
    .rankingtop3{
        color: yellow;
        font-size: 100px;
    }
</style>