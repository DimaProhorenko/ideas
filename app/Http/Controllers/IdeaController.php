<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {

        $validated = request()->validate([
            'idea' => 'required|min:5|max:240'
        ]);

        $validated['user_id'] = auth()->id();

        $idea = Idea::create(['body' => $validated['idea'], 'user_id' => $validated['user_id']]);

        return redirect()->route('feed')->with('success', 'Idea was created');
    }

    public function destroy($id)
    {
        $idea = Idea::where('id', $id)->firstOrFail();

        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }

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
        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }
        return view('idea.edit', compact('idea'));
    }

    public function update(Idea $idea)
    {
        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }
        request()->validate([
            'idea' => 'required|min:5|max:240'
        ]);

        $idea->body = request()->get('idea');
        $idea->save();
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea was updated');
    }
}
