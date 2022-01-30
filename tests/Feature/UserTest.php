<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_login_duplication()
    {
        $user1 = User::make([
           'name' => 'Dejan Rajin',
            'email' => 'drajin@gmail.com'
        ]);
        $user2 = User::make([
            'name' => 'John Reed',
            'email' => 'jreed@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);

    }

    public function test_delete_user()
    {
        User::factory()->count(1)->make();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);

    }

    public function test_it_stores_new_users()
    {
        $response = $this->post('/register', [
            'name' => 'Dianna Horvat',
            'email' => 'drajin@gmail.com',
            'password' => '11111111',
            'password_confirmation' => '11111111',
        ]);

        $response->assertRedirect('/home');
    }

    public function test_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'Dianna Horvat',
        ]);
    }

    public function test_if_seeders_works()
    {
        $this->seed();
    }

}
