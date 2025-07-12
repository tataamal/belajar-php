<?php

$penumpang_angkot = ["Budi", "Siti", "Joko", "Ani", "Doni"];

// while (count($penumpang_angkot) > 0) {
//     $penumpang = array_shift($penumpang_angkot);
//     echo "Penumpang yang turun: " . $penumpang . PHP_EOL;
// }

// // do while loop digunakan untuk menjalankan blok kode setidaknya sekali,

// do {
//     $penumpang = array_shift($penumpang_angkot);
//     echo "Penumpang yang turun: " . $penumpang . PHP_EOL;
// } while (count($penumpang_angkot) > 0);

// break and continue dalam while loop
while (true){
    $penumpang = array_shift($penumpang_angkot);
    
    if ($penumpang === null) {
        break; // keluar dari loop jika tidak ada penumpang
    }
    
    if ($penumpang === "Joko") {
        continue; // lewati penumpang Joko
    }
    
    echo "Penumpang yang turun: " . $penumpang . PHP_EOL;
}