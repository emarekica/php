# PHP

[Documentation](https://www.php.net/)
## Content

1. [Installing PHP with Homebrew](#installing-php-with-homebrew)
2. [First steps](#first-steps)
3. [Intro](#intro)
4. [Variables](#variables)
    4.1. [Naming conventions](#naming-conventions)
    4.2. [Using variables](#using-variables)
    4.3. [Data types](#data-types)
    4.4. [String concatenation](#string-concatenation)
    4.5. [Type casting](#type-casting)
    4.6. [Arithmetic operators and math functions](#arithmetic-operators-and-math-functions)
    4.7. [String functions](#string-functions)
    4.8. [Dates](#dates)
5. [Arrays](#arrays)
    5.1. [Intro to arrays](#intro-to-arrays)
    5.3. [Array functions](#array-functions)
    5.4. [Associative arrays](#associative-arrays)
    5.5. [Multidimensional arrays](#multidimensional-arrays)


## Installing PHP with Homebrew

1. Install [Homebrew](https://brew.sh/) on MacOS.

- Make sure Comand line tools are updated to the latest version.
- Be in the Terminal (current user folder)
- it will install it in `/usr/local` (Intel Mac)

2. Check:

        which brew           // if installed
        brew --version       // latest version
        brew list            // see all PHP versions
        brew search php      //

3. Update & upgrade (if necessary)

        brew update
        brew upgrade

4. Install PHP

        brew install php
        php -v

When installed like this, any folder can be used as a work folder.

## First steps

1. Make `index.php`.


```php
<?php

echo 'Hello, world';
```

2. See the file in the terminal:

```php
php index.php
// prints: 'Hello, world'
```

3. Run local server which comes with PHP.

```php
php -S // runs the server

php -S localhost:8000
```

4. Stop the server: `control C`

## INTRO

### PHP TAGS

```php
<?php

?>
```

Usually, `*.html` and `*.php` files are separate.
In that case, omit the closing PHP tag.


### Ways to print PHP in browser using language constructs/statements:

- `echo`
- `print`

```php
<?php
  echo "Hello from ECHO!", "It can have multiple values";

  print "Hello from PRINT";
```

### Writing PHP and HTML together

This will output the text and in the source code HTML, no PHP code will be shown in the browser because it is executed on the server.
The server sends to the browsers what it interprets.


- local code: `<title><?php echo "Learn PHP From Scratch"; ?></title>`

- browser source code: `<title>Learn PHP From Scratch</title>`

- Shorthand (usually used with variable): `<title><?= "Learn PHP From Scratch" ?></title>`

HTML can be used in echo statement.

```php
<?php echo "<p>In this course, you will learn the fundamentals of the PHP language</p>" ?>
```

<br>

## VARIABLES

- `$` prefix
- start: LETTER, _underscore
- can't start with a 123345
- can only contain _LETTERS11231231_
- case sensitive `$name` ≠ `$Name`

### Naming conventions

    $server_name // how internal PHP functions and variables are written
    $serverName  //
    $ServerName  // common for classes
    $servername  // rare, data base parameters

<br>

### Using variables

```php
<?php
// VARIABLE
$title = "Learn PHP from scratch";
?>

// use in HTML
<title><?php echo $title; ?></title>
<title><?= $title; ?></title>

<?php echo "<p>Text</p>" ?>
<?= "<p>Text</p>" ?>
```

### Data types

```php
// Strings
$name = 'Ann Doe';
$name2 = "John Doe";

var_dump($name); // string(7) "Ann Doe"
echo getType($name2); // string

// Integer
$age = 35;
$age = -35;
var_dump($age); // int(-35)


// Float
$rating = 4.5;
var_dump($rating); // float(4.5)


// Boolean
$isLoaded = true;
$isNotLoaded = false;
var_dump($isLoaded); // bool(true)


// Array
$friends = ['John', 'Hannah', 'Timmy'];
var_dump($friends);
// array(3) { [0]=> string(4) "John" [1]=> string(6) "Hannah" [2]=> string(5) "Timmy" }


// Object
$person = new stdClass();
var_dump($person); // object(stdClass)#1 (0) { }


// Null
$car = null;
var_dump($car); // NULL


// Resource
$file = fopen('test.txt', 'r');
var_dump($file); // resource(3) of type (stream)
```

### String concatenation

```php
  $firstName = 'Ann';
  $lastName = 'Doe';
  $anotherPerson = 'John Doe';

  // string concatenation
  $fullName0 = $firstName . $lastName;

  // with space
  $fullName = $firstName . ' ' . $lastName;
```

### Type casting

TYPE CASTING = converting from one variable to another

```php
$num0 = 0;
$num1 = 5;
$num2 = 10;

$num3 = '20';
$fruit = 'apple';

$boolTrue = true;
$boolFalse = false;

$null = null;

// 1. IMPLICIT TYPE CASTING (TYPE JUGGLING)type juggling / implicit conversion
// PHP automatically converts a variable from one type to another.

$result = $num1 + $num2;
$result2 = $result + $num3;
$result3 = $num3 + $num1;
$result4 = $num3 + $num3;

$resultConcat = $num3 . $num3;
$resultConcat2 = $num1 . $num2;
$resultConcat3 = $num1 . $num3;
$resultConcat4 = $num1 . $fruit;

$boolResult1 = $num1 + $boolTrue;
$boolResult2 = $num1 + $boolFalse;

$nullResult = $num1 + $null;
// $nullResult2 = $fruit + $null;
$nullResult3 = $boolTrue + $null;

var_dump($result); // int(15)
var_dump($result2); // int(35) string >> int
var_dump($result3); // int(25) string >> int
var_dump($result4); // int(40) string >> int

var_dump($resultConcat); // string(4) "2020"
var_dump($resultConcat2); // string(3) "510"
var_dump($resultConcat3); // string(3) "520"
var_dump($resultConcat4); // string(6) "5apple"

var_dump($boolResult1); // int(6)
var_dump($boolResult2); // int(5)

var_dump($nullResult); // int(5)
// var_dump($nullResult2);
var_dump($nullResult3); // int(1)


// 2 EXPLICIT TYPE CASTING
// Developer tells PHP from which type to change to another.
$resultChanged = (string) $num1;
$resultChanged2 = (int) $fruit;
$resultChanged3 = (int) $num3;
$resultChanged4 = (bool) $num1;
$resultChanged5 = (bool) $num0;
$resultChanged6 = (bool) $fruit;

var_dump($resultChanged); // "5"
var_dump($resultChanged2); // int(0)
var_dump($resultChanged3); // int(20)
var_dump($resultChanged4); // bool(true)
var_dump($resultChanged5); // bool(false)
var_dump($resultChanged6); // bool(true)
```

### Arithmetic operators and math functions

```php
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
```

### String functions

```php
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
```

### Dates

```php
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
```

## ARRAYS

### Intro to arrays

```php
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
```

### Array functions

- [documentation](https://www.php.net/manual/en/ref.array.php)

```php
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
// remove a portion of the array and replace it with something else
// array - offset - length
// array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');


// RETURNS NEW ARRAY

// array_slice()
// extract a slice of the array
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
```

### Associative arrays

An array where each value is stored under a named key rather than a numeric index (similar to an object in JavaScript).
An array becomes associative as soon as at least one key is a string.

```php
// Associative array
$user = [
  "name" => "John",
  "email" => "my@mail.com",
  "fauxPass" => "****",
  "hobbies" => ["cooking", "fishing"],
];

// echo $user; // error
var_dump($user);

// Access element
$output = $user["name"];

// Access nested elements
$output = $user["hobbies"][0]; // cooking

// Add a new element
$user["address"] = "123 Main street";

// Remove an element
unset($user["fauxPass"]);
```

### Multidimensional arrays

Data fetched from a database is often stored as multi-dimensional array.

```php
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
```