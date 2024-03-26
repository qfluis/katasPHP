<?php
// Write an algorithm that takes an array and moves all of the zeros to the end, 
// preserving the order of the other elements.
// moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]

// Solución Luis
function moveZeros(array $items): array
{
    $count = count($items);
    for($i=0; $i< $count; $i++) {
        if(($items[$i] === 0 || $items[$i] === 0.0 )&& !is_null($items[$i])) { //&& gettype($items[$i])==='integer'){            
            unset($items[$i]);
            $items [] = 0;
            $items = array_values($items);
            $i--;
            $count--;
        }
    }
    return $items;
}

// var_dump(moveZeros([1,2,0,1,0,1,0,3,0,1]));
// var_dump(moveZeros([false,1,0.0,null,2,0,1,3,"a"]));
var_dump(moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]));


// Soluciones Codewars
function moveZeros2(array $items): array {
    return array_pad(array_filter($items, function($x){return $x !== 0 and $x !== 0.0;}), count($items), 0);
}

function moveZeros3(array $items): array
{
  $ret = array_diff($items,[0]);
  return array_merge($ret,array_fill(0,count($items)-count($ret),0));
}