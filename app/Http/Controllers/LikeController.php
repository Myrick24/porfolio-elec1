<?php
namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
    public function like(Idea $idea){
        $liker = auth()->user();

        $liker->likes()->attach($idea ->id);

        return redirect()->route('dashboard')->with('success', 'You have liked ' . $idea->content);
    }
    public function unlike(Idea $idea){
        $liker = auth()->user();

        $liker->likes()->detach($idea->id);
        return redirect()->route('dashboard')->with('success', 'You have unliked ' . $idea->content);
    }
}
