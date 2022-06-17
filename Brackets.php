<?php
/*
 * Реализуйте функцию isBalanced(), которая принимает на вход строку,
 * состоящую только из открывающих и закрывающих круглых скобок, и проверяет, является ли эта
 * строка корректной. Пустая строка (отсутствие скобок) считается корректной.

Строка считается корректной (сбалансированной), если содержащаяся в ней скобочная структура
соответствует требованиям:

Скобки — это парные структуры. У каждой открывающей скобки должна быть соответствующая ей
 закрывающая скобка.
Закрывающая скобка не должна идти впереди открывающей. Такой вариант недопустим )(,
а вот такой допустим ()().
*/

function isBalanced($string)
{
    $open = 0;
    $close = 0;
    $lengthOfString = strlen($string);

    if ($string[0] === ')' || $string[$lengthOfString - 1] === '(') {
        return false;
    }

    for ($i = 0; $i < $lengthOfString; $i++) {
        if ($string[$i] !== ')' && $string[$i] !== '(') {
            return false;
        } elseif ($string[$i] === '(') {
            $open += 1;
        } elseif ($string[$i] === ')') {
            $close += 1;
        }
    }

    if ($open !== $close) {
        return false;
    }
    else {
        return true;
    }
}

var_dump(isBalanced('())('));  // false
var_dump(isBalanced('(())'));  // true
var_dump(isBalanced(')('));  // false
var_dump(isBalanced('((())')); // false
var_dump(isBalanced('()]')); // false
