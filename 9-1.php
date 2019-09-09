<?php

function operation(int $numOne, int $numTwo, string $operator)
{
    switch ($operator) {

        case 'add':

            return $numOne + $numTwo;

        case 'subtract':

            return $numOne - $numTwo;

            break;

        case 'multiply':

            return $numOne * $numTwo;

            break;

        case 'divide':

            return $numOne / $numTwo;

            break;
    }

}

print <<<HERE
<table>
  <form action=" " method="POST">
   <td><input type="number" name="number1" placeholder="Введите число1:"></td>
   <td><select size="3" multiple name="operator">
        <option disabled>Выберите оператор</option>
        <option value="add">Сложить</option>
        <option selected value="subtract">Отнять</option>
        <option value="multiply">Умножить</option>
        <option value="divide">Поделить</option>
       </select></td>
   <td><input type="number" name="number2" placeholder="Введите число2:"></td>
   <td><input type="submit" name="submit" value="Отправить"></input></td>
  </form>
</table>
HERE;

if (isset($_POST['submit'])) {
    if (!empty($_POST['operator']) and !empty($_POST['number1']) and !empty($_POST['number2'])) {
        $operator = $_POST['operator'];

        $number1 = $_POST['number1'];

        $number2 = $_POST['number2'];

    } else {

        echo 'Укажите все числа и оператор';

    }
}

echo 'Результат:', operation($number1, $number2, $operator);
