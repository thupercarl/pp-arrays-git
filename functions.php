<?php

function printArr($x){
    foreach ($x as $value) {
        echo "<p>$value</p>";
    }
}

function largest($y) {
    $currentL = -999999;
    foreach ($y as $value) {
        if($value > $currentL) {
            $currentL = $value;
        }
    }
    echo "<p>largest value: $currentL</p>";
}