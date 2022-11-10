<?php
// File datatype.php
// Show some data types

/*-------------Note------------*/
// 1. Number interger
// 2. Number float
// 3. Character type
// 4. Array type
// 5. Value null
// 6. Squeeze style

$a=4923;
var_dump($a);
$b=13.4;
var_dump($b);
$c="Roots";
var_dump($c);
$d=true;
var_dump($d);
$e=array("Bed","Table","Notebook");
var_dump($e);
$f= null;
var_dump($f);

// Squeeze style

$age='21';
$age=(int)$age;

// Constant

define('email','quoc.dong2525@hcmut.edu.vn');
echo email;

?>
