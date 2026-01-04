<?php

// TYPE CASTING = converting from one variable to another

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