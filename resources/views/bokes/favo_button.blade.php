

    @if (Auth::user()->id != $boke->user_id)
            @if (Auth::user()-> is_favoriting($boke->id))
                {!! Form::open(['route' =>[ 'user.unfavorite',$boke->id],'method'=>'delete']) !!}
                    {{Form::button('<i class="glyphicon glyphicon-heart color-red"></i>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' =>[ 'user.favorite',$boke->id]]) !!}
                    {{Form::button('<i class="glyphicon glyphicon-heart color-mintgreen"></i>', array('type' => 'submit', 'class' => 'btn btn-normal'))}}
                {!! Form::close() !!}
            @endif
    @endif
    
   <style>
     
.btn {
    border-radius:50%;
    width:;
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