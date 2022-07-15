<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Digits;

class DigitsTest extends TestCase
{
    public function testDigitsSuccess()
    {
        $obj = new Digits();
        $expected = 5;
        $actual = $obj->addDigits(7007);

        self::assertEquals($expected, $actual);
    }

}
