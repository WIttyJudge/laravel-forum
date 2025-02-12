<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    public $timestamps = false;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return all tags and sort it ny name.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllTags(): Collection
    {
        return static::all()->sortBy('name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function threads(): BelongsToMany
    {
        return $this->belongsToMany(Thread::class);
    }
}
