<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 18.03.19
 * Time: 20:07
 */
echo "<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'.\n";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = '';
foreach ($arr as $value) {
    $str .= '-'.$value;
}
echo $str.'-';