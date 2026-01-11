<?php
// creating arrays
$names = Array("Ann", "Joe", "Julia");
$surnames = ["Sullivan", "Mann", "Champy"];

$numbers = [1, 2, 3, 4, 5];


// formats inspected arrays
function inspect($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  // die(); // kills everything that comes after it
}

inspect($names);
inspect($surnames);
inspect($numbers);

// another way to see array values
print_r($names);
print_r($surnames);
print_r($numbers);

// see a single array value
$names[1]; // "Joe"

// error: array to string conversion
echo $names;

// Add element to array

// when you know how many elements there are in an array
$numbers[6] = 6;

// when you don't know how many elements there are in an array
$numbers[] = 7;

// change values at a certain position
$numbers[0] = 100;

// remove a value - this also removes the index!
unset($numbers[2]);

// Re-index the array
$numbers = array_values($numbers);

inspect($numbers);