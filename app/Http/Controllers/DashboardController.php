<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use illuminate\Http\Request;
class DashboardController extends Controller
{
    //
    public function index()
    {
        $ideas = Idea::orderBy('created_at','desc');


        if(request() -> has('search')){
            $ideas = $ideas ->where('content','like','%'  . request()->get('search','') . '%');
        }

        // Comment::where('idea_id',12)->get();








        return view('dashboard',[
            'ideas' => $ideas->paginate(5),
   
        ]);




    }
}
