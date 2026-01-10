<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

  $num1 = 7;
  $num2 = 20;

  // Basic math
  $output = "$num1 + $num2 = " . $num1 + $num2;
  $output = "$num1 - $num2 = " . $num1 - $num2;
  $output = "$num1 * $num2 = " . $num1 * $num2;
  $output = "$num1 / $num2 = " . $num1 / $num2;
  $output = "$num1 % $num2 = " . $num1 % $num2;

  // Assignment operator
  $num3 = 30;
  // $num3 = $num3 + 20;
  $num3 += 20;
  $num3 -= 20;
  $num3 /= 10;

  // Built-in PHP functions
  // rand()
  // generates random number

  $output = rand();
  $output = getrandmax();
  $output = rand(1, 10);

  // round()
  $output = round(4.3); // 4
  $output = round(4.7); // 5

  // ceil()
  // rounds up
  $output = ceil(4.3); // 5
  $output = ceil(4.7); // 5

  // floor()
  // rounds down
  $output = floor(4.3); // 4
  $output = floor(4.7); // 4

  // sqrt()
  $output = sqrt(64); // 8

  // pi()
  $output = pi(); // 3.1415

  // abs()
  // absolute number
  $output = abs(-4.7); // 4.7

  // max()
  // highest number in array of numbers
  $output = max(10, 20, 30); // 30
  $output = max([1123, 245, 30]); // 1123

  // min()
  // lowest number in array of numbers
  $output = min(10, 20, 30); // 10
  $output = min([1123, 245, 30]); // 30

  // formats number with grouped thousands
  $output = number_format(1234567.891234); // 1,234,568
  $output = number_format(1234567.891234, 2, ".", ","); // 1,234,567.89

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
       <p class"text-xl">
          <?= $output; ?>
       </p>
    </div>
  </div>
</body>

</html>