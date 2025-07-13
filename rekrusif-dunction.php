<?php
// rekrusif function

// function factorial($n) {
//     if ($n <= 1) {
//         return 1;
//     }
//     return $n * factorial($n - 1);
// }


//string function

$inventory = ['books in the car, but the books is gone', 'pens', 'notebooks'];

var_dump($inventory);
var_dump(explode(",", $inventory[0]));
var_dump(strtolower($inventory[1]));
var_dump(strtoupper($inventory[2]));

