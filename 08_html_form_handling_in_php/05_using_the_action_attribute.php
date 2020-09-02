<!--Using the "action" Attribute-->
<!---->
<!--Until now, we’ve been handling the response to the form submission on the same page as the form itself. Often times there is no need to present a user with the same form over and over again. It might make sense to move them to a new page or thank them for their submission.-->
<!---->
<!--This is where the action form attribute comes into play. Since we have not specified an action yet, HTML defaults to submitting the form data back to the same script that defined the form.-->
<!---->
<!--If you would like to have the user navigate to a new URL and handle the form input there, you can specify the URL in the form’s action attribute. Since the action attribute specifies a relative URL, you can also enter the name of a PHP file in the same directory as the current one.-->
<!---->
<!--For example, given this directory:-->

index.php
receive_form.php

<!--To handle a form using receive_form.php from index.php, you would use the following:-->

<form method="get" action="receive_form.php"></form>

<!--    This works for both GET and POST methods.-->



<html>
<body>
<!--forward form to destination page with action="" -->
<form method="get" action="greet_user.php">
    First Name:
    <input type="text" name="first">
    <br>
    Last Name:
    <input type="text" name="last">
    <br>
    <input type="submit" value="Submit">
</form>

<a href="index.php">Reset</a>
</body>
</html>