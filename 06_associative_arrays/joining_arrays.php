<?php

/*Joining Arrays
PHP also lets us combine arrays. The union (+) operator takes two array operands and returns a new array with any unique keys from the second array appended to the first array.*/

$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
$more_rankings = ["capybara" => "cutest", "lizard" => "not cute", "dog" => "max cuteness"];
$animal_rankings = $my_array + $more_rankings;

/*The $animal_rankings we created above will have each of the key=>value pairs from $my_array. In addition, it will contain the key=>value pairs from $more_rankings: "capybara"=>"cutest" and "dog"=>"max cuteness". However, since "lizard" is not a unique key, $animal_rankings["lizard"] will retain the value of $my_array["lizard"] (which is "cute").
The union operator can be a little tricky… consider the following union:*/

$number_array = [8, 3, 7];
$string_array = ["first element", "second element", "third element"];
$union_array = $number_array + $string_array;   // no items added
//What values does $union_array hold? It has the elements 8, 3, and 7. Since the two arrays being joined have identical keys (0, 1, and 2), no values from the second array, $string_array, are included in $union_array.




// Write your code below:
$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];
$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];
$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

$potluck = $giraffe_foods + $impala_foods;
print_r($potluck);

$potluck = $potluck + $rat_foods;
print_r($potluck);