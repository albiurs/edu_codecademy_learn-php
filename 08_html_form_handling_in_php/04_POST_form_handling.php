//POST Form Handling
//
//In HTML, setting a form’s method attribute to "post" specifies that you would like the form to be submitted using the POST method. When using POST to submit forms, you will not see the URL change. The form data is sent using the headers of the HTTP request instead of URL parameters.
//
//To use the data from the form in PHP, each input needs to have a unique name attribute.
//
//When the form is submitted, the input data is available in the $_POST superglobal. Similar to GET, it is also available in $_REQUEST.
//
//For example, if a user typed “Katharine” into the first input and “McCormick” into the last input of this form:

<form method="post">
    First name: <input type="text" name="first">
<br>
Last name: <input type="text" name="last">
<br>
<input type="submit" value="Submit Name">
</form>

//The URL would not change and print_r($_POST) would look like this:

Array ( [first] => Katharine [last] => McCormick )




<html>
<body>
<form method="post">
    Favorite Color:
    <input type="text" name="color">
    <br>
    Favorite Food:
    <input type="text" name="food">
    <br>
    <input type="submit" value="Submit">
</form>
<br>
<p>Best food is: <?= $_POST['food'];?></p>
<p>Best color is: <?= $_POST['color'];?></p>
<a href="index.php">Reset</a>
</body>
</html>