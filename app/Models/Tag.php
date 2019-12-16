<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable(): array
    {
        return [
            'slug'=> [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Indicate if the model should be timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    public function threads()
    {
        return $this->belongsToMany(Thread::class);
    }
}
