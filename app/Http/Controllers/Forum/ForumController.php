<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThreadRequest;
use App\Models\Tag;
use App\Models\Thread;
use App\Repository\Thread\ThreadQueries;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    /**
     * The thread queries implementation.
     *
     * @var ThreadQueries
     */
    protected $thread;

    /**
     * Create a new controller instance.
     *
     * @param ThreadQueries $threadQueries
     */
    public function __construct(ThreadQueries $threadQueries)
    {
        $this->thread = $threadQueries;
    }

    /**
     * Shows the main page with all threads.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = $this->thread->getByLatest('id')
            ->with(['user', 'tags'])
            ->paginate(15);

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
        $tags = Tag::getAllTags();
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
        $thread = $this->thread->getBySlug($slug);
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
