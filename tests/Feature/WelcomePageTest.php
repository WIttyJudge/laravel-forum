<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    /** @test */
    public function welcome_page_is_available()
    {
        $response = $this->get(route('welcome'));

        $response->assertStatus(200);
    }
}
