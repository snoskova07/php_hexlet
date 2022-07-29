<?php

/*
Реализуйте функцию fib(), находящую положительные числа Фибоначчи.
Аргументом функции является порядковый номер числа.
Формула: каждое последующее число является суммой двух предыдущих:
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55
f(n) = f(n-1) + f(n-2)
*/

namespace MyApp\Tasks;

class Fibo
{
    public function fib(int $number): int
    {
        $sum = 0;
        $sum2 = 1;

        for ($i = 0; $i < $number; $i++) {
            $perv0 = $sum2;
            $sum2 = $sum;
            $sum = $perv0 + $sum2;
        }

        return $sum;
    }
}
