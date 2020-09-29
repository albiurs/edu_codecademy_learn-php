<?php

//foreach
//    The foreach loop is used for iterating over an array. The code block is executed for every element in the array and the value of that element is available for use in the code block.
//Our counting to 10 example becomes:

$counting_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($counting_array as $count) {
    echo "The count is: " . $count . "\n";
}

//Here, we are iterating over $counting_array. On each iteration, the current element in the array is assigned to the variable $count.
//We can also iterate over dictionary type arrays with keys and values:

$details_array = ["color" => "blue", "shape" => "square"];
foreach ($details_array as $detail) {
    echo "The detail is: " . $detail . "\n";
}

//This will print:
//The detail is: blue
//The detail is: square
//But we can change the syntax slightly to get access to the keys as well as the values:

$details_array = ["color" => "blue", "shape" => "square"];
foreach ($details_array as $attribute => $detail) {
    echo "The " . $attribute . " is: " . $detail . "\n";
}

//This will print:
//The color is: blue
//The shape is: square
//Since the loop is controlled by the structure of the array, you can encounter some unexpected behavior if you begin modifying the array during the execution of the foreach loop. If you are going to do this, make sure you have addressed the notes on this in the PHP documentation.


// own code
$scores = [
    "Alice" => 99,
    "Bob" => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward" => 88
];

foreach ($scores as $key => $value) {
    echo "Someone received a score of ${value}.\n";
}

foreach ($scores as $key => $value) {
    echo "${key} received a score of ${value}.\n";
}