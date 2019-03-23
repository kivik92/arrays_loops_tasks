<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 23.03.19
 * Time: 19:31
 */
echo "<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p> \n";
$arr =  array(1 => "понеділок", "вівторок", "середа", "четвер", "пятниця", "субота","неділя" );
$weekend = array("субота","неділя");
foreach ($arr as  $value) {
    echo in_array($value, $weekend) ? "<strong>{$value}</strong><br>\n" : "{$value}<br>\n";
}
