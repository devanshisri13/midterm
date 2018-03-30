<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
$User = new User();
$User->name='Devanshi';
$User->email='devanshi@gmail.com';
$User->password ='Srivastava';
        $this->assertTrue($User->save());
    }
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make='toyota';
        $car->Model='r';
        $car->year ='1998';
        $this->assertTrue($car->save());
    }


}
