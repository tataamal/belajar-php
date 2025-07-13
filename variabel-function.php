<?php

function foo()
{
    echo "This is a placeholder function." . PHP_EOL;
}

function bar()
{
    echo "This is another placeholder function." . PHP_EOL;
}

$functionyangakandipanggil = 'foo';
$functionyangakandipanggil();


function hello($nama, $case)
{
    $filteredName = $case($nama);
    echo "Hello, {$filteredName}!" . PHP_EOL;
}

hello("John Doe", "strtoupper");

// anonymous function
$greet = function($name) {
    echo "Greetings, {$name}!" . PHP_EOL;
};

$greet("Jane Doe");

function saygoobye(string $name, $filter)
{
    $filteredName = $filter($name);
    echo "Goodbye, {$filteredName}!" . PHP_EOL;
}

saygoobye("John Doe", "strtolower");

// arrow function
$farewell = fn($name) => "Farewell, {$name}!";
echo $farewell("Jane Doe") . PHP_EOL;
