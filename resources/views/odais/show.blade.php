@extends('layouts.app')

@section('content')
    
    
    <img src="{{ url($odai->filename) }}" alt="odai1">
     {!! link_to_route('bokes.create', 'ボケて',$odai->id) !!}
                
    <h1>みんなのボケ</h1>
    
   <ul class="media-list">
@foreach ($bokes as $boke)


    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($boke->nickname, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!} <span class="text-muted">posted at {{ $boke->created_at }}</span>
            </div>
            <div>
                <p>{{$boke->content}}とぼけた。</p>
            </div>
            
            <div>
                {!! link_to_route('bokes.create', 'ボケて',['id' => $boke->odai_id]) !!}
            </div>

                @include('bokes.favo_button', ['boke' => $boke])
            
        </div>
    </li>
@endforeach
</ul>
    
   {!! $bokes->render() !!}
@endsection