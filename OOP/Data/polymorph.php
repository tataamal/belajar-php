<?php

class Programmer
{
    public $name;
    public $age;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

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
