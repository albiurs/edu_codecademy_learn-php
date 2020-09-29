<?php

//Review
//Now you have the ability to repeat execution of code blocks as necessary in your PHP programs.
//Here is a summary of the topics covered in this lesson:
//    while loops execute only as long as their conditional evaluates to TRUE.
//do…while loops always execute at least once and then continue executing while their conditional is TRUE.
//    for loops contain 3 expressions and are frequently used to execute a code block a specific number of times.
//The first expression is executed prior to the first iteration.
//The second expression is evaluated prior to each iteration. If TRUE, the code block executes. Otherwise, the loop terminates.
//The third expression is evaluated after each iteration.
//    foreach loops are used for iterating over the elements of an array. The key and value of each element is available in the code block.
//    break is used to end execution of a loop early.
//    continue is used to end execution of a loop iteration early and continues to the next iteration.


# while
$count = 5;
echo "Countdown!\n";
while ($count > -1) {
    echo $count . "\n";
    $count--;
}
echo "Blastoff!\n\n";

# do...while
$lights = "off";
do {
    echo "The lights are " . $lights . "\n";
    if ($lights === "off") {
        $lights = "on";
    } else {
        $lights = "off";
    }
} while ($lights === "on");
echo "\n";

# for
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed"];
for ($index = 0; $index < count($names); $index+=2){
    echo $names[$index] . "\n";
}
echo "\n";

# foreach
$properties = [
    "temperature" => "cold",
    "weather" => "rainy",
    "sky" => "gray"
];
foreach ($properties as $key=>$value) {
    echo "The $key is $value.\n";
}
echo "\n";

# break and continue
# this skips printing Ann and will
# stop execution after printing
# Dave
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed"];
for ($index = 0; $index < count($names); $index+=1){
    if ($names[$index] == "Ann") {
        continue;
    }
    echo $names[$index] . "\n";
    if ($names[$index] == "Dave") {
        break;
    }
}