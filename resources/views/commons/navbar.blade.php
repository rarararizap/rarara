
    
   <div class="row">
       <div class="col-xs-1"></div>
        <div class= "wf-nicomoji col-xs-10">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         {!! link_to_route('boke.index', 'KillingJoke',[],['class' => 'wf-nicomoji salmonpink']) !!}
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                           
                                <li class='timeline'>{!! link_to_route('boke.index', 'タイムライン', ['id' => Auth::id()]) !!}</li>
                                        <li>{!! link_to_route('odais.index', 'ボケる',['id' => Auth::id()]) !!}</li>
                                        <li>{!! link_to_route('ranking.overall', 'ランキング') !!}</li>
                                
                                
                                
                               <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="gravatar">
                                            <img src="{{ Gravatar::src(Auth::user()->nickname, 20) . '&d=mm' }}" alt="" class="img-circle">
                                        </span>
                                        {{ Auth::user()->nickname }}
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                             <li>{!! link_to_route('users.show', 'マイページ', ['id' => Auth::id()]) !!}</li>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                                        </li>
                                    </ul>
                                </li>
                           
                              
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-xs-1"></div>
     </div>

