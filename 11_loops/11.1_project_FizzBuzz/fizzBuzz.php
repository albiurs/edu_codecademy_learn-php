<?php

// FizzBuzz with while
$counter = 1;

while ($counter <= 100) {

    if ($counter % 15 === 0) {
        echo "FizzBuzz";
    } elseif ($counter % 3 === 0) {
        echo "Fizz";
    } elseif ($counter % 5 === 0) {
        echo "Buzz";
    } else {
        echo $counter;
    }
    echo "\n";
    $counter ++;
}


// FizzBuzz with for and foreach
$output_array = [];

for ($i=1; $i<=100; $i++) {

    if ($i % 15 === 0) {
        array_push($output_array, "FizzBuzz") ;
    } elseif ($i % 3 === 0) {
        array_push($output_array, "Fizz");
    } elseif ($i % 5 === 0) {
        array_push($output_array, "Buzz");
    } else {
        array_push($output_array, $i);
    }
}

foreach ($output_array as $key => $value) {
    echo $value . "\n";
}

// remove Fizz && stop after first FizzBuzz
foreach ($output_array as $key => $value) {
    if ($value === "Fizz") {
        continue;
    }

    echo $value . "\n";

    if ($value === "FizzBuzz") {
        break;
    }
}
