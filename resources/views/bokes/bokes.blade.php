

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media-middle col-xs-5 col-xs-offset-1">
        
        <div class="media-body">

            <p class='nickname'>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!} さん
            </p>
                <a href="{{ action('OdaiController@show', $boke->odai_id) }}"><img class="odais square" src="{{url( $boke->filename) }}" alt="odais"></a>
            <div class="media-text">
                <p>{{$boke->content}}</p>
            </div>
            
            <div class='link-text'>
                
                {!! link_to_route('bokes.create', 'ボケる',['id' => $boke->odai_id],['class' => 'btn-radius']) !!}
            @if (Auth::user()->id != $boke->user_id)
              @include('bokes.favo_button', ['boke' => $boke])
            @endif
            </div>


        </div>
    </li>
@endforeach
</ul>

{!! $bokes->render() !!}


<style type='text/css'>

.media-middle{
    border:10px dotted white;
    border-radius: 20px;
    margin: 10px 30px 10px 55px;
    padding-bottom:20px;
    
    word-break:break-all;
    padding-bottom:20px;

}


.media-body{
    text-align: center;
}


.media-text p {
    font-size:30px;
}

.nickname {
    font-size:25px;
}

.link-text{
    font-size: 30px;
}


.container { 
    text-align:center;
}

.row{
    font-weight:normal;
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