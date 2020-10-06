<?php

//We access the value a given key points to using square brackets ([]):

$my_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
echo $my_array["panda"]; // Prints: very cute

/*In the code above, we accessed the value "very cute" using its key, "panda".
To add new elements to an associative array, we use the assignment operator (=):*/

// add element to array:
$my_array["capybara"] = "cutest";
echo $my_array["capybara"]; // Prints: cutest

/*In the code above, we added a fourth key value pair to the array. We accessed the new value "cutest" using its key
"capybara" and printed it using echo.
The computer treats code between the square brackets as an expression, so that code will be evaluated before the array
is accessed. This enables us to use variables, functions, and operators within the square brackets:*/

$favorites = ["favorite_food"=>"pizza", "favorite_place"=>"my dreams", "FAVORITE_CASE"=>"CAPS","favorite_person"=>"myself"];

echo  $favorites["favorite" . "_" . "food"];
// Prints: pizza

$key =  "favorite_place";
echo  $favorites[$key];
// Prints: my dreams

echo $favorites[strtoupper("favorite_case")];
// Prints: CAPS





// Write your code below:
$assignment_one = ["Alex"=> 87, "Kenny"=> 91, "Natalia"=> 91, "Lily"=> 67, "Dan"=> 81, "Kat"=> 77, "Sara" => 65];
$assignment_two = ["Alex"=> 91, "Kenny"=> 99, "Natalia"=> 100, "Lily"=> 61, "Dan"=> 88, "Kat"=> 90];
$assignment_three = ["Alex"=> 78, "Kenny"=> 92, "Natalia"=> 94, "Lily"=> 79, "Dan"=> 73, "Sara" => 61];
$student_name = "Alex";

$assignment_two["Sara"] = 65;
$assignment_three["Kat"] = 97;

$dans_grades = array($assignment_one["Dan"], $assignment_two["Dan"], $assignment_three["Dan"]);

echo $assignment_two[$student_name];