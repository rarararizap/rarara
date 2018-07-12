@extends('layouts.app')

@section('content')
    <ul>
    @foreach ($odais as $odai)
    
        <li>
            <img src="{{ $odai->filename }}" alt="odais">  
                {!! link_to_route('bokes.create', 'ボケて',$odai->id) !!}

        </li>
    @endforeach
    </ul>

@endsection