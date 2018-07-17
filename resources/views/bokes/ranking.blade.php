<ul class="media-list">
@foreach ($bokes as $boke)
    <li class="media">
        <div class="container text-center ">
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}
            </div>
            <div>
                {{$boke->filename}}
            </div>
            <div>
                {{$boke->content}}
            </div>
            
            <div>
                {!! link_to_route('bokes.create', 'ボケて', ['id' => $boke->odai_id]) !!}
                @if (isset($boke->count))
                  <class="text-leftr">いいね：{{ $boke->count}} 
                @endif
            </div>
            
        </div>
        </div>
    </li>
@endforeach
</ul>

