<?php

require 'Ticket.php';

$obj = new Ticket();

var_dump($obj->isHappy('385916')); // true
var_dump($obj->isHappy('231002')); // false
var_dump($obj->isHappy('1222q')); // false
var_dump($obj->isHappy('054702')); // true
var_dump($obj->isHappy('002')); // false
