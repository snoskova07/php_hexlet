<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Digits;

class DigitsTest extends TestCase
{
    /**
     * @dataProvider digitsProvider
     */
    public function testDigitsSuccess(int $a, int $expected)
    {
        $obj = new Digits();
        self::assertEquals($expected, $obj->addDigits($a));
    }

    public function digitsProvider(): array
    {
        return [
            [7007, 5],
            [919, 1],
            [7, 7],
            [10, 1],
        ];
    }

}
