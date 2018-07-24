
   
        <div class="glyphicon glyphicon-arrow-up top-btn col-xs-12" style="font-size:25px;">トップへ</div>
 


<style>
    .top-btn{
        color:white;
        text-align: right;
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