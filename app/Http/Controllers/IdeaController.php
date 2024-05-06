<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {

        request()->validate([
            'idea' => 'required|min:5|max:240'
        ]);

        $idea = Idea::create(['body' => request()->get('idea')]);

        return redirect()->route('feed')->with('success', 'Idea was created');
    }

    public function destroy($id)
    {
        $idea = Idea::where('id', $id)->firstOrFail();

        $idea->delete();

        return redirect()->route('feed')->with('success', 'Ideas was deleted');
    }

    public function show(Idea $idea)
    {
        // dump($idea);

        return view('idea.show', [
            'idea' => $idea
        ]);
    }

    public function edit(Idea $idea)
    {
        return view('idea.edit', compact('idea'));
    }

    public function update(Idea $idea)
    {
        request()->validate([
            'idea' => 'required|min:5|max:240'
        ]);

        $idea->body = request()->get('idea');
        $idea->save();
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea was updated');
    }
}
