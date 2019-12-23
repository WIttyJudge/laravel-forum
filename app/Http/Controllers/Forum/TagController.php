<?php

namespace App\Http\Controllers\Forum;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Undocumented function
     *
     * @param string $slug
     * @return void
     */
    public function index(Tag $tag)
    {
        $threads = $tag->threads;
        $tags = $tag->pluck('name');
        return view('forum.index', compact(['threads', 'tags']));
    }
}
