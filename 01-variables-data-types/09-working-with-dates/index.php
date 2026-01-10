<?php
/*

`Y` - Year
`m` - Month
`d` - Day
`D` - Day - short name
`l` - Day - full name
`h` - Hour
`i` - Minute
`s` - Second
`a` - AM/PM

*/

$year = date("Y");

// get a date from a timestamp
$dateFromTimestamp = date("Y", 936345600);

// get a timestamp from strtotime()
$timestamp = date("Y", strtotime("2000-09-01"));

// get month
$month = date("m"); // current month: 01

// get day
$day = date("d"); // 10
$dayNameShort = date("D"); // Sat
$dayNameFull = date("l"); // Saturday

// get year, month, day
$yearMonthDay = date("Y - m - d"); // 2026-01-10
$yearDayMonth = date("Y - d- m"); // 2026-10-01

// Get hour
$hour = date('H');

// Get minute
$minute = date('i');

// Get second
$second = date('s'); // changes each time

// Get AM or PM
$am = date('a');

// Get full date and time
$fullDateTime = date('Y-m-d h:i:s a'); // 2026-01-10 12:45:31 pm
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
            <p class="text-xl">
              <?php echo $year; ?><br>
              <?php echo $dateFromTimestamp; ?><br>
              <?php echo $timestamp; ?><br>
              <?php echo $month; ?><br>
              <?php echo $day; ?><br>
              <?php echo $dayNameShort; ?><br>
              <?php echo $dayNameFull; ?><br>
              <?php echo $yearMonthDay; ?><br>
              <?php echo $yearDayMonth; ?><br>
              <?php echo $hour; ?><br>
              <?php echo $minute; ?><br>
              <?php echo $second; ?><br>
              <?php echo $am; ?><br>
              <?php echo $fullDateTime; ?><br>
            </p>
        </div>
    </div>
</body>

</html>