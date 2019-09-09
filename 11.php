<?php
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

echo 'Всем сотрудникам у кого ЗП меньше 1600 добавить 100:<br>';

function addSalery($val)
{
    if ($val['salery'] < 1600) {

        echo '<tr><td>' . $val['name'] . ':</td><td>' . $val['salery'] . '</td></tr> <br>';
        return $val['salery'] + 100;
    }
}

$addsalery = array_map("addSalery", $arr);
print_r($addsalery);

echo '<br>Всем сотрудникам кто работал больше 180 часов, добавить премию 20%:<br>';

function addPrice($val)
{
    if ($val['work_hours'] > 180) {

        echo '<tr><td>' . $val['name'] . ':</td><td>' . $val['salery'] . '</td></tr> <br>';
        return $val['salery'] + $val['salery'] * 20 / 100;
    }
}
$addprice = array_map("addPrice", $arr);
print_r($addprice);



echo '<br>Сотрудники которые отработали меньше 160 часов:<br>';

function hours($var)
{
    if ($var['work_hours'] < 160)

        echo '<tr><td>' . $var['name'] . ':</td><td>' . $var['work_hours'] . '</td></tr> <br>';

}

array_filter($arr, "hours");

echo 'Работники з/п у которых меньше 2000:<br>';

function salery($var)
{
    if ($var['salery'] < 2000)


        echo '<td>' . $var['name'] . ':</td><td>' . $var['salery'] . '</td><br>';

}

array_filter($arr, "salery");
