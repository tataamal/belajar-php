<?php

class Programmer
{
    public $name;
    public $age;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function SayHello(Programmer $programmer, string $name) 
    {
        if ($programmer instanceof Programmer) {
            echo "Halo {$name}, you are a Programmer" . PHP_EOL;
        }else if ($programmer instanceof Backend_Developer){
            echo "Halo {$name}, you are a Backend Developer" . PHP_EOL;
        }else if ($programmer instanceof Frontend_Developer){
            echo "Halo {$name}, you are a Frontend Developer" . PHP_EOL;
        }
    } //this is implement of using instanceof to check & cast

}

class Frontend_Developer extends Programmer
{
    
}

class Backend_Developer extends Programmer
{

}

class company
{
    public Programmer $programmer;
}


