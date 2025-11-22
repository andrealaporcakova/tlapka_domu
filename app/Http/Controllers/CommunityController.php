<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        // Load all stories, newest at the top
        $stories = Story::orderBy('created_at', 'desc')->get();

        return view('community', [
            'stories' => $stories
        ]);
    }

    public function show(Story $story) // automatically finds story by {story} from URL
    {
        // Return a new view 'story-detail' and pass it the found story
        return view('story-detail', [
            'story' => $story
        ]);
    }
}
