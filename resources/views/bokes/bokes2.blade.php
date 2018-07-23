

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media-middle col-xs-5 col-xs-offset-1">
        
        <div class="media-body">
            
            <p class='nickname'>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}さん
            </p>
                <a href="{{ action('OdaiController@show', $boke->odai_id) }}"><img src="{{ url($boke->filename) }}" alt="odais" class="odais square"></a>            
            <div class='media-text'>
                <p>{{$boke->content}}</p>
            
                <div class='link-text'>
                    
                    {!! link_to_route('bokes.create', 'このお題でボケる',['id' => $boke->odai_id] , ['class' => 'btn-radius']) !!}
                
                    @if (Auth::user()->id != $boke->user_id)
                        @include('bokes.favo_button', ['boke' => $boke])
                    @endif
                    
                    @if (Auth::user()->id == $boke->user_id)
                        {!! Form::open(['route' => ['bokes.destroy', $boke->id], 'method' => 'delete']) !!}
                            {{Form::button('<span class="glyphicon glyphicon-trash "></span>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>

{!! $bokes->render() !!}



<style type='text/css'>

    
.glyphicon-trash{
        color: #00cc9f;
        font-size:25px;
    }
    
form{
    display:inline-block;
}


.container { 
    text-align:center;
}

.media-text p {
    font-size:26px;
    font-weight:bold;
}

.nickname {
    font-size:25px;
}

.link-text{
    font-size: 30px;
}

.media-middle{
    border:10px dotted white;
    border-radius: 30px;
    margin: 10px 30px 30px 55px;
    word-break:break-all;
    height:680px;
    
}

.btn {
    border-radius:50%;
    width:40px;
    height:40px;
    padding-left:6px;
}

.row{
    font-weight:normal;
}


</style>



