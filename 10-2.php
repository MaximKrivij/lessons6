<?php
$n = 6;
$row = 0;
$k = 1;
$number = 0;

for ($row = 1; $row <= $n; $row++) {
    $number += $k;
    $str = str_repeat($k++, $row);
    echo ' ' . $str . ' <br/>';
    if ($number === $n) {
        break;
    }
}


