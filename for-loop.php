<?php

// for ($i = 0; $i < 10; $i++) {
//     echo "Perulangan ke-$i" . PHP_EOL;
// }

$nama_siswa = ["Budi", "Siti", "Joko", "Ani"];

for ($i = 0; $i < count($nama_siswa); $i++) {
    echo "Nama siswa ke-$i: " . $nama_siswa[$i] . PHP_EOL;
}