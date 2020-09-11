<?php

/*Changing and Removing Elements
The same syntax that adds new array elements can be used to change existing elements:*/

$new_arr = ["first" => "I am first!", "second" => "I am second!"];
$new_arr["third"] = "I am third!";
echo $new_arr["third"]; // Prints: I am third!

$new_arr["third"] = "I am the *NEW* third!";
echo $new_arr["third"]; // Prints: I am the *NEW* third!

/*In the above code, we use the same syntax to add a key=>value pair ("third" => "I am third!") as we do to assign that key a new value ("third" => "I am the *NEW* third!").
Since PHP will allow us to add a new key=>value pair or change an existing value using exactly the same code, we’ll need to use caution to avoid accidentally overwriting an existing value.
We can remove a key=>value pair entirely using the PHP unset() function. Note: if the key used doesn’t exist in the array, then nothing happens.*/

$nums = ["one" => 1,"two"=> 2];
echo implode(", ", $nums); // Prints: 1, 2
unset($nums["one"]);            // remove one
echo implode(", ", $nums); // Prints: 2

//In the code above, we created an associative array with two key => value pairs. We then removed the pair "one" => 1 using the unset() function.



// Write your code below:
$my_car = [
    "oil" => "black and clumpy",
    "brakes" => "new",
    "tires" => "old with worn treads",
    "filth" => "bird droppings",
    "wiper fluid" => "full",
    "headlights" => "bright"
];
print_r($my_car);

$my_car["oil"] = "new and premium";
$my_car["tires"] = "new with deep treads";
unset($my_car["filth"]);

print_r($my_car);