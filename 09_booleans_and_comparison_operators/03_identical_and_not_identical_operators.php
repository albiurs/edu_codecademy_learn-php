<?php

// Identical and Not Identical Operators
// In this exercise we’re going to learn a few more comparison operators and see how we can use them to compare more than just number values.
// The identical operator (===) will return TRUE if the left operand is the same as the right operand and FALSE if it’s not:
$num = 5;
$num === 5; // Evaluates to: TRUE
10 === 10; // Evaluates to: TRUE
$num === 20; // Evaluates to: FALSE

// When we think about comparing two values, we’ll need to think like a computer. Are "hello" and "Hello" the same?
    $greeting = "hello";
$greeting === "hello"; // Evaluates to: TRUE
"hello" === "hel" . "lo";   // Evaluates to: TRUE
$greeting === "HELLO"; // Evaluates to: FALSE

// The not identical operator (!==) will return TRUE if the two operators are different and FALSE if they’re the same:
$num = 5;
$num !== 5; // Evaluates to: FALSE
10 !== 10; // Evaluates to: FALSE
$num !== 20; // Evaluates to: TRUE

$greeting = "hello";
"hello" !== "hello"; // Evaluates to: FALSE
$greeting !== "HELLO"; // Evaluates to: TRUE

// When looking through PHP code, you may encounter another operator—the equal operator (==). Like the identical operator, the equal operator will return TRUE if the left operand is the same as the right operand and FALSE if it’s not. But the equal operator is less strict than the identical operator and can have some hard to predict results, so we prefer to only use the identical operator. k


// my own code:
// agree or disagree
function agreeOrDisagree($string1, $string2) {

    if($string1 === $string2) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}

echo agreeOrDisagree("I'm good", "I'm good");
echo agreeOrDisagree("I'm good", "I'm bad");


// renew subscription
function checkRenewalMonth($renewalMonth) {

    if($renewalMonth !== date("F")) {
        return "Welcome!";
    } else {
        return "Time to renew";
    }
}

echo checkRenewalMonth("January");
echo checkRenewalMonth("September");