<?php

// User Input: readline()
// The outcomes of programs we’ve been writing so far have been predetermined. Unless we manually change our code, it will produce the same results each time it’s run. But this isn’t very realistic. Programs often receive unexpected inputs or results which is why we need conditionals. Conditionals allow us to write flexible programs that handle this variability.
// One common reason our programs need to be flexible is when they have user interaction. When we create a website, we don’t know exactly when a user will press a button or exactly what text they’ll input in a form. Writing programs that can handle unique user interaction is a big part of software development.
// User interaction isn’t restricted to web development. We can enable user interaction in our terminal-based programs as well.
// The built-in readline() function takes a string with which to prompt the user. It waits for the user to enter text into the terminal and returns that value as a string.

// run program directly within the terminal with the command:
// php ./09_booleans_and_comparison_operators/09_User_Input_-_readline.php
echo "Hi, I'm Aisle Nevertell. What's your name?\n";
$name = readline(">> ");
echo "\nNice to meet you, $name";

// The code above prints, Hi, I'm Aisle Nevertell. What's your name?. Then, it prints >> to the terminal to prompt the user to type and awaits their input which it will save in the $name variable. If the user entered Alex, for example, the program would next print Nice to meet you, Alex to the terminal.
// By incorporating in conditionals, we can take different actions depending on the user input:
echo "\nWhat's your favorite color?\n";
$color = readline(">> ");
if ($color === "green"){
    echo "\nCool, that's my favorite too!";
} else {
    echo "\nOh, $color is nice, I guess…";
}

// In the code above, we prompt the user to enter their favorite color. If they say our favorite color (green), we give one response, otherwise we give a different response.



// my own code

// my own code

echo "Hello, there. What's your first name?\n";
$name = readline(">> ");

$name_length = strlen($name);

if ($name_length > 8) {
    echo "Hi, ${name}. That's a long name.";
} elseif ($name_length > 3) {
    echo "Hi, ${name}.";
} else {
    echo "Hi, ${name}. That's a short name.";
}
