<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 24.03.19
 * Time: 16:02
 */

echo "<p>28. Вывести таблицу умножения с помощью двух циклов for.</p> \n";
?>

<table class="table table-bordered">
    <caption>Таблица умножения</caption>
    <tr>
        <th class="text-right">&nbsp;</th>
        <th class="text-right">2</th>
        <th class="text-right">3</th>
        <th class="text-right">4</th>
        <th class="text-right">5</th>
        <th class="text-right">6</th>
        <th class="text-right">7</th>
        <th class="text-right">8</th>
        <th class="text-right">9</th>
    </tr>
    <?php for ($i = 2; $i <= 9; $i++) : ?>
        <tr>
            <?= "<th class=\"text-right\">{$i}</th>" ?>
            <?php for ($j = 2; $j <= 9; $j++) : ?>
                <?= '<td class="text-right">' . $i * $j . '</td>' ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>