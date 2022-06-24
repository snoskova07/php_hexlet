<?php

require 'Brackets.php';

$obj = new Brackets();

var_dump($obj->isBalanced('())('));  // false
var_dump($obj->isBalanced('(())'));  // true
var_dump($obj->isBalanced(')('));  // false
var_dump($obj->isBalanced('((())')); // false
var_dump($obj->isBalanced('()]')); // false
