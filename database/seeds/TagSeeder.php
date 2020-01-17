<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTag('Blade');
        $this->createTag('Laravel');
        $this->createTag('Php');
        $this->createTag('Eloquent');
        $this->createTag('Lumen');
        $this->createTag('Homestead');
        $this->createTag('Arcitecture');
        $this->createTag('Dusk');
        $this->createTag('Cache');
    }

    /**
     * Create a new tag using TagFactory.
     *
     * @param string $name
     * @return void
     */
    public function createTag($name)
    {
        return factory(Tag::class)->create(compact('name'));
    }
}
