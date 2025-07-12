<?php

// echo "Hello, World! This is a PHP script\n";

// // tipe data numeber
// echo "Decimal :";
// var_dump(12345);
// echo "Hexadecimal :";
// var_dump(0x3039);
// echo "Binary :";
// var_dump(0b110000011001);
// echo "Octal :";
// var_dump(0o30071);

// // floating point numbers
// echo "Floating point number :";
// var_dump(123.456);
// echo"floating point with e-notation :";
// var_dump(1.23456e2);
// echo "floating point with e-notation negative exponent :";
// var_dump(1.23456e-2);

// // tipe data boolean
// echo "Boolean true :";
// var_dump(true);
// echo "Boolean false :";
// var_dump(false);

// // tipe data string
// echo "String single quotes :";
// var_dump('Hello, World!');
// echo "String double quotes :";
// var_dump("Hello, World!");
// echo "String with escape sequences :";
// var_dump("Hello, World!\nThis is a new line.\tAnd this is a tab.");
// // string with variable interpolation
// $name = "World";
// echo "String with variable interpolation :";
// var_dump("Hello, $name!");

// echo <<<TEXT
// This is a heredoc string.
// It can span multiple lines and supports variable interpolation.
// strings can be enclosed in double quotes.
// TEXT;

// // variable
// $name = "John Doe";
// $address = "123 Main St, Anytown, USA";
// $job = "Software Engineer";

// echo "Hello my name is $name.\n I live at $address.\n I work as a $job.\n";

// // constant variable
// define("PI", 3.14159);
// echo "The value of PI is " . PI . "\n";
// // using constant variable
// echo "The value of PI squared is " . (PI * PI) . "\n";

// // Data null
// $feature_jobs = null;
// // echo "The value of feature_jobs is $feature_jobs\n";

// // function is_null()
// echo is_null($feature_jobs) ? "feature_jobs is null\n" : "feature_jobs is not null\n";

// tipe data array
// $fruits = ["apple", "banana", "cherry"];

// // array with associative keys
// $bio = [
//     "name" => "John Doe",
//     "age" => 30,
//     "address" => [
//         "street" => "123 Main St",
//         "city" => "Anytown",
//         "country" => "USA"
//     ],
//     "job" => "Software Engineer",
// ];
// unset($bio["age"]);

// var_dump($bio['address']['country']);

// foreach ($bio as $key => $value) {
//     echo "$key: $value\n";
// }

// aritmatika operators
// function penjumlahan($a, $b) {
//     return $a + $b;
// }
// function pengurangan($a, $b) {
//     return $a - $b;
// }
// function perkalian($a, $b) {
//     return $a * $b;
// }

// function pembagian($a, $b) {
//     if ($b == 0) {
//         return "Error: Division by zero";
//     }
//     return $a / $b;
// }

// function modulus($a, $b) {
//     return $a % $b;
// }
// function pangkat($a, $b) {
//     return pow($a, $b);
// }

// echo $penjumlahan = penjumlahan(10, 5) . "\n";
// echo $pengurangan = pengurangan(10, 5) . "\n";
// echo $perkalian = perkalian(10, 5) . "\n";
// echo $pembagian = pembagian(10, 5) . "\n";
// echo $modulus = modulus(10, 5) . "\n";
// echo $pangkat = pangkat(10, 5) . "\n";