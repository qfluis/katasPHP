<?php
// The drawing shows 6 squares the sides of which have a length of 1, 1, 2, 3, 5, 8. 
// It's easy to see that the sum of the perimeters of these squares is : 
// 4 * (1 + 1 + 2 + 3 + 5 + 8) = 4 * 20 = 80 

// Could you give the sum of the perimeters of all the squares in a rectangle when 
// there are n + 1 squares disposed in the same manner as in the drawing:

// alternative text

// Hint:
// See Fibonacci sequence

// Ref:
// http://oeis.org/A000045

// The function perimeter has for parameter n where n + 1 is the number of squares 
// (they are numbered from 0 to n) and returns the total perimeter of all the squares.

// perimeter(5)  should return 80
// perimeter(7)  should return 216

// Solución Luis
function perimeter($n) {
    $n1 = 1;
    $n2 = 1;
    $sum = 2;

    for ($i=1; $i<$n; $i++) {
        $old_n2 = $n2;
        $n2 =  $n1 + $n2;
        $n1 = $old_n2;
        $sum+=$n2;
    }
    return $sum * 4;
}

//echo perimeter(5);
//echo perimeter(7);
echo perimeter(70);

// Solución Codewars
function perimeter2($n) {
    $fibonacciNumbers = [1,1];
    for($i = 2; $i <= $n; $i++){
        $fibonacciNumbers[$i] = $fibonacciNumbers[$i-2] + $fibonacciNumbers[$i-1];
    }
    return 4 * array_sum($fibonacciNumbers);  
}
