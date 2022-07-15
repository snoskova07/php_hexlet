<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Binary;

class BinaryTest extends TestCase
{
    public function testBinarySimple()
    {
        $bs= new Binary();
        $a = '101';
        $b = '001';
        $expected = '110';
        $actual = $bs->binarySum($a, $b);

        self::assertEquals($expected, $actual);
    }

    /**
     * @dataProvider binarySumProvider
     */
    public function testBinaryUsingProvider(string $a, string $b, string $expected)
    {
        $bs= new Binary();
        self::assertEquals($expected, $bs->binarySum($a, $b));
    }

    public function binarySumProvider(): array
    {
        return [
            ['101', '001', '110'],
            ['100', '001', '101'],
            ['1', '0', '1'],
        ];
    }

    /**
     * @dataProvider binaryWrongProvider
     */
    public function testBinaryWrong(string $a, string $b)
    {
        $bs = new Binary();
        $this->expectException(\InvalidArgumentException::class);
        $bs->binarySum($a, $b);

    }

    public function binaryWrongProvider()
    {
        return [
            ['', '1'],
            ['0', ''],
            ['', ''],
        ];
    }   
    
    
}
