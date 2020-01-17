<?php

use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thread = factory(Thread::class, 30)->create();
        $thread->last()->tags()->attach(1);
    }
}
