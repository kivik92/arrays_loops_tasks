<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 16:13
 */
echo "<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. 
С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат запишите переменную result.</p> \n";
$result = 0;
$arr =  array(26, 17, 136, 12, 79, 15);
foreach ($arr as $value){
    $result += $value ** 2;
}
echo "$result \n";