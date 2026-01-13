<?php
// data fetched from a database is often stored as multi-dimensional array
$output = null;

$fruits = [
  ["Apple", "red"],
  ["Orange", "orange"],
  ["Banana", "yellow"],
];

// Accessing elements
$output = $fruits[0][0]; // apple
$output = $fruits[0][1]; // red

// Add a nested array
$fruits[] = ["Pear", "green"];

// array of nested associative arrays - more realistic
$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'fauxPass' => 'secret'],
  ['name' => 'Mary', 'email' => 'mary@gmail.com', 'fauxPass' => 'secret'],
  ['name' => 'Jane', 'email' => 'jane@gmail.com', 'fauxPass' => 'secret']
];

// Access Mary's email
$output = $users[1]["email"];

// Add a user
$users[] = ['name' => 'Mike', 'email' => 'mike@gmail.com', 'fauxPass' => 'secret'];
array_push($users, ['name' => 'Julia', 'email' => 'julia@gmail.com', 'fauxPass' => 'secret']);

// Remove the first user
array_shift($users);

// Remove the last user
array_pop($users);

// Remove a specific user
unset($users[1]);

// Count the users

$output = count($users); // 2

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
      <p>
        <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>