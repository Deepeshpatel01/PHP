<?php
//Write a PHP function removeDuplicates that takes an array and
//returns a new array with duplicate values removed
function removeDuplicates($array) {
    return array_values(array_unique($array));
}
$array = [1, 2, 3, 4, 3, 2, 1, 1, 5];
$uniqueArray = removeDuplicates($array);
print_r($uniqueArray);
?>
