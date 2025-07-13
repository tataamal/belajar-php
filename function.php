<?php

function calculateLuckyNumber($number):string {
    if ($number % 2 == 0) {
        return "Lucky number is even: {$number}";
    } else {
        return "Lucky number is odd: {$number}";
    }
}

function displayLuckyNumbers($numbers) {
    foreach ($numbers as $number) {
        echo calculateLuckyNumber($number) . PHP_EOL;
    }
}

displayLuckyNumbers([1, 2, 3, 4, 5]);
?>