\@extends('layouts.app')
@section('content')

            　<div class="wf-nicomoji text col-xs-12">ランキングがみれるよ</div>
                 <div class='row'>
                    <ul class="media-list">
                    @foreach ($bokes as $key => $boke)
                        <li class="media col-md-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                                <div class="media-body">
                                    
                                    <div class="junni">No.{{ $key+1 }}:{!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!}</div>
                                    
                                    <div>
                                        <a href="{{ action('OdaiController@show', $boke->odai_id) }}">
                                            <div class="sample1">
                                                <img src="{{ url($boke->filename) }}" alt="odais" class="square">
                                                    <div class="mask">
                                                        <div class="caption">他の人のボケも見てみる</div>
                    	                            </div>
                                                
                                            </div></a>
                                            
                                        <div class='media-text'>
                                            <p>{{$boke->content}}</p>
                                        </div>
                                    
                                        <div>
                                           {!! link_to_route('bokes.create', '　ボケる　',['id' => $boke->odai_id],['class' => 'btn-radius']) !!}
                                            @if (isset($boke->count))
                                              <span class="text-leftr">いいね：{{ $boke->count}}
                                            @endif
                                            
                                            @include('bokes.favo_button', ['boke' => $boke])
                                             </span>
                                        </div>
                                    
                                    </div>
                                </div>
                        </li>
                    @endforeach
                    </ul>
                    <div class="mosaic col-md-offset-3 col-md-6 col-md-offset-3 col-xs-12"><img src="mosaicboke.jpg">
                         <div class="cp_btn wf-nicomoji" id="signup-show" data-open="signup-modal">
                              もっとみる
                         </div>
                    </div>
                 </div>
              </div>
              
              

<style>
.inner{
    width: 60%;
    margin: 0 auto;
    max-width: 600px;
    }

.text{
    color: #858585;
    font-size: 50px;
    text-align:center;
    }

.text-leftr{
    font-size: calc(10px + 1vw);
}

.mosaic{
    border:10px dotted white;
    border-radius: 20px;
    word-break:break-all;
    position :relative;
    margin-top:30px;   
    
    }
    
.mosaic .cp_btn{
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        height:80px;
        border-radius:50px;
        
    }
    
.cp_btn {
        position: relative;
        
        width: 250px;
        vertical-align:middle;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background: #EC407A;
        border:1px solid #fff;
        overflow: hidden;
        font-size: 40;
    }
    .cp_btn:before {
        content:"";
        position: absolute;
        top: 0px;
        left: -150px;
        height: 100%;
        width: 200px;
        background : #fff;
        opacity: 0.3;
        transition: .4s;
        
    }
    
    .cp_btn:hover:before {
        left:0;
    }
    .mosaic p {
        padding-top:10px;
    }
    
 .signup-modal-wrapper {
 
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 100;
  display:none;
 }
.modal {
  position: absolute;
  top: 20%;
  left: 34%;
  background-color: #e6ecf0;
  padding: 20px 0 40px;
  border-radius: 10px;
  width: 450px;
  height: auto;
  text-align: center;
}
#signup-form {
  width: 100%;
}
#signup-form h2 {
  color: #5f5d60;
  letter-spacing: 1px;
  margin-bottom: 40px;
}
#kakin-form input {
  width: 320px;
  margin-bottom: 20px;
  font-size: 12px;
  padding: 12px 12px;
  border: 1px solid #d0d5d8;
  border-radius: 5px;
}
#submit-btn {
  display: inline-block;
  padding: 14px 140px;
  background-color: #5dca88;
  border: none;
  border-radius: 3px;
  color: #00cc9f
  margin: 10px auto;
  cursor: pointer;
  border-radius:50%;
}


.media-text p {
    font-size: calc(15px + 1.5vw);
    text-align:center;
    font-weight: bold;
}

.media{
    border:10px dotted white;
    border-radius: 30px;
    margin-top: 30px;
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

@media screen and (max-width: 768px){
    .btn-radius{
        font-size:20px;
    }
}


.btn-radius:hover {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
    
}

.link-text{
    font-size: 30px;
}


.junni {
     font-size: calc(12px + 2.5vw);
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

@media screen and (max-width: 768px){
    .text{
        font-size: 30px;
    }
    
}
</style>

@endsection










