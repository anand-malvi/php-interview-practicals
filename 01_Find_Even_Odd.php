<?php
/**
 * Task 1: Even or Odd Checker
 * 
 * Problem:
 * Write a PHP function that accepts an integer and returns:
 * "Even" if the number is even
 * "Odd" if the number is odd
 */

function checkEvenOdd($number) {
    return ($number % 2 == 0) ? 'Even' : 'Odd';
}

checkEvenOdd(10); // "Even"
checkEvenOdd(7);  // "Odd"