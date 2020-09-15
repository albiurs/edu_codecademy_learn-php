<?php

// Comparison Operators
// The condition, or expression, in an if statement can hold a boolean value—like TRUE or FALSE, a variable assigned to one of those values, or an expression that evaluates to TRUE or FALSE.
// Just as we can represent a value of five with 5 or with an expression that evaluates to five e.g. 3 + 2, we can write expressions that evaluate to TRUE or FALSE. Comparison operators evaluate a relationship between two operands and return a boolean value.
// The less than operator (<) will return TRUE if the left operand is less than the right operand and FALSE if it’s not:
1 < 10; // Evaluates to: TRUE
11 < 3; // Evaluates to: FALSE

// The less than or equal to operator (<=) will return TRUE if the left operand is less than or equal to the right operand and FALSE if it’s not:
1 <= 10; // Evaluates to: TRUE
4 <= 4; // Evaluates to: TRUE
18 <= 2; // Evaluates to: FALSE

// The greater than operator (>) will return TRUE if the left operand is greater than the right operand and FALSE if it’s not. And the greater than or equal to operator (>=) will return TRUE if the left operand is greater than or equal to the right operand and FALSE if it’s not:
1 > 10; // Evaluates to: FALSE
11 > 3; // Evaluates to: TRUE
1 >= 10; // Evaluates to: FALSE
11 >= 11; // Evaluates to: TRUE
54 >= 10; // Evaluates to: TRUE


// own code:
// choose lane
function chooseCheckoutLane($number){

    if($number <= 12) {
        return "express lane";
    } else {
        return "regular lane";
    }
}

echo ternaryCheckout(12);
echo ternaryCheckout(13);

// vote
function canIVote($age) {

    if($age >= 18) {
        return "yes";
    } else {
        return "no";
    }
}

echo canIVote(17);
echo canIVote(18);