@extends('layouts.app')

@section('content')
    <ul class="media-list">
    @foreach ($odais as $odai)
        <li class='col-xm-6 col-xs-6' >
            <h3 class="wf-nicomoji">おだい.{{$odai->id}}<h3>
            <a href="odais/{{$odai->id}}"><img class="odais" src="{{ $odai->filename }}" alt="odais"></a>
                {!! link_to_route('bokes.create', 'ボケる',$odai->id , ['class' => 'btn-radius']) !!}

        </li>
    @endforeach
    </ul>

@endsection

<style type="text/css">

.col-xm-6{
    list-style: none;
    float:left;
    margin:0 0px 50px;
    color: white;
}



</style>