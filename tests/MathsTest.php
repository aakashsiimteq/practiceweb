<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MathsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHappyScenario()
    {
        $this->visit('/maths/add?params[]=1&params[]=4&abc=abc&params[]=10')
             ->see('15');
    }

    public function testSadScenario() {
        $this->visit('/maths/add?params[]=abc&params[]=xyx&abc=abc&params[]=pqr')
             ->see('0');
    }

    public function testSadScenario2() {
        $this->visit('/maths/add')
            ->see('You must pass parameters');
    }

}
