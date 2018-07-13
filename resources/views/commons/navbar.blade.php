<header>
    <nav class="navbar  navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="/">ServiceName</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">メニュー<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'マイページ', ['id' => Auth::id()]) !!}</li>
                                <li>{!! link_to_route('boke.index', 'タイムライン', ['id' => Auth::id()]) !!}</li>
                                <li>{!! link_to_route('ranking.overall', '人気投稿') !!}</li>
                                <li>{!! link_to_route('odai.index', 'お題一覧',['id' => Auth::id()]) !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', '') !!}ログアウト</li>
                            </ul>
                        </li>
                    @else
                    
                    <li>{!! link_to_route('signup.get', '新規登録') !!}</li>
                    <li>{!! link_to_route('login', 'ログイン') !!}</li>
                @endif
                </ul>
            </div>
            
        </div>
    </nav>
</header>