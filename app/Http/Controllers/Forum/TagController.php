<?php

namespace App\Http\Controllers\Forum;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Show the specified posts by tag.
     *
     * @param string $slug
     * @return void
     */
    public function show(Tag $tag)
    {
        $threads = $tag->threads;
        $tags = $tag->all();
        return view('forum.index', compact(['threads', 'tags']));
    }
}
