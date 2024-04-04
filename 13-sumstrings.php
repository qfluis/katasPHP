<?php
// Given the string representations of two integers, return the string representation of 
// the sum of those integers.

// For example:

// sumStrings('1','2') // => '3'
// A string representation of an integer will contain no characters besides the ten 
// numerals "0" to "9".

// Mi solución
function sum_strings($a, $b) {
    $arr_num1 = array_reverse(str_split($a));
    $arr_num2 = array_reverse(str_split($b));

    $digits = max(count($arr_num1), count($arr_num2));

    if (count($arr_num1) == $digits) {
        $arr_result = $arr_num1;
    } else {
        $arr_result = $arr_num2;
        $arr_num2 = $arr_num1;
    }

    for($i=0; $i<$digits; $i++) {
        if(!array_key_exists($i, $arr_num2)) {
            $arr_num2 [$i] = 0;
        };
        $sum = intval($arr_result[$i]) + intval($arr_num2[$i]);
        if($sum > 9) {
            $sum = $sum - 10;
            if(array_key_exists($i+1, $arr_result)){
                $arr_result[$i+1] ++;
            } else {
                $arr_result[$i+1] = 1;
            }            
        }
        $arr_result[$i] = $sum;        
    }
    $arr_result = array_reverse($arr_result);
    for($i=0;$i<$digits;$i++) {
        if ($arr_result[$i] == 0){
            unset($arr_result[$i]);
        } else {
            break;
        }
    }
    return implode("",$arr_result);
}

//echo sum_strings('712577413488402631964821329','112577413488402631964821329'); // => '3'
// echo sum_strings('0624','000000457');
echo sum_strings('99624','457');
// $bigint = gmp_init("9999999999999999999");
// $bigint_string = gmp_strval($bigint);
// var_dump($bigint, $bigint_string);


// Solución codewars
function sum_strings2($a, $b) {
    $result = '';
    
    $maxLength = max(strlen($a), strlen($b));
    $a = strrev($a);
    $b = strrev($b);
    
    $remain = 0;
    for ($i = 0; $i <= $maxLength; $i++){
      $aVal = isset($a[$i]) ? (int)$a[$i] : 0;
      $bVal = isset($b[$i]) ? (int)$b[$i] : 0;
      
      $res = $aVal + $bVal + $remain;
      $val = $res % 10;
      $remain = intdiv($res, 10);
      
      $result .= $val;
    }
    return ltrim(strrev($result), '0');
  }
