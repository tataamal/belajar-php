<?php

$gaji = 1999999;
$tabungan = 500000;

if ($gaji >= $tabungan && $gaji >= 2000000) {
    $beli_makan = "Bisa beli makan mewah";
    echo $beli_makan;
}
else if ($gaji > $tabungan && $gaji >= 1000000) {
    $beli_makan = "Bisa beli makan tapi harus hemat";
    echo $beli_makan;
} else {
    $beli_makan = "Tidak bisa beli makan";
    echo $beli_makan;
}