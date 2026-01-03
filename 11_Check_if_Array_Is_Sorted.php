<?php
/**
 * Task 11: Check if Array Is Sorted
 * 
 * Problem:
 * Write a PHP function that checks whether an array is sorted in ascending order.
 * 
 * Rules:
 * Do not sort the array
 * Return true or false
 * 
 * Example:
 * isSorted([1, 2, 3, 4]);   // true
 * isSorted([1, 3, 2]);     // false
 */

function isSorted($arr) {
    $previousNumber = $arr[0];
    $length = count($arr) - 1;
    for ( $i=1; $i<=$length; $i++) {
        if ($previousNumber > $arr[$i]) {
            return false;
        }
        $previousNumber = $arr[$i];
    }
    return true;
}