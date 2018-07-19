@extends('layouts.app')

@section('content')
    <ul>
    @foreach ($odais as $odai)
        <li class='col-xm-6 col-xs-6' >
            <h3>お題{{$odai->id}}<h3>
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
}

.btn-radius{
    background-color: #F55555;
    border-color: #F55555;
    border-radius: 25px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    border: solid 3px #f55555;
    color: white;
}



.btn-radius:hover {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
    
}

</style>