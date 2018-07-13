<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Boke;

use App\Odai;



class UsersController extends Controller
{
    
     public function show($id)
    {
        $user = User::find($id);
        $bokes = $user->bokes()->paginate(10);
        
         $data = [
            'user' => $user,
            'bokes' => $bokes,
        ];
        
         $data += $this->counts($user);

        return view('users.show', $data);
    }
    
  
    
     
     
     public function favorites($id)
    {
        $user = User::find($id);
        $bokes = $user->favorite_bokes()->paginate(10);

        $data = [
            'user' => $user,
            'bokes' => $bokes,
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
        
    }
}