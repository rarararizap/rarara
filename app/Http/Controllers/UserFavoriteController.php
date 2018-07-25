<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Boke;

use App\Odai;

class UserFavoriteController extends Controller
{
     public function store(Request $request, $bokeId)
    {
        \Auth::user()->favorite($bokeId);
        return redirect()->back()->with('status', __('ボケをいいねしたよー'));
    }

    public function destroy($bokeId)
    {
        \Auth::user()->unfavorite($bokeId);
        return redirect()->back()->with('status', __('ボケのいいねをかいじょしたよー'));
    }
}
