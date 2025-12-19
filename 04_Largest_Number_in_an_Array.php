<?php
/**
 * Task 4: Find the Largest Number in an Array
 * 
 * Problem:
 * Write a PHP function that returns the largest number from an array of integers.
 * 
 * Constraints:
 * Do not use max()
 * Handle negative numbers
 * Assume array is non-empty
 * 
 * Example:
 * findLargest([1, 5, 3, 9, 2]);     // 9
 * findLargest([-10, -3, -50]);     // -3
 */

function findLargest ($arr) {
    $largest = $arr[0];
    foreach ($arr as $number) {
        if ($number > $largest) $largest = $number;
    }
    return $largest;
}
