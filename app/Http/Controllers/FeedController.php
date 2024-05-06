<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{

    public function index()
    {
        // $idea = new Idea([
        //     'body' => 'Hello ideas'
        // ]);
        // $idea->body = 'test';
        // $idea->save();
        return view('feed', [
            'ideas' => Idea::orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function addIdea()
    {
        echo ('Idea created');
    }
}
