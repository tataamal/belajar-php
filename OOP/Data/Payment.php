<?php

namespace studycase\DigitalPayment{
    abstract class PaymentMethod
    {
        public string $paymentName;

        public function __construct(string $paymentName)
        {
            $this->paymentName = $paymentName;
        }
        public function paymentProccess(PaymentMethod $payment, $transaksi)
        {
            if ($payment instanceof BankTransfer) {
                $totalTransaksi = $transaksi + 5000;
                echo "Total Transaksi anda adalah {$totalTransaksi}" . PHP_EOL;
            } else if ($payment instanceof eWallet) {
                echo "Total Transaksi anda adalah {$transaksi}"  . PHP_EOL;
            } else if ($payment instanceof CreditCard) {
                $admin = 0.02 * $transaksi;
                $totalTransaksi = $transaksi + $admin;
                echo "Total Transaksi anda adalah {$totalTransaksi}"  . PHP_EOL;
            }
        }
    }

    class BankTransfer extends PaymentMethod
    {

    }

    class eWallet extends PaymentMethod
    {
        
    }

    class CreditCard extends PaymentMethod
    {
        
    }
}