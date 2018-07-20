@extends('layouts.app')

@section('content')
    <div class="outer">
    <div class="inner">    
        <h1 class="wf-nicomoji">みんなのボケ</h1>
        
        <img class="odai_show" src="{{ url($odai->filename) }}" alt="odai1">
        
        <div class="boke_button">
         {!! link_to_route('bokes.create', '　ボケる　',$odai->id,['class' => 'btn-radius']) !!}
        </div>            
    
        <ul class="media-list">
            @foreach ($bokes as $boke)
            
            
                <li class="media">
                    <div class="media-body">
                        <div class="nickname">
                            {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}さん
                        </div>
                        <div class="media-text">
                            <p>{{$boke->content}}</p>
                        </div>
                        @if (Auth::user()->id != $boke->user_id)
                          @include('bokes.favo_button', ['boke' => $boke])
                        @endif
                    </div>
                    
                    <div class="line">
                    </div>
                
                </li>
                
                
            @endforeach
        </ul>
    </div>
    </div>
        
   {!! $bokes->render() !!}
@endsection


<style type="text/css">

.inner{
  width: 60%;
  margin: 0 auto;
  max-width: 600px;
}

.btn-radius{
    width:40px;
    height:10px;
    background-color: #F55555;
    border-color: #F55555;
    border-radius: 25px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    border: solid 10px #f55555;
    color: white;
    font-size:30px;
}



.btn-radius:hover {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
    
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
</style>