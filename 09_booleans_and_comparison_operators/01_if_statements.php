<?php

//If Statements
// We’re going to learn about a specific type of conditional called an if statement. An if statement follows this basic structure:
/*if (some_condition) {
    // Do something...
}*/

// The parentheses hold the condition we want the computer to check. If the condition is true, the code inside the code block ({ }) will run; if it’s not true, the code will not run.
// The foundation of any conditional is the boolean data type. A boolean can have one of two values: TRUE or FALSE. Note that these are the words without quotation marks—the string "TRUE" is not the same as the boolean value TRUE. These values are not case sensitive, but we follow the convention of making them uppercase.
// If we wanted to write code to approximate our hyperlink example from the previous exercise, we might write something like this:
$is_clicked = TRUE;
if ($is_clicked) {
    $link_color = "purple";
    echo $link_color;
}

// In the code above, we ask the computer to check the $is_clicked variable as the condition. If its value is TRUE, the value of $link_color will be assigned "purple" and printed.
// In the code above, were our condition not met, we’d skip over the code turning the link purple, but what should we do instead? If the link has been clicked, the color should be purple, otherwise it should be blue. We can include a block of code to run when the condition is not met with the keyword else:
$is_clicked = FALSE;
if ($is_clicked) {
    $link_color = "purple";
    echo $link_color;
} else {
    $link_color = "blue";
    echo $link_color;
}

// We changed the value of $is_clicked to FALSE so that the if block will not run. Rather, the else block will run and blue will be printed to the terminal.



// own code:
$learner_one = ["is_correct"=>FALSE, "box"=>["shape"=>"none", "color"=>"none"]];
$learner_two = ["is_correct"=>TRUE, "box"=>["shape"=>"none", "color"=>"none"]];

function markAnswer($is_correct, &$box) {

    if($is_correct) {
        $box["shape"] = "checkmark";
        $box["color"] = "green";
    } else {
        $box["shape"] = "x";
        $box["color"] = "red";
    }
}

markAnswer($learner_one["is_correct"], $learner_one["box"]);

markAnswer($learner_two['is_correct'], $learner_two['box']);

print_r($learner_one);
print_r($learner_two);
