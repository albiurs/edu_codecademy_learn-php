<?php

// Multi-File Programs: include
// Separation of concerns is the programming design principle of organizing code into distinct sections each handling a specific task. It enables us to quickly navigate our code and know where to look if something isn’t working. We’ve seen how functions can allow us to practice separation of concerns—by packaging certain routines in functions, we’re able to write cleaner code. But when programs start to get very long, functions aren’t always enough.
// Another way to improve our code and separate concerns is with modularity, separating a program into distinct, manageable chunks where each provides a piece of the overall functionality. Instead of having an entire program located in a single file, code is organized into separate files. Each file is then included in our main program with the keyword include. An include statement will bring the code from a file into the current file and also run the code. It’s as if all the code from that file was written right there. We provide the path to the file to be included as a string.
// For example, let’s say we had three files one.php, two.php, and index.php, and we want to include the code from files one.php and two.php inside index.php:

// one.php
echo "How are";

// two.php
echo " you?";

// index.php
echo "Hello! ";
include "one.php";
include "two.php";
// Prints: Hello! How are you?

// When we run index.php Hello! How are you? is printed to the terminal.
// This example is a little silly because we’re barely including any code in the separate files. Let’s get some practice including more significant chunks of code into our main program!


//own code

// sandwich.php
include "top_bread.php";
include "mayo.php";
include "lettuce.php";

echo "Sliced, ripe tomatoes\nBacon\nTurkey\n";

include "bottom_bread.php";

