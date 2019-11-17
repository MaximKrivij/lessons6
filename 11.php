<?php
error_reporting(E_ALL);
$arr = [
    ['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],
];

function addSalery($val)
{
    if ($val['salery'] < 1600) {
        return $val['salery'] + 100;
    }
}

function addPrice($val)
{
    if ($val['work_hours'] > 180) {
        return $val['salery'] + $val['salery'] * 20 / 100;
    }
}

function hours($var)
{
    if ($var['work_hours'] < 160) {
        return $var['work_hours'];
    }
}

function salery($var)
{
    if ($var['salery'] < 2000)
        return $var['salery'];
}

function showWokers($arr)
{
    foreach ($arr as $value) {
        echo 'Name:', $value['name'], '<br>';
        echo 'WorkHours:', $value['work_hours'], '<br>';
        echo 'Salery:', $value['salery'], '<br>';
    }
}

$addSalery = array_filter($arr, "addSalery");
$addPrice = array_filter($arr,"addPrice");
$salery = array_filter($arr, "salery");
$workHours = array_filter($arr, "hours");

echo '<br>Всем сотрудникам кто работал больше 180 часов, добавить премию 20%:<br>';
showWokers($addPrice);

echo '<br>Всем сотрудникам у кого ЗП меньше 1600 добавить 100:<br>';
showWokers($addSalery);

echo '<br>Сотрудники которые отработали меньше 160 часов:<br>';
showWokers($workHours);

echo '<br>Работники з/п у которых меньше 2000:<br>';
showWokers($salery);





