<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// Strings
$name = 'Ann Doe';
$name2 = "John Doe";

var_dump($name); // string(7) "Ann Doe"
echo "<br>";
echo getType($name2); // string
echo "<br>";


// Integer
$age = 35;
$age = -35;
var_dump($age); // int(-35)

echo "<br>";


// Float
$rating = 4.5;
var_dump($rating); // float(4.5)

echo "<br>";


// Boolean
$isLoaded = true;
$isNotLoaded = false;
var_dump($isLoaded); // bool(true)

echo "<br>";


// Array
$friends = ['John', 'Hannah', 'Timmy'];
var_dump($friends);
// array(3) { [0]=> string(4) "John" [1]=> string(6) "Hannah" [2]=> string(5) "Timmy" }

echo "<br>";


// Object
$person = new stdClass();
var_dump($person); // object(stdClass)#1 (0) { }

echo "<br>";


// Null
$car = null;
var_dump($car); // NULL

echo "<br>";

// Resource
$file = fopen('test.txt', 'r');
var_dump($file); // resource(3) of type (stream)

echo "<br>";