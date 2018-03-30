<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterFeature()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);

    }
    public function testLoginFeature()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

    }
}
