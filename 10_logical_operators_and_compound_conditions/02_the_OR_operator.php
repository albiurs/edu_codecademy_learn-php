<?php

// The || Operator
// Expressions that use logical operators evaluate to boolean values.
// The logical operator || takes two different boolean values or expressions as its operands and returns a single boolean value. It returns TRUE if either its left operand or its right operand evaluate to TRUE. We can use || in situations where more than one condition should lead to the same outcome.
TRUE || TRUE;   // Evaluates to: TRUE
FALSE || TRUE;  // Evaluates to: TRUE
TRUE || FALSE;  // Evaluates to: TRUE
FALSE || FALSE; // Evaluates to: FALSE

// Let’s think about an example we might encounter in web development: when requesting a password change for a web application, the password can only be changed by either the user themselves or an administrator.
$is_admin = FALSE;
$is_user = TRUE;
if ($is_admin || $is_user){
    echo "You can change the password";
}

// In the code above, the condition $is_admin || $is_user evaluates to TRUE and "You can change the password" is printed to the terminal. Note that while $is_admin is FALSE, $is_user is TRUE. The || operator is inclusive—it evaluates to TRUE if either or both of the operands are TRUE.



// my own code

function willWeEat($meal_type, $is_hungry) {

    if ($is_hungry || ($meal_type === "dessert")) {
        return "Yum. Thanks!";
    } else {
        return "No thanks. We're not hungry.";
    }
}

echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);