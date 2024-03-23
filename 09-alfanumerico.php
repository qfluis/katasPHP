<?php
// In this example you have to validate if a user input string is alphanumeric. 
// The given string is not nil/null/NULL/None, so you don't have to check that.

// The string has the following conditions to be alphanumeric:

// At least one character ("" is not valid)
// Allowed characters are uppercase / lowercase latin letters and digits from 0 to 9
// No whitespaces / underscore

// $this->doTest('Mazinkaiser', true);
// $this->doTest('hello world_', false);
// $this->doTest('PassW0rd', true);
// $this->doTest('     ', false);

// Solución Luis "cutre"
function alphanumeric(string $s): bool {
    $len = strlen($s);
    if ($len == 0) return false;
    if (preg_match_all("/[a-zA-z0-9]/", $s) == $len) return true;
    return false;
}

var_dump(alphanumeric("hola"));
var_dump(alphanumeric("holiwi de kiwi"));
var_dump(alphanumeric("h0la"));
var_dump(alphanumeric(""));

// Soluciones Codewars
function alphanumeric2(string $s): bool {
    return ctype_alnum($s);
}

function alphanumeric3(string $s): bool {
    return preg_match('/^[\w\d]+$/', $s);
}

function alphanumeric4(string $s): bool {
    return preg_match('/^[a-zA-Z0-9]+$/', $s, $matches);
}
