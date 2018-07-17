@extends('layouts.app')

@section('content')
<div>
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('ranking') ? 'active' : '' }}"><a href="{{ route('ranking.overall')}}">総合ランキング </a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai1') ? 'active' : '' }}"><a href="{{ route('ranking.show1')}}">odai1ランキング</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai2') ? 'active' : '' }}"><a href="{{ route('ranking.show2')}}">odai2ランキング</a></li>
                <li role="presentation" class="{{ Request::is('rankikg/odai3') ? 'active' : '' }}"><a href="{{ route('ranking.show3')}}">odai3ランキング</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai4') ? 'active' : '' }}"><a href="{{ route('ranking.show4')}}">odai4ランキング</a></li>
                <li role="presentation" class="{{ Request::is('ranking/0dai5') ? 'active' : '' }}"><a href="{{ route('ranking.show5')}}">odai5ランキング</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai6') ? 'active' : '' }}"><a href="{{ route('ranking.show6')}}">odai6ランキング</a></li>
            </ul>
</div>
    @include('bokes.ranking', ['bokes' => $bokes])

@endsection