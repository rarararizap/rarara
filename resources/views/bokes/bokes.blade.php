

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($boke->nickname, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!} 
            </div>
              <a href="odais/{{$boke->odai_id}}"><img src="{{ url($boke->filename) }}" alt="odais"></a></a>
            <div>
                <p>{{$boke->content}}</p>
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