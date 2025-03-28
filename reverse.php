<?php
//Write a PHPYovaction reverseArray that takes an array and returns a
//new array with the elerants in reverse order.
function reverseArray($array) {
    return array_reverse($array);
}
$array = [1, 2, 3, 4, 5];
$reversedArray = reverseArray($array);
print_r($reversedArray);
?>
