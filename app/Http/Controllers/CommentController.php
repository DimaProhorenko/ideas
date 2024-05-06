<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {
        $comment = Comment::create(['body' => request()->get('body'), 'idea_id' => $idea->id]);
        $comment->save();

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment posted');
    }
}
