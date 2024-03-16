<?php
// Given two arrays a and b write a function comp(a, b) that checks whether 
// the two arrays have the "same" elements, with the same multiplicities 
// (the multiplicity of a member is the number of times it appears). 
// "Same" means, here, that the elements in b are the elements in a squared, 
// regardless of the order.

// Examples
// Valid arrays
// a = [121, 144, 19, 161, 19, 144, 19, 11]  
// b = [121, 14641, 20736, 361, 25921, 361, 20736, 361]
// comp(a, b) returns true because in b 121 is the square of 11, 14641 is the 
// square of 121, 20736 the square of 144, 361 the square of 19, 25921 the square 
// of 161, and so on. It gets obvious if we write b's elements in terms of squares:


function comp_rallada_inicial($a1, $a2) {
    // $squares = array_map(function($item) {
    //     return $item * $item;
    // }, $a1);
    $number_count_list = [];
    foreach($a1 as $number){
        if(isset($number_count_list[$number])){
            $number_count_list[$number]['count']++;
            // $number_count_list[$number]['value'] *= $number;
        }else{
            $number_count_list[$number]['count'] = 1;
            // $number_count_list[$number]['value'] = $number;
        }
    }
    // foreach($number_count_list as $key => $number){
    //     $number["value"] = pow($key, $number['count']);
    //     var_dump($number);
    // }

    $comparation_list = [];
    foreach($a1 as $num) {
        // $comparation_list [] = pow($num,$number_count_list[$num]['count']);
        $comparation_list [] = $num * $num;
    }

    sort($a2);
    sort($comparation_list);
    
    foreach ($a2 as $key => $number){
        if ($number != $comparation_list[$key]) return false;
    }

    // var_dump($a2, $comparation_list);

    return true;
}

// SOLUCIÓN LUIS

function comp($a1, $a2) {
    if(gettype($a1) != 'array' || gettype($a2) != 'array') return false;

    //$number_count_list = [];
    $comparation_list = [];

    // NO HACIA FALTA -----------------------------------------------------------------
    // foreach($a1 as $number){
    //     isset($number_count_list[$number]) ? $number_count_list[$number]['count']++ 
    //                                        : $number_count_list[$number]['count'] = 1;
    // }
    
    foreach($a1 as $num) {
        $comparation_list [] = $num * $num;
    }

    sort($a2);
    sort($comparation_list);
    
    foreach ($a2 as $key => $number){
        if ($number != $comparation_list[$key]) return false;
    }

    return true;
}

// SOLUCIÓN CODEWARS  (Lo he complicado de más por no haber entendido bien el enunciado inicial... No sabia que se podían comparar directamente los arrays)
function compCODEWARS($a1, $a2) {
    if(is_null($a1) || is_null($a2)) return false;
    
    $a1 = array_map(function($v) { return $v * $v; }, $a1);
    
    sort($a1);
    sort($a2);
    
    return $a1 == $a2;
}



$a = [121, 144, 19, 161, 19, 144, 19, 11];  
$b = [121, 14641, 20736, 361, 25921, 361, 20736, 361];
$c = [121, 14641, 20736, 25921, 25, 20736, 361];
var_dump(comp($a, $b));
var_dump(comp($a, $c));