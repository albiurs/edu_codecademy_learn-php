<?php

// The && Operator
// Often, we’ll encounter situations where we have more than one condition we need satisfied in order to take an action.
// The logical && operator returns TRUE only if both of its operands evaluate to TRUE. It returns FALSE if either or
// both of its operands evaluate to false.
TRUE && TRUE;    // Evaluates to: TRUE
FALSE && TRUE;   // Evaluates to: FALSE
TRUE && FALSE;   // Evaluates to: FALSE
FALSE && FALSE;  // Evaluates to: FALSE

// Let’s think about a real-world example: when attempting to withdraw money from an ATM, the account holder must both
// provide the correct PIN and have enough money in their account.
$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin && $sufficient_funds){
    echo "You can make the withdrawal.";
}

// The && operator has a higher operator precedence than the || operator. This means that in a complex statement that
// includes both operators, the computer will evaluate the part of the expression with && first:
TRUE || TRUE && FALSE; // Evaluates to: TRUE

// If we want to control the order in which the expression is evaluated, we can use parentheses for force the order:
(TRUE || TRUE) && FALSE; // Evaluates to: FALSE

// Let’s get some practice with the && operator!


// my own code

function clapYourHands($is_happy, $knows_it) {

    if ($is_happy && $knows_it) {
        return "CLAP!";
    } else {
        return ":(";
    }
}

echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE);
echo "\n\n";
echo clapYourHands(FALSE, FALSE);
