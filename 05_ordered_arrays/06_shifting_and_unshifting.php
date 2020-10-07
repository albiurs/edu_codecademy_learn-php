<?php

// array_shift()
// The array_shift() function removes the first element of an array and returns that value. Each of the elements in the
// array will be shifted down an index. For example, the element that was previously at the 3rd index will now be
// located at the 2nd.
// Just like array_pop(), array_shift() reduces the length of the array, and the deleted element is gone for good.
$adjectives = ["bad", "good", "great", "fantastic"];
$removed = array_shift($adjectives);
echo $removed; //Prints: bad
echo implode(", ", $adjectives); // Prints: good, great, fantastic



// array_unshift()
// The array_unshift() function takes an array as its first argument. The arguments that follow are elements to be added
// to the beginning of the array. It returns the new number of elements in the array.
$foods = ["pizza", "crackers", "apples", "carrots"];
$arr_len = array_unshift($foods, "pasta", "meatballs", "lettuce");
echo $arr_len; //Prints: 7
echo implode(", ", $foods);
// Prints: pasta, meatballs, lettuce, pizza, crackers, apples, carrots



// some examples:
$arr = [1, 2, 3];
array_shift($arr);
echo count($arr);       // 2


$arr = [1];
echo array_unshift($arr, 0);    // shows final array length: 2


$arr = [1, 2, 3];
array_shift($arr);
echo array_shift($arr);     // show the value of the element removed: 2


$arr = [1, 2, 3];
echo array_unshift($arr);   // shows final array length: 3 (nothing added)