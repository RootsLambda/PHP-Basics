<?php 
// File learnfunc.php
// Show us function basics

/*-----------Syntax--------------*/
// function name_fucntion(datatype $parameter 1, datatype $parameter 2, ...);
// {
//   <statement>
//   return value
// }

/*-----------Note--------------*/
// 1. The return value may or may not be
// 2. Using the argument keyword can pass multiple arguments to the function

function add(int $a, int $b) {
    return $a+$b;
}
echo "Results add: ".add(4,5)."<br>";

function subtract(int $a, int $b) {
    $c=$a-$b;
    echo "Value c is: ".$c."<br>";
}
subtract(2,3);


?>

