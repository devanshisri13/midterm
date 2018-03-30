<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

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
}
