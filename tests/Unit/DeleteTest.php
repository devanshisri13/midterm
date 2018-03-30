<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

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
        public function testDeleteCarUnit()
    {
        $car = new car();
        $car->Make = 'honda';
        $car->Model = 'b';
        $car->year = '1969';
        $car->save();
        $this->assertTrue($car->delete());
    }
}
