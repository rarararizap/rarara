
<div class="row">

    <ul class="media-list">
    @foreach ($bokes as $boke)
    
        <li class="media-middle col-xs-5 col-xs-offset-1">
            
            <div class="media-body">
    
                <p class='nickname'>
                    {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!} さん
                </p>
                    <a href="{{ action('OdaiController@show', $boke->odai_id) }}">
                        <div class="sample1">
                            <img class="odais square" src="{{url( $boke->filename) }}" alt="odais">
                            <div class="mask">
		                        <div class="caption">他の人のボケも見てみる</div>
	                        </div>
                        </div>
                    </a>
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

.media-text{
    margin-top:30px;
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


.sample1 {
	overflow:		hidden;
	margin:			0px;
	position:		relative;	/* 相対位置指定 */
}
.sample1 .caption {
	font-size:		130%;
	text-align: 	center;
	vertical-align: middle;
	padding-top:	180px;
	color:			#fff;
	text-decoration: underline;
}
.sample1 .mask {
	width:			100%;
	height:			100%;
	position:		absolute;	/* 絶対位置指定 */
	top:			0;
	opacity:		0;	/* マスクを表示しない */
	background-color:	rgba(0,0,0,0.4);	/* マスクは半透明 */
	-webkit-transition:	all 0.2s ease;
	transition:		all 0.2s ease;
}
.sample1:hover .mask {
	opacity:		1;	/* マスクを表示する */
}


</style>