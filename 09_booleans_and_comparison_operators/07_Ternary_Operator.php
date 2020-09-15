<?php

// Ternary Operator
// PHP offers a short-hand syntax to conditionally return a value. Before learning it, let’s consider some example code:
$isClicked = FALSE;
if ( $isClicked ) {
    $link_color = "purple";
} else {
    $link_color = "blue";
}

// In the code above, our condition checks the value of the $isClicked variable. If it’s TRUE we assign $link_color to "purple", otherwise we assign it the value "blue". Our code is somewhat repetitive—the code in each code block is only slightly different.
// A ternary operator (?:) is another conditional operator. It takes three operands and returns a value:
//     The first operand is a condition to check. This is followed by a question mark ?.
//     The third operand is an expression to return if the condition is FALSE.
// Let’s see our previous example refactored with the ternary operator:
$isClicked = FALSE;
$link_color = $isClicked ? "purple" : "blue";

// The ternary operator allows us to write fewer lines of code while maintaining readability.
// Note that code in the expression will be executed, but the intended use of the ternary is to conditionally return a value not to execute code.




// my own code:

// choose lane
function ternaryCheckout($number){

     return $number <= 12 ?  "express lane" :  "regular lane";
}

echo ternaryCheckout(12);
echo ternaryCheckout(13);


// vote
function ternaryVote($age) {

    return $age >= 18 ? "yes" : "no";
}

echo ternaryVote(17);
echo ternaryVote(18);