<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUserUnit()
    {
        $user = new User();
        $user->name = 'hermoine';
        $user->email = 'hermoine@gmail.com';
        $user->password = 'harrypotter';
        $user->save();
        $this->assertTrue($user->delete());
        $this->assertTrue(true);
    }
}
