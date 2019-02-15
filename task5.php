<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Avensis',
    'speed' => 200,
    'doors' => 4,
    'year' => 2010
];

$opel = [
    'model' => 'Kadet',
    'speed' => 130,
    'doors' => 3,
    'year' => 2000
];

$auto = [
    'Bmw' => $bmw,
    'Toyota' => $toyota,
    'Opel' => $opel
];
foreach ($auto as $brand => $car) {
    echo "CAR $brand <br /> {$car['model']} {$car['speed']} {$car['doors']} {$car['year']} <br />";
}
