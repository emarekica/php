<?php
// documentation: https://www.php.net/manual/en/ref.array.php

$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// gives number of items in the array (length)
$output = count($ids);

// MANIPULATE ARRAY

// sort()
sort($ids);
sort($users);

// rsort()
// sorts in reverse
rsort($ids);
rsort($users);

// array_push()
// adds a value at the end
array_push($ids, 100);
array_push($users, "user4");

// array_pop()
// removes values from the end
array_pop($ids);
array_pop($users);

// array_shift()
// shift the first element off the array
array_shift($ids);
array_shift($users);

// array_unshift()
// prepend element to the beginning
array_unshift($ids, 200);
array_unshift($users, "user0");

// array_splice()
// array - offset - length
// array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');


// RETURNS NEW ARRAY

// array_slice()
// array -index where you start the slice - length of slice
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2);

// array_sum
$output = 'Sum of IDs: ' . array_sum($ids);

// array_search
// returns the index of the value
// value - array
$output = 'User 2 is at index: ' . array_search('user2', $users);

// in_array()
// checks if value exists in an array
// in_array
array_push($users, "user3");
// $output = 'User 3 Exists: ' . in_array('user3', $users);
// var_dump(in_array('user3', $users)); // bool(true)
// inspect(in_array('user3', $users)); // error

// string >> ARRAY
// explode()
$tags = "tech,code,programming";
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);

// ARRAY >> string
// implode()
$output = implode(', ', $users); // New User, user2, user1, user3


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
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2>ID's array</h2>
            <p>
              <pre>
                <?php print_r($ids); ?>
              </pre>
            </p>
            <h2>ID's array</h2>
            <p>
              <pre>
                <?php print_r($users); ?>
              </pre>
            </p>
        </div>
    </div>
</body>

</html>