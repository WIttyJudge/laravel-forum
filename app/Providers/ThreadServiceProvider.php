<?php

namespace App\Providers;

use App\Models\Thread;
use App\Observers\ThreadObserver;
use App\Repository\Thread\EloquentThreadQueries;
use App\Repository\Thread\ThreadQueries;
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
        $this->app->bind(ThreadQueries::class,
            EloquentThreadQueries::class);
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
