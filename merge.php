<?php
//Write a PHP function mergeArrays that takes two arrays and returns 
// a single array containing all elements from both arrays.
function mergeArrays($array1, $array2) {
    return array_merge($array1, $array2);
}
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];
$merged = mergeArrays($array1, $array2);
print_r($merged);
?>