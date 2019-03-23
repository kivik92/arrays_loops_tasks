<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 23.03.19
 * Time: 18:28
 */
echo "<p>15. Дан массив arr. С помощью цикла foreach и переменной count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</p>\n";
$count = 0;
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ( $arr as $count =>$key ) {
$count++;
}
echo "$count \n";
