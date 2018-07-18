

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
                
                {!! link_to_route('bokes.create', '　ボケる　',['id' => $boke->odai_id],['class' => 'btn-radius']) !!}
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
    font-size:50px;
}

.nickname {
    font-size:50px;
    float:left;
}

.btn-radius{
    background-color: #F55555;
    border-color: #F55555;
    border-radius: 25px;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    border: solid 3px #f55555;
    color: white;
}

.btn-radius:hover {
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);
    
}