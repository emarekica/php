<?php
$output = null;
$string = "Hello world";

// strlen()
// string length
$output = strlen($string); // 12

// str_word_count()
// how many words in a string
$output = str_word_count($string); // 2

// strpos()
// index of a word in a string
// 2 arguments: string, substring who's index we are searching for
$output = strpos($string, "world"); // 7

// Get specific character by index
$output = $string[3]; // l

// substr()
// pass in an index to get the substring on that position
// string, starting index, length
// ✅ usage: plucking words out of a string
$output = substr($string, 6, 5); // world

// str_replace()
// substring you are looking for, what you are replacing with, string
$output = str_replace("world", "universe", $string); // Hello universe

// strtolower()
$output = strtolower($string); // hello world

// strtoupper()
$output = strtoupper($string); // HELLO WORLD

// ucwords()
// only the first characters in uppercase
$output = ucwords($string); // Hello World

// trim()
// removes extra spaces
$output = trim("     Hello, world      ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>