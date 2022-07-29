<?php

namespace MyAppTests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Tasks\Brackets;

class BracketsTest extends TestCase
{
    public function testBracketsFalse(): void
    {
        $bracket = new Brackets();

        $arr = array('())(', ')(', '((())', '()]');
        foreach ($arr as $value) {
            $expected = false;
            $actual = $bracket->isBalanced($value);
        }

        self::assertEquals($expected, $actual);
    }

    public function testBracketsTrue(): void
    {
        $bracket = new Brackets();

        $arr = array('(())');
        foreach ($arr as $value) {
            $expected = true;
            $actual = $bracket->isBalanced($value);
        }

        self::assertEquals($expected, $actual);
    }

}
