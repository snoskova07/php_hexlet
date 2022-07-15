<?php

use MyApp\Tasks\Ticket;
use PHPUnit\Framework\TestCase;


class TicketTest extends TestCase
{
    /**
     * @dataProvider ticketProvider
     */
    public function testTicketUsingProvider(string $a, bool $expected)
    {
        $bs = new Ticket();
        self::assertEquals($expected, $bs->isHappy($a));
    }

    public function ticketProvider(): array
    {
        return [
            ['385916', true],
            ['231002', false],
            ['1222q', false],
            ['054702', true],
            ['002', false],
        ];
    }
}
