<?php


//Review
//
//Great work! We covered a lot in this lesson. Let’s review:
//
//  - Performing back-end form validations on the data submitted is an essential step to protect our website and its users.
//  - $_POST:
//      Using the POST method attribute in an HTML form gives our PHP script access to data submitted within the
//      superglobal associative array: $_POST.
//  - We modify our HTML and PHP so that when input is deemed invalid, meaningful feedback is shown to the user.
//  - trim():
//      If we plan on displaying user input, we need to first sanitize it. We can use methods like trim() and...
//  - htmlspecialchars()
//      for basic sanitization.
//  - filter_var():
//      - We can use filter_var() with a filter to sanitize common input types.
//      - We can also use filter_var() with a filter to perform validations on common input types.
//  - preg_match():
//      - We’ll often want to perform custom validations.
//      - The preg_match() function compares checks if a given string matches a regular expression.
//  - strlen():
//      Since regular expression comparisons can consume a lot of computing power, we’ll want to check the length of
//      inputs before performing regular expression checks.
//  - isset():
//      It’s common to perform validations by comparing user input to back-end data
//    Before storing user input in our back-end, we’ll sanitize it for both safety and consistent formatting
//  - header("Location: success.html"):
//      If a user’s form submission has been accepted, we can reroute them to a different page.
//
//  - Data validation and sanitization is an extremely important part of web development. In this lesson, we’ve covered
//  some of the basic theory and techniques. When developing for production, you’ll need to further research and
//  understands the needs of the specific sites or applications as well as the tools available with the specific
//  databases or frameworks in use.
//
//  - As your validations get more and more complex, you should also practice modularity and separate your validation
//  logic from your display logic.
//
?>


<?php
$validation_error = "";
$user_language = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user_language = $_POST["language"];
  if ($user_language != "PHP") {
    $validation_error = "* Your favorite language must be PHP!";
  }
}
?>

<form method="post" action="">
Your Favorite Programming Language: <input type="text" name="language" value="<?php echo $user_language;?>">
<span class="error"><?= $validation_error;?></span>
<input type="submit" value="Submit Language">
</form>