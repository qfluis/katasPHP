<?php
// An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

// Example: (Input --> Output)

// "Dermatoglyphics" --> true "aba" --> false "moOse" --> false (ignore letter case)

// isIsogram "Dermatoglyphics" = true
// isIsogram "moose" = false
// isIsogram "aba" = false

// Solución Luis
function isIsogram($text) {
    $text = strtolower($text);
    $letter_arr = str_split($text, 1);
    return count($letter_arr) == count(array_unique($letter_arr));
}

// Otras soluciones
// https://www.codewars.com/kata/54ba84be607a92aa900000f1/solutions/php
var_dump(isIsogram("Dermatoglyphics"));
var_dump(isIsogram("moose"));
var_dump(isIsogram("aba"));