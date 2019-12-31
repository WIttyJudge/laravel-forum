<?php

namespace App\Console\Commands;

use App\Models\Thread;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Console\Command;

class UpdateSlug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all slug of all posts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $threads = Thread::all();

        $threads->each(function (Thread $thread) {
            SlugService::createSlug(Thread::class, 'slug', $thread->title);
            $thread->save();
            $this->info("ID: {$thread->id} *SLUG UPDATED*");
        });
    }
}
