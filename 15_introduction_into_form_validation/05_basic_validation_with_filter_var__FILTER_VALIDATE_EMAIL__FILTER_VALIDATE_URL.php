<?php

//Basic Validation with filter_var()
//
//We can use the same filter_var() function to validate as well as sanitize! There are a number of provided
// validation filters (https://www.php.net/manual/en/filter.filters.validate.php),
// but they work a bit differently from the sanitization filters. If the variable is deemed valid, filter_var()
// will return it; otherwise, it will return FALSE:

$bad_email = 'fake - at - prank dot com';
if (filter_var($bad_email, FILTER_VALIDATE_EMAIL)){
    echo "Valid email!";
} else {
    echo "Invalid email!";
}
// Prints: Invalid email!

//It’s worth noting that the provided FILTER_VALIDATE_EMAIL filter is stricter than the guidelines regulating
// acceptable email addresses. If a site needed to accept non-latin characters, for example, the built-in
// FILTER_VALIDATE_EMAIL filter wouldn’t be sufficient.
//
//Using the provided validation filters is really convenient. You can check out the list of available validation
// filters in the PHP manual. For example, FILTER_VALIDATE_URL is useful for checking if a string corresponds to a
// possible URL.
//
//Let’s practice!
?>


<?php
$validation_error = "";
$user_url = "";
$form_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_url = $_POST["url"];

    if (filter_var($user_url, FILTER_VALIDATE_URL)) {
        $form_message = "Thank you for your submission.";
    } else {
        $validation_error = "* This is an invalid URL.";
        $form_message = "Please retry and submit your form again.";
    }
}
?>

<form method="post" action="">
Your Favorite Website:
<br>
<input type="text" name="url" value="<?php echo $user_url;?>">
<span class="error"><?= $validation_error;?></span>
<br>
<input type="submit" value="Submit">
</form>
<p> <?= $form_message;?> </p>
