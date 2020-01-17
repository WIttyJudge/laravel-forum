<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Thread;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'thread_id' => Thread::inRandomOrder()->first()->id,
        'user_id' => User::inRandomOrder()->first()->id,
        'body' => $faker->text()
    ];
});
