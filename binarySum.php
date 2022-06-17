<?php

/*
Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

function binarySum ($a, $b)
{
    $sum_dec = bindec($a) + bindec($b);
    return decbin($sum_dec);
}

print_r(binarySum('10', '1') . "\n");
var_dump(binarySum('1101', '101'));
