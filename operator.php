<?php
// File operator.php
// Introduction to common operator in PHP

/*-------------Note------------*/
// 1. No need to declare the type for the variable
// 2. Variables must be placed after "$" character
// 3. If the result is false, it will not be displayed
// 4. The result returned true will be displayed as 1

// Arithmetic expression
$a=1;
$b=4;
echo "Add: ".$a+$b."<br>";
echo "Subtract: ".$a-$b."<br>";
echo "Mutily: ".$a*$b."<br>";
echo "Divide: ".$a/$b."<br>";

// Comparison expression
$c=3.4;
$d=4.5;
echo "Operator '>' is greater: ".($c>$d)."<br>";
echo "Operator '<' is less: ".($c<$d)."<br>";
echo "Operator '==' is equality: ".($c==$d)."<br>";
echo "Operator '!=' is not equality: ".($c!=$d)."<br>";

// Logical operator
$e=true; $f=false;
echo "NOT is '!': ".(!$e)."<br>";
echo "AND is '&&': ".($e&&$f)."<br>";
echo "OR is '||': ".($e||$f)."<br>";

// Complex operator
$r=3;
$area=3.14*$r*$r;
echo "Area is circle: $area";

// Warning add string with number
$g='234'; // Value 234 datatype is string
$h=54;    // value 54 datatype is interger
$j=$g+$h;  // Value 284 datatype is interger
echo "Add g and h: $j";

?>