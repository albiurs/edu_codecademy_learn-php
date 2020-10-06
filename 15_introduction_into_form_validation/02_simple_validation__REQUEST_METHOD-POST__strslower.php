Simple Validation

In the previous exercise, we simply displayed the user input we received. Now we want to provide the user with feedback if their input isn’t correct. We’ll validate (confirm the correctness of) the data we receive. If the input is deemed invalid, we’ll want to give the user meaningful feedback so that they can correct their mistake and attempt to submit the form again.

We’ll need to make several modifications to the PHP file that we use to serve our form to users:

Add PHP code to check the validity of a user’s input if the form has been submitted.
Add an HTML element to display an error message to the user if their submission is not valid.
Fill each field in the form with the user’s previously submitted input.

Our third task has to do with creating an improved user experience. Have you ever had to refill every field in a form after submitting it incorrectly? It’s so frustrating! By filling in the user’s submitted values, they’ll be able to quickly correct any fields with errors without having to start over from scratch. To accomplish this, we’ll assign each of the HTML form element’s value attribute—aside from the "submit" input itself—to the data submitted by the user for each field.

For the purposes of this exercise, let’s assume that “PHP” is the only valid submission for the user’s favorite language. Here’s how we might update our form from the previous exercise to accomplish the three tasks above:

<?php
$validation_error = "";
$user_language = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_language = $_POST["language"];
    if ($user_language != "PHP") {
        $validation_error = "* Your favorite language must be PHP!";
    }
}
?>

<form method="post" action="">
    Your Favorite Programming Language: <input type="text" name="language" value="<?php echo $user_language;?>">
    <p class="language">Your favorite language is: <?= $user_language?></p>
    <p class="error"><?= $validation_error;?></p>
    <input type="submit" value="Submit Language">
</form>

Let’s walk through the above code.

We first assign $validation_error and $user_language to empty strings. We use these PHP values in our HTML, but, if a
user has NOT yet submitted their form, we don’t want these elements to have filled in values.
Remember that we’re validating the form data only AFTER it’s been submitted by the user at least once. To ensure that,
we only run our validation code

if ($_SERVER["REQUEST_METHOD"] === "POST")

, which indicates that the current form has been submitted.
Within our if block, we grab the relevant value from the $_POST array:

$_POST["language"]. We assign this value to our $user_language variable. This one step actually accomplishes two

things! It gives us an easy way to talk about the value the user submitted to this field, and it also means the value
of the HTML element will now be the user’s submission rather than an empty string.
If the value the user submitted is NOT correct, we assign an error message to

$validation_error so that this part of

the HTML will now give the user important feedback.

Let’s give it a try!





<?php

function checkWord($input, $letter) {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && $letter != strtolower($input[0])) {
        return "* This word must start with the letter ${letter}!";
    } else {
        return "";
    }
}

?>

<h1>Time to Practice our ABCs</h1>
<form method="post" action="">
    Enter a word that starts with the letter "a":
    <br>
    <input type="text" name="a-word" id="a-word" value="<?=$_POST["a-word"]?>">
    <p id="a-error"><?= checkWord($_POST["a-word"], "a")?></p>
    <br>

    <br>
    Enter a word that starts with the letter "b":
    <br>
    <input type="text" id="b-word" name="b-word" value="<?=$_POST["b-word"]?>">
    <p id="b-error"><?= checkWord($_POST["b-word"], "b")?></p>
    <br>

    <br>
    Enter a word that starts with the letter "c":
    <br>
    <input type="text" id="c-word" name="c-word" value="<?=$_POST["c-word"]?>">
    <p id="c-error"><?= checkWord($_POST["c-word"], "c")?></p>
    <br>

    <br>
    <input type="submit" value="Submit Words">
</form>
<div>
    <h3>"a" is for: <?= $_POST["a-word"];?></h3>
    <h3>"b" is for: <?= $_POST["b-word"];?></h3>
    <h3>"c" is for: <?= $_POST["c-word"];?></h3>
</div>