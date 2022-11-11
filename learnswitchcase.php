<?php
// File learnswitchcase.php
// No conditional branch statement

/*-----------Syntax--------------*/
// switch <expression>{
// case value 1: block 1;
// case value 2: block 2;
// ....
// default:
//     block 0;
// }

$n=40;
switch($n) {
    case 0:
        echo "Hello";
        break;
    case 20:
        echo "World";
        break;
    case 40:
        echo "Lambda";
        break;
    default:
        echo "Roots";
        break;
}
?>
