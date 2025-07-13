<?php

require_once 'Data/person.php';

$person1 = new Person();
$person1->name = "John Doe";
$person1->age = 30;
$person1->gender = 30;
// var_dump($person1);

echo "Name: " . $person1->name . "\n";
echo "Age: " . $person1->age . "\n";
echo "gender: " . $person1->gender . "\n\n";

$person2 = new Person();
$person2->name = "Sarah Smith";
$person2->age = 59;
$person2->gender;
$person2->greeting($person2->name);
// var_dump($person1);

echo "Name: " . $person2->name . "\n";
echo "Age: " . $person2->age . "\n";
echo "gender: " . $person2->gender . "\n";
echo $person2->greeting($person2->name) . "\n";

// is_int($person1->gender) ? print "ini adalah integer" : print "ini bukan integer";