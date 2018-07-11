<?php

namespace App\Http\Controllers;

use App\Boke;
use App\User;
use Illuminate\Http\Request;

class BokeController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $bokes = \DB::table('bokes')
            ->join('users', 'bokes.user_id', '=', 'users.id')
            ->join('odais', 'bokes.odai_id', '=', 'odais.id')
            ->select('users.nickname','bokes.content','odais.filename','bokes.created_at','bokes.user_id')
            ->paginate(10);
    
             return view('index', ['bokes' => $bokes]);
        }
         
      return view('welcome');  
             
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->bokes()->create([
            'content' => $request->content,
        ]);

        return redirect()->back();
    }
    
     public function destroy($id)
    {
        $boke = \App\Boke::find($id);

        if (\Auth::user()->id === $boke->user_id) {
            $boke->delete();
        }

        return redirect()->back();
    }


}

