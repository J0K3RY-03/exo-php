<?php
$temperature = 37;
$maxTemp = 38;
$minTemp = 36;
$doctor = false;

if ($temperature > $maxTemp) {
    echo 'Tu as de la fièvre';
    $doctor = true;
} else if ($temperature < $minTemp) {
    echo 'Tu es en hypothermie';
    $doctor = true;
} else {
    echo 'Tout va bien !';
}
?>