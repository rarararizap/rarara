
<div class="row">

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
                
                    <div class='link-text'>
                    
                        {!! link_to_route('bokes.create', 'このお題でボケる',['id' => $boke->odai_id],['class' => 'btn-radius']) !!}
                        @if (Auth::user()->id != $boke->user_id)
                          @include('bokes.favo_button', ['boke' => $boke])
                        @endif
                    </div>
                </div>
    
            </div>
        </li>
    @endforeach
    </ul>
</div>


{!! $bokes->render() !!}


<style type='text/css'>

.media-middle{
    border:10px dotted white;
    border-radius: 20px;
    margin: 10px 30px 30px 55px;
    padding-bottom:20px;
    word-break:break-all;
    padding-bottom:20px;
    height:680px;

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


.container { 
    text-align:center;
}

.row{
    font-weight:normal;
}



.btn-radius:hover {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
    
}

ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    font-weight:bold;
    background-color: #00cc9f;
}

ul.pagination li a.hover {
    background-color: #2196F3;
    color: white;
}

ul.pagination li a.active {
    background-color: #2196F3;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #00cc9f;}



</style>