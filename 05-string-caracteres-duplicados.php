<?php
// Count the number of Duplicates
// Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string. The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

// Example
// "abcde" -> 0 # no characters repeats more than once
// "aabbcde" -> 2 # 'a' and 'b'
// "aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
// "indivisibility" -> 1 # 'i' occurs six times
// "Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
// "aA11" -> 2 # 'a' and '1'
// "ABBA" -> 2 # 'A' and 'B' each occur twice

// solución luis
function duplicateCount($text) {
    $text_array = str_split(strtolower($text),1);
    $char_count = [];
    foreach($text_array as $char){ // array_count_values hace lo mismo
        isset($char_count[$char]) ? $char_count[$char]++ : $char_count[$char] = 1;
    }
    //$char_count = array_filter($char_count, fn($char) => $char > 1);
    $char_count = array_filter($char_count, function($char) { return $char > 1; });
    return count($char_count);
}

// solución codewars
function duplicateCountCODEWARS($text) {

    $dupCount = 0;
    $text = array_count_values(str_split(strtolower($text)));
    
    foreach ($text as $val) {
    if ($val > 1) { $dupCount = $dupCount+1; }   
    }
    
    return $dupCount;
    }

echo duplicateCount('aabBcde');
echo " ";
echo duplicateCount('');