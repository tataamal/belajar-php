<?php

class Person {

    const AUTHOR = "Niltal Amal";
    var string $name;
    var ?int $age; // allow age to be null
    var string $gender = "Unknown"; //set default value to gender property

    // add function to person class
    function greeting($name)
    {
        echo "Hello, " . $name . "!";
    }


}