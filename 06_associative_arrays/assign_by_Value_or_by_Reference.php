<?php

/*Assign by Value or by Reference

There are two ways to assign one variable to another:

    - By value—this creates two variables which hold copies of the same value but remain independent entities.
    - By reference—this creates two variable names (aliases) which point to the same space in memory. They cannot be modified separately!

This remains true when dealing with array variables:*/

$favorites = ["food"=>"pizza", "person"=>"myself", "dog"=>"Tadpole"];
$copy = $favorites;
$alias =& $favorites;
$favorites["food"] = "NEW!";

echo $favorites["food"]; // Prints: NEW!
echo $copy["food"]; // Prints: pizza
echo $alias["food"]; // Prints: NEW!

//When passing arrays into functions, both built-in functions and those we write ourselves, we’ll want to be conscious of whether the arrays are being passed by value or by reference.

function changeColor ($arr)
{
$arr["color"] = "red";
}
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
changeColor ($object);
echo $object["color"]; // Prints: green

//Our function above doesn’t accept its array argument by reference. Therefore, $arr is merely assigned a copy of the
// argument’s value. This copy array is changed when the function is invoked, but that doesn’t affect the orginal
// argument array ($object). To do that, we’d need to pass it by reference:

function reallyChangeColor (&$arr)
{
    $arr["color"] = "red";
}
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
reallyChangeColor ($object);
echo $object["color"]; // Prints: red




// Write your code below:
$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];
$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];

function createMeme($arr) {
   $arr["top_text"] = "Much PHP";
   $arr["bottom_text"] = "Very programming. Wow.";
   return $arr;
}

$php_doge = createMeme($doge_meme);

/**
 * permanently change the values using referenced param to original array.
 * @param $arr
 * @return mixed
 */
function fixMeme(&$arr) {
    $arr["top_text"] = "Much PHP";
    $arr["bottom_text"] = "Very programming. Wow.";
    return $arr;
}

fixMeme($bad_meme);