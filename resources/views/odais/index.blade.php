@extends('layouts.app')

@section('content')
<div class="wf-nicomoji text col-xs-12">おだいをえらんでボケてね</div>
    <ul class="media-list">
    @foreach ($odais as $odai)
        <li class='col-md-6 col-xs-12' >
            <h1 class="wf-nicomoji">おだい.{{$odai->id}}</h1>
            <a href="odais/{{$odai->id}}">
             <div class="sample1">
                <img src="{{ url($odai->filename) }}" alt="odais" class="square">
                    <div class="mask">
                        <div class="caption">他の人のボケも見てみる</div>
                    </div>
                            
             </div>
            </a>
            <div class="button">
                {!! link_to_route('bokes.create', 'ボケる',$odai->id , ['class' => 'btn-radius']) !!}
            </div>
        </li>
    @endforeach
    </ul>

<style type="text/css">

.col-xs-6{
    list-style: none;
    margin:0 0px 50px;
    color: white;
}
.text{
    color: #858585;
    font-size: 50px;
    text-align:center;
}

.button{
    margin-top: 15px;
    text-align:center;
}


.sample1 {
	overflow:		hidden;
	margin:			0px;
	position:		relative;	/* 相対位置指定 */
}
.sample1 .caption {
	font-size:		150%;
	text-align: 	center;
	vertical-align: middle;
	padding-top:	50%;
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

@endsection

