<?php
// Single line comment

/*
Multi-line comment
*/

  echo "Hello from ECHO!", "It can have multiple values";
  echo "<br>";
  print "Hello from PRINT";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <title>Learn PHP From Scratch</title> -->
    <title><?= "Learn PHP From Scratch" ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
          <!-- shorthand -->
            <h1 class="text-3xl font-semibold"><?= $title; ?></h1>

        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $heading; ?></h2>
            <!-- HTML can be written in echo statement -->
            <?php echo "<p>In this course, you will learn the fundamentals of the PHP language</p>" ?>
        </div>
    </div>
</body>

</html>