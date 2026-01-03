<?php
/**
 * Task 10: Find the Second Largest Number
 * 
 * Problem:
 * Write a PHP function to find the second largest number in an array.
 * 
 * Rules:
 * Handle negative numbers
 * Assume array has at least two unique values
 * 
 * Example:
 * secondLargest([10, 5, 8, 20]);  // 10
 * secondLargest([-1, -5, -3]);   // -3
 */

// Way - 1
function secondLargest($arr) {
    $arr = array_unique($arr);
    rsort($arr);
    return $arr[1];
}

// Way - 2
function secondLargestTwo(array $arr): int {
    $largest = PHP_INT_MIN;
    $second = PHP_INT_MIN;

    foreach ($arr as $num) {
        if ($num > $largest) {
            $second = $largest;
            $largest = $num;
        } elseif ($num > $second && $num < $largest) {
            $second = $num;
        }
    }

    return $second;
}


