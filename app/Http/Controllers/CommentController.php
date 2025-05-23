<?php

namespace App\Http\Controllers;



use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea){
        // dump(request()->all());
        // dd(request()->content);

        request() -> validate(
            [
            'comment' => 'required',
            ]
        );

        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->user_id = auth()->id();
        $comment -> comment = request()->comment;



        $comment -> save();

        return redirect()-> route('idea.show', $idea ->id) -> with('success', 'Comment was added');
    }
    public function messages(){
        return [
            'comment.required' => 'Please enter a comment'
        ];
    }
}
