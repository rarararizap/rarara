<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Odai;

use App\User;

use App\Boke;

class OdaiController extends Controller
{
      public function index()
    {
        $odais = Odai::all();

         return view('odais/index',['odais'=>$odais]);
    }
    
    
    public function show($id){
        
        $odai = Odai::find($id);
        $bokes = $odai->bokes()->paginate(10);
        
         $data = [
            'odai' => $odai,
            'bokes' => $bokes,
        ];
        
         
        
        return view('odais/show', $data);
    }
    
    //  public function odai2(){
        
    
    //     $odai = Odai::find(2);
    //     $bokes = \DB::table('bokes')
    //     ->join('user_favorite', 'user_favorite.favorite_id', '=', 'bokes.id')
    //     ->join('users', 'users.id', '=', 'bokes.user_id')
    //     ->join('odais', 'odais.id', '=', 'bokes.odai_id')
    //     ->select('bokes.*', 'users.nickname', 'odais.filename')
    //     ->where('odai_id', '2')
    //     ->groupBy('bokes.id', 'bokes.content', 'odais.filename', 'bokes.user_id', 'bokes.odai_id','bokes.created_at', 'bokes.updated_at', 'users.nickname')
    //     ->orderBy('created_at', 'DESC')
    //     ->paginate(10);
        
        
    //      $data = [
    //         'odai' => $odai,
    //         'bokes' => $bokes,
    //     ];
        
         
        
    //     return view('odais/odai2', $data);
    // }

    // public function odai3(){
        
    
    //     $odai = Odai::find(3);
        
    //     return view('odais/odai3', ['odai'=>$odai]);
    // }
    // public function odai4(){
        
    
    //     $odai = Odai::find(4);
        
    //     return view('odais/odai4', ['odai'=>$odai]);
    // }
    

}