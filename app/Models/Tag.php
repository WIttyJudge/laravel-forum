<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
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
