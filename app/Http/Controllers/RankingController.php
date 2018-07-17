<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Boke;

use App\Odai;

use App\User;

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
    
    public function show1()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->where('odai_id', '1')
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();
    
    
        
        
        return view('ranking.odai1', ['bokes'=>$bokes]);
    }
    
    public function show2()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->where('odai_id', '2')
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();
    
        
        
        return view('ranking.odai2', ['bokes'=>$bokes]);
    }
    public function show3()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->where('odai_id', '3')
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();
    
        
        
        return view('ranking.odai3', ['bokes'=>$bokes]);
    }
    public function show4()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->where('odai_id', '4')
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();
    
        
        
        return view('ranking.odai4', ['bokes'=>$bokes]);
    }
    public function show5()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->where('odai_id', '5')
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();
    
        
        
        return view('ranking.odai5', ['bokes'=>$bokes]);
    }
    public function show6()
    {
        $bokes = \DB::table('bokes')
        ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
        ->join('users', 'users.id', '=', 'bokes.user_id')
        ->join('odais', 'odais.id', '=', 'bokes.odai_id')
        ->select('bokes.*', 'users.nickname', 'odais.filename', \DB::raw('COUNT(*) as count'))
        ->where('odai_id', '6')
        ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
        ->orderBy('count', 'DESC')
        ->take(10)
        ->get();
    
        
        
        return view('ranking.odai6', ['bokes'=>$bokes]);
    }
    
}
 