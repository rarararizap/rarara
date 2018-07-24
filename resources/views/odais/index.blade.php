@extends('layouts.app')

@section('content')
<div class="wf-nicomoji text col-xs-12">おだいをえらんでボケてね</div>
    <ul class="media-list">
    @foreach ($odais as $odai)
        <li class='col-md-6 col-xs-12' >
            <h1 class="wf-nicomoji">おだい.{{$odai->id}}</h1>
            <a href="odais/{{$odai->id}}"><img class="odais" src="{{ $odai->filename }}" alt="odais"></a>
            <div class="button">
                {!! link_to_route('bokes.create', 'ボケる',$odai->id , ['class' => 'btn-radius']) !!}
            </div>
        </li>
    @endforeach
    </ul>

<style type="text/css">

.col-xs-6{
    list-style: none;
    margin:0 0px 50px;
    color: white;
}
.text{
    color: #858585;
    font-size: 50px;
    text-align:center;
}

.button{
    text-align:center;
}

</style>

@endsection

