<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 15:02
 */
echo "<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p> \n";
$data = rand();
var_dump($data);
$arr = str_split($data);

// Находим максимальное и минимальное значения
$indexMax = array_search(max($arr), $arr);
$indexMin = array_search(min($arr), $arr);
echo "<p>Максимальное значение: {$arr[$indexMax]}</p>";
echo "<p>Минимальное значение: {$arr[$indexMin]}</p>";


$arr[$indexMax] = $arr[$indexMax] + $arr[$indexMin] - ($arr[$indexMin] = $arr[$indexMax]);
echo "<p>Полученный массив\n</p>";
echo '<pre>';
print_r($arr);
echo '</pre>';