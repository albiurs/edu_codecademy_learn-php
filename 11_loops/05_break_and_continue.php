<?php

//break and continue
//Similar to switch statements, the break keyword can be used to terminate any of the loop types early. In our counting example of a while loop, if we add a conditional and a break statement:

$count = 1;
while ($count < 11)
{
    echo "The count is: " . $count . "\n";
    if ($count === 5) {
        break;
    }
    $count += 1;
}

//The code will now count from 1 to 5 and then stop.
//One downside of heavy usage of break statements is that code can become less readable. In this example, a quick glance might give someone the impression that the loop will iterate until $count is 10. In reality, the buried break statement is controlling the final iteration of the loop.
//The continue keyword is similar to break except it only ends the current iteration early, not the entire loop. We could use this in our example to skip counting the number 5:

$count = 1;
while ($count < 11)
{
    if ($count === 5) {
        $count += 1;
        continue;
    }
    echo "The count is: " . $count . "\n";
    $count += 1;
}

//Note that we needed to add an extra increment before the continue ($count += 1;) to avoid being caught in an infinite loop.


// own code
for ($i = 10; $i >= 0; $i--) {

    if ($i === 6) {
        continue;
    }

    if ($i === 0) {
        break;
    }

    if ($i === 2) {
        echo "Ready!\n";
    } elseif ($i === 1) {
        echo "Set!\n";
    } elseif ($i === 0) {
        echo "Go!\n";
    } else {
        echo $i . "\n";
    }
}