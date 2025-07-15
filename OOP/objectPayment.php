<?php

use studycase\DigitalPayment\BankTransfer;
use studycase\DigitalPayment\eWallet;

require_once"Data/Payment.php";


$user1 = new eWallet("E-Wallet");
$user1->paymentName = "E-Wallet";
$user1->paymentProccess($user1, 100000);

$user2 = new BankTransfer("Banl Transfer");
$user2->paymentName = "Bank Transfer";
$user2->paymentProccess($user2, 100000);
