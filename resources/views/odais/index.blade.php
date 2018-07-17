@extends('layouts.app')

@section('content')
    <ul>
    @foreach ($odais as $odai)
    
        <li>
            <a href="odais/{{$odai->id}}"><img src="{{ $odai->filename }}" alt="odais"></a>
                {!! link_to_route('bokes.create', 'ボケて',$odai->id) !!}

        </li>
    @endforeach
    </ul>

@endsection

