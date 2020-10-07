<?php

/**
 * Working with Variables
 */

// gettype()
$name = "Aisle Nevertell";
$age = 1000000;

echo gettype($name); // Prints: string

echo gettype($age); // Prints: integer


// var_dump()
var_dump($name); // Prints: string(15) "Aisle Nevertell"

var_dump($age); // Prints: int(1000000)




/**
 * String Functions
 */

// strrev()
echo strrev("Hello, World!"); // Prints the reverse String: !dlroW ,olleH

// strtolower()
echo strtolower("HeLLo"); // Prints: hello

// str_repeat()
echo str_repeat("hi", 10); // Prints: hihihihihihihihihihi


// Write your code below:
echo strrev(".pu ti peeK .taerg gniod er'uoY");

echo strtolower("SOON, tHiS WILL Look NoRmAL.");

echo str_repeat("\nThere's no place like home.\n", 3);


// substr_count()
// The substr_count() function returns the number of instances of a substring within a string. It takes
// two arguments, the string to search through—sometimes called the haystack— and the string to search
// for — sometimes called the needle.
$story = "I was like, \"Dude, like just tell me what you like think because like everyone else is like being totally honest, and like I just want to know what you like think.\" So like I don't know...";

echo substr_count($story, "like"); // Prints: 8


// write your own code:
$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";

// Write your code below:
echo substr_count($essay_one, "really");
echo substr_count($essay_two, "obvious");


// str_pad()
// Pad a string to a certain length with another string.
$string = "You did it!";
$pad_length = 29;       // total length of the _final_ String
$pad_string = "*~*";
$pad_type = STR_PAD_BOTH;

$new_string = str_pad($string, $pad_length, $pad_string, $pad_type);    // returns: *~**~**~*You did it!*~**~**~*

echo $new_string;


// strtoupper()
function convertToShout($str) {
    return strtoupper($str) . "!";
}

echo convertToShout("hello");





/**
 * Number Functions
 */

// abs()
// The abs() function returns the absolute value of its number argument:
echo abs(-10.99); // Prints: 10.99
echo abs(127); // Prints: 127


// round()
// Another useful function is the round() function which returns the nearest integer to its number argument:
echo round(1.2); // Prints 1
echo round(1.5); //Prints 2
echo round(1298736.821763876); // Prints: 1298737


// Write your code below:
function calculateDistance($first, $second) {
    $result = $first - $second;
    return abs($result);
}

echo calculateDistance(-1, 4);  // should return 5
echo calculateDistance(4, -1);  // should return 5
echo calculateDistance(3, 7);   // should return 4
echo calculateDistance(7, 3);   // should return 4

function calculateTip($totalCost) {
    $tip = 1.18;
    $totalCost = $totalCost * $tip;
    $totalCost = round($totalCost);
    return $totalCost;
}

echo calculateTip(100);   // should return 118
echo calculateDistance(4, -1);   // should return 5




/**
 * Generating Random Numbers
 */

// rand()
$max = getrandmax();        //  assigns 2147483647
echo "$max = getrandmax(); returns: " . $max . "\n";
echo "rand() returns: ". rand(); // Prints a number between 0 and $max

echo rand(1, 2); // Prints either 1 or 2
echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)
echo rand(1, 100); // Prints a number between 1 and 100 (inclusive!)


// Write your code below:
echo getrandmax(); // prints 2147483647

echo "\n";
echo rand();

echo "\n";
echo rand(1, 52); // random number between 1 and 52 (incl)


// ceil()
// Returns the next highest integer value by rounding up value if necessary.
function tipGenerously($cost) {
    $tip = 1.2;
    $total = $cost * $tip;
    return ceil($total);
}

echo tipGenerously(100.00);


// pi()
function calculateCircleArea($diameter) {
    $area = $diameter ** 2 * pi() / 4;
    return $area;
}

echo calculateCircleArea(25); // returns 490.87385212341
