<?php

function number($a)
{
    echo $a % 10 . "<br>";
    if ($a > 9) {
        number($a / 10);
    }
}

number(5671);