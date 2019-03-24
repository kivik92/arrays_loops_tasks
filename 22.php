<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 13:58
 */
echo "<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p> \n";
echo "Начало пирамиды: \n";
$str = 'xx';
while (strlen($str) <= 10) {
    echo "{$str}\n";
    $str .= 'xx';}
