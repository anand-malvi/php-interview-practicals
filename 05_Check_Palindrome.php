<?php
/**
 * Task 5: Check Palindrome
 * Problem:
 * Write a PHP function to check if a given string is a palindrome.
 * 
 * Rules:
 * Case-insensitive
 * Ignore spaces
 * 
 * Example:
 * isPalindrome("madam");        // true
 * isPalindrome("Race car");    // true
 * isPalindrome("Hello");       // false
 */

// Way - 1
function isPalindrome($str) {
    $str = str_replace(' ', '', $str);
    if ($str == strrev($str)) return true;
    return false;
}

// Way - 2
function isPalindromeTwo($str) {
    $str = str_replace(' ', '', $str);
    $strNew = '';
    for ($i = strlen($str)-1; $i>=0; $i--) {
        $strNew .= $str[$i];
    }
    if ($str == $strNew) return true;
    return false;
}