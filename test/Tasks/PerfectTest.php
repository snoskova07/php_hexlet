<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Perfect;

class PerfectTest extends TestCase
{
    public function testSuccess(): void
    {
        $obj = new Perfect();
        $expected = true;
        self::assertEquals($expected, $obj->isPerfect(6));
    }

    public function testFailed(): void
    {
        $obj = new Perfect();
        $expected = false;
        self::assertEquals($expected, $obj->isPerfect(126));
    }
}
