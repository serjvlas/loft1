<?php
$stringArr = [1, 2, 3, 4, 5];
function task1($stringArr, $glue)
{
    foreach ($stringArr as $string) {
        echo "<p>$string</p>";
    }
    if ($glue == true) {
        return implode(',', $stringArr);
    }
}
task1($stringArr, true);

function task3 ($a,$b)
{
    if (!(($a = (int)$a) > 0) || !(($b = (int)$b) > 0)) {
        die ("ОШИБКА! Функция принимает только  целіе числа");
    }
    echo '<table border ="1">';
    for ($i = 1; $i <= $a; $i++) {
        echo '<tr>';
        for ($x = 1; $x <= $b; $x++) {
            echo '<td>' . $i * $x . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
task3(2,3);