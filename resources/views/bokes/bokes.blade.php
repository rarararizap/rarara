

<ul class="media-list">
@foreach ($bokes as $boke)

    <li class="media">
        <!--<div class="media-left">-->
            
        <!--</div>-->
        <div class="media-body">
            <div>
                <img class="media-object img-rounded" src="{{ Gravatar::src($boke->nickname, 50) }}" alt="">
            </div>
            <div class='nickname'>
                {!! link_to_route('users.show', $boke->nickname, ['id' => $boke->user_id]) !!} 
            </div>
                <p><img src="{{ url($boke->filename) }}" alt="odais"></p>
            <div class="media-text">
                <p>{{$boke->content}}</p>
            </div>
            
               
                
                

            <div class='link-text'>
                
                {!! link_to_route('bokes.create', 'ボケて',['id' => $boke->odai_id]) !!}
                    @include('bokes.favo_button', ['boke' => $boke])
            </div>


        </div>
    </li>
@endforeach
</ul>

{!! $bokes->render() !!}


<style tipe='text/css'>
.container { 
    text-align:center;
}

.media-text p {
    font-size:100px;
}

.nickname {
    font-size:50px;
    float:left;
}

.link-text{
    font-size:50px;
}

.media{
    border:10px dotted white;
    border-radius: 30px;
}


