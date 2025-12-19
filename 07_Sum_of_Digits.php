<?php 
/**
 * Task 7: Sum of Digits
 * 
 * Problem:
 * Write a PHP function that returns the sum of digits of a given integer.
 * 
 * Rules:
 * Handle negative numbers
 * Do not convert the number into a string
 */

function sumOfDigits($number) {
    $number = abs($number);
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = intdiv($number, 10);
    }
    echo $sum;

}
sumOfDigits(123);