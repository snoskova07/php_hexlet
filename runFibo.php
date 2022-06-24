<?php

require 'Fibo.php';

$obj = new Fibo();

var_dump($obj->fib(3)); // 2
var_dump($obj->fib(5)); // 5
var_dump($obj->fib(10)); // 55
