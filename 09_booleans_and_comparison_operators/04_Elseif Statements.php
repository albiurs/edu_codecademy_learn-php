<?php

// Elseif Statements
// So far, we’ve been writing conditionals that can only handle one condition. If that condition is met, we do one thing, otherwise we do something else. This only allows us one or two courses of action. But programs can be far more complex.
// Consider letter grades on a school assignment:
//    If the grade is less than 60, it’s an F
//    Or else, if the grade is less than 70, it’s a D.
//    Or else, if the grade is less than 80, it’s a C.
//    Or else, if the grade is less than 90, it’s a B.
//    Or else, it’s an A.

// We can write conditionals with multiple if statements using the elseif construction. The computer will continue through each condition until it finds a condition which is met or gets to the end—whichever comes first.
// Let’s implement our letter grades example in code:
$grade = 88;
if ($grade < 60) {
    echo "You got an F";
} elseif ($grade < 70) {
    echo "You got a D";
} elseif ($grade < 80) {
    echo "You got a C";
} elseif ($grade < 90) {
    echo "You got a B";
} else {
    echo "You got an A";
}

// In the code above, $grade has a value of 88. The computer will check each condition until one is met and run that block of code. When it gets to the condition $grade < 90, it evaluates to TRUE. That code block executes, and You got a B is logged to the terminal.
// Notice that the order of our conditionals is important. The grade 55 would satisfy the condition $grade < 90, but it meets the condition intended for it, $grade < 60 first. What if the elseif statements were in a different order?
    $grade = 55;
if ($grade < 90) {
    echo "You got a B";
} elseif ($grade < 80) {
    echo "You got a C";
} elseif ($grade < 70) {
    echo "You got a D";
} elseif ($grade < 60) {
    echo "You got an F";
} else {
    echo "You got an A";
}

// The code above will output You got a B to the terminal since the computer will run the first TRUE condition. We need to take care when constructing our conditionals that they have the outcome we want.
// Note: you may encounter the keywords else if with a space separating the two words. In many situations, else if will work the same way as elseif. Since elseif works more universally, that’s what we choose to use.


// my own code:
function whatRelation($dna_percentage) {

    if($dna_percentage === 0) {
        echo "not genetically related";
    } elseif ($dna_percentage <= 2) {
        echo "third cousins";
    } elseif ($dna_percentage <= 5) {
        echo "second cousins";
    } elseif ($dna_percentage <= 13) {
        echo "first cousins";
    } elseif ($dna_percentage <= 34) {
        echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($dna_percentage <= 99) {
        echo "parent and child or full siblings";
    } else {
        echo "identical twins";
    }
}

echo whatRelation(0);
echo whatRelation(2);
echo whatRelation(5);
echo whatRelation(13);
echo whatRelation(34);
echo whatRelation(99);
echo whatRelation(100);
