<?php


$number_array = [0, 1, 2];
//echo $number_array; // error

print_r($number_array);
/*
 outputs:
 Array
(
    [0] => 0
    [1] => 1
    [2] => 2
)
 */

echo implode(", ", $number_array);  // outputs: 0, 1, 2



$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

$favorite_nums = [7, 201, 33, 88, 91];

// Write your code below:
echo implode("!", $message);    // Oh hey! You're doing great! Keep up the good work!

print_r($favorite_nums);
/*
Array
(
    [0] => 7
    [1] => 201
    [2] => 33
    [3] => 88
    [4] => 91
)
*/


