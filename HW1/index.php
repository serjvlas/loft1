<?php
//Задание 1
$name = 'Сергей';
$age = '28';
echo "Меня зовут: $name <br>";
echo "Мне $age лет <br>";
$a = '"!|\/\'';
$b = "\"\\";
echo $a;
echo "$b <br>";
//Задание 2
define("MARKER", 23);
define("PENCIL", 40);
define("PICTURES", 80);
$paints = PICTURES - PENCIL - MARKER;
echo PICTURES . '-' . PENCIL . '-' . MARKER . '=' . $paints;