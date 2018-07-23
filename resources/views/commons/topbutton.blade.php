
   
        <div class="glyphicon glyphicon-arrow-up top-btn" style="font-size:25px;">トップへ</div>
 


<style>
    .top-btn{
        top: 700px;
        right:20px;
        display: block;
        text-decoration: none;
        width: 200px;
        height: 30px;
        position:fixed;
        color:white;
    }
    
    .top-btn:hover{
        opacity: 0.5;
    }
    
    
   
</style>



<script>

    $(function(){
  
  $('.top-btn').click(function(){
    $('html, body').animate({'scrollTop':0},500);
  });
  
  $('.top-btn').hover(function(){
    $(this).css("cursor","pointer");
  });
});
    
</script>