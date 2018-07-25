@extends('layouts.app')

@section('content')
<div class="wf-nicomoji text">{{$user->nickname}}のおきにいりがみれるよ</div>
    <div class="row">
        
        <div class="col-xs-12">
            <ul class="nav nav-tabs nav-justified">

                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">{{$user->nickname}}のボケ<span class="badge">{{ $count_bokes }}</span></a></li>
                <li role="presentation" class="{{ Request::is('bokes/*/favorites') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user->id]) }}">おきにいり <span class="badge">{{ $count_favorite_bokes }}</span></a></li>
               
            </ul>
            @if (count($bokes) > 0)
                @include('bokes.bokes', ['bokes' => $bokes])
            @endif        
        </div>
    </div>
@endsection

<style>

.inner{
  width: 60%;
  margin: 0 auto;
  max-width: 600px;
}

.nickname {
    font-size:30px;
}

.media-text{
    font-size:50px;
}

.line{
    border-bottom:dashed 5px white;
    
}

.link-text{
    font-size: 30px;
}

.media-list{
    margin-top:30px;
}

.col-xs-12{
    font-size:30px;
}

.nav li{
    font-weight:bold;
}
.text{
    color: #858585;
    font-size: 50px;
}
</style>
