<?php

// Nested Conditional Statements
// In the previous lesson, we explored the foundations of making decisions in programming: booleans and conditionals.
// In this lesson, we’ll deepen the complexity of our programs’ decision-making capabilities—we’ll be able to make
// programs where each decision made sends our program on a different route where it might encounter additional
// decisions.
// We wrote some code to illustrate our decision-making process when taking an elevator. Read through the code to make
// sense of the process:
$is_elevator_here = true;
$elevator_direction = "down";
$my_direction = "up";
$is_button_pushed = false;

if ($is_elevator_here){
    if ($elevator_direction === $my_direction){
        echo "I'm in the elevator.";
    } else {
        if ($is_button_pushed){
            echo "I'm waiting...!";
        } else {
            echo "I'm pushing the button.";
        }
    }
} else {
    if ($is_button_pushed){
        echo "I'm waiting...";
    } else {
        echo "I'm pushing the button.";
    }
}

// Notice that in order to implement this decision-making process with code, we nested conditionals inside each other.
// This is one way to make more complicated programs. In this lesson, we’ll also learn a new set of operators which will
// allow us to craft more elaborate decision-making programs. By the end, you’ll be equipped to make powerful, dynamic
// programs.


// my own code

function both($first, $second)
{
    if ($first){
        if ($second){
            return "both";
        } else {
            return "not both";
        }
    } else {
        return "not both";
    }
}

echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);
