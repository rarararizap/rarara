<body>
    <div class= "wf-nicomoji">
    <div class="navbar">
        <div class="container">
        <li>{!! link_to_route('users.show', 'マイページ', ['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('boke.index', 'タイムライン', ['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('ranking.overall', 'にんきとうこう') !!}</li>
        <li>{!! link_to_route('odais.index', 'おだい',['id' => Auth::id()]) !!}</li>
        <li role="separator" class="divider"></li>
        <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
        </div>
    </div>
                        
  
  
    </div>
    
    
</body>







