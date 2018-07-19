<body>
    
    <div class="sidenav">
        <li>{!! link_to_route('users.show', 'マイページ', ['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('boke.index', 'タイムライン', ['id' => Auth::id()]) !!}</li>
        <li>{!! link_to_route('ranking.overall', '人気投稿') !!}</li>
        <li>{!! link_to_route('odais.index', 'お題一覧',['id' => Auth::id()]) !!}</li>
        <li role="separator" class="divider"></li>
        <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
    
                        
  <!--<a href="users.show">マイページ</a>-->
  <!--<a href="boke.index">タイムライン</a>-->
  <!--<a href="ranking.overall">人気投稿</a>-->
  <!--<a href="odais.index">お題一覧</a>-->
  <!--<a href="logout.get">ログアウト</a>-->
  
    </div>
    
    
</body>