<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Fzbz;

class FzbzTest extends TestCase
{
    public function fzbzSuccessTest()
    {
        $fz = new fizzBuzz(2,21);
        $expected = '2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz';
        self::assertEquals($expected, $fz);
    }

}
