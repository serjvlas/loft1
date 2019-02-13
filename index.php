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
define("FLOMASTER", 23);
define("KARANDASH", 40);
define("SUMM", 80);
$kraski = SUMM - KARANDASH - FLOMASTER;
echo SUMM . '-' . KARANDASH . '-' . FLOMASTER . '=' . $kraski;