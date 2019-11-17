<?php
error_reporting(E_ALL);
print <<<HERE
<!DOCTYPE HTML>
<html lang="">
<body>
<table>
  <form action=" " method="POST">
      <td><input type="number" name="number1" placeholder="Введите число1:"></td>
   <td>
       <select size="3" multiple name="operator">
            <option disabled>Выберите оператор</option>
            <option value="add">Сложить</option>
            <option selected value="subtract">Отнять</option>
            <option value="multiply">Умножить</option>
            <option value="divide">Поделить</option>
       </select>
   </td>
   <td><input type="number" name="number2" placeholder="Введите число2:"></td>
   <td><input type="submit" name="submit" value="Посчитать"></td>
  </form>
</table>
</body>
</html>
HERE;

function operation($numOne, $numTwo, $operator)
{
    switch ($operator) {
        case 'add' : return $numOne + $numTwo;
        case 'subtract' : return $numOne - $numTwo;
        case  'multiply' :return $numOne * $numTwo;
        case 'divide' :return $numOne / $numTwo;
        default : echo 'Не верный оператор!';
        break;
    }
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['operator']) and !empty($_POST['number1']) and !empty($_POST['number2'])) {
        $operator = $_POST['operator'];
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        echo 'Результат:', operation($number1, $number2, $operator);
    } else {
        echo 'Укажите все числа и оператор';
    }
}

