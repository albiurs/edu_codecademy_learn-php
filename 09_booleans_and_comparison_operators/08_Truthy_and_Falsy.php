<?php

// Truthy and Falsy
// So far in our conditionals, we’ve been dealing with expressions that would evaluate to boolean values in any context.
// In practice, any value or expression in the condition will be converted to TRUE or FALSE. Take a look at the
// following real, working PHP code:
if ("What's going on?"){
    echo "Let us explain…\n";
}
// Prints: Let us explain…

// In the above code, the condition checks the truthiness of the string "What's going on?". The computer converts this
// value to TRUE and therefore executes the code in the block. We sometimes refer to code that will be converted to TRUE
// as truthy and code that will be converted to FALSE as falsy since they aren’t actually equivalent to those boolean
// values, but they will be treated as such in certain contexts. Most values and expressions are treated as truthy, so
// we’ll focus on those that are falsy:

// Empty strings
//     null
//     an undefined or undeclared variable
//     an empty array
//     the number 0
//     the string "0"


// Let’s see this in action:
if ("") {
    echo "this will not print";
} elseif (null) {
    echo "this will not print";
} elseif ([]) {
    echo "this will not print";
} elseif (0) {
    echo "this will not print";
} elseif ("0") {
    echo "this will not print";
} else {
    echo "Finally!\n";
}

// Since none of the conditions above hold truthy values, the code will print Finally!.



// my own code

// check truthy and falsy
function truthyOrFalsy($value) {
    if($value) {
        return "True";
    } else {
        return "False";
    }
}

echo "TRUE returns: " . truthyOrFalsy(TRUE);
echo "\n\n";
echo "FALSE returns: " . truthyOrFalsy(FALSE);
echo "\n\n";
echo "null returns: " . truthyOrFalsy(null);
echo "\n\n";
echo "\"\" returns: " . truthyOrFalsy("");
echo "\n\n";
echo "\"0\" returns: " . truthyOrFalsy("0");
echo "\n\n";
echo "\"string\" returns: " . truthyOrFalsy("string");
echo "\n\n";
echo "[] returns: " . truthyOrFalsy([]);
echo "\n\n";
echo "[1, 2, 3] returns: " . truthyOrFalsy([1, 2, 3]);
echo "\n\n";
echo "0 returns: " . truthyOrFalsy(0);
echo "\n\n";
echo "7 returns: " . truthyOrFalsy(7);
