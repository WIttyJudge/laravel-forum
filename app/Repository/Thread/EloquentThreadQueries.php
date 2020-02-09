<?php

namespace App\Repository\Thread;

use App\Models\Thread;
use App\Repository\Thread\ThreadQueries;

class EloquentThreadQueries implements ThreadQueries
{

    /**
     * Find thread by slug
     *
     * @param string $slug
     * @return Thread|null
     */
    public function getBySlug($slug): ?Thread
    {
        return Thread::findBySlugOrFail($slug);
    }

    /**
     * Sort thread by latest
     *
     * @param sttingr|null $column
     * @return void
     */
    public function getByLatest($column = null)
    {
        return Thread::latest($column);
    }

}
