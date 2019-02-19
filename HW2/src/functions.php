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

function task2 ($operator)
{
    $a1 = func_get_args();
    switch ($a1[0]) {
        case "+":
            array_shift($a1);
            $sum = 0;
            foreach($a1 as $value) {
                $sum = $sum + $value;
            }
            echo $sum . '=';
            break;
        case "-":
            array_shift($a1);
            foreach($a1 as $key => $value) {
                if ($key == 0) {
                    $dif = $value;
                }
                else {
                    $dif = $dif - $value;
                }
            }
            echo $dif . '=';
            break;
        case "/":
            array_shift($a1);
            $divide = 0;
            foreach($a1 as $key => $value) {
                if ($value == 0) {
                    echo 'На ноль делить нельзя!';
                    die;
                }
                if ($key == 0) {
                    $divide = $value;
                }
                else {
                    $divide = $divide / $value;
                }
            }
            echo $divide . '=';
            break;
        case "*":
            array_shift($a1);
            foreach($a1 as $key => $value) {
                if ($key == 0) {
                    $multi = $value;
                }
                else {
                    $multi = $multi * $value;
                }
            }
            echo $multi . '=';
            break;
    }
    echo implode("$operator", $a1);
}

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

function task4 () {
    echo date('d.m.Y H:i') . "</br>";
    echo 'Нужная нам дата:' . date('d.m.Y H:i', strtotime('-3 years, +5 days, -11 hours, -18 minutes')) . "\n";
}

function task5 () {
    $string = 'Карл у Клары украл Кораллы';
    $result = str_replace('К', '', $string);
    echo $result . "<br />";
    $stringTwo = 'Две бутылки лимонада';
    $resultTwo = str_replace('Две', 'Три', $stringTwo);
    echo $resultTwo;
}

function task6 () {
    $test = 'Hello again!';
    file_put_contents('test.txt', $test);
    echo file_get_contents('test.txt');
}
