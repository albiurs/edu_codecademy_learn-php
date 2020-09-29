<?php

//do while
//A do…while loop is very similar to a while loop. The main difference is that the code block will execute once without the conditional being checked. After the first iteration, it behaves the same as a while loop.
//    The syntax is slightly different, and the conditional goes at the end of the code block. Our counting to 10 example looks like:

$count = 1;
do {
    echo "The count is: " . $count . "\n";
    $count += 1;
} while ($count < 11);

//Unlike the other loop types, the do…while loop requires a semicolon at the end.
//In practice, only use this type of loop when you always need the code block to execute at least one time.
//For example, if you want to ask a user to guess a secret number, you could use code like:

do {
    $guess = readline("\nGuess the number\n");
} while ($guess != "42");
echo "\nYou correctly guessed 42!";

//This code asks the user to "Guess the number" and continues asking them until they successfully guess 42.


// own code

$plant_height = 22;

do {
    echo "The plant is ${plant_height} tall.\n";

    if ($plant_height >= 30) {
        echo "And can produce fruit.\n";
    }

    $plant_height ++;
} while($plant_height <= 30);