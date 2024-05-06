<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{

    public function index()
    {

        $idea = Idea::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $idea->where('body', 'like', '%' . request()->get('search') . '%');
        }

        return view('feed', [
            'ideas' => $idea->paginate(5)
        ]);
    }
}
