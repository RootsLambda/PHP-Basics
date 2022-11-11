<?php
// File learnarray.php
// Concept array PHP

/*-----------Syntax--------------*/
// $name_array= array(element 1, element 2, ...);

// Traversal array one dimensional

$A=array(1,2,3,4);
$lengthA=count($A);
for ($i=0; $i<$lengthA; $i++) {
    echo $A[$i];
    echo "<br>";
}

$household=array("Chair","Floor","Fan");
$arraylength=count($household);
for ($i=0; $i<$arraylength;$i++) {
    echo $household[$i];
    echo "<br>";
}

// Traversal array two dimensional
$B=array(array(1,2,3),array(4,5,6),array(7,8,9));
$length1=count($B);

for ($row=0;$row<$length1;$row++) {
   
    for ($col=0; $col<3;$col++) {
        echo $B[$row][$col];
        
    }
}
?>
