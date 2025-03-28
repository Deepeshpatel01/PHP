<?php
//Write a PHP function find MaxValue that takes an array of numbers and returns the maximum value.
function findMaxValue($numbers) {
    if (empty($numbers)) {
        return "Array is empty.";
    }
    $maxValue = $numbers[0];
    foreach ($numbers as $num) {
        if ($num > $maxValue) {
            $maxValue = $num;
        }
    }
    return $maxValue;
}

// Example usage
$array = [10, 25, 37, 89, 45];
echo "Maximum value: " . findMaxValue($array);
?>
