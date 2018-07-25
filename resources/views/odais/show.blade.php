@extends('layouts.app')

@section('content')
    <div class="outer">
    <div class="inner col-xs-12 col-md-8 col-md-offset-2">    
        <h1 class="wf-nicomoji">みんなのボケ</h1>
        
        <img class="odai_show" src="{{ url($odai->filename) }}" alt="odai1">
        
        <div class="boke_button">
         {!! link_to_route('bokes.create', 'ボケる',$odai->id,['class' => 'btn-radius']) !!}
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
  width: 70%;
  margin: 0 auto;
  max-width: 700px;
  word-break:break-all;
  
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

.odai_show{
    width:100%;
    height:auto;
}

.boke_button{
    margin-top:20px;
}

@media screen and (max-width : 768px){
    .media-text{
        font-size:20px;
    }
    
    .nickname {
    font-size:20px;
    }
    
}
</style>