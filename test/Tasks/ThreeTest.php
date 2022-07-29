<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Three;

class ThreeTest extends TestCase
{
    public function testThreeSuccess(): void
    {
        $obj = new Three();
        $expected = true;
        $obj->isPowerOfThree(81);
        self::assertEquals($expected, $obj->isPowerOfThree(81));
    }

    public function testThreeFailed(): void
    {
        $obj = new Three();
        $expected = false;
        $obj->isPowerOfThree(81);
        self::assertEquals($expected, $obj->isPowerOfThree(99));
    }
}
