<?php

$my_array = ["tic", "tac", "toe"];

echo $my_array[1]; // Prints: tac


$num_var = 2;

$important_info = ["talking chicken", 181, "magnets?!", 99];

echo $important_info[$num_var]; // Prints: magnets?!



// write your won code:
$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

// Write your code below:
$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);
echo implode(", ", $winners);