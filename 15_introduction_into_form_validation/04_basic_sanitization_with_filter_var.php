<?php

//Basic Sanitization with filter_var()
//
//We haven’t yet introduced the most powerful PHP function for sanitizing data:
// filter_var()
//. https://www.php.net/manual/en/function.filter-var.php
// This function operates on a variable and passes it through a “filter” that produces the desired outcome.
//
//As its first argument, filter_var() takes a variable. As its second, it takes an ID representing the type of
// filtering that should be performed. There are several filters (https://www.php.net/manual/en/filter.filters.sanitize)
// for sanitizing common input types, including FILTER_SANITIZE_EMAIL. The function will return either the sanitized
// version of the input or FALSE if it was unable to perform the sanitization.

$bad_email = '<a href="www.evil-spam.biz">@gmail.com';
echo filter_var($bad_email, FILTER_SANITIZE_EMAIL);
// Prints: ahref=www.evil-spam.biz@gmail.com

//The FILTER_SANITIZE_EMAIL filter trimmed whitespace throughout our input and removed dangerous characters thus preventing any HTML injection. Essentially, it filtered out any characters not allowed in emails. Once sanitized, we can safely display user inputs.
//
//    Of course, $bad_email did not store a valid email in the first place. But since we often want to display invalid form data as a hint for the user, this sanitization would be useful to prevent a man-in-the middle attack. We could also have used htmlspecialchars($bad_email), but that would have produced &lt;a href=&quot;www.evil-spam.biz&quot;&gt;@gmail.com instead. Choose the sanitization method based on the output you want to show to the users.
//
//    You can check out the other sanitization filters available in the PHP manual:
//https://www.php.net/manual/en/filter.filters.sanitize.php

?>



<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
    if ($user_answer != "-5"){
        $validation_error = "* Wrong answer. Try again.";
    } else {
        $submission_response = "Correct!";
    }
}

?>

<h2>Time for a math quiz!</h2>
<form method="post" action="">
    <h4>Question 1:</h4>
    <p>What is 6 - 11?</p>
    <input type="text" name="answer" id="answer" value="<?= $user_answer; ?>">
    <br>
    <span class="error" id="error"><?= $validation_error; ?></span>
    <br>
    <input type="submit" value="Submit Your Answer">
</form>
<div>
    <p id="answer-display">Your answer was: <?= $user_answer; ?></p>
    <p id="submission-response"><?= $submission_response; ?></p>
</div>
