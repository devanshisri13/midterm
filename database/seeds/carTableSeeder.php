<?php

use Illuminate\Database\Seeder;

class carTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Car::class, 50)->create()->each(function ($Car) {
        });
    }
}
