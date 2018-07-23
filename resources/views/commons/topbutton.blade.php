
   
        <div class="glyphicon glyphicon-arrow-up top-btn" style="font-size:40px;">トップへ</div>
 


<style>
    .top-btn{
        bottom: 16px;
        left: 1200px;
        display: block;
        text-decoration: none;
        width: 30px;
        height: 30px;
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