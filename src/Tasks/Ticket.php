<?php

/*
Реализуйте функцию isHappy, проверяющую является ли номер счастливым
(номер — всегда строка). Функция должна возвращать true, если билет счастливый, или false, если нет.
*/

namespace MyApp\Tasks;

class Ticket
{
    public function isHappy(string $ticket): bool
    {
        $ticketLength = strlen($ticket);
        if (is_numeric($ticket) === false) {
            return false;
        }
        if ($ticketLength % 2 === 0) {
            $sum1 = 0;
            $sum2 = 0;
            $iterations = $ticketLength / 2;
            for ($i = 0; $i < $iterations; $i++) {
                $sum1 += $ticket[$i];
            }
            for ($i = $iterations; $i < $ticketLength; $i++) {
                $sum2 += $ticket[$i];
            }
            return $sum1 === $sum2;
        }
        return false;
    }
}
