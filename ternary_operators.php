<?php

// ternary operator digunakan untuk menyederhanakan percabangan if-else yang sederhana.
$gaji = 3000000;
$tabungan = 500000;

$uang_jajan = ($gaji >= $tabungan) ? "Bisa beli makan mewah" : "Tidak bisa beli makan";
echo $uang_jajan . PHP_EOL;