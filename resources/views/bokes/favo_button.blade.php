

    @if (Auth::user()->id != $boke->user_id)
            @if (Auth::user()-> is_favoriting($boke->id))
                {!! Form::open(['route' =>[ 'user.unfavorite',$boke->id],'method'=>'delete']) !!}
                    {{Form::button('<span class="glyphicon glyphicon-heart color-red" style="font-size:25px;"></span>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' =>[ 'user.favorite',$boke->id]]) !!}
                    {{Form::button('<span class="glyphicon glyphicon-heart color-mintgreen" style="font-size:25px;"></span>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
                {!! Form::close() !!}
            @endif
    @endif
   <style>
     
.btn {
    border-radius:50%;
    width:40px;
    height:40px;
    padding-left:6px;
}

form{
    display:inline-block;
}

.color-red{
    color:red;
}

.color-mintgreen{
    color: #00cc9f;
}
   </style>