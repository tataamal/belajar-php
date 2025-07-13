<?php

class Person {
    var string $name;
    var ?int $age; // allow age to be null
    var string $gender = "Unknown"; //set default value to gender property

    // add function to person class
    function greeting($name)
    {
        echo "Hello, " . $name . "!";
    }

    function __construct(string $name, int $age, string $gender = "unknown")
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }//this is example implementation of constructor

    function __destruct()
    {
        echo "Object {$this->name} telah dihapus" . PHP_EOL;
    }
}


class AppVersion {
    const AUTHOR = "MUHAMMAD NILTAL AMAL";
    const APP_VERSION = "1.0.0";

    function info()
    {
        echo "Author this code is : " . self::AUTHOR . PHP_EOL; //implementation of self keyword
    }

}