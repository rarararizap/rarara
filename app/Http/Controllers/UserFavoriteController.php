<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Boke;

use App\Odai;

class UserFavoriteController extends Controller
{
     public function favo(Request $request, $bokeId)
    {
        \Auth::user()->favorite($bokeId);
        return redirect()->back();
    }

    public function unfavo($bokeId)
    {
        \Auth::user()->unfavorite($bokeId);
        return redirect()->back();
    }
}
