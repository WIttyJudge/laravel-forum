<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationPageTest extends TestCase
{
    /** @test */
    public function registration_page_is_available()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }
}
