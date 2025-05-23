<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;


class IdeaController extends Controller
{
    public function show(Idea $idea)
    {
        // dd($idea -> comments);




        // $idea = Idea::where('id',$id) -> firstOrFail() ;
        return view('idea.show',compact('idea'));

    }

    public function edit(Idea $idea)
    {
        if(auth() ->id() !== $idea -> user_id){
            abort(403,'You are not allowed to edit this idea');
        }
        $editingidea = true;
        return view('idea.show',compact('idea','editingidea'));
    }

    public function update(Idea $idea)
    {
        if(auth() ->id() !== $idea -> user_id){
            abort(403,'You are not allowed to edit this idea');
        }
        $validated = request() -> validate(
            [
            'content' => 'required|min:5|max:240',
            ]
        );
        // $idea -> content = request()->get('content','');
        // $idea -> save();
        $idea -> update($validated);

        return redirect() -> route('idea.show',$idea -> id) -> with('success','Idea updated successfully');
    }


    public function store()
    {
        $validated = request() -> validate(
            [
            'content' => 'required|min:5|max:240',
            ]
        );

        $validated['user_id'] = auth() -> id();
        $idea = Idea::create($validated);

        return redirect() -> route('dashboard') -> with('success','Idea created successfully');
    }

    public function destroy($id)
    {
        // $idea = Idea::where('id',$id) -> firstOrFail() ;

        $idea = Idea::where('id',$id) -> first();
        $idea -> delete();
        if(auth() ->id() !== $idea -> user_id){
            abort(403,'You are not allowed to edit this idea');
        }
        return redirect() -> route('dashboard') -> with('success','Idea deleted successfully');
    }
}
