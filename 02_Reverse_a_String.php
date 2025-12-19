<?php 
/**
 * Task 2: Reverse a String
 * 
 * Problem:
 * Write a PHP function that reverses a given string without using strrev().
 * 
 * Example:
 * reverseString("hello");      // "olleh"
 * reverseString("PHP Dev");    // "veD PHP"
 * reverseString("");           // ""
 */

function reverseString($string) {
    for($i = strlen($string)-1; $i>=0; $i--) {
        echo $string[$i];
    }
}