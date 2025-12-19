<?php
/**
 * Task 6: Count Frequency of Characters
 * 
 * Problem:
 * Write a PHP function that returns the frequency of each character in a string.
 * 
 * Rules:
 * Case-insensitive
 * Ignore spaces
 * Return an associative array
 * 
 * Example:
 * charFrequency("Hello World");
 * [
 *   'h' => 1,
 *   'e' => 1,
 *   'l' => 3,
 *   'o' => 2,
 *   'w' => 1,
 *   'r' => 1,
 *   'd' => 1
 * ]
 */

// Way - 1
function charFrequency($str) {
    $str = strtolower(str_replace(' ', '', $str));
    $result = [];

    foreach (str_split($str) as $char) {
        $result[$char] = ($result[$char] ?? 0) + 1;
    }

    return $result;
}


// Way - 2
function charFrequencyTwo($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return array_count_values(str_split($str));
}
