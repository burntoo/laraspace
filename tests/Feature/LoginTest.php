<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testLoginDetails(){

        $response = $this->post("/login", [
            'email' => 'test@test.com',
            'password' => 'test123'
        ]);

        $response->assertRedirect("/admin");
    }
}
