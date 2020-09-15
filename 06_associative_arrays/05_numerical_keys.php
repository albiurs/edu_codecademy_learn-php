<?php

/*Numerical Keys
Associative arrays can use integers as keys, in addition to strings.*/

$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
echo $num_array[1000]; // Prints: one thousand

//When we build ordered arrays in PHP, the association with numerical keys to values is done for us automatically. The first element is associated with the key 0, the second with 1, and so on. But ordered arrays are still the same structure as associative arrays. We can mix and match:

$ordered = [99, 1, 7, 8];
$ordered["special"] = "Cool!";
echo $ordered[3]; // Prints: 8
echo $ordered["special"]; // Prints: Cool!

//When we add an element to an array without specifying a key (e.g. using array_push()), PHP will associate it with the “next” integer key. If no integer keys have been used, it will associate it with the key 0, otherwise it will associate it one more than the largest integer used thus far. This behavior is the same whether the array is being used as an ordered array or an associative array. Let’s look at an example:

$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
$num_array[] = "New Element in \$num_array";
echo $num_array[1001]; // Prints: New Element in $num_array

$animals_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
array_push($animals_array, "New Element in \$animals_array");
echo $animals_array[0]; // Prints: New Element in $animals_array

//Even though associative arrays and ordered arrays are technically the same, we recommend treating them as separate data types. Only use the empty square brackets syntax (or functions like array_push()) with ordered arrays.





// Write your code below:
$hybrid_array = [23, 45, 56, 67, 89];
$hybrid_array[8] = "five more";

print_r($hybrid_array);

array_push($hybrid_array, rand());
echo $hybrid_array[9];