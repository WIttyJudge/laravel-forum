<?php

namespace App\Http\Controllers\Forum;

use App\Models\Tag;
use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThreadRequest;

class ForumController extends Controller
{

    /**
     * Shows the main page with all threads.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::latest('id')
            ->with(['user', 'tags'])
            ->get();

        $tags = Tag::getAllTags();

        return view('forum.index', compact(['threads', 'tags']));
    }

    /**
     * Show the form for creating a new threads.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('forum.create', compact('tags'));
    }

    /**
     * Get new data and save it in the database
     *
     * @param \App\Http\Requests\StoreThreadRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadRequest $request)
    {
        $validated = $request->validated();

        Thread::create($validated);

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified thread.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $thread = Thread::findBySlugOrFail($slug);
        return view('forum.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
