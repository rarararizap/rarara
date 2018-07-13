<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function bokes()
     {
        return $this->hasMany(Boke::class)
                ->join('users', 'bokes.user_id', '=', 'users.id')
                ->join('odais', 'bokes.odai_id', '=', 'odais.id')
                ->select('bokes.id','users.nickname','bokes.content','odais.filename','bokes.odai_id','bokes.created_at');
                
     }
    
    public function favorite_bokes()
     {
        return $this->belongsToMany(Boke::class, 'user_favorite', 'user_id', 'favorite_id')
        ->join('users', 'bokes.user_id', '=', 'users.id')
        ->join('odais', 'bokes.odai_id', '=', 'odais.id')
        ->select('users.nickname','bokes.content','odais.filename','bokes.created_at')
        ->withTimestamps();
    }
     
     public function favorite($bokeId)
    {
        // confirm if already favoriting
        $exist = $this->is_favoriting($bokeId);
        
       
    
        if ($exist) {
            // do nothing if already favoriting
            return false;
        } else {
            // favorite if not favoriting
            $this->favorite_bokes()->attach($bokeId);
            return true;
        }
    }

    public function unfavorite($bokeId)
    {
        // confirming if already favoriting
        $exist = $this->is_favoriting($bokeId);
        
       
    
    
        if ($exist) {
            // stop favoriting if favoriting
            $this->favorite_bokes()->detach($bokeId);
            return true;
        } else {
            // do nothing if not favoriting
            return false;
        }
    }


    public function is_favoriting($bokeId)
    {
         return $this->favorite_bokes()->where('favorite_id', $bokeId)->exists();
    }
}