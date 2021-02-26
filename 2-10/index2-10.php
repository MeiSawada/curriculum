<?php

function Rectangular($width, $length, $height) {
    $volume = $width * $length * $height;
    print $volume."cm^3";
}

echo Rectangular(5, 10, 8);

