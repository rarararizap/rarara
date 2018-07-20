@extends('layouts.app')

<div class="balloon1 wf-nicomoji">
    <p>ランキング</p>
</div>

@section('content')
<div>
            <ul class="nav nav-tabs nav-justified wf-nicomoji">
                <li role="presentation" class="{{ Request::is('ranking') ? 'active' : '' }}"><a href="{{ route('ranking.overall')}}">そうごう </a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai1') ? 'active' : '' }}"><a href="{{ route('ranking.show1')}}">おだい.１</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai2') ? 'active' : '' }}"><a href="{{ route('ranking.show2')}}">おだい.２</a></li>
                <li role="presentation" class="{{ Request::is('rankikg/odai3') ? 'active' : '' }}"><a href="{{ route('ranking.show3')}}">おだい.３</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai4') ? 'active' : '' }}"><a href="{{ route('ranking.show4')}}">おだい.４</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai5') ? 'active' : '' }}"><a href="{{ route('ranking.show5')}}">おだい.５</a></li>
                <li role="presentation" class="{{ Request::is('ranking/odai6') ? 'active' : '' }}"><a href="{{ route('ranking.show6')}}">おだい.６</a></li>
            </ul>

    @include('bokes.ranking', ['bokes' => $bokes])
</div>
@endsection