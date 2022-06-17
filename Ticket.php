<?php

/*
Реализуйте функцию isHappy, проверяющую является ли номер счастливым
(номер — всегда строка). Функция должна возвращать true, если билет счастливый, или false, если нет.
*/

function isHappy($ticket)
{
    if (is_numeric($ticket) === false) {
        print_r ("Билет {$ticket} - не число...\n");
    } elseif (strlen($ticket) % 2 === 0) {
          $sum1 = 0;
          $sum2 = 0;
          $iterations = strlen($ticket) / 2;
          for ($i = 0; $i < $iterations; $i++) {
              $sum1 = $sum1 + $ticket[$i];
          }
          for ($i = $iterations; $i < strlen($ticket); $i++) {
              $sum2 = $sum2 + $ticket[$i];
          }
          if ($sum1 === $sum2) {
              print_r("Билет {$ticket} - счастливый\n");
          } else {
              print_r("Билет {$ticket} - не счастливый\n");
          }
    } else {
        print_r("Билет {$ticket} - нечетное число\n");
    }
}

isHappy('385916'); // true
isHappy('231002'); // false
isHappy('1222q'); // false
isHappy('054702'); // true
isHappy('002'); // true
