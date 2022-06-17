<?php

/*
Реализуйте функцию isHappy, проверяющую является ли номер счастливым
(номер — всегда строка). Функция должна возвращать true, если билет счастливый, или false, если нет.
*/

function isHappy($ticket)
{
    $ticketLength =  strlen($ticket);
    if (is_numeric($ticket) === false) {
       // print_r ("Билет {$ticket} - не число...\n");
        return false;
    } elseif ($ticketLength % 2 === 0) {
          $sum1 = 0;
          $sum2 = 0;
          $iterations = $ticketLength / 2;
          for ($i = 0; $i < $iterations; $i++) {
              $sum1 += $ticket[$i];
          }
          for ($i = $iterations; $i < $ticketLength; $i++) {
              $sum2 += $ticket[$i];
          }
          if ($sum1 === $sum2) {
          // print_r("Билет {$ticket} - счастливый\n");
              return true;
          } else {
          // print_r("Билет {$ticket} - не счастливый\n");
              return false;
          }
    } else {
    // print_r("Билет {$ticket} - нечетное число\n");
        return false;
    }
}

var_dump(isHappy('385916')); // true
var_dump(isHappy('231002')); // false
var_dump(isHappy('1222q')); // false
var_dump(isHappy('054702')); // true
var_dump(isHappy('002')); // false
