<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUnit()
    {
        $user = User::find(1);
        $user-> name = ('Steve Smith');
        $this->assertTrue($user->save());

    }
    public function testUpdateCar()
    {
        $car = Car::find(1);
        $car-> year = ('2000');
        $this->assertTrue($car->save());
    }

}
