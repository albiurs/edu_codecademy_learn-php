Form Handling

Throughout this lesson, we’ll be using a PHP file to present an HTML form to users. We’ll be using the POST method
attribute for more secure input submission. This means all the data submitted will be available in the...

=> superglobal associative array: $_POST.


In order for the user’s input to be included in the $_POST array, we provide a name attribute within the HTML.
After submitting the form, this
name will be the key in the $_POST array and the user’s input will be the value
assigned to that key.

<form method="post" action="">
    Your Favorite Programming Language:
    <input type="text" name="language">
    <input type="submit" value="Submit Language">
</form>


Above we have an HTML form with a method of "post". We could provide an alternate URL for users to navigate to after
submitting their form (eg.

=> action="some_page.php"

). Since we want users to have the opportunity to submit the form
again if they have errors, we’ll leave the

=> action as an empty string
=> this means that once it’s submitted, users will be served the same PHP file that originally served them the form.

Our form contains an input assigned the name "language". If a user entered “PHP” (as we would assume…) into the language
input of the above form and then submitted the form, their URL would not change. However, within the PHP code, the

=> $_POST array would contain a key => value pair of "language" => "PHP".


echo $_POST["language"]; // Prints: PHP

Let’s handle an HTML form with some PHP code!


<!-- own code:-->
<html>
<body>
<form method="post" action="">
    Your name:
    <br>
    <input type="text" name="name">
    <br><br>
    What is the best thing about learning to code:
    <br>
    <input type="text" name="best">
    <br><br>
    <input type="submit" value="Submit Answers">
</form>

<div id="form-output">
    <p id="name"><?= $_POST["name"]?>,</p>
    <p id="best">I'm glad you enjoy "<?= $_POST["best"]?>".</p>
</div>

<a href="index.php">Reset</a>
</body>
</html>

