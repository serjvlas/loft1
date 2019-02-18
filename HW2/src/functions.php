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
