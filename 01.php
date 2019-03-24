<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 16:06
 */
echo "<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. 
С помощью цикла foreach выведите эти слова в столбик.</p>\n";
$arr =  array('html', 'css', 'php', 'js', 'jq');
echo "Выводжу в столбик: \n";
foreach ($arr as $value){

    echo "$value \n";
}