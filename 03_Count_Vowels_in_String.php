<?php 
/**
 * Problem:
 * Write a PHP function that counts the number of vowels (a, e, i, o, u) in a string.
 * 
 * Requirements:
 * Case-insensitive
 * 
 * Example:
 * countVowels("Hello World"); // 3  EG:(e, o, o)
 * countVowels("PHP");         // 0
 * countVowels("AEIOU");       // 5
 * 
 */

// Way - 1
function countVowels($string) {
    $vowels = 'aeiou';
    $count = 0;

    foreach (str_split(strtolower($string)) as $char) {
        if (strpos($vowels, $char) !== false) {
            $count++;
        }
    }

    return $count;
}


// Way - 2
function countVowelsTwo($string) {
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
