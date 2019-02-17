<?php
echo '<table border="1">';
for ($tr = 1; $tr <= 10; $tr++) {
    echo '<tr>';
    for ($td = 1; $td <= 10; $td++) {
        $result = $tr * $td;
        if (($tr * $td) % 2) {
        echo '<td>' . "[$result]" .'</td>';
        }
            else {
                echo '<td>' . "($result)" .'</td>';
            }
    }
    echo '</tr>';
}
echo '</table>';
