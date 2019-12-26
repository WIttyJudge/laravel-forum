<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function threads()
    {
        return $this->belongsToMany(Thread::class);
    }
}
