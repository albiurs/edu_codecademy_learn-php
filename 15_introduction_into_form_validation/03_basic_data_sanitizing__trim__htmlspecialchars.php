<?php

//Basic Data Sanitizing
//
//In the previous exercise, we performed a simple validation to check the user’s input, but we made a mistake by
// directly displaying the data we received from them. Remember that we must never simply trust the data we receive
// from the client. In order to protect against innocent but dangerous user mistakes, malicious users, or
// man-in-the-middle attacks, we need to sanitize the data—transform it into a safe and standardized format.
// In this exercise, we’ll focus on making data safe to display on the user’s browser.
//
//PHP provides several built-in functions to help with sanitization:
//
//We can use the built-in PHP
// trim()
// function to remove any whitespace characters from the beginning or end of a string
// we receive as form input. Though not a security concern, this can help standardize the data prior to validation.

$email = "     aisle.nevertell@yahoo.com   ";
echo trim($email); // Prints: aisle.nevertell@yahoo.com

//When we want to display the user’s input within our own HTML, we should first run it through
// htmlspecialchars()
//. This built-in function transforms HTML elements into HTML entities (characters that represent HTML elements but
// won’t display as HTML), so that the PHP interpreter doesn’t recognize them as HTML. This prevents, for example,
// a man-in-the-middle attack in which malicious HTML is injected into a user’s view of our site.

$data = "<a href=\"https://www.evil-spam.biz/html/\">Your account has been compromised! Click here to get technical support!!</a>";
echo htmlspecialchars($data);
// Prints: &lt;a href=&quot;https://www.evil-spam.biz/html/&quot;&gt;Your account has been compromised! Click here to get technical support!&lt;/a&gt;

//Sometimes we will also want to perform custom sanitizations that cannot be accomplished with built-in functions,
// but we’ll discuss these later in the lesson.
//
//Let’s sanitize some data!

?>

<form method="post" action="">
Enter some HTML:
<br>
<input type="text" name="html">
<br>
<input type="submit" value="Submit">
</form>
<div>
  You entered:
	<?= htmlspecialchars($_POST["html"])?>
</div>