<?php

/*
Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной
степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвёртая (34).
*/

function isPowerOfThree($num)
{
    while ($num / 3 >= 1 && $num % 3 === 0) {
        $num /= 3;
    }
    return $num === 1;
}

var_dump(isPowerOfThree(81));
