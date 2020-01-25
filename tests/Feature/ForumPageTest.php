<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ForumTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function forum_page_is_available()
    {
        $response = $this->get(route('forum.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function only_logged_user_can_visit_page_with_creation_of_thread()
    {
        $response = $this->get(route('forum.create'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function authenticated_users_can_see_the_page_of_creation_a_new_thread()
    {
        $this->actingAsNewUser();

        $response = $this->get(route('forum.create'))
            ->assertStatus(200);
    }

    /** @test */
    public function authenticated_users_can_create_the_thread()
    {
        $this->actingAsNewUser();

        $response = $this->post(route('forum.index'), $this->data());

        $this->assertCount(1, Thread::all());
    }

    /** @test */
    public function redirect_after_creating_of_the_new_thread()
    {
        $this->actingAsNewUser();

        $response = $this->post(route('forum.store'), $this->data())
            ->assertRedirect(route('forum.index'));
    }

    /** @test */
    public function a_title_is_required()
    {
        $this->actingAsNewUser();

        $response = $this->post(route('forum.index'), array_merge($this->data(), ['title' => '']));

        $response->assertSessionHasErrors('title');

        $this->assertCount(0, Thread::all());
    }

    /** @test */
    public function a_title_should_has_a_maximum_60_characters()
    {
        $this->actingAsNewUser();

        $response = $this->post(
            route('forum.index'),
            array_merge($this->data(), ['title' => 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttests'])
        );

        $response->assertSessionHasErrors('title');

        $this->assertCount(0, Thread::all());
    }

    /** @test */
    public function a_body_is_required()
    {
        $this->actingAsNewUser();

        $response = $this->post(route('forum.index'), array_merge($this->data(), ['body' => '']));

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
