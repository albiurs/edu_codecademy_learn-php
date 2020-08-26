<?php

// Hello World
echo "Hello, World!";


/**
 * Escape Sequences
 */
//echo "She said "hi" to the dog."; //syntax error, unexpected 'hi' (T_STRING)
echo "She said \"hi\" to the dog."; // Prints: She said "hi" to the dog.

echo "1. Go to gym";
echo "\n2. Cook dinner";
/* Prints
1. Go to gym
2. Cook dinner
*/

// Write your code below:
echo "1. I learn PHP";
echo "\n2. I learn MySQL";
echo "\n3. Learn to have \"fun\"";


/**
 * String Concatenation
 */
echo "one" . "two"; // Prints: onetwo
echo "one " . "two"; // Prints: one two
echo "one" . " " . "two" . " " . "three"; // Prints: one two three

// Write your code below:
echo "Code" . "cademy";
echo "\nMy name is:" . " Urs Albisser";
echo "\n" . "tur" . "duck" . "en";


/**
 * Variables
 */
$my_name = "Aisle Nevertell";

$mood = ":)";
$favorite_food = "Red curry with eggplant";

// Write your code below:
$my_var = "My String";
$biography = "\nI'm an IT professional.";
$favorite_food = "\n" . "tur" . "duck" . "en";


/**
 * Using Variables
 */
$favorite_food = "Red curry with eggplant, green beans, and peanuts";
echo $favorite_food;
// Prints: Red curry with eggplant, green beans, and peanuts

$dog_name = "Tadpole";
echo $dog_name;
// Prints: Tadpole

$dog_name = "Tadpole";
echo "My dog is named " . $dog_name;
// Prints: My dog is named Tadpole

$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";

echo "I have a " . $color . " dog named " . $dog_name . " and her favorite food is " . $favorite_food . ".";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.

// Write your code below:
$name = "Urs";
$language = "German";

echo "My name is " . $name;
echo "\nMy language is " . $language;



/**
 * Variable Parsing
 */
$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";

echo "I have a $color dog named $dog_name and her favorite food is $favorite_food.";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.

$toy = "frisbee";
//echo "Alex likes playing with $toys";
// The code above will cause an error.

$dog_name = "Tadpole";
$favorite_food = "treat";
$color = "brown";

echo "I have a ${color}ish dog named $dog_name and her favorite food is ${favorite_food}s.";
// Prints: I have a brownish dog named Tadpole and her favorite food is treats.

// Fill in the blanks in the code below:
$noun = "fruit";
$adjective = "sweet";
$verb = "jump";

echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";

//Fix the code below and uncomment it:
echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";


/**
 * Variable Reassignment
 */
$favorite_food = "Red curry with eggplant";
echo $favorite_food; // Prints: Red curry with eggplant

// Reassign the value of $favorite_food to a new string
$favorite_food = "Pizza";
echo $favorite_food; // Prints: Pizza

$first_player_rank = "Beginner";
$second_player_rank = $first_player_rank;

// write your own code:
$movie = "___";
// Add your code here:
$movie = "Purple Rain";
$old_favorite = $movie;

echo "I'm a fickle person, my favorite movie used to be $movie.";

// Add a statement here:
$movie = "Pirates of the Carebean";
$movie = "another string";

echo "\nBut now my favorite is $movie.";

// Add a statement below:
echo "\nnext strinng $old_favorite";



/**
 * Concatenating Assignment Operator
 */
$full_name = "Aisle" . " Nevertell";
echo $full_name; // Prints: Aisle Nevertell

$full_name = "Aisle" . " " . "Nevertell" . " " . "Nomaderwat";
echo $full_name; // Prints: Aisle Nevertell Nomaderwat

$full_name = "Aisle";
$full_name = $full_name . " Nevertell";
echo $full_name; // Prints: Aisle Nevertell

$full_name = "Aisle";
$full_name .= " Nevertell";
echo $full_name; // Prints: Aisle Nevertell

// write your own code
echo "I'm going on a picnic!";

$sentence = "\nI'm going on a picnic, and I'm taking apples";

echo $sentence;

// Write your code below:
$sentence .= ", blue berries";
echo $sentence;

$sentence .= ", coke.";
echo $sentence;





/**
 * Assign by Reference
 */
$first_player_rank = "Beginner";
$second_player_rank = $first_player_rank;
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Still Prints: Beginner


$first_player_rank = "Beginner";
$second_player_rank =& $first_player_rank;
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Prints: Intermediate


/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
$order =& $very_bad_unclear_name;

// Write your code here:
$order .= " and more";

echo $very_bad_unclear_name;

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";





