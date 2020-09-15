<?php

// The Xor Operator
// The logical operator xor stands for exclusive or. It takes two different boolean values or expressions as its operands and returns a single boolean value. Unlike regular or which evaluates to TRUE if either its left operand or its right operand evaluate to TRUE, xor evaluates to TRUE only if either its left operand or its right operand evaluate to TRUE, but not both.
TRUE xor TRUE;   // Evaluates to: FALSE
FALSE xor TRUE;  // Evaluates to: TRUE
TRUE xor FALSE;  // Evaluates to: TRUE
FALSE xor FALSE; // Evaluates to: FALSE

// We can use xor to answer either/or questions: Did you wear either glasses or contacts today?
//    If neither, the answer is “No”—I didn’t wear glasses nor did I wear contacts. My vision is impaired.
//    If I wore both, the answer is “No”—I didn’t wear either glasses or contacts. My vision is impaired.
//    If I wore contacts, the answer is “Yes”—I wore contacts, so my vision was corrected.
//    If I wore glasses, the answer is “Yes”—I wore glasses, so my vision was corrected. .

// Let’s code up this example:
$is_wearing_glasses = TRUE;
$is_wearing_contacts = TRUE;

if ($is_wearing_glasses xor $is_wearing_contacts){
    echo "Your vision is corrected!";
} else {
    echo "Your vision is impaired.";
}



// Write your code below:
$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks", "butter", "vanilla extract", "bananas", "heavy cream", "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];

function eatPie($ingredients) {

    if (in_array("chicken", $ingredients) xor in_array("bananas", $ingredients)) {
        return "Delicious pie!";
    } else {
        return "Disgusting!";
    }
}

echo eatPie($banana_cream);
echo "\n\n";
echo eatPie($experimental_pie);
