<ul class="media-list">
@foreach ($bokes as $key => $boke)
    <li class="media">
        <div class="container">
            <div class="media-body">
                
                <div class="junni">No.{{ $key+1 }}:{!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}</div>
                
                <div>
                    <a href="{{ action('OdaiController@show', $boke->odai_id) }}">
                        <div class="sample1">
                            <img src="{{ url($boke->filename) }}" alt="odais" class="square">
                                <div class="mask">
                                    <div class="caption">他の人のボケも見てみる</div>
	                           </div></a>
                            
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


.junni {
    font-size: 80px;
}

.sample1 {
	overflow:		hidden;
	margin:			0px;
	position:		relative;	/* 相対位置指定 */
}
.sample1 .caption {
	font-size:		100%;
	text-align: 	center;
	vertical-align: middle;
	padding-top:	300px;
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