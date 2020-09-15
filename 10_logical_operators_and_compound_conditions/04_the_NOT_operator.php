<?php

// The Not Operator
// The logical not operator (!) takes only a right operand. It reverses the boolean value of its operand.
!TRUE;    // Evaluates to: FALSE
!FALSE;   // Evaluates to: TRUE

// The not operator has very high operator precedence; be sure to use parentheses so that code evaluation happens as intended:
!10 < 11; // Evaluates to: TRUE
!(10 < 11);  // Evaluates to: FALSE
!TRUE || TRUE; // Evaluates to: TRUE
!(TRUE || TRUE); // Evaluates to: FALSE

// The not operator is useful when we only want to take a course of action if a condition is not true. For example, if a user is not logged in, a web application may show a pop-up telling them they must do so to continue.
$is_logged_in = FALSE;
if (!$is_logged_in){
    echo "You must log in to continue.";
}

// We could accomplish this same functionality without using the ! operator, but look at how much more cumbersome that code is:
$is_logged_in = FALSE;
if ($is_logged_in){
    // Do nothing...
} else {
    echo "You must log in to continue.";
}


// my own code

function duckDuckGoose($is_goose) {

    if (!$is_goose) {
        return "duck";
    } else {
        return "goose!";
    }
}

echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);