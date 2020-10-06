<?php

//Custom Validations
//
//We’ll often find the validations offered by built-in functions like filter_var() to be insufficient. When validating
// all but the simplest data, we’ll likely need to write our own, custom input validations.
//
//A very common method for validating data is to compare the input to a pattern we define with a regular expression.
// The PHP
// preg_match()
// function (https://www.php.net/manual/en/function.preg-match.php) takes two string arguments: a
// pattern string with a regular expression
// and a
// subject string
// to check. It
// returns 1 if it matches,
// returns 0 if it doesn’t, and
// returns FALSE if there was an error.
//
//For example, we can use the regular expression
//     /^[(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4}$/
// to test for 10-digit North American telephone numbers. It will allow spaces, hyphens, or periods as optional
// separators as well as optional parentheses around the first three numbers:

$pattern = '/^[(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4}$/';

preg_match($pattern, "(999)-555-2222"); // Returns: 1

preg_match($pattern, "555-2222"); // Returns: 0

//Before we test for regular expression matches, we’ll want to make sure the input isn’t too long.
// Regular expressions checks can take a lot of computing power. One way a bad actor can damage our website is by
// submitting extremely long inputs, putting strain on our servers. This can slow down or even crash our site!
//
//We can use the built-in PHP
// strlen()
// function (https://www.php.net/manual/en/function.strlen.php) to check the length of a given input. Ultimately, the
// acceptable input length is a judgement call for the
// web engineer. In this example, we chose 100 characters, but some names can be much longer.

$name = "Aisle Nevertell";
$length = strlen($name);
if ($length > 2 && $length < 100){
    echo "That seems like a reasonable name to me...";
}

?>



<!--Let’s perform some custom validations!-->
<?php
$feedback = "";
$success_message = "Thank you for your donation!";
$error_message = "* There was an error with your card. Please try again.";

$card_type = "";
$card_num = "";
$donation_amount = "";

$regex_mastercard = "/5[1-5][0-9]{14}/";            // e.g. 52323232323232323232323232323
$regex_visa = "/4[0-9]{12}([0-9]{3})?([0-9]{3})?/"; // e.g. 4777777777777333888

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $card_type = $_POST["credit"];
    $card_num = $_POST["card-num"];
    $donation_amount = $_POST["amount"];

    // credit card validation
    if (strlen($card_num) < 100) {

        if ($card_type === "mastercard" && preg_match($regex_mastercard, $card_num)) {
            $feedback = $success_message;
        } elseif ($card_type === "visa" && preg_match($regex_visa, $card_num)) {
            $feedback = $success_message;
        } else {
            $feedback = $error_message;
        }

    } else {
        $feedback = $error_message;
    }
}
?>


<form action="" method="POST">
    <h1>Make a donation</h1>
    <label for="amount">Donation amount?</label>
    <input type="number" name="amount" value="<?= $donation_amount;?>">
    <br><br>
    <label for="credit">Credit card type?</label>
    <select name="credit" value="<?= $card_type;?>">
        <option value="mastercard">Mastercard</option>
        <option value="visa">Visa</option>
    </select>
    <br><br>
    <label for="card-num">Card number?</label>
    <input type="number" name="card-num" value="<?= $card_num;?>">
    <br><br>
    <input type="submit" value="Submit">
</form>
<span class="feedback"><?= $feedback;?></span>

