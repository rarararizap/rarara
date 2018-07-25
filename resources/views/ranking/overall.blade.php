\@extends('layouts.app')
@section('content')
    <div class=inner>
            　<span class="wf-nicomoji rankingtop3 col-xs-12">ランキングがみれるよ</span>
                @include('bokes.ranking', ['bokes' => $bokes])
              <div class="mosaic">
                <img src="mosaicboke.jpg">
        
        
                <div class="cp_btn wf-nicomoji" id="signup-show" data-open="signup-modal">
                    ４いいこう
                </div>
        
              </div>
              
         <div class="signup-modal-wrapper" id="signup-modal">
          <div class="modal close-modal">
            <div id="signup-form">
                <h2>有料会員登録</h2>
                <form action="#">
                  <input class="form-control" type="text" placeholder="登録">
                  <input class="form-control" type="password" placeholder="してね">
                  <div id="submit-btn">登録</div>
                </form>
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
</style>
@endsection
<style>
    .rankingtop3{
        color: #858585;
        font-size: 50px;
    }
    .mosaic{
        border:10px dotted white;
        border-radius: 20px;
        word-break:break-all;
        position :relative;
    
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
</style>