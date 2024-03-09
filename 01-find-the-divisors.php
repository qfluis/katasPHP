<?php
// Create a function named divisors/Divisors that takes an integer n > 1 
// and returns an array with all of the integer's divisors(except for 1 and 
// the number itself), from smallest to largest. If the number is prime 
// return the string '(integer) is prime' (null in C#, empty table in COBOL) 
// (use Either String a in Haskell and Result<Vec<u32>, String> in Rust).

// Example:
// divisors(12); // => [2, 3, 4, 6]
// divisors(25); // => [5]
// divisors(13); // => '13 is prime'

// Solución Luis
function divisors($integer) {
    $result = [];
    $last_num = $integer - intdiv($integer,2);
    for($i = 2; $i<=$last_num; $i++){
        if($integer % $i == 0) 
            $result [] = $i;
    }
    return count($result)== 0 ? $integer . ' is prime' : $result;
}

// Otras Soluciones interesantes
// https://www.codewars.com/kata/544aed4c4a30184e960010f4/solutions
function divisors2($integer) {
    for ($i = 2; $i <= floor($integer / 2); $i++) {
        if ($integer % $i === 0) {
            $numbers[] = $i;
        }
    }
    return empty($numbers) ? $integer . ' is prime' : $numbers;
}

var_dump(divisors(100));
var_dump(divisors(5));

