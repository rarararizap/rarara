

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media">
        
        <div class="media-body">
            <div>
                <img class="media-object img-rounded" src="{{ Gravatar::src($boke->nickname, 50) }}" alt="">
            </div>
            <div class='nickname'>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}
            </div>
            
                <a href="{{ action('OdaiController@show', $boke->odai_id) }}"><img src="{{ url($boke->filename) }}" alt="odais"></a>            
            
            <div class='media-text'>
                <p>{{$boke->content}}</p>
            </div>
            
            <div class='link-text'>
                {!! link_to_route('bokes.create', 'ボケて',['id' => $boke->odai_id]) !!}
            

                @include('bokes.favo_button', ['boke' => $boke])
                
                 @if (Auth::user()->id == $boke->user_id)
                    {!! Form::open(['route' => ['bokes.destroy', $boke->id], 'method' => 'delete']) !!}
                        {{Form::button('<i class="glyphicon glyphicon-trash "></i>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
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
    font-size:100px;
}
.link-text {
    font-size:50px;
}
.nickname {
    font-size:50px;
    float:left;
}

.media{
    border:10px dotted white;
    border-radius: 30px;
}

</style>
