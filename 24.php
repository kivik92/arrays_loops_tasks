<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 14:33
 */
echo "<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.</p>\n";
$number = 442158755745;
$test2 = 4;
$test1 = str_split($number);
$counts = array_count_values($test1);
var_dump($counts);
$count = isset($counts[$test2]) ? $counts[$test2] : 0;
echo "Число 4 повторяется: $count раза \n";
