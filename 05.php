<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 18.03.19
 * Time: 19:25
 */
echo "<p>5. Дан массив arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'</p> \n";
$arr =  array('Kolya' => 200, 'Vasya' => 300, 'Petya' => 400);
print_r($arr);
foreach ($arr as  $key=> $value){

        echo "$key - зарплата $value долларов\n.";

}