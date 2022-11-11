<?php 
// File learnwhile.php
// Introduce while loop and do while

/*-----------Syntax--------------*/
// 1. while (expression)
//  {
//   <statement>
//  }

// 2. do
// {
//   <statement 1>    
// }
// while (expression);

$x=5;
while ($x<25) {
    $x=2*$x-1;
}
echo "x: $x <br>";

$k=1;
$sum=0;
do{
    $sum+=$k;
    $k++;
}
while ($k<10);

echo "Sum 1 to 10: $sum"
?>