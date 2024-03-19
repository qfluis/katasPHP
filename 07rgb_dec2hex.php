<?php
// The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal 
// representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range
// must be rounded to the closest valid value.

// Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

// Examples (input --> output):
// 255, 255, 255 --> "FFFFFF"
// 255, 255, 300 --> "FFFFFF"
// 0, 0, 0       --> "000000"
// 148, 0, 211   --> "9400D3"

// Solución Luis -------------
function rgb($r,$g,$b){
    return strtoupper(dec2hex($r) . dec2hex($g) . dec2hex($b));
}
function dec2hex($number){
    if($number > 255) $number = 255;
    if($number < 0) $number = 0;
    $result = dechex($number);
    if (strlen($result) == 1) $result = '0'.$result;
    return $result;
}


echo rgb(255, 155,111);

// Solución Codewars
function rgb2($r,$g,$b){
    return sprintf("%02X%02X%02X", checkValue($r), checkValue($g), checkValue($b));
}

function checkValue($value){
return $value > 255 ? 255 : ($value < 0 ? 0 : $value);
}