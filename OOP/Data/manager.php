<?php

class Manager
{
    protected string $username;//this is implementation of protexted visibility
    protected string $position;
    protected string $years;
    function introduction(string $username, string $position, string $years) {
        echo "Hello, My Name is $this->username, i am is a $this->position in Alamanda Group for periode $this->years";
    }
}//this is implementation of parent class

class Greeting extends Manager {
    
} //this is implementation of child class