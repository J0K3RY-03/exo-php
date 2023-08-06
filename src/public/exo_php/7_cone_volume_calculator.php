<?php
function calculate_cone_volume($ray, $height){
    $pi = 3.14;
    $volume = $ray * $ray * $pi * $height * (1/3);
    echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' = ' . $volume . ' cm<sup>3</sup><br />';
}

calculate_cone_volume(5,2);