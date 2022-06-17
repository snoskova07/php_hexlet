<?php

/*
Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной
степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвёртая (34).
*/

function isPowerOfThree($num)
{
    $chislo = $num;
    $i = 0;

    while ($num / 3 >= 1 && $num % 3 === 0) {
        $num = $num / 3;
        $i = $i + 1;
    }

     if ($num !== 1) {
         var_dump($num);
         return ("Число {$chislo} НЕ является степенью тройки");
     } else {
         return ("Число {$chislo} является {$i} степенью тройки");
     }
}

print_r(isPowerOfThree(81));
