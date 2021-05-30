<?php

function HighAndLow($numbers) {
    $integers = explode(" ", $numbers);
    return max($integers) . " " . min($integers);
}

echo HighAndLow("1 2 3 4 5");