<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Odai extends Model
{
    protected $fillable = ['filename'];
    
    function bokes()
    {
        return $this->hasMany(Boke::class)
                ->join('users', 'bokes.user_id', '=', 'users.id')
                ->select('bokes.*','users.nickname');
    }
}