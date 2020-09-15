<?php

// Switch Statement
// We often want to compare a value, expression, or variable against many different possible values and run different code depending on which it matches. We can use a series of if/elseif statements which use the identical operator (===) or we can use a switch statement—an alternate syntax.
// We wrote some code with if/elseif statements to print a string based on a student’s letter grade:
$letter_grade = "Fair";

if ($letter_grade === "A"){
    echo "Terrific";
} elseif ($letter_grade === "B") {
    echo "Good";
} elseif ($letter_grade === "C") {
    echo "Fair";
} elseif ($letter_grade === "D") {
    echo "Needs Improvement";
} elseif ($letter_grade === "F") {
    echo "See me!";
} else {
    echo "Invalid grade";
}

// Since this code involves a series of comparisons, it’s ripe for a switch statement! Let’s see it refactored with switch:
switch ($letter_grade){
    case "A":
        echo "Terrific";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Fair";
        break;
    case "D":
        echo "Needs Improvement";
        break;
    case "F":
        echo "See me!";
        break;
    default:
        echo "Invalid grade";
    }

//         We begin the keyword switch followed by the value (or expression) we’ll be comparing—in this case, $letter_grade. We provide possible matches for the expression with the keyword case, the potential matching value, and the colon. For each case, we provide code that should run if that case matches. After each case, we include the keyword break to break out of the switch statement. We can provide a default that should run if none of the provided cases match.
//     A switch statement is a good example of code that might be preferable not because it’s shorter, but rather because it clearly indicates the purpose of the code; when looking at a switch statement we can quickly identify the important aspects of the code; this makes it easier to understand, extend, and debug.


// my own code:

// check air quality
function airQuality($color) {

    switch ($color) {
        case "green":
            echo "good";
            break;
        case "yellow":
            echo "moderate";
            break;
        case "orange":
            echo "unhealthy for sensitive groups";
            break;
        case "red":
            echo "unhealthy";
            break;
        case "purple":
            echo "very unhealthy";
            break;
        case "maroon":
            echo "hazardous";
            break;
        default:
            echo "invalid color";
    }


}

airQuality("green");
airQuality("yellow");
airQuality("orange");
airQuality("red");
airQuality("purple");
airQuality("maroon");
airQuality("black");
