<?php

/*
 * Создайте функцию isPerfect, которая принимает число и возвращает true,
 если оно совершенное, и false — в ином случае.

Совершенное число — это положительное целое число, равное сумме его положительных
 делителей (не считая само число). Например, 6 — совершенное число, потому что 6 = 1 + 2 + 3.
6,
28,
496,
8128,
33 550 336,
*/

namespace MyApp\Tasks;

class Perfect
{
    public function isPerfect(int $number): bool
    {
        $sum = 0;
        for ($i = 1; $i < $number; ++$i) {
            if ($number % $i === 0) {
                $sum += $i;
            }
        }
        return $sum === $number;
    }
}