<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 23.03.19
 * Time: 20:02
 */
echo "<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной day.</p> \n";
$arr =  array(1 => "понеділок", "вівторок", "середа", "четвер", "пятниця", "субота","неділя" );
$day = $arr[date('N')];
foreach ($arr as $value){
    echo ($value == $day) ? " <em> {$value} </em> \n": "$value\n";
/**if ($value == $day){
    echo "<em>$value</em> \n";

}
else{
    echo "$value \n";
} */
}
