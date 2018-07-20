

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media-middle col-xs-6 col-sm-6  col-md-6 col-lg-6">
        
        <div class="media-body">
            
            <div class='nickname'>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}さん
            </div>
            
                <a href="{{ action('OdaiController@show', $boke->odai_id) }}"><img src="{{ url($boke->filename) }}" alt="odais" class="square"></a>            
            
            <div class='media-text'>
                <p>{{$boke->content}}</p>
            </div>
            
            
            <div class='link-text'>
                
                {!! link_to_route('bokes.create', 'ボケる',['id' => $boke->odai_id] , ['class' => 'btn-radius']) !!}
            

                @include('bokes.favo_button', ['boke' => $boke])
                
                 @if (Auth::user()->id == $boke->user_id)
                    {!! Form::open(['route' => ['bokes.destroy', $boke->id], 'method' => 'delete']) !!}
                        {{Form::button('<span class="glyphicon glyphicon-trash "　style="font-size:30px;"></span>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
                    {!! Form::close() !!}
                 @endif
            </div>
        </div>
    </li>
@endforeach
</ul>

{!! $bokes->render() !!}



<style>
    
.glyphicon{
        color: #00cc9f;
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



</style>



