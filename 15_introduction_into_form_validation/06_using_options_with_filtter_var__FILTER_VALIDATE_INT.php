<?php

//Using Options with filter_var()
//
//The
// filter_var() function accepts an optional third argument that allows us to fine-tune the operation of a given filter.
// This argument, often called
// $options,
// takes the form of a nested associative array.
//
//For example, the
// $options
// argument can help us validate that an integer is within a specified range when using the integer validation filter
// FILTER_VALIDATE_INT.
// To do this, we set
// $options
// to a nested array containing the
//"min_range" and "max_range" keys
// in a specific format, shown in the following example:

function validateAdult ($age){
    $options = ["options" => ["min_range" => 18, "max_range" => 124]];
    if (filter_var($age, FILTER_VALIDATE_INT, $options)) {
        echo("You are ${age} years old.");
    } else {
        echo("That is not a valid age.");
    }
}

validateAdult(18); // Prints: You are 18 years old.
validateAdult(124); // Prints: You are 124 years old.
validateAdult(8); // Prints: That is not a valid age.
validateAdult(200); // Prints: That is not a valid age.

//In the code above, we wrote a function
// validateAdult()
// which takes in an
// $age integer
// argument. We then used the
// filter_var()
// function to validate the integer was between 18 and 124 (inclusive) by using the
// FILTER_VALIDATE_INT
// filter and an
// $options
// argument with the value ["options" => ["min_range" => 18, "max_range" => 124]].
//
//You can see which filters accept options in the PHP manual.

?>



<?php
$message = "";
$month_error = "";
$day_error = "";
$year_error = "";

// Define valid Int ranges for year, month and day
$month_options = ["options" => ["min_range" => 1, "max_range" => 12]];
$day_options = ["options" => ["min_range" => 1, "max_range" => 31]];
$year_options = ["options" => ["min_range" => 1903, "max_range" => 2020]];

function validateInput($type, &$error, $options_arr) {
    if (!filter_var($_POST[$type], FILTER_VALIDATE_INT, $options_arr)) {
        $error = "* Invalid ${type}";
        return FALSE;
    } else {
        return TRUE;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test_month = validateInput("month", $month_error, $month_options);
    $test_day = validateInput("day", $day_error, $day_options);
    $test_year = validateInput("year", $year_error, $year_options);
    if ($test_month && $test_day && $test_year) {
        $message = "Your birthday is: {$_POST["month"]}/{$_POST["day"]}/{$_POST["year"]}";
    }
}

?>

<form method="post" action="">
    Enter your birthday:
    <br>
    Month: <input type="number" name="month" value="<?= $_POST["month"];?>">
    <span class="error"><?= $month_error;?>		</span>
    <br>
    Day: <input type="number" name="day" value="<?= $_POST["day"];?>">
    <span class="error"><?= $day_error;?>		</span>
    <br>
    Year: <input type="number" name="year" value="<?= $_POST["year"];?>">
    <span class="error"><?= $year_error;?>		</span>
    <br>
    <input type="submit" value="Submit">
</form>
<p><?= $message;?></p>