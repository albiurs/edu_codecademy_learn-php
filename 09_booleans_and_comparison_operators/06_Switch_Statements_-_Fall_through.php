<?php

// Switch Statements: Fall through
// In the previous exercise, we taught you to use the keyword break after the block for each case. Without the keyword break, not only will the first matching case’s block run, but so will all the code in the subsequent cases! This is known as fall through. The keyword break tells the computer to break out of the switch statement, without it, it will fall through the rest of the switch executing all the code until it reaches a break, a return, or the end of the statement:
$letter = "a";
switch ($letter) {
    case "a":
        echo "a";
    case "b":
        echo "b";
    case "c":
        echo "c";
    case "d":
        echo "d";
}

// The code above will output abcd. Only the first case (case "a") actually matches the value of $letter, but since the above code doesn’t have any breaks all of the code in the switch will execute. Fall through may seem like a drag, but it can be useful when we want multiple cases to execute the same code:
switch ($day_of_week) {
    case "Monday":
    case "Tuesday":
        echo "Just getting started!";
        break;
    case "Wednesday":
        echo "Humpday!";
        break;
    case "Thursday":
    case "Friday":
        echo "Almost the weekend!";
        break;
    case "Saturday":
    case "Sunday":
        echo "Enjoy!";
        break;
}

// In the code above, we use fall through to our advantage by placing cases that should execute the same code next to each other and having them share a code block. So, for example, if $day_of_week has the value "Monday" or "Tuesday", the string "Just getting started!" will be printed.
//     It’s ok if you don’t find fall through useful in your own code. But knowing how to use it should remind you that it exists and that you need those breaks!


// my own code:

// check season of month
function returnSeason($month) {

    switch ($month) {
        case "December":
        case "January":
        case "February":
            return "winter";
        case "March":
        case "April":
        case "May":
            return "spring";
        case "June":
        case "July":
        case "August":
            return "summer";
        case "September":
        case "October":
        case "November":
            return "fall";
    }
}