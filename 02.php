<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 16:10
 */
echo "<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. 
С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную result.</p>\n";
$result = 0;
$arr = array(1, 20, 15, 17, 24, 35);
foreach ($arr as $value){
    $result = $result + $value;
}
echo "$result\n";