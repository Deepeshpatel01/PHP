<?php
//Write a PHP function countOccurrences that takes an array and
//returns an associative array where the keys are the unique values
//from the input array and the values are their counts.
function countOccurrences($array) {
    return array_count_values($array);
}
$array = [1, 2, 3, 4, 3, 2, 1, 1, 5];
$occurrences = countOccurrences($array);
print_r($occurrences);
?>