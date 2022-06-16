<?php

Function binarySum ($a, $b) {
    $sum_dec = bindec($a) + bindec($b);
    return decbin($sum_dec);
}

print_r(binarySum('10', '1') . "\n");
var_dump(binarySum('1101', '101'));
