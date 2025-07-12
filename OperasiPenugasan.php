<?php
// Program Kasir Sederhana
$totalBelanja = 0;
$struk_belanja = "";
$stok_surya = 100;
$stok_malboro = 50;
$stok_djarumCoklat = 75;
$stok_diplomat = 30;

// // Pembelian pertama : surya
// $nama_barang = "Surya";
// $harga_barang = 2000;
// $totalBelanja += $harga_barang;
// $stok_surya -= 1;
// $struk_belanja .= "$nama_barang - Rp$harga_barang\n";

// Pembelian kedua : malboro
$nama_barang = "Surya";
$harga_barang = 50.000;
$totalBelanja += $harga_barang;
$stok_malboro -= 10;
$struk_belanja .= "$nama_barang - Rp$harga_barang\n";
// Cetak hasil
echo "=== Struk Belanja ===\n";
echo $struk_belanja;
echo "Total: Rp$totalBelanja\n\n";
echo "Sisa Stok:\n";
echo "Rokok Surya : $stok_surya\n";
echo "Rokok malboro : $stok_malboro\n";
echo "Rokok djarumCoklat : $stok_surya\n";
echo "Rokok diplomat : $stok_diplomat\n";






