<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {
        dump(request()->get('idea'));

        $idea = Idea::create(['body' => request()->get('idea')]);

        return redirect()->route('feed')->with('success', 'Idea was created');
    }
}
