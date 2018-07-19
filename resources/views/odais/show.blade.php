@extends('layouts.app')

@section('content')
    
    <h1>みんなのボケ</h1>
    
    <img class="odai_show" src="{{ url($odai->filename) }}" alt="odai1">
    <div class="boke_button">
     {!! link_to_route('bokes.create', 'ボケる',$odai->id,['class' => 'btn-radius']) !!}
    </div>            

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
           
                @include('bokes.favo_button', ['boke' => $boke])
            
        </div>
    </li>
@endforeach
</ul>
    
   {!! $bokes->render() !!}
@endsection


<style type="text/css">

.btn-radius{
    width:40px;
    height:10px;
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