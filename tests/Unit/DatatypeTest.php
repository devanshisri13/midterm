<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DatatypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

        public function testCarYearInteger()
    {
        $car = car::find(10);
        $car_year = (int)$car->year;
        $this->assertInternalType('integer', $car_year);
    }
    public function testCheckCarMake()
    {
        $car=car::find(18);
        $car_make=$car->Make;
        $this->assertContains($car_make,['ford','honda','toyota']);
    }


}
