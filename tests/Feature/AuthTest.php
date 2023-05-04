<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_success_login()
    {
        $response = $this->post(
            "/auth/login",
            [
                "email" => "oreilly.cade@example.net",
                "password" => "123456",
                '_token' => csrf_token()
            ]
        );



        $response->assertSessionHas('success');
    }

    

    public function test_register()
    {
        $loginResponse = $this->post(
            "/auth/signup",
            [
                "email" => fake()->unique()->email(),
                "password" => "123456",
                "password_confirmation" => "123456",
                '_token' => csrf_token()
            ]
        );

        $loginResponse->assertStatus(200);
    }
}
