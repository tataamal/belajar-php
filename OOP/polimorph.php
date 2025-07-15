<?php

require_once "Data/polymorph.php";

$staff1 = new Programmer("Niltal Amal");
// var_dump($staff1);
$staff2 = new Backend_Developer("Fahri Hamzah"); //this is implement of polymorphism
// var_dump($staff2);
$staff3 = new Frontend_Developer("Abdul Ghofur"); //this is implement of polymorphism
// var_dump($staff3);
$staff1->SayHello($staff1, "Budiono"); //this is implement of check & cast

$staff2->SayHello($staff2, "Susanti"); //this is implement of check & cast
