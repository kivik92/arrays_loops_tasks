<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 18.03.19
 * Time: 19:19
 */
echo "<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>\n arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); \n";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $i => $value){
    echo "First cycle: $i \n";
}
foreach ($arr as $t => $key){
    echo "Second cycle: $t \n";
}
