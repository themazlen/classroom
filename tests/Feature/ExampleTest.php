<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use database\factories\UserFactory;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHasAnIndexPage()
    {
        $response = $this->get('/');

        $response->assertOk();
    }

    public function testFooPageDoesNotExist()
    {
        $this->get('foo')->assertNotFound();
    }



//    public function testItShowsTheFirstUser()
//    {
//        //create a user
//        $user = User::factory()->create();
//
//        $response = $this->get('/');
//        $response->assertOk();
//
//        $response->assertSee($user->name);
//    }


