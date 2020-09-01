<?php

// array_pop()
// The array_pop() function takes an array as its argument. It removes the last element of an array and
// returns the removed element.
// Note that array_pop() doesn’t just set the last element to NULL. It actually removes it from the array, meaning
// that array’s length will decrease by one (which we can verify using count()).
$my_array = ["tic", "tac", "toe"];
array_pop($my_array);
// $my_array is now ["tic", "tac"]
$popped = array_pop($my_array);
// $popped is "tac"
// $my_array is now ["tic"]


// array_push()
// The array_push() function takes an array as its first argument. The arguments that follow are elements to be added to
// the end of the array. array_push() adds each of the elements to the array and returns the new number of elements
// in the array.
$new_array = ["eeny"];
$num_added = array_push($new_array, "meeny", "miny", "moe");
echo $num_added; // Prints: 4
echo implode(", ", $new_array); // Prints: eeny, meeny, miny, moe



// some examples:
$arr = [1, 2, 3];
array_pop($arr);
echo count($arr);       // 2


$arr = [1];
echo array_push($arr, 0);   // print the new array length: 2


$arr = [1, 2, 3];
array_pop($arr);
echo array_pop($arr);   // prints the value of the element removed: 2


$arr = [1, 2, 3];
echo array_pop($arr);   // prints the value of the dropped element: 3 (nothing removed)