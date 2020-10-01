<?php

//for
//
//    A for loop is commonly used to execute a code block a specific number of times.

//for (#expression 1; #expression 2; #expression 3)
//{
//  # code block
//}

//The for loop syntax includes 3 expressions:
//
//    The first is evaluated only one time before the first iteration.
//The second is evaluated before each iteration. If it is TRUE, the code block is executed. Otherwise, the loop terminates.
//The third is evaluated after each iteration. Note that expressions 1 and 2 have semicolons after them.
//
//In our counting to 10 example, the syntax becomes:

for ($count = 1; $count < 11; $count++)
{
    echo "The count is: " . $count . "\n";
}

//The first expression is $count = 1, this initializes the $count variable to 1.
//
//At each iteration, the second expression ($count < 11) is evaluated. As long as this is TRUE, the code block executes.
//
//The final expression ($count++) executes after every iteration. In this example, $count is being incremented by 1 each iteration.
//
//After 10 iterations, the value of the $count variable is 11. This makes the second expression FALSE and the loop execution terminates.



// own code
for ($i = 10; $i >= 0; $i--) {
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



// examples
$food = array('Obst' => array('Orange', 'Banane', 'Apfel'),
    'Gemüse' => array('Karotte', 'Kohl', 'Erbse'));

// rekursiv zählen
echo count($food, COUNT_RECURSIVE); // gibt 8 aus

// normales zählen
echo count($food); // gibt 2 aus



// for-loop with count()
$pastries = [
    "Croissant",
    "Muffin",
    "Slice of Pie",
    "Slice of Cake",
    "Cupcake",
    "Brownie"
];

?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Pastries! ($2 each)</h3>
<ul>
    <?php
    for ($i=0; $i<count($pastries); $i++) {

    }
    ?>
</ul>


