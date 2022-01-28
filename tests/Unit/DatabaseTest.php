<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $request = [
            'remember' => '',
            'email' => 'test@test.com',
            'password' => 'test123'
        ];

        $user = User::login($request);

        if($user){
            $this->assertTrue(true);
        }
    }
}
