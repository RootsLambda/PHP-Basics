<?php
// File learnnumber.php
// Some methods when working with numbers

/*-----------Note--------------*/
// 1. is_int(): check if it is an integer
// 2. is_float(): check if it is an float
// 3. is_finite(): determines whether a given number is finite or not
// 4. is_nan(): check if it is a none at null
// 5. is_numeric(): check if it is number or numeric string

$a=234;
var_dump(is_int($a));

$b=4.3;
var_dump(is_int($b));

var_dump(is_float($b));

echo is_finite(3.4)."<br>";

echo is_nan(42)."<br>";

var_dump(is_numeric($a));

?>