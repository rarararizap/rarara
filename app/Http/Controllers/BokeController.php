<?php

namespace App\Http\Controllers;

use App\Boke;
use App\User;
use App\Odai;
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
            ->select('bokes.id','users.nickname','bokes.content','odais.filename','bokes.created_at','bokes.user_id','bokes.odai_id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    
             return view('index', ['bokes' => $bokes]);
        }
         
      return view('welcome');  
             
    }
    
     public function create($id)
    {
        $boke = new Boke;
        $odai = Odai::find($id);

        return view('users.create', [
            'boke' => $boke,
            'odai' => $odai,
        ]);
    
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->bokes()->create([
            'content' => $request->content,
            'odai_id' => $request->odai_id,
        ]);

         return redirect('/');
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

