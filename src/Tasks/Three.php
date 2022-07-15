<?php

/*
Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной
степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвёртая (34).
*/

namespace MyApp\Tasks;

class Three
{
    public function isPowerOfThree(int $num): bool
    {
        while ($num / 3 >= 1 && $num % 3 === 0) {
            $num /= 3;
        }
        return $num === 1;
    }
}
