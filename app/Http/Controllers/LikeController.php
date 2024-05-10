<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Idea $idea)
    {
        $user = auth()->user();
        $user->likes()->attach($idea->id);

        return redirect()->route('feed')->with('success', 'Idea liked');
    }

    public function destroy(Idea $idea)
    {
        $user = auth()->user();
        $user->likes()->detach($idea->id);

        return redirect()->route('feed')->with('success', 'Idea unliked');
    }
}
