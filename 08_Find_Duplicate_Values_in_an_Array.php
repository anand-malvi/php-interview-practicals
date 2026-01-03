<?php

/**
 * Task 8: Find Duplicate Values in an Array
 * 
 * Problem:
 * Write a PHP function that returns duplicate values from an array.
 * 
 * Rules:
 * Input array may contain integers or strings
 * Return duplicates only once
 * Order does not matter
 * 
 * Example:
 * findDuplicates([1, 2, 3, 2, 4, 1, 5]);  // [1, 2]
 */

function findDuplicates($arr) {
    $data = [];
    $duplicates = [];
    foreach($arr as $value) {
        if (isset($data[$value])) {
            $duplicates[$value] = true;
        } else {
            $data[$value] = true;
        }
    }
    print_r(array_keys($duplicates));die;
}