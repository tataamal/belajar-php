<?php

// ternary operator digunakan untuk menyederhanakan percabangan if-else yang sederhana.
// $gaji = 3000000;
// $tabungan = 500000;

// $uang_jajan = ($gaji >= $tabungan) ? "Bisa beli makan mewah" : "Tidak bisa beli makan";
// echo $uang_jajan . PHP_EOL;

// null coalescing operator

$data = [];

// if (isset($data['nama'])) {
//     echo $nama = $data['nama'];
// } else {
//     echo $nama = "Tidak ada nama";
// }

$nama = $data['nama'] ?? "Tidak ada nama";
echo $nama . PHP_EOL;