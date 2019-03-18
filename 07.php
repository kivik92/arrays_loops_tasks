<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 18.03.19
 * Time: 20:00
 */

echo "<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p> \n";
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $i){
    if ($i >3  and $i <10){
        var_dump($i);
    }
}