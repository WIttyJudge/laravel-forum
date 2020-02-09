<?php

namespace App\Repository\Thread;

use App\Models\Thread;

interface ThreadQueries
{
    public function getBySlug($slug): ?Thread;

    public function getByLatest();
}
