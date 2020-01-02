<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    public $timestamps = false;

    public function sluggable(): array
    {
        return [
            'slug'=> [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Return all tags and sort it ny name.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllTags(): Collection
    {
        return self::all()->sortBy('name');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function threads()
    {
        return $this->belongsToMany(Thread::class);
    }
}
