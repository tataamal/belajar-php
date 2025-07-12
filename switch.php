<?php

$nilai_performa = 85;

switch (true) {
    case ($nilai_performa >= 90):
        echo "Performa sangat baik";
        break;
    case ($nilai_performa >= 75 && $nilai_performa < 90):
        echo "Performa baik";
        break;
    case ($nilai_performa >= 60 && $nilai_performa < 75):
        echo "Performa cukup";
        break;
    default:
        echo "Performa kurang";
}


// switch diigunakan untuk mengelola logika percabangan yang memiliki banyak kondisi.