<ul class="media-list">
@foreach ($bokes as $boke)
    <li class="media">
        <div class="container">
            <div class="media-body">
                <div>
{!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}
                </div>
                <div>
                    <a href="{{ action('OdaiController@show', $boke->odai_id) }}"><img src="{{ url($boke->filename) }}" alt="odais" class="square"></a>
                </div>
                <div class='media-text'>
                    <p>{{$boke->content}}</p>
                </div>
                
                <div>
                   {!! link_to_route('bokes.create', '　ボケる　',['id' => $boke->odai_id],['class' => 'btn-radius']) !!}
                    @if (isset($boke->count))
                      <class="text-leftr">いいね：{{ $boke->count}} 
                    @endif
                    
                    @include('bokes.favo_button', ['boke' => $boke])
                </div>
                
            </div>
        </div>
    </li>
@endforeach
</ul>


<style tipe='text/css'>
.container{ 
    text-align:center;
    border-radius: 50px;
    font-size:30px;
    word-break:break-all;
}


.media-text p {
    font-size:100px;
}

.media{
    border:10px dotted white;
    border-radius: 30px;
}

.media:first-child {
    margin-top:30px;
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

.link-text{
    font-size: 30px;
}

</style>