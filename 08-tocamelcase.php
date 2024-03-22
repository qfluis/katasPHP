<?php
// DESCRIPTION:
// Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case). The next words should be always capitalized.

// Examples
// "the-stealth-warrior" gets converted to "theStealthWarrior"

// "The_Stealth_Warrior" gets converted to "TheStealthWarrior"

// "The_Stealth-Warrior" gets converted to "TheStealthWarrior"

function toCamelCase($str){
    $str = str_replace('-','_',$str);
    $str_arr = explode('_', $str);
    $result = "";
    foreach($str_arr as $key => $word){
        $str_word = str_split($word);
        // ($key == 0) ? $str_word[0] = strtolower($str_word[0])
        //             : $str_word[0] = strtoupper($str_word[0]);
        if ($key != 0) $str_word[0] = strtoupper($str_word[0]);
        $result .= implode('',$str_word);
    }
    return $result;
}

echo toCamelCase('The_Stealth-Warrior');

// Respuestas codewars
function toCamelCase2($str){
    return preg_replace_callback("~[_-](\w)~", function($m) { return strtoupper($m[1]); }, $str);
}

function toCamelCase3($str){
    $words = mb_split('[-_]',$str);
    $res=$words[0];
    for ($i=1;$i<=count($words);$i++){
        $res.=ucfirst($words[$i]);
    }
    return $res;
}