<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use \Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    /**
     * Shows content of body column.
     *
     * @param int $limit
     * @param string $end
     * @return string
     */
    public function showExcerpt(int $limit = 100, string $end = '..')
    {
        return Str::limit($this->body, $limit, $end);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class);
    }
}
