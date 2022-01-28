<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testForgotPassword(){
        $response = $this->get('/forgot-password');

        $response->assertStatus(200);
    }

    public function testRegisterDetails(){

        $response = $this->post("/register", [
            'email' => 'test@test.com',
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $response->assertRedirect("/admin");
    }
}
