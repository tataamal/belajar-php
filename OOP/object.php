<?php

require_once 'Data/person.php';
require_once 'Data/manager.php';

// $person1 = new Person("Jhon Doe", 150, gender: "male");
// var_dump($person1);

// echo "Name: " . $person1->name . "\n";
// echo "Age: " . $person1->age . "\n";
// echo "gender: " . $person1->gender . "\n\n";

// $person2 = new Person();
// $person2->name = "Sarah Smith";
// $person2->age = 59;
// $person2->gender;
// $person2->greeting($person2->name);
// // var_dump($person1);

// echo "Name: " . $person2->name . "\n";
// echo "Age: " . $person2->age . "\n";
// echo "gender: " . $person2->gender . "\n";
// echo $person2->greeting($person2->name) . "\n";

// is_int($person1->gender) ? print "ini adalah integer" : print "ini bukan integer";


// constant variable
// echo AppVersion::AUTHOR . PHP_EOL; //constant variable call with the name class (in this case is AppVersionClass)
// echo AppVersion::APP_VERSION . PHP_EOL;

// $app_version = new AppVersion();
// $app_version->info(); //call self keyword implementation


// //this is calling of child class in manager.php
$profile = new Greeting();
$profile->username = 'Budi Tjajadi';
$profile->position = 'President Director';
$profile->years  = '2025-2024';
$profile->introduction($profile->username, $profile->position, $profile->years);
// var_dump($profile);

