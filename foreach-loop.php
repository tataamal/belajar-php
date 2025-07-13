<?php

// looping tanpa foreach
$absensi = [
    'Asep',
    'Budi',
    'Cici',
    'Dodi',
];

// for($index = 0; $index < count($absensi); $index++) {
//     echo "Siswa dengan absensi {$index} adalah " . $absensi[$index] . PHP_EOL;
// }

// looping dengan foreach\
foreach ($absensi as $index => $siswa) {
    echo "Siswa dengan absensi {$index} adalah {$siswa}" . PHP_EOL;
}