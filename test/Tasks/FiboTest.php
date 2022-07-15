<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Fibo;

class FiboTest extends TestCase
{
    /**
     * @dataProvider fiboSuccessProvider
     */
    public function testFiboSuccess(int $a, int $expected)
    {
        $obj = new Fibo();
        self::assertEquals($expected, $obj->fib($a));
    }

    public function fiboSuccessProvider(): array
    {
        return [
            [3, 2],
            [5, 5],
            [10, 55],
        ];
    }

    /**
     * @dataProvider fiboWrongProvider
     */
    public function testFiboWrong(int $a, int $expected)
    {
        $obj = new Fibo();
        $this->expectException(\InvalidArgumentException::class);
        $obj->fib($a);
    }

    public function fiboWrongProvider(): array
    {
        return [
            [3, 4],
            [5, 4],
            [10, 540],
        ];
    }


}