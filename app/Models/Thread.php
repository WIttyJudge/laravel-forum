<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;
use \Cviebrock\EloquentSluggable\Sluggable;

class Thread extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Shows content of body column.
     *
     * @param integer $limit
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
}
