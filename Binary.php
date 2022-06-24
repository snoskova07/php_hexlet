<?php

/*
Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

class Binary
{
    public function binarySum(string $a, string $b): string
    {
        $sumDec = bindec($a) + bindec($b);
        return decbin($sumDec);
    }
}
