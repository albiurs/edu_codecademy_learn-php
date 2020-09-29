<?php

//while
//The first PHP loop that we will cover is the while loop. This type of loop continues to iterate as long as its conditional is true.
//This code outputs the numbers from 1-10, similar to the previous example:

$count = 1;
while ($count < 11)
{
    echo "The count is: " . $count . "\n";
    $count += 1;
}

//The first time the interpreter encounters this code, it checks the condition. If it evaluates to TRUE, the code block is executed. It then checks the condition again, and if TRUE, executes the code block again. It continues in this fashion until the condition is FALSE.
//In this example, the code within the curly braces ({}) executes while the conditional statement within the brackets ($count < 11) is still true. $count starts at a value of 1 so the conditional is true on the first iteration.
//The variable $count is incremented by 1 during each iteration of the loop ($count += 1). When $count is equal to 11, the conditional is no longer true and the while loop terminates. Any code after this block is then executed.



// own code

$count = 1;

while ($count <= 100) {

    if($count % 33 == 0) {
        echo $count . " is divisible by 33\n";
    }
    $count ++;
}