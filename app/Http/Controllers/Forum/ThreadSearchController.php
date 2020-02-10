<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Thread;

class ThreadSearchController extends Controller
{
    public function search()
    {
        $threads = Thread::where('title', 'LIKE', '%' . request('search') . '%')
            ->orWhere('body', 'LIKE', '%' . request('search') . '%')->get();

        $tags = Tag::getAllTags();

        return view('forum.index', compact('threads', 'tags'));
    }
}
