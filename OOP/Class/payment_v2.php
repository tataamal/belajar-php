<?php

require_once "Interface/interface.php";
use Data\Payment;


class Dana implements Payment
{
    function total_belanja(int $total){
        echo "Transaksi anda menggunakan Dana adalah sebesar {$total} telah berhasil" . PHP_EOL;
    }
}

class Gopay implements Payment
{
    function total_belanja(int $total){
        echo "Transaksi anda menggunakan Gopay adalah sebesar {$total} telah berhasil" . PHP_EOL;
    }
}