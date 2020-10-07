<?php

/**
 * Invoking Functions
 */
function greetLearner()
{
    echo "Hello, Learner!\n";
    echo "I hope you're enjoying PHP!\n";
    echo "Love, Codecademy";
}

greetLearner();
/*
Prints:
Hello, Learner!
I hope you're enjoying PHP!
Love, Codecademy
*/


// Write your code below:
function inflateEgo() {
    echo "compliment!";
}

inflateEgo();
inflateEgo();





/**
 * Return Statements
 */
function countdown()
{
    echo "4, 3, 2, 1, ";
    return "blastoff!";
}

$return_value = countdown(); // Prints: 4, 3, 2, 1,
echo $return_value; // Prints: blastoff!


// Write your code below:
function printStringReturnNumber() {
    echo "print STring";
    return 5;
}

$my_num = printStringReturnNumber();
echo $my_num;





/**
 * More on Return Statements
 */
function announceRunning()
{
    echo "The first function is running!\n";
    return "This is the return value of the first function.";
}

$first_result = announceRunning();
echo $first_result;
//The first function is running!
//This is the return value of the first function.


function announceRunning2()
{
    return "This is the return value of the second function.";
    echo "P.S., I love you";
}

$second_result = announceRunning2();
echo $second_result;
// This is the return value of the second function.


// write your own code:
function notFound()
{
    echo "ERROR: Page not found!\n";
    return 404;
}

function greetLearner2()
{
    echo "Hello, Learner!\n";
    echo "I hope you're (still) enjoying PHP!\n";
    echo "Love, Codecademy\n";
    return "<3";
}

// Don't change the code below:
$error = notFound();
$heart = greetLearner2();

echo "I received a $error, but it's ok because I also received $heart.";





/**
 * Return Values
 */
function returnFive()
{
    return 5;
}

echo returnFive(); // Prints: 5


echo 5 + 3; // Prints: 8
$num = 5;
echo $num + 3; // Prints: 8
echo returnFive() + 3; // Prints: 8


function notFound2()
{
    echo "ERROR: Page not found!\n";
    return 404;
}

function greetLearner3()
{
    echo "Hello, Learner!\n";
    echo "I hope you're (still) enjoying PHP!\n";
    echo "Love, Codecademy\n";
    return "<3";
}

// Don't change the code below:

$error = notFound2();
$heart = greetLearner3();

echo "I received a $error, but it's ok because I also received $heart.";





/**
 * Returning NULL
 */
function returnNothing()
{
    echo "I'm running! I'm running!\n";
}

$result = returnNothing(); // Prints: I'm running! I'm running!

echo $result; // Nothing is printed


// Write your code below:
function createVacuum() {
    return null;
}

echo createVacuum() * 10;


//NULL can sometimes act like 0 - like it does in the example we showed above… other times it won’t.
echo NULL * 3; // Prints: 0
echo NULL . "!"; // Prints: !






/**
 * Parameters
 */
function sayCustomHello($name)
{
    echo "Hello, $name!";
};

sayCustomHello("Aisle Nevertell"); // Prints: Hello, Aisle Nevertell!

sayCustomHello("Codecademy learner"); // Prints: Hello, Codecademy Learner!


// Write your code below:
function increaseEnthusiasm($string) {
    return $string . "!";
}

echo increaseEnthusiasm("Hello\n");

function repeatThreeTimes($string) {
    return $string . $string . $string;
}

echo repeatThreeTimes("Hello");






/**
 * Multiple Parameters
 */
function divide($num_one, $num_two)
{
    return $num_one / $num_two;
};


echo divide(12, 3); // Prints: 4
echo divide(3, 12); // Prints: 0.25


function expectTwo($first, $second)
{
    return "whatever";
}

//echo expectTwo("test"); // Will result in an error


// Write your code below:
function calculateArea($height, $width) {
    return $height * $width;
}

//echo calculateArea(3, 4);

function calculateVolume($height, $width, $depth) {
    return calculateArea($height, $width) * $depth;
}

echo calculateVolume(1, 2, 3);





/**
 * Default Parameters
 */
function sayCustomHello2($name)
{
    echo "Hello, $name!";
};

//sayCustomHello2(); // Causes an error!


function greetFriend($name = "old chum")
{
    echo "Hello, $name!";
};

greetFriend("Marvin"); // Prints: Hello, Marvin!
greetFriend(); // Prints: Hello, old chum!


// Write your code below:
function calculateTip($tip, $percent = 20) {
    return $tip + ($tip / 100 * $percent);
}

echo calculateTip(100) . "\n";
echo calculateTip(100, 30) . "\n";






/**
 * Pass By Reference
 */
function addX ($param)
{
    $param = $param . "X";
    echo $param;
};
$word = "Hello";
addX($word); // Prints: HelloX
echo $word; // Prints: Hello


function addXPermanently (&$param)
{
    $param = $param . "X";
    echo $param;
};
$word = "Hello";
addXPermanently($word); // Prints: HelloX
echo $word; // Prints: HelloX


// write your own code
$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:
function convertToQuestion(&$string) {
    $string = "Do you think " . $string . "?\n";
}

convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one;
echo $string_two;
echo $string_three;





/**
 * Variable Scope
 */
function calculateDaysLeft($feed_quantity, $number, $rate)
{
    $result = $feed_quantity / ($number * $rate);
    return $result;
}
echo calculateDaysLeft(300, 2, 30);

//echo $result; // error, as the var is not accessible form outside the function


$feed_quantity = 300;
function calculateDaysLeft2($number, $rate)
{
    global $feed_quantity;
    $result = $feed_quantity / ($number * $rate);
    return $result;
}
echo calculateDaysLeft2(2, 120);


function first()
{
    echo "This works!\n";
}
function second()
{
    first();
}
second();


// write your own code
$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
    global $language;
    return $language . ": " . $concept;
}

echo generateLessonName($topic);
