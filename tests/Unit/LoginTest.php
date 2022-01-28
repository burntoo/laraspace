<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUrlLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testUrlGithub()
    {
        $response = $this->get('/auth/github');

        $response->assertStatus(200);
    }

    public function testUrlGoogle()
    {
        $response = $this->get('/auth/google');

        $response->assertStatus(200);
    }

    public function testUrlFacebook()
    {
        $response = $this->get('/auth/google');

        $response->assertStatus(200);
    }

    public function testUrlLogin2()
    {
        $response = $this->get('/admin/login-2');

        $response->assertStatus(200);
    }

    public function testUrlLogin3()
    {
        $response = $this->get('/admin/login-3');

        $response->assertStatus(200);
    }

    public function testUrlMaintainance()
    {
        $response = $this->get('/admin/maintenance');

        $response->assertStatus(200);
    }
}
