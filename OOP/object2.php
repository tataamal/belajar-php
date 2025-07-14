<?php

require_once 'Data/namespace.php';
// use \Data\User\Register as UserRegister; //put the alias to same class
// use \Data\Admin\Register as AdminRegister;

// group use declaration
use \Data\User\{Register as regis, Login as log}; //this line is implementation of group use declaration
$user1 = new log();
$user1->username = "Niltal Amal";
$user1->password = "tata123";

$user1->login($user1->username, $user1->password);


// $User1 = new \Data\User\Register();
// $User1->create();

// $Admin1 = new \Data\Admin\Register(); //call overriding class from child
// $Admin1->create();