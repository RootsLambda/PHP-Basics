<?php 
// File learncondtion.php
// Condition branch statement

/*-----------Syntax--------------*/
// 1. if <condition>
//    {block statement}

// 2. if <condition>  
//    {block statement 1}
//   else {block statement 2}

// 3. if <condition 1>
//    {block statement 1}
//   else if <condition 2>
//    {block statement 2}
//   ...
//   else {block statement n}

$max;
$a=3;
$b=4;
$max=$a;

if($a<$b) {
    $max=$b;
}
echo"Max a and b: ".$max."<br>";

// Condition if-else
if ($a<$b){
    $max=$a;
}
else{
    $max=$b;
}

// Condition if-else if-else
$k=-1;
if ($k==6){
    echo "$k is a number equal to 6 <br>";
}
else if ($k>6){
    echo "$k is a number greater than 6";
}
else if (0<$k<6){
    echo "$k is a number less than 6";
}
else{
    echo "$k is a number nagetive";
}

?>