<?php

$grades = [
    "Jane" => 98,
    "Lily" => 74,
    "Dan" => 88,
];

//echo $grades; // error

echo implode(", ", $grades); // Prints: 98, 74, 88

print_r($grades);
/*
prints:
Array
(
    [Jane] => 98
    [Lily] => 74
    [Dan] => 88
)
 */



// Write your code below:
$september_hits = [
    "The Sixth Sense" => 22896967,
    "Stigmata" => 18309666,
    "Blue Streak" => 19208806,
    "Double Jeopardy" =>  23162542
];

echo implode($september_hits);

print_r($september_hits);