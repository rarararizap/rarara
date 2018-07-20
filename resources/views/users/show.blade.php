@extends('layouts.app')

@section('content')
    <div class="row">
        
        <div class="col-xs-12">
            <ul class="nav nav-tabs nav-justified">

                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">{{$user->nickname}}のボケ <span class="badge">{{ $count_bokes }}</span></a></li>
                <li role="presentation" class="{{ Request::is('bokes/*/favorites') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user->id]) }}">おきにいり <span class="badge">{{ $count_favorite_bokes }}</span></a></li>

                
            </ul>
            @if (count($bokes) > 0)
                @include('bokes.bokes2', ['bokes' => $bokes])
            @endif
        </div>
    </div>
@endsection



<style>

.col-xs-10 li {
    font-size:40px;
    font-weight: bold;
}

.row{
    font-size:20px;
    font-weight:bold;
}


</style>
