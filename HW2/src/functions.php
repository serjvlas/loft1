<?php
$stringArr = [1, 2, 3, 4, 5];
function task1 ($stringArr, $var) {
    foreach ($stringArr as $value) {
        echo "<p>$value</p>";
        if ($var == true) {
           $var = implode($stringArr);
           return $var;
        }
    }
}
task1($stringArr, null);
task1($stringArr, 5);
