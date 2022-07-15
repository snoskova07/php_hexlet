<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Perfect;

class PerfectTest extends TestCase
{
    public function testSuccess()
    {
        $obj = new Perfect();
        $expected = true;
        self::assertEquals($expected, $obj->isPerfect(6));
    }

    public function testFailed()
    {
        $obj = new Perfect();
        $expected = false;
        self::assertEquals($expected, $obj->isPerfect(126));
    }
}
