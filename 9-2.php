<?php

function add(int $num1, int $num2)
{
    return $num1 + $num2;
}

function sub(int $num1, int $num2)
{
    return $num1 - $num2;
}

function operation(int $numOne, int $numTwo, string $operator)
{
    switch ($operator) {

        case 'add': return add($numOne, $numTwo);

        case 'sub': return sub($numOne, $numTwo);

    }
}

echo operation(5,3,'add');