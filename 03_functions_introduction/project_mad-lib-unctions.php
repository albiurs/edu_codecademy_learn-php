<?php

/*
 * In this project, we’ll use PHP to write a function to fill in a Mad Libs story! Mad Libs are short stories with
 * blank spaces, which get filled in by the user. The result is usually funny (or strange).
 */
function generateStory($singularNoun, $verb, $color, $distanceUnit) {
    $story = "\nThe ${singularNoun}s are lovely, ${color}, and deep.\n" .
        "But I have promises to keep,\n" .
        "And ${distanceUnit} to go before I ${verb},\n" .
        "And ${distanceUnit} to go before I ${verb}.\n";
    return $story;
}

echo generateStory("apple", "eat", "red", "7km");
echo generateStory("hammer", "pull", "green", "8 Miles");
echo generateStory("man", "draw", "blue", "3 Inches");

/*
Returns the following story:

The apples are lovely, red, and deep.
But I have promises to keep,
And 7km to go before I eat,
And 7km to go before I eat.

The hammers are lovely, green, and deep.
But I have promises to keep,
And 8 Miles to go before I pull,
And 8 Miles to go before I pull.

The mans are lovely, blue, and deep.
But I have promises to keep,
And 3 Inches to go before I draw,
And 3 Inches to go before I draw.
 */