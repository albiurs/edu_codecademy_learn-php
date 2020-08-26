<?php

/**
 * Numbers
 */
echo 5; // Prints: 5
echo -22.8; // Prints: -22.8


$my_int = 78;
$my_float = -897.21;

echo $my_int; // Prints: 78
echo $my_float; // Prints: -897.21


$my_num = -19273645.862;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo "Look! It still works!\n";
echo $answer;
echo "\nCool?\nIt's a little cool, right?";





/**
 * Addition and Subtraction
 */
echo 5 + 1; // Prints: 6
echo 6.6 + 1.2; // Prints: 7.8
echo 198263 - 263;  // Prints: 198000
echo -22.8 - 19.1; // Prints: -41.9


// Write your code below:
echo 7 + 5;





/**
 * Using Number Variables
 */
$tadpole_age = 7;
$lily_age = 6;
$age_difference = $tadpole_age - $lily_age;
echo $age_difference; // Prints 1

$favorite_num = 22;
echo $favorite_num + 1; // Prints 23
echo $favorite_num; //Prints 22

$age = 82;
echo $age; // Prints: 82

$age = $age + 2;
echo $age; // Prints: 84

// Write your code below:
$last_month = 1187.23;
$this_month = 1089.98;

echo $last_month - $this_month;






/**
 * Multiplication and Division
 */
echo 2 * 3; // Prints: 6
echo -21 / 7; // Prints: -3

$num_cookies = 24;
$num_friends = 7;
$cookies_per_friend = $num_cookies / $num_friends;
echo $cookies_per_friend; // Prints: 3.4285714285714

// Write your code below:
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;

echo $days_per_language;






/**
 * Exponentiation
 */
echo 4 ** 2; // Prints: 16

echo 2.89 ** 3.2;  // Prints: 29.845104015297
echo 10 ** -1; // Prints: 0.1

echo 2 ** 3; // Will result in an error

// Write your code below:
echo 8 ** 2;








/**
 * Modulo
 */
echo 7 % 3; // Prints: 1

$num_cookies = 27;
$cookies_per_serving = 4;
$leftover_cookies = $num_cookies % $cookies_per_serving;
echo $leftover_cookies; // Prints: 3

// Write your code below:
echo 82 % 6;






/**
 * Order of Operations
 */
echo 2 + 3 + 4 + 5 - 1.1; // Prints: 12.9
echo 2 * 9 / 6; // Prints: 3

echo 1 + 3 * 9; // Prints: 28

echo (1 + 3) * 9; // Prints: 36

// Write your code below:
echo 94 - 4.25 + 7 - (23.5 * 1.2) + (20 / 4);





/**
 * Mathematical Assignment Operators
 */
$savings = 800;
$bike_cost = 75;
$savings = $savings - $bike_cost;
echo $savings; // Prints: 725


/*
 * Operation: 	Long Syntax: 	Short Syntax:
 * Add 	        $x = $x + $y 	$x += $y
 * Subtract 	$x = $x - $y 	$x -= $y
 * Multiply 	$x = $x * $y 	$x *= $y
 * Divide 	    $x = $x / $y 	$x /= $y
 * Mod 	        $x = $x % $y 	$x %= $y
 */


$savings = 800;
$bike_cost = 75;
$savings -= $bike_cost;
echo $savings; // Prints: 725


$age = 89;
$age++;
echo $age; // Prints: 90

$days_til_vacation = 7;
$days_til_vacation--;
echo $days_til_vacation; // Prints: 6


// Write your code below:
$my_num = 9;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer;




/**
 * Review
 */
$my_num = -19273645.862;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo "Look! It still works!\n";
echo $answer;
echo "\nCool?\nIt's a little cool, right?";