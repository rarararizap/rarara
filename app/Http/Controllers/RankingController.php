<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Boke;

use App\Odai;

class RankingController extends Controller
{
    public function index()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();

        return view('ranking.overall', [
            'bokes' => $bokes,
        ]);
    }
}
