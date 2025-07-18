<?php

require_once "Class/payment_v2.php";

$transaksi1 = new Dana();
$transaksi1->total_belanja(10000000);

$transaksi2 = new Gopay();
$transaksi2->total_belanja(50000);