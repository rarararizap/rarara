@extends('layouts.app')

@section('content')
<div>
            <ul class="nav nav-tabs nav-justified">
               <li role="presentation" class="{{ Request::is('/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.overall')}}">総合ランキング </a></li>
                <li role="presentation" class="{{ Request::is('odais/1/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.show1')}}">odai1ランキング</a></li>
                <li role="presentation" class="{{ Request::is('odais/2/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.show2')}}">odai2ランキング</a></li>
                <li role="presentation" class="{{ Request::is('odais/3/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.show3')}}">odai3ランキング</a></li>
                <li role="presentation" class="{{ Request::is('odais/4/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.show4')}}">odai4ランキング</a></li>
                <li role="presentation" class="{{ Request::is('odais/5/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.show5')}}">odai5ランキング</a></li>
                <li role="presentation" class="{{ Request::is('odais/6/ranking') ? 'active' : '' }}"><a href="{{ route('ranking.show6')}}">odai6ランキング</a></li>
            </ul>

    @include('bokes.bokes', ['bokes' => $bokes])
</div>
@endsection