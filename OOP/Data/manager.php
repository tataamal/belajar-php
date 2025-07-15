<?php

class Manager
{
    public string $username;//this is implementation of protexted visibility
    public string $position;
    public string $years;
    function introduction(string $username, string $position, string $years) {
        echo "Hello, My Name is $this->username, i am is a $this->position in Alamanda Group for periode $this->years";
    }

    public function __construct(string $username = "unknown", string $position = "unknown", string $years = "unknown")
    {
        $this->username = $username;
        $this->position = $position;
        $this->years = $years;
    }
}//this is implementation of parent class

class Greeting extends Manager {
    function GetComponentParent(string $username, string $position, string $years){
        return parent::introduction($username, $position, $years);
    }
} //this is implementation of child class