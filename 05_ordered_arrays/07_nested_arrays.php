<?php

// Nested Arrays

$nested_arr = [[2, 4], [3, 9], [4, 16]];
$first_el = $nested_arr[0][0];
echo $first_el; // Prints: 2


$very_nested = [
    1,
    "b",
    33,
    [
        "cat",
        6.1,
        [9, "LOST!", 6],
        "mouse"
    ],
    7.1
];

$very_nested[3][2][1] = "Found!";   // change LOST! to Found!



// Write your code below:
$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

echo $treasure_hunt[3][4][2][0];    // GOLD!