

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media-middle col-xs-5 col-xs-offset-1">
        
        <div class="media-body">
            
            <p class='nickname'>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}さん
            </p>
                <a href="{{ action('OdaiController@show', $boke->odai_id) }}"><img src="{{ url($boke->filename) }}" alt="odais" class="square"></a>            
            <p class='media-text'>
                <p>{{$boke->content}}</p>
            </p>
            
            
            <div class='link-text'>
                
                {!! link_to_route('bokes.create', 'ボケる',['id' => $boke->odai_id] , ['class' => 'btn-radius']) !!}
            
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
    </li>
@endforeach
</ul>

{!! $bokes->render() !!}



<style type='text/css'>
    
.glyphicon{
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
    font-size:30px;
}

.nickname {
    font-size:25px;
}

.media-middle{
    border:10px dotted white;
    border-radius: 30px;
    margin: 10px 30px 10px 55px;
    word-break:break-all;
    
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

.btn {
    border-radius:50%;
    width:40px;
    height:40px;
    padding-left:6px;
}



</style>



