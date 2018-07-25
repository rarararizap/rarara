<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KillingJoke</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">

    </head>
   
    <body>
        <header class="top_logo">
            
           
            
        </header>
        
        @include('commons.beginner')
        @include('commons.navbar')

        <div class="container">
            
            @yield('content')
            
        </div><br>
        @include('commons.topbutton')
        @include('commons.footer')
      
    </body>
    

</html>

<script>
    $(function(){
    $(".cp_btn").click(function(){
        $(this).text('かきんしてね');
    });
    
  
  $(".cp_btn").hover(function(){
    $(".cp_btn").css("cursor","pointer");
  });
    
 });
 
    
</script>