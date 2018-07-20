<body>
    <div class= "wf-nicomoji">
    <div class="navbar  col-md-10 col-md-offset-1">
        <div class="box">
        <li>{!! link_to_route('users.show', 'マイページ', ['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('boke.index', 'タイムライン', ['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('ranking.overall', 'ランキング') !!}</li>
        <li>{!! link_to_route('odais.index', 'おだい',['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
        </div>
    </div>
                        
  
  
    </div>
    
    
</body>