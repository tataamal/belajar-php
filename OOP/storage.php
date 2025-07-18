<?php

require_once "Data/get_set.php";

$bambu = new storage();
$bambu->setName("Bambu");
$bambu->setId("001");
$bambu->setStok(300);
$bambu->setSedia(true);
// if ($bambu->isSedia() == true){
//     $status = "Stok masih tersedia";
// } else if ($bambu->isSedia() == false) {
//     $status = "Stok sudah habis";
// }

echo "Selamat datang di database gudang toko rokhis" . PHP_EOL;
echo "ID Barang : {$bambu->getId()}" . PHP_EOL;
echo "Nama Barang :  {$bambu->getName()}" . PHP_EOL;
echo "Jumlah Stok Barang : {$bambu->getStok()}" . PHP_EOL;
echo "Ketersediaan barang : " . $bambu->status($bambu->isSedia()) . PHP_EOL;



