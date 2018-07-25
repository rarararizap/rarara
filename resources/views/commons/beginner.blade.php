
<!-- 折り畳み展開ポインタ -->
<div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';" class="forbeginner">
    
    <a class="click wf-nicomoji" style="cursor:pointer;">▼ はじめてのかたはここをクリック</a>

</div>
<!--// 折り畳み展開ポインタ -->
 
<!-- 折り畳まれ部分 -->
    <div id="open" style="display:none;clear:both;" class="col-xs-12 col-md-6 col-md-offset-3">
    
        <span class="glyphicon glyphicon-question-sign lead"> KillingJokeって何？</span><br>
            おだいの画像に一言ボケるサービスです。<br>
        <br>
        
        <span class="glyphicon glyphicon-question-sign lead"> どうやってボケるの？</span><br>
            各ボケについている「ボケる」ボタンを押すと投稿画面にいけます。<br>
            また、画像をクリックするとおだいのリストが見れます。<br>
        <br>
        
        <span class="glyphicon glyphicon-question-sign lead"> ちゅういすることは？</span><br>
            誹謗・中傷、悪意のある投稿、<br>
            個人が特定できる内容は投稿しないようにしてください<br>
            <br>
    
    </div>
<!--// 折り畳まれ部分 -->

<style>

.click{
    font-size: calc(18px + 1vw);
    text-decoration:underline;
    
}

.forbeginner{
    text-align:center;
}

#open{
    color:#545454;
    text-align:center;
    padding: 10px;
    border: solid 5px #00e6b3;
    border-radius: 15px;
    background-color:#00e6b3;
}

.glyphicon-question-sign{
    color:#f55555;
    font-weight:bold;
}

@media screen and (max-width: 767px) {
   /* 表示領域が320px以下の場合に適用するスタイル */
   .forbeginner { margin-top:100px; }
}

</style>