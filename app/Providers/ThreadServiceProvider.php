<?php

namespace App\Providers;

use App\Models\Thread;
use App\Observers\ThreadObserver;
use Illuminate\Support\ServiceProvider;

class ThreadServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Thread::observe(ThreadObserver::class);
    }
}
