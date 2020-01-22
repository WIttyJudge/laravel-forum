<?php

namespace Tests\Feature;

use App\Models\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ForumTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_logged_user_can_visit_page_with_creation_of_thread()
    {
        $response = $this->get('/forum/create')
            ->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_users_can_see_the_page_of_creation_a_new_thread()
    {
        $this->actingAsNewUser();

        $response = $this->get('/forum/create')
            ->assertOk();
    }

    /** @test */
    public function authenticated_users_can_create_the_thread()
    {
        $this->actingAsNewUser();

        $response = $this->post('/forum', $this->data());

        $this->assertCount(1, Thread::all());
    }

    /** @test */
    public function redirect_after_creating_of_the_new_thread()
    {
        $this->actingAsNewUser();

        $response = $this->post('/forum', $this->data())
            ->assertRedirect('/forum');
    }

    /** @test */
    public function a_title_is_required()
    {
        $this->actingAsNewUser();

        $response = $this->post('/forum', array_merge($this->data(), ['title' => '']));

        $response->assertSessionHasErrors('title');

        $this->assertCount(0, Thread::all());
    }

    /** @test */
    public function a_title_can_has_a_maximum_60_characters()
    {
        $this->actingAsNewUser();

        $response = $this->post(
            '/forum',
            array_merge($this->data(), ['title' => 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttests'])
        );

        $response->assertSessionHasErrors('title');

        $this->assertCount(0, Thread::all());
    }

    /** @test */
    public function a_body_is_required()
    {
        $this->actingAsNewUser();

        $response = $this->post('/forum', array_merge($this->data(), ['body' => '']));

        $response->assertSessionHasErrors('body');

        $this->assertCount(0, Thread::all());
    }

    /**
     *  Create an user and do active.
     *
     * @return void
     */
    public function actingAsNewUser()
    {
        $newUser = factory(User::class)->create();

        $this->actingAs($newUser);
    }

    /**
     *  Data generator for thread.
     *
     * @return array
     */
    public function data()
    {
        return [
            'title' => 'test title',
            'body' => 'test body'
        ];
    }
}
