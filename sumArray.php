<?php
//Write a PHP function sumArray that takes an array of numbers and
//returns the sum of its elements.
function sumArray($number){
    $sum =0;
    foreach($number as $num){
        $sum+=$num;
    }
    return $sum;
} 
$values = [1,2,3,4,5,6,7,8,9,10];
echo "Sum of array elements:".sumArray($values);
?>