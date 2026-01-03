<?php
/**
 * Task 9: Remove Duplicate Values from an Array
 * 
 * Problem:
 * Write a PHP function that removes duplicates from an array without using array_unique().
 * 
 * Rules:
 * Preserve original order
 * Input may contain integers or strings
 * 
 * Example:
 * removeDuplicates([1, 2, 2, 3, 1]);  // [1, 2, 3]
 */

// Way - 1
function removeDuplicates(array $arr): array {
    $seen = [];
    $result = [];

    foreach ($arr as $value) {
        if (!isset($seen[$value])) {
            $seen[$value] = true;
            $result[] = $value;
        }
    }

    return $result;
}

// Way - 2
function removeDuplicatesTwo($arr) {
    $data = [];
    foreach($arr as $value) {
        if (isset($data[$value])) {
            unset($arr[$value]);
            continue;
        }
        $data[$value] = $value;
    }
    return array_keys($data);
}

// Way - 3
function removeDuplicatesThree(array $arr): array {
    return array_values(array_flip(array_flip($arr)));
}

// Way - 4
function removeDuplicatesFour(array $arr): array {
    $result = [];
    foreach ($arr as $value) {
        if (!in_array($value, $result, true)) {
            $result[] = $value;
        }
    }
    return $result;
}
