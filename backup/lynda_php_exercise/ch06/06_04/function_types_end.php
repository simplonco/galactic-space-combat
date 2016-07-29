<?php
$number = 2;

// Pass by value
/*function doubleIt($number) {
    return $number *= 2;
}*/

// Pass by reference
function doubleIt(&$num) {
    $num *= 2;
}

$doubled = doubleIt(8);

echo '$doubled is ' . $doubled . '<br>';
echo '$number is ' . $number . '<br>';
var_dump($doubled);
