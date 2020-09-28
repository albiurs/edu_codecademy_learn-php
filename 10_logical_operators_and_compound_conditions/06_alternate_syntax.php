<?php

// Alternate Syntax
// An alternate syntax for logical || operator is the or operator, and an alternate syntax for logical && operator is the and operator. These operators have the advantage of making our code more human readable.
// The or Operator:
TRUE or TRUE;   // Evaluates to: TRUE
FALSE or TRUE;  // Evaluates to: TRUE
TRUE or FALSE;  // Evaluates to: TRUE
FALSE or FALSE; // Evaluates to: FALSE

// The and Operator:
TRUE and TRUE;   // Evaluates to: TRUE
FALSE and TRUE;  // Evaluates to: FALSE
TRUE and FALSE;  // Evaluates to: FALSE
FALSE and FALSE; // Evaluates to: FALSE

// The computer treats these operators slightly differently from the symbol operators due to operator precedence. The or and and logical operators have a lower precedence than || and &&.
TRUE || TRUE && FALSE // Evaluates to: TRUE
TRUE || TRUE and FALSE // Evaluates to: FALSE

// As we mentioned before, we can avoid operator precedence confusion by using parentheses for force the evaluation we want:
(TRUE || TRUE) && FALSE // Evaluates to: FALSE
TRUE || (TRUE and FALSE) // Evaluates to: TRUE

// Going forward you can use whichever logical operators you prefer, but let’s get some practice with and and or.


// own code

$is_admin = FALSE;
$is_user = TRUE;
if ($is_admin or $is_user){
    echo "You can change the password.\n";
}


$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin and $sufficient_funds){
    echo "You can make the withdrawal.";
}