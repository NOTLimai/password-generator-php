<?php
use PHPUnit\Framework\TestCase;

require_once('index.php');

class CanEnterTest extends TestCase
{
    // Test for age 18 and above
    public function testCanEnter()
    {
        $this->assertEquals('You can enter', can_enter(18));
        $this->assertEquals('You can enter', can_enter(20));
    }

    // Test for age 16 and 17
    public function testMustBe()
    {
        $this->assertEquals('You must be accompanied by an adult', can_enter(16));
        $this->assertEquals('You must be accompanied by an adult', can_enter(17));
    }

    // Test for age below 16
    public function testCannotEnter()
    {
        $this->assertEquals('You cannot enter', can_enter(15));
        $this->assertEquals('You cannot enter', can_enter(10));
    }
}