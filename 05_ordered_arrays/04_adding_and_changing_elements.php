<?php

// add elements to the end of an array by taking the variable name and appending square brackets ([]), the assignment operator (=), and the element we want to add:
$string_array = ["first element", "second element"];

$string_array[] = "third element";

echo implode(", ", $string_array);
// Prints: first element, second element, third element


// We can also reassign the individual elements in an array:
$string_array = ["first element", "second element", "third element"];

$string_array[0] = "NEW! different first element";

echo $string_array[0]; // Prints: NEW! different first element"



// write your own code
$change_me = [3, 6, 9];

$change_me[] = "added String";  // add element
$change_me[] = 78;              // add element
$change_me[1] = "tadpole";      // change element[1]

print_r($change_me);
echo implode(", ", $change_me);